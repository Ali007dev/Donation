<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\SubCategoryBranchController;
use App\Http\Controllers\SubCategoryController;
use Illuminate\Support\Facades\Route;

Route::feature('/',CategoryController::class);

Route::feature('sub',SubCategoryController::class);
Route::feature('sub-branch',SubCategoryBranchController::class);
