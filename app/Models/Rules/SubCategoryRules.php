<?php
namespace App\Models\Rules;
class SubCategoryRules extends BaseRules
{
    // Define the rules specific to the model
    protected function defineRules(): array
    {
        return [
            'name' => 'string|max:255',
            'category_id' => ['numeric','exists:categories,id'],
            'description' => 'nullable|string',
            'needed_amount' => 'numeric|min:0',
            'status' => 'string|max:255',
            'date' => 'date'
        ];
    }

    // Define custom messages specific to the model
    protected function defineMessages(): array
    {
        return [

        ];
    }
}

