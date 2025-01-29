<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\SubCategoryBranchRules;

class CreateSubCategoryBranchRequest extends FormRequest
{
    public function rules()
    {
        return SubCategoryBranchRules::required()
            ->getRules();
    }

    public function messages(){
        return SubCategoryBranchRules::getMessages();
    }
}
