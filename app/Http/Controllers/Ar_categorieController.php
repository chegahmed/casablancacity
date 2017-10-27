<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Ar_categorie;

class Ar_categorieController extends Controller
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
        $categorie = Ar_categorie::all();
       return view('admin.ar_categorie')->withCategories($categorie);
        
       
    }

     public function admin()
    {
        $categorie = Ar_categorie::all();
        return view('admin.ar_categorie')->withCategories($categorie);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categorie_name =$request->input('nomcatg');
        $new_categorie =new Ar_categorie;
        
        $new_categorie->name =$categorie_name;
         $new_categorie->stug =str_replace(' ','_',$categorie_name);
        $new_categorie->save();

        session()->push('m','success');
        session()->push('m','categorie Enregistrer avec  success !');
        
        return redirect('ar_categorie');
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
       $categorie_name = $request->input('namecatg');
        
     
           $categorie = Ar_categorie::find($id);
           $categorie->name = $categorie_name;
        
           $categorie->save();
        
                session()->push('m','success');
        session()->push('m','categorie Modifier avec  success !');
        return redirect('ar_categorie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Ar_categorie::destroy($id);
         session()->push('m','success');
        session()->push('m','categorie Supprimer avec  success !');
     
        return redirect('ar_categorie');
    }
}
