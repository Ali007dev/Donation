<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\CreateSubCategoryBranchRequest;
use App\Http\Requests\UpdateSubCategoryBranchRequest;
use App\Http\Resources\SubCategoryBranchResource;
use App\Services\SubCategoryBranchService;

class SubCategoryBranchController extends BaseCRUDController
{
    public function __construct(SubCategoryBranchService $service) {
        parent::__construct(
            $service,
            CreateSubCategoryBranchRequest::class,
            UpdateSubCategoryBranchRequest::class,
            SubCategoryBranchResource::class
        );
    }
}
