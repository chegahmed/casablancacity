<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Ar_service;

class Ar_serviceController extends Controller
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
         $service =Ar_service::all();
        return view('admin.ar_service')->withServices($service);
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
        $service_titre =$request->input('titreservice');
        $service_url =$request->input('urlservice');
       
         $file = $request->file('image');
        $destinationPath = 'images/services/';
        $filename =$file->getClientOriginalName();
        $file->move($destinationPath,$filename);
        
       
        $new_service =new Ar_service;
        
        $new_service->titre =$service_titre;
         $new_service->url = $service_url;
          $new_service->image ="images/services/".$filename;
        $new_service->save();

        session()->push('m','success');
        session()->push('m','Service Enregistrer avec  success !');
        
        return redirect('ar_service');
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
        $urlservice = $request->input('urlservice');
        
     
           $service = Ar_service::find($id);
           $service->url = $urlservice;
        
           $service->save();
        
                session()->push('m','success');
        session()->push('m','Service Modifier avec  success !');
        return redirect('ar_service');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         Ar_service::destroy($id);
         session()->push('m','success');
        session()->push('m','Service Supprimer avec  success !');
     
            return redirect('ar_service');
    }
}
