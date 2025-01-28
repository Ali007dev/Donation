<?php

namespace App\Http\Controllers;

use App\Http\Controllers\BaseCRUDController;
use App\Http\Requests\CreateCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Http\Resources\CategoryResource;
use App\Services\CategoryService;

class CategoryController extends BaseCRUDController
{
    public function __construct(CategoryService $service) {
        parent::__construct(
            $service,
            CreateCategoryRequest::class,
            UpdateCategoryRequest::class,
            CategoryResource::class
        );
    }
}
