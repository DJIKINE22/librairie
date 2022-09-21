<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Founisseurs;
use App\Http\Controllers\fournisseursController;


class fournisseursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view ('Founisseur.create');
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
                'nom_four'=>['required','string','max:255'],
                'prenom_four'=>['required','string','max:255'],
                'adresse_four'=>['required','string','max:255'],
                'telephone_four'=>['required','string','max:25'],
                
            ]
        );
        //ici nous allons definir les actions à faire si la verification est bonne
        if($verification){
                        // nous allons creer un user avec les données saisies
                        $four = Founisseurs::create([
                            'nom_four'=>$request['nom_four'],
                            'prenom_four'=>$request['prenom_four'],
                            'adresse_four'=>$request['adresse_four'],
                            'telephone_four'=>$request['telephone_four'],
            ]);
           
                    return redirect('/fournisseur');
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
