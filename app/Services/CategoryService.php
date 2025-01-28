<?php

namespace App\Services;
use App\Models\Category;

class CategoryService extends BaseService
{
    public function __construct(Category $model)
    {
        parent::__construct($model);
    }
}

