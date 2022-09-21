<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Livres;
use App\Models\Founisseurs;
use App\Http\Controllers\fournisseursController;
use App\Http\Controllers\livresController;

class livresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $liv = Livres::all();
        $four = Founisseurs::all();
        return view ('Livre.index', compact('liv','four'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
   

         //
         $verification = $request->validate(
            [
                'auteur'=>['required','string','max:255'],
                'edition'=>['required','string','max:255'],
                'id_four'=>['required','string','max:255'],
                
                
            ]
        );
        //ici nous allons definir les actions à faire si la verification est bonne
        if($verification){
                        // nous allons creer un user avec les données saisies
                        $liv = Livres::create([
                            'auteur'=>$request['auteur'],
                            'edition'=>$request['edition'],
                            'id_four'=>$request['id_four'],
                            'disponibilite'=>'oui',
                            
            ]);
           
                    return redirect('/livre');
            }

         
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
