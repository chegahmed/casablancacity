<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Souscategorie;
use App\S_scategorie;
use App\Categorie;
use App\Actualite;


class ActualiteController extends Controller
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
        $S_scategorie = S_scategorie::all();
         $souscategorie = Souscategorie::all();
         $categorie = Categorie::all();
         $actualite = Actualite::all();
        return view('admin.actualite')->withSouscategories($souscategorie)
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
       $new_actualite =new Actualite; 
        
        $new_actualite->titre =$actualite_titre;
        $new_actualite->stug =str_replace(' ','_',$actualite_url);
        $new_actualite->url =str_replace(' ','_',$actualite_url);
        $new_actualite->content =$actualite_content;
        $new_actualite->save();


                session()->push('m','success');
        session()->push('m','Votre Actualite  Enregistrer avec  success !');
        
        return redirect('indexactualite');
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
         
        
     
           $actualite = Actualite::find($id);
           $actualite->titre = $actualite_titre;
           $actualite->content = $actualite_content;
           $actualite->stug = $actualite_titre;
           $actualite->save();
        
                session()->push('m','success');
        session()->push('m','actualite Modifier avec  success !');
        return redirect('indexactualite');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
         Actualite::destroy($id);
         session()->push('m','success');
        session()->push('m','Actualité Supprimer avec  success !');
     
        return redirect('indexactualite');
    }
}
