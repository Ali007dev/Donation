<?php

namespace App\Models\Rules;

class UserGroupRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'user_id' => ['integer', 'exists:users,id'],
            'group_id' => ['integer', 'exists:groups,id'],
            'isAdmin'=> ['boolean']
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [];
    }
}
