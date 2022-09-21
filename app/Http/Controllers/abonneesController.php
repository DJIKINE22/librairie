<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\abonneesController;
use App\Models\Abonnée;

class abonneesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $abo = Abonnée::all();
        return view ('Abonne.index', compact('abo'));
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
                'nom_abo'=>['required','string','max:255'],
                'prenom_abo'=>['required','string','max:255'],
                'adresse_abo'=>['required','string','max:255'],
                'telephone_abo'=>['required','string','max:25'],
                
            ]
        );
        //ici nous allons definir les actions à faire si la verification est bonne
        if($verification){
                        // nous allons creer un user avec les données saisies
                        $abo = Abonnée::create([
                            'nom_abo'=>$request['nom_abo'],
                            'prenom_abo'=>$request['prenom_abo'],
                            'adresse_abo'=>$request['adresse_abo'],
                            'telephone_abo'=>$request['telephone_abo'],
            ]);
           
                    return redirect('/abonne');
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
