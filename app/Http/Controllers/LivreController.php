<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\livre;
class LivreController extends Controller
{
    // create a function that list all things in database
    public function index(){
        $livres = livre::all();
        return view('index', compact('livres'));
    }
    public function create(){
        return view("create");
    }
    //  public functions store 
    public function store(Request $request){
               $livre = new livre();
               $livre->titre = $request->titre;
               $livre->pages = $request->pages;
               $livre->description=$request->description;
               $livre->image=$request->image;
               $livre->categorie_id=$request->categorie_id;
               $livre->save();
               return view("index");
               }
    // edit function 
    public function edit($id){
        $livre = livre::find($id);
        return view('edit', compact('livre'));
        }
        // update function
        public function update(Request $request, $id){
            $livre = livre::find($id);
            $livre->titre = $request->titre;
            $livre->pages = $request->pages;
            $livre->description=$request->description;
            $livre->image=$request->image;
            $livre->categorie_id=$request->categorie_id;
            $livre->save();
            $livres = livre::all();
            return view("index",compact("livres"));
            }
        public function destroy($id){
            $livre = livre::find($id);
            $livre->delete();
            return redirect()->back();
        }
}
