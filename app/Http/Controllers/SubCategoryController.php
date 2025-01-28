<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\CreateSubCategoryRequest;
use App\Http\Requests\UpdateSubCategoryRequest;
use App\Http\Resources\SubCategoryResource;
use App\Services\SubCategoryService;

class SubCategoryController extends BaseCRUDController
{
    public function __construct(SubCategoryService $service) {
        parent::__construct(
            $service,
            CreateSubCategoryRequest::class,
            UpdateSubCategoryRequest::class,
            SubCategoryResource::class
        );
    }
}
