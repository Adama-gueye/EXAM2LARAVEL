<?php

namespace App\Http\Controllers;

use App\Models\Chauffeur;
use App\Models\Réegion;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;

class ChauffeurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $regions = Réegion::all();
        return view('chauffeur.index',compact('regions'));
        
    }

    

    public function chauffeur(){
        return view('chauffeur.chauffeur');
    }

    public function liste()
    {
        return view('chauffeur.liste');
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
    public function store(Request $request)
    {
        //
    }

    public function rules()
    {
        return [
            'region' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'region.required' => 'Desolé! Veuillez choisir une region svp',
        ];
    }

    public function message(Request $request){
        
        $request->validate($this->rules(), $this->messages());

        return redirect()->route('chauffeur.index')->with('success','Votre choix a été enregistrer Avec success on va te mettre au courant si un passager choisi cet itinéraire Merci 💖');
    
    }

    /**
     * Display the specified resource.
     */
    public function show(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Chauffeur $chauffeur)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('admin.index')->with('success', 'Chauffeur Supprimait avec succes');
    }
}
