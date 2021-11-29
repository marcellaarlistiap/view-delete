<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categori;

class CategoriController extends Controller
{
    public function index(){
        $categori = Categori::all();
        return view('pages.categories.index', compact('categori'));
    }

    public function destroy($id){
        $categori = Categori::where('id',$id)->firstOrFail();
        $categori->delete();
        return redirect()->back();
    }
}