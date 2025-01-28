<?php

namespace App\Models\Rules;

class UserRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'name' => 'string|max:255',
            'role' => 'in:employee,user',
            'number' => 'string',
            'country' => 'string',
            'birthdate' => 'string',
            'email' => 'string|email|max:255|unique:users',
            'password' => 'string|min:6',
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [];
    }
}
