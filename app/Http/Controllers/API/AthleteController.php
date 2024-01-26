<?php

namespace App\Http\Controllers\API;
use App\Models\TbApnee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AthleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Apnee()
    {
        $apnee = TbApnee::all();
        return view('apnee', ['apnee' => $apnee]);
    }

    /**
     * Store a newly created resource in storage.
     */

     public function create()
     {
        return view('add_apnee');
     }


    public function store(Request $request)
    {
        $request->validate([
            'num_ap' => 'required',
            'annee_ap' => 'required|numeric',
            'dat_ap' => 'required|date',
            'categorie_ap' => 'required',
            'lieu_ap' => 'required',
            'cleub_ap' => 'required',
            'pool_ap' => 'required',
            'ref_journee_ap' => 'required',
            'journee_ap' => 'required',
            'nr_plaque_ap' => 'required',
            'nr_licence_ap' => 'required',
            'abs_ap' => 'required',
            'type_journee_ap' => 'required',
            'apnee_ap' => 'required',
            'apnee_statique' => 'required',
            'ins_stat' => 'required',
            'presence_ap_stat' => 'required',
            'ins_bf' => 'required',
            'presence_apnee_dinamique_bf' => 'required',
            'distance_ap_dina_bf' => 'required',
            'temps_ap_dina_bf' => 'required',
            'ins_mf' => 'required',
            'presence_ap_dinamique_mf' => 'required',
            'distance_ap_dina_mf' => 'required',
            'temps_ap_dina_mf' => 'required',
            'presence_ap_dinamique_nf' => 'required',
            'distance_ap_dina_nf' => 'required',
            'temps_ap_dina_nf' => 'required',
            'ref_statique' => 'required',
            'class_statique' => 'required',
            'ref_dinam_bf' => 'required',
            'class_dinam_bf' => 'required',
            'ref_dinam_mf' => 'required',
            'class_dinam_mf' => 'required',
            'ins_nf' => 'required',
            'ref_dinam_nf' => 'required',
            'class_dinam_nf' => 'required',
            'jaune_statique' => 'required',
            'jaune_dina_bf' => 'required',
            'jaune_dina_mf' => 'required',
            'jaune_dina_nf' => 'required',
            'rouge_statique' => 'required',
            'rouge_dina_bf' => 'required',
            'rouge_dina_mf' => 'required',
            'rouge_dina_nf' => 'required',
        ]);

        TbApnee::create($request->all());

        return redirect()->route('apnee')->with('success', 'Apnee created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
