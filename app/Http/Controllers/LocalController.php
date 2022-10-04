<?php

namespace App\Http\Controllers;

use App\Models\Local;
use Illuminate\Http\Request;

class LocalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $locals = Local::latest()->get();
        return view("backend.locaux.view", compact("locals"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("backend.locaux.edit");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // 1. La validation
        $this->validate($request, [
            'NomCentre' => 'bail|required|string|max:255',
            'Adresse' => 'bail|required|string|max:255',
            'NomResponsable' => 'bail|required|string|max:255',
            'Telephone' => 'bail|required|string|max:255',

        ]);



        // 3. On enregistre les informations du Post
        Local::create([
            "NomCentre" => $request->NomCentre,
            "Adresse" => $request->Adresse,
            "NomResponsable" => $request->NomResponsable,
            "Telephone" => $request->Telephone,


        ]);

        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("local.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function show(Local $local)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function edit(Local $local)
    {
        return view("backend.locaux.edit", compact("local"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Local $local)
    {
        $rules = [
            'NomCentre' => 'bail|required|string|max:255',
            'Adresse' => 'bail|required|string|max:255',
            'NomResponsable' => 'bail|required|string|max:255',
            'Telephone' => 'bail|required|string|max:255',
        ];
        $this->validate($request, $rules);
        $local->update([
            "NomCentre" => $request->NomCentre,
            "Adresse" => $request->Adresse,
            "NomResponsable" => $request->NomResponsable,
            "Telephone" => $request->Telephone,
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("local.index", $local));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Local  $local
     * @return \Illuminate\Http\Response
     */
    public function destroy(Local $local)
    {
        // On les informations du $post de la table "posts"
        $local->delete();

        // Redirection route "posts.index"
        return redirect(route('local.index'));
    }
}
