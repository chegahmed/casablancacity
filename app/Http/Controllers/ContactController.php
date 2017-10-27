<?php 

namespace App\Http\Controllers;

use Mail;
use App\Http\Requests\ContactRequest;
use App\Http\Controllers\Controller;
use DB;
use App\Categorie;
use App\Souscategorie;
use App\S_scategorie;
use App\Service;

class ContactController extends Controller {

    public function getForm()
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
        return view('contactmail.contact')->withCategories($categorie)
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

	public function postForm(ContactRequest $request)
	{
		Mail::send('contactmail.email_contact', $request->all(), function($message) 
		{
			$message->to('chegaahmed@gmail.com')->subject('msg site casablancacity.ma');
		});

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
        return view('contactmail.confirm')->withCategories($categorie)
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

}