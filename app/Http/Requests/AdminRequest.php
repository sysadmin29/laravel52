<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class AdminRequest extends Request
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
            'name' => 'required',
            'username'=>'required|unique:users,username',
            'email' => 'required|unique:users,email'.$request->user_id,
            'password'=>'required|confirmed',
            'role_list' =>'required'
        ];
    }
}
