<?php

namespace App\Http\Controllers;

use App\Models\MainCategory;

class MainCategoryController extends Controller
{
    public function index() 
    {
        $mainCategories = $this->getMainCategories();
        
        return view('home', ['mainCategories' => $mainCategories]);
    }
    
    private function getMainCategories()
    {
        return MainCategory::select('name', 'path_to_image')->get();
    }    
}
