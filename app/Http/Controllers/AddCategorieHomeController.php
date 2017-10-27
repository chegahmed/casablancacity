<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Categorie;
use App\Souscategorie;
use App\S_scategorie;
use App\Service;

class AddCategorieHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorie = Categorie::all();
        $souscategorie = Souscategorie::all();
        $service = Service::all();
      
        $actualite=Service::where('titre','Actualites')->orderBy('id', 'desc')->take(5)->get();
        $communique_presse=Service::where('titre','Communiques_de_presse')->orderBy('id', 'desc')->take(3)->get();
       $e_service=Service::where('titre','e_services')->orderBy('id', 'desc')->take(3)->get();
       $evenements_ville=Service::where('titre','Les_evenements_de_la_ville')->orderBy('id', 'desc')->take(5)->get();
       $actualites_des_Arrondissement=Service::where('titre','Actualites_des_Arrondissements')->orderBy('id', 'desc')->take(3)->get();
       $kiosque=Service::where('titre','Le_Kiosque')->orderBy('id', 'desc')->take(3)->get();
       
        $s_scategorie = S_scategorie::all();
        return view('home.index')->withCategories($categorie)
                                 ->withSouscategories($souscategorie)
                                 ->withS_scategories($s_scategorie)
                                 ->withServices($service)
                                 ->withActualites($actualite)
                                 ->withCommunique_presses($communique_presse)
                                 ->withE_services($e_service)
                                 ->withEvenements_villes($evenements_ville)
                                 ->withActualite_arrondissements($actualites_des_Arrondissement)
                                 ->withKiosques($kiosque);
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
