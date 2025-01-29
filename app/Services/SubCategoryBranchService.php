<?php

namespace App\Services;
use App\Models\SubCategoryBranch;

class SubCategoryBranchService extends BaseService
{
    public function __construct(SubCategoryBranch $model)
    {
        parent::__construct($model);
    }
}

