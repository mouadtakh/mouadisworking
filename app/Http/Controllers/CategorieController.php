<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categorie;

class CategorieController extends Controller
{
    
    public function getBooksByCategory($id)
    {
        $category = Categorie::findOrFail($id);
        $books = $category->livres;
        return view('livre.welcome', compact('books'));
    }
}

