<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\UserDonationRules;

class CreateUserDonationRequest extends FormRequest
{
    public function rules()
    {
        return UserDonationRules::required()
            ->getRules();
    }

    public function messages(){
        return UserDonationRules::getMessages();
    }
}
