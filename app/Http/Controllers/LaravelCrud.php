<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaravelCrud extends Controller
{
    function index(){
        $articles=articles::all();
        return view('crud.index', compact('articles'));
    }

    function add(Request $request){
        $request->validate([
            'nomArticle'=>'required',
            'nombreArticle'=>'required',
            'prixArticle'=>'required'
        ]);

        $query = DB::table('articles')->insert([
            'nom'=>$request->input('nomArticle'),
            'Quantite'=>$request->input('nombreArticle'),
            'prix'=>$request->input('prixArticle')
        ]);


        if ($query){
            return back()->with('success','Les données ont été bien changé');
        }else{
            return back()->with('fail','Le changement des données a échouer');
        }
    }
}
