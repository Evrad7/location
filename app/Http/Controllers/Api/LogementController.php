<?php

namespace App\Http\Controllers\Api;

use Illuminate\Support\Facades\DB;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Logement;
use App\Http\Requests\Api\LogementAPIFormRequest;

class LogementController extends Controller

// La validation des formulaires se fait avec l'onjet LogementAPIFormReques
{
    public function index()
    {

        $logements=Logement::orderBy("code", "desc")->get();
        return $logements;

    }

    public function store(LogementAPIFormRequest $request)
    {   $logement=null;
        // Le LogementAPIFormRequest se charge de la validation
        try{
            DB::beginTransaction();
            $logement=Logement::create($request->validated());
            DB::commit();
        }
        catch(\Throwable $th){
            DB::rollback();
        }

            return ["success"=>true, "message"=>"logement ajouté", "data"=>$logement];
    }

    public function show(Logement $logement)
    {
        $logement=$logement::all()->where("code", $logement->code)->first();
        return $logement;
    }



    public function update(LogementAPIFormRequest $request, Logement $logement)
    {
        // Le LogementAPIFormRequest se charge de la validation
        $logement->update($request->validated());
        return ["success"=>true, "message"=>"logement modifié", "data"=>$logement];

    }


    public function destroy(Logement $logement)
    {
        $logement->delete();
        return $logement;
    }
}
