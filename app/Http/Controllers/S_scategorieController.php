<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Souscategorie;
use App\S_scategorie;
use App\Categorie;

class S_scategorieController extends Controller
{
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
        return view('admin.S_scategorie')->withSouscategories($souscategorie)
                                          ->withS_scategories($S_scategorie)
                                           ->withCategories($categorie);
                                          
        
    }
    
    public function indexsoussouscategorie()
    {
        $S_scategorie = S_scategorie::all();
         $souscategorie = Souscategorie::all();
         $categorie = Categorie::all();
        return view('admin.S_scategorie')->withSouscategories($souscategorie)
                                          ->withS_scategories($S_scategorie)
                                           ->withCategories($categorie);
                                          
        
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
        $soussouscategorie_name =$request->input('NomSousScatg');
        $soussouscategorie_idsouscatg =$request->input('idsouscatg');
        $new_soussouscategorie =new S_scategorie; 
        
        $new_soussouscategorie->name =$soussouscategorie_name;
        $new_soussouscategorie->stug =str_replace(' ','_',$soussouscategorie_name);
        $new_soussouscategorie->id_souscatg =$soussouscategorie_idsouscatg;
        $new_soussouscategorie->save();


                session()->push('m','success');
        session()->push('m','Sous sous categorie Enregistrer avec  success !');
        
        return redirect('indexsoussouscategorie');
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
           
           $S_scategorie_name = $request->input('name_sscatg');
           $S_scategorie = S_scategorie::find($id);
           $S_scategorie->name = $S_scategorie_name;
           $S_scategorie->stug =str_replace(' ','_',$S_scategorie_name);
        
           $S_scategorie->save();
        
                session()->push('m','success');
        session()->push('m','Sous sous categorie Modifier avec  success !');
        return redirect('indexsoussouscategorie');
        
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          S_scategorie::destroy($id);
          session()->push('m','danger');
           session()->push('m','sous sous categorie supprimmer avec success !');
        return redirect('indexsoussouscategorie');
    
}

}
