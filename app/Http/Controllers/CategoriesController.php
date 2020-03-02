<?php

namespace App\Http\Controllers;

use App\Category;

class CategoriesController extends BaseController
{
    public function index()
    {
        $categories = Category::all();

        return $this->sendResponse($categories,'Listado de categorias');
    }

    public function getSubcategories($category_id)
    {
        $category = Category::find($category_id);
        $subcategories = $category->subcategories;

        return $this->sendResponse($subcategories,'Listado de Subcategorias');
    }
}
