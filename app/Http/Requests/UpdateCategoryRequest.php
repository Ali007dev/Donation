<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\CategoryRules;

class UpdateCategoryRequest extends FormRequest
{
    public function rules()
    {
        return CategoryRules::getRules();
    }

    public function messages(){
        return CategoryRules::getMessages();
    }
}
