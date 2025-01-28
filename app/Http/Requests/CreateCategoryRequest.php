<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\CategoryRules;

class CreateCategoryRequest extends FormRequest
{
    public function rules()
    {
        return CategoryRules::required()
            ->getRules();
    }

    public function messages(){
        return CategoryRules::getMessages();
    }
}
