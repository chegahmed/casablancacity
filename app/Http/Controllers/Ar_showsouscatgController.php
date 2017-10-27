<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Ar_souscategorie;
use App\Ar_s_scategorie;
use App\Ar_categorie;
use App\Ar_service;
use App\Ar_actualite;

class Ar_showsouscatgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    
     public function  Showsouscatg($catg,$scatg)
    {
         $actualite = Ar_actualite::all();
          $categorie = Ar_categorie::all();
        $souscategorie = Ar_souscategorie::all();
        $service = Ar_service::all();
        $s_scategorie = Ar_s_scategorie::all();
        
        foreach($categorie as $cat){
            if ( strcasecmp($cat->stug, $catg) == 0 ){
                
                foreach($souscategorie as $scat){
                  if ( strcasecmp($scat->stug, $scatg) == 0 ){
                      
                            $categorie = Ar_categorie::all();
        $souscategorie = Ar_souscategorie::all();
        $service = Ar_service::all();
        $s_scategorie = Ar_s_scategorie::all();
        $actualite = Ar_actualite::all();
        $nosactualite=Ar_service::where('titre','Actualites')->orderBy('id', 'desc')->take(5)->get();
        $communique_presse=Ar_service::where('titre','Communiques_de_presse')->orderBy('id', 'desc')->take(3)->get();
        
        return view('ar_home.showsouscatg')->withCategories($categorie)
                                        ->withSouscategories($souscategorie)
                                        ->withS_scategories($s_scategorie)
                                        ->withServices($service)
                                        ->withActualites($actualite)
                                        ->withNosactualites($nosactualite)
                                         ->withCommunique_presses($communique_presse)
                                        ->withCatg($catg)
                                        ->withScatg($scatg);
                      
                      
                  }
                  
                    
                    
                }
                
            }
        }return view('w');
            
       
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
