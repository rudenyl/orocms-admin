<?php
namespace OroCMS\Admin\Validation\Users;

use OroCMS\Admin\Validation\Validator;

class Create extends Validator
{
    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|max:20',
        ];
    }
}
