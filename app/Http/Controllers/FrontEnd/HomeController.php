<?php

namespace App\Http\Controllers\FrontEnd;

use App\Category;
use App\Http\Controllers\Controller;
use CategoriesTableSeeder;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('display_order')->get();
        return view('home', [
            'categories' => $categories
        ]);
    }
}
