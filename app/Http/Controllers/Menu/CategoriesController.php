<?php

namespace App\Http\Controllers\Menu;

use App\Http\Controllers\Controller;
use App\Http\Resources\MenuCategory as MenuCategoryResource;
use App\Http\Resources\MenuPosition;
use App\MenuCategory;

class CategoriesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return MenuCategoryResource::collection(MenuCategory::sorted()->paginate());
    }

    public function positions(MenuCategory $category)
    {
        return MenuPosition::collection($category->positions()->paginate());
    }
}
