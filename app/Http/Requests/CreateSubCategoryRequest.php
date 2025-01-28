<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\SubCategoryRules;

class CreateSubCategoryRequest extends FormRequest
{
    public function rules()
    {
        return SubCategoryRules::required()
            ->getRules();
    }

    public function messages(){
        return SubCategoryRules::getMessages();
    }
}
