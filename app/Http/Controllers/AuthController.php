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

class AuthController extends Controller
{
    use HttpResponses;

    public function login(LoginUserRequest $request)
    {
        $request->validated($request->only(['passport', 'password']));

        if (!Auth::attempt($request->only(['passport', 'password']))) {
            return $this->error('', 'Credentials do not match', 401);
        }

        $user = User::where('passport', $request->passport)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ]);
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

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API token of ' . $user->name)->plainTextToken
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

    public function logout()
    {
        return 'Logout';
    }
}
