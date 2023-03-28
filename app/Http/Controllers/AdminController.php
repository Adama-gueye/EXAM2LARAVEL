<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Itineraire;
use App\Models\Réegion;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
       // $user = Auth::user();
        $regions = Réegion::all();
        $itineraires = Itineraire::all();
        return view('admin.index',compact('regions','itineraires'));
    }

    public function listeChauffeur(){
        $chauffeurs = User::where('role', 'chauffeur')->get();
        return view('chauffeur.liste', compact('chauffeurs'));
    }
    public function listeClient(){
        $clients = User::where('role', 'client')->get();
        return view('client.liste', compact('clients'));
    }

    public function getByRegion($regionId)
    {
        $itineraires = Itineraire::where('réegion_id', $regionId)->get();
    
        return response()->json($itineraires);
    }
    public function getByRegionChauffeur($regionId)
    {
        $itineraires = Itineraire::where('réegion_id', $regionId)->get();
    
        return response()->json($itineraires);
    }

    public function getTarif($itineraireId)
    {
        $itineraire = Itineraire::findOrFail($itineraireId);
        $tarif = $itineraire->tarif;
        return response()->json(['tarif' => $tarif]);
    }
    public function getTarifChauffeur($itineraireId)
    {
        $itineraire = Itineraire::findOrFail($itineraireId);
        $tarif = $itineraire->tarif;
        return response()->json(['tarif' => $tarif]);
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function rules()
    {
        return [
            'region' => 'required',
            'itineraire' => 'required',
            'tarif' => 'required'
        ];
    }
    public function messages()
    {
        return [
            'region.required' => 'Desolé! Veuillez choisir une region svp',
            'itineraire.required' => 'Desolé! l\'itinéraire est Obligatoire',
            'tarif.required' => 'Desolé! le tarif est Obligatoire'
        ];
    }

    public function store(Request $request)
    {

        $region = new Réegion();
        $region->nomRegion = $request->region;

        $region->save();

        return redirect()->route('admin.index')->with('success','Région Enregistrer avec success');
    }

    public function store2(Request $request)
    {
        $request->validate($this->rules(), $this->messages());

        $itineraire = new Itineraire();
        $itineraire->nomItineraire = $request->itineraire;
        $itineraire->réegion_id = $request->input('region');
        $itineraire->tarif = $request->tarif;

        $itineraire->save();

        return redirect()->route('admin.index')->with('success','Enregistrement fait avec success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }
    public function modif($id)
    {
        $regions = Réegion::all();
        $itineraire=Itineraire::find($id);
        return view('admin.update',compact('itineraire','regions'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules(), $this->messages());

        $itineraire = Itineraire::find($id);
        $itineraire->nomItineraire = $request->itineraire;
        $itineraire->réegion_id = $request->input('region');
        $itineraire->tarif = $request->tarif;
        $itineraire->save();
        return redirect()->route('admin.index')->with('success','Modification enregistrer avec success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $itineraire = Itineraire::find($id);
        $itineraire->delete();
        return redirect()->route('admin.index')->with('success', 'supprission fait avec succes');
    }
}
