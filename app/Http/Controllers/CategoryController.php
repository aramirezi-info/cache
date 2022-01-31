<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class CategoryController extends Controller
{
    public function index(): View
    {
        $categories = Category::all();

        return view('admin.category.index', compact('categories'));
    }

    public function edit(Category $category): View
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category): RedirectResponse
    {
        $category->name = $request->input('name');
        $category->description = $request->input('description');
        $category->save();

        Cache::forget('categories');

        return redirect()->route('categories.index');
    }
}
