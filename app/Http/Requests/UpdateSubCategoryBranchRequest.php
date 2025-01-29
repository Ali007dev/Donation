<?php
namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\Rules\SubCategoryBranchRules;

class UpdateSubCategoryBranchRequest extends FormRequest
{
    public function rules()
    {
        return SubCategoryBranchRules::getRules();
    }

    public function messages(){
        return SubCategoryBranchRules::getMessages();
    }
}
