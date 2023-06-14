<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Logement;
use App\Http\Requests\LogementRequest;

class LogementController extends Controller
{
    public function index()
    {
        $logements=Logement::all();
        return view("logement.index", ["logements"=>$logements]);
    }
 /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $logement=new Logement();
        return view("logement.create", ["logement"=>$logement]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LogementRequest $request)
    {
        logement::create($request->validated());
        return redirect(route('logement.index'))->with("success", "logement supprimée avec success.");
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
    public function edit(logement $logement)
    {

        return view("logement.edit",["logement"=>$logement]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LogementRequest $request, logement $logement)
    {   //dd($request->validated());
        //$logement->label=$request->validated()->label;
        $logement->update($request->validated());
        return redirect(route("logement.index"))->with("success", "Modification réussie");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(logement $logement)
    {
        $logement->delete();
        return redirect(route("logement.index"))->with("success", "logement supprimée avec success.");
    }
}
