<?php

namespace App\Services;
use App\Models\SubCategory;

class SubCategoryService extends BaseService
{
    public function __construct(SubCategory $model)
    {
        parent::__construct($model);
    }
}

