<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        //return Category::all();

        return view('categories/index', [
            'categories' => Category::all(),
        ]);
    }


    public function create()
    {
        return view('categories/create'); 
    }

// Code qui se fait quand on envoie le formulaire
    public function store(Request $request)
    {
        // Insertion base de donnée 
        $category = new Category();
        // $request->name est le contenu du input name
        $category->name = $request->name; 
        $category->save(); //INSERT INTO... en laravel

        return redirect('/categories');
    }
}
