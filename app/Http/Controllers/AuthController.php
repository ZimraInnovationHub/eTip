<?php

namespace App\Http\Controllers;

use App\Http\Requests\ChangePasswordRequest;
use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

use function PHPUnit\Framework\isEmpty;

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request)
    {
        $request->validated($request->only([
            'passport', 
            'password',
            'g-rCaptcha'
        ]));

        if (!Auth::attempt($request->only(['passport', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }else if(isEmpty('g-rCaptcha')){
            return $this->error('', 'ReCapture is required', 401);
        } else {
            $user = User::where('passport', $request->passport)->first();

            session()->put('user', $user);
            Log::info(session()->get('user', $user));

            return $this->success([
                'user' => $user,
                'message' => 'Login was successful...',
                'token' => $user->createToken('API Token')->plainTextToken
            ]);
        }
    }

    public function register(StoreUserRequest $request)
    {

        $request->validated($request->only(['first_name', 'last_name', 'passport', 'phone', 'email', 'password']));

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'passport' => $request->passport,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

        Session::put('user', $user);

        Log::info(session()->get('user', $user));

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API token of ' . $user->name)->plainTextToken,
            'message' => "Successfully created an account..."
        ]);
    }

    public function changePassword(ChangePasswordRequest $request, $id)
    {
        $user = User::find($id);

        $request->currentPassword = Hash::make($request->currentPassword);

        if ($request->currentPassword = $user->password) {
            $user->password = Hash::make($request->newPassword);

            $user->save();
        }

        return $this->success([
            'user' => $user,
        ]);
    }

    public function logout(Request $request)
    {
        auth()->user()->tokens()->delete();
        session()->flush();

        return response([
            'message' => 'Logout successful'
        ]);
    }
}
