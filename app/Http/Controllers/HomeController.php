<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $categories = Cache::rememberForever('categories', function(){
            return Category::all();
        });

        return view('product.index', compact('categories'));
    }
}
