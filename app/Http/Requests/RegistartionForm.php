<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Mail\Welcome;
use App\Mail\WelcomeAgain;


class RegistartionForm extends FormRequest
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
            'name'=>'required',
            'email'=>'required | email',
            'password'=>'required|confirmed'
        ];
    }
    public function persist() 
    {
        $userInf=[
          'name'=>request('name'),
          'email'=>request('email'), 
          'password'=>Hash::make(request('password'))
      ];
      $user = User::create($userInf);

      auth()->login($user);
      \Mail::to($user)->send(new WelcomeAgain($user));
  }
}
