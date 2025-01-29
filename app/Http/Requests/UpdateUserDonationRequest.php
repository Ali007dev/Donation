<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\UserDonationRules;

class UpdateUserDonationRequest extends FormRequest
{
    public function rules()
    {
        return UserDonationRules::getRules();
    }

    public function messages(){
        return UserDonationRules::getMessages();
    }
}
