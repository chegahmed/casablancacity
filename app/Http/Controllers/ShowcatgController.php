<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Souscategorie;
use App\S_scategorie;
use App\Categorie;
use App\Service;
use App\Actualite;

class ShowcatgController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        //
    }

    public function Showcatg($catg) {


         $categorie = Categorie::all();
        
      foreach($categorie as $cat){
            if ( strcasecmp($cat->stug, $catg) == 0 ){
                
                 $categorie = Categorie::all();
        $souscategorie = Souscategorie::all();
        $service = Service::all();
        $s_scategorie = S_scategorie::all();
        $actualite = Actualite::all();
        $nosactualite=Service::where('titre','Actualites')->orderBy('id', 'desc')->take(5)->get();
        $communique_presse=Service::where('titre','Communiques_de_presse')->orderBy('id', 'desc')->take(3)->get();
         return view('home.showcatg')->withCategories($categorie)
                                 ->withSouscategories($souscategorie)
                                 ->withS_scategories($s_scategorie)
                                 ->withServices($service)
                                  ->withActualites($actualite)
                                  ->withNosactualites($nosactualite)
                                  ->withCommunique_presses($communique_presse)
                                  ->withCatg($catg);
                
              //  return view('home.showcatg')->withCatg($catg);
            }         
        }return view('w');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
