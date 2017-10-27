<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Ar_souscategorie;
use App\Ar_s_scategorie;
use App\Ar_categorie;
use App\Ar_actualite;


class Ar_actualiteController extends Controller
{
      public  function __construct() {
        $this->middleware('auth') ;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $S_scategorie = Ar_s_scategorie::all();
         $souscategorie = Ar_souscategorie::all();
         $categorie = Ar_categorie::all();
         $actualite = Ar_actualite::all();
        return view('admin.ar_actualite')->withSouscategories($souscategorie)
                                      ->withS_scategories($S_scategorie)
                                      ->withCategories($categorie)
                                      ->withActualites($actualite);
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
       $actualite_titre=$request->input('titreactualite');
       $actualite_url =$request->input('url');
       $actualite_content =$request->input('contenu');
       $new_actualite =new Ar_actualite; 
        
        $new_actualite->titre =$actualite_titre;
        $new_actualite->stug =str_replace(' ','_',$actualite_url);
        $new_actualite->url =str_replace(' ','_',$actualite_url);
        $new_actualite->content =$actualite_content;
        $new_actualite->save();


                session()->push('m','success');
        session()->push('m','Votre Actualite  Enregistrer avec  success !');
        
        return redirect('ar_actualite');
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
        $actualite_titre = $request->input('titre');
         $actualite_content = $request->input('content');
         
        
     
           $actualite = Ar_actualite::find($id);
           $actualite->titre = $actualite_titre;
           $actualite->content = $actualite_content;
           $actualite->stug = $actualite_titre;
           $actualite->save();
        
                session()->push('m','success');
        session()->push('m','actualite Modifier avec  success !');
        return redirect('ar_actualite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         Ar_actualite::destroy($id);
         session()->push('m','success');
        session()->push('m','Actualité Supprimer avec  success !');
     
        return redirect('ar_actualite');
    }
}
