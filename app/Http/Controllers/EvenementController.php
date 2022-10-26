<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use App\Models\Local;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;


class EvenementController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $evenements = Evenement::latest()->paginate(2);
        return view("backend.evenement.view", compact("evenements"));
    }

    /**
     * Display a listing of the resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public static function eventLocal($id)
    {
        //$programmes = Programme::get();

        $local1 = Local::find($id);

        //$activities = Activities::get();
        return $local1->NomCentre;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $locals=Local::get();
        return view("backend.evenement.edit" ,compact("locals"));

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
         // 1. La validation
         $this->validate($request, [
            'AdresseEvenement' => 'bail|required|string|max:255',
            // 'DateDebut' => 'bail|required|string|max:255',
            // 'DateFin' => 'bail|required|string|max:255',
            // 'Capacite' => 'bail|required|string|max:255',
            'TypeAnimaux' => 'bail|required|string|max:255',

        ]);



        // 3. On enregistre les informations du Post
        Evenement::create([
            "AdresseEvenement" => $request->AdresseEvenement,
            "DateDebut" => $request->DateDebut,
            "DateFin" => $request->DateFin,
            "Capacite" => $request->Capacite,
            "TypeAnimaux" => $request->TypeAnimaux,
            "local_id" => $request->local_id,


        ]);

        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("evenement.index"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function show(Evenement $evenement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function edit(Evenement $evenement)
    {
        //
        $locals=Local::get();

        return view("backend.evenement.edit", compact("evenement"),compact("locals"));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evenement $evenement)
    {
        //
        $rules = [
            'AdresseEvenement' => 'bail|required|string|max:255',
            // 'DateDebut' => 'bail|required|string|max:255',
            // 'DateFin' => 'bail|required|string|max:255',
            // 'Capacite' => 'bail|required|string|max:255',
            'TypeAnimaux' => 'bail|required|string|max:255',
        ];
        $this->validate($request, $rules);
        $evenement->update([
            "AdresseEvenement" => $request->AdresseEvenement,
            "DateDebut" => $request->DateDebut,
            "DateFin" => $request->DateFin,
            "Capacite" => $request->Capacite,
            "TypeAnimaux" => $request->TypeAnimaux,
            "local_id" => $request->local_id,
        ]);

        // 4. On affiche le Post modifié : route("posts.show")
        return redirect(route("evenement.index", $evenement));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Evenement  $evenement
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evenement $evenement)
    {
        //
         // On les informations du $post de la table "posts"
         $evenement->delete();

         // Redirection route "posts.index"
         return redirect(route('evenement.index'));
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexFilter(Request $request)
    {
        $evenements  = Evenement::where('AdresseEvenement', 'LIKE', '%' . $request->search . '%')
            ->orWhere('DateDebut', 'LIKE', '%' . $request->search . '%')
            ->orWhere('DateFin', 'LIKE', '%' . $request->search . '%')
            ->orWhere('Capacite', 'LIKE', '%' . $request->search . '%')
            ->orWhere('TypeAnimaux', 'LIKE', '%' . $request->search . '%')
            ->paginate(2);

        if (count($evenements) > 0)
            return view('backend.evenement.view', compact('evenements'))->withDetails($evenements)->withQuery($request->search);
        else
            return view('backend.evenement.view', compact('evenements'))->withMessage('No Event Details found. Try to search again !');
    }
  
}
