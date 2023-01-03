<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Session;

class LoginUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'passport' => ['required', 'string'],
            'password' => ['required', 'string'],
            'g-rCaptcha'=>function ($attribute, $value, $fail) {
                $secret_key='6Lfl3mcjAAAAAPJPUcM5XC8F6ILg2H6-zdNwZlAZ';
                $response=$value;
                // $userIP=$_SERVER['REMOTE_ADDR'];
                $url="https://www.google.com/recaptcha/api/siteverify?secret=$secret_key&response=$response";
                $response=\file_get_contents($url);
                $response=json_decode($response);
                dd($response);

                if ($response->success) {
                    Session::flash('g-captcha-response','please check recaptcha');
                    Session::flash('alert-class','alert-danger');
                    $fail($attribute.'google recaptchafailed');
                }
            },

        ];
    }
}
