<?php
namespace App\Models\Rules;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class UserDonationRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'amount'=>['numeric'],
            'type' => ['in:monthly,weekly,once'],
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

