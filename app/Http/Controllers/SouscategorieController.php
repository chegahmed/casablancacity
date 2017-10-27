<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Categorie;
use App\Souscategorie;

class SouscategorieController extends Controller
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
        $categorie = Categorie::all();
         $souscategorie = Souscategorie::all();
        return view('admin.Souscategorie')->withCategories($categorie)
                                          ->withSouscategories($souscategorie);

    }

     public function indexsouscategorie()
    {
        $categorie = Categorie::all();
        $souscategorie = Souscategorie::all();
        return view('admin.Souscategorie')->withCategories($categorie)
                                          ->withSouscategories($souscategorie);
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
        $souscategorie_name =$request->input('nomcatg');
        $souscategorie_idcatg =$request->input('idcatg');
        $new_souscategorie =new Souscategorie;
        
        $new_souscategorie->name =$souscategorie_name;
        $new_souscategorie->stug =str_replace(' ','_',$souscategorie_name);
        $new_souscategorie->idcatg =$souscategorie_idcatg;
        $new_souscategorie->save();


                session()->push('m','success');
        session()->push('m','Sous categorie Enregistrer avec  success !');
        
        return redirect('indexsouscategorie');
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
          
           $souscategorie_name = $request->input('namesouscatg');
           $souscategorie = Souscategorie::find($id);
           $souscategorie->name = $souscategorie_name;
        
           $souscategorie->save();
        
                session()->push('m','success');
        session()->push('m','Sous categorie Modifier avec  success !');
        return redirect('indexsouscategorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          Souscategorie::destroy($id);
            session()->push('m','danger');
        session()->push('m','sous categorie supprimmer avec success !');
        return redirect('indexsouscategorie');
    }
}
