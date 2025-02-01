<?php
namespace App\Models\Rules;
class SubCategoryBranchRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [

            'sub_category_id'=>['numeric','exists:sub_categories,id'],
            'name' => 'string',
            'description' => 'string',
            'needed_amount' => ['numeric']
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

