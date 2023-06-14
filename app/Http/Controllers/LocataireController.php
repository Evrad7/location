<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Locataire;
use App\Http\Requests\LocataireRequest;

class LocataireController extends Controller
{
    public function index()
    {
        $locataires=Locataire::all();
        return view("locataire.index", ["locataires"=>$locataires]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $locataire=new Locataire();
        return view("locataire.create", ["locataire"=>$locataire]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LocataireRequest $request)
    {
        locataire::create($request->validated());
        return redirect(route('locataire.index'))->with("success", "locataire supprimée avec success.");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(locataire $locataire)
    {

        return view("locataire.edit",["locataire"=>$locataire]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LocataireRequest $request, locataire $locataire)
    {   //dd($request->validated());
        //$locataire->label=$request->validated()->label;
        $locataire->update($request->validated());
        return redirect(route("locataire.index"))->with("success", "Modification réussie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(locataire $locataire)
    {
        $locataire->delete();
        return redirect(route("locataire.index"))->with("success", "locataire supprimée avec success.");
    }
}
