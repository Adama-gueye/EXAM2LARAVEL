<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Réegion;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $regions = Réegion::all();
        return view('client.index',compact('regions'));
        
    }


    public function passager(){
        return view('client.passager');

    }

    public function liste()
    {
        return view('client.liste');
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

        return redirect()->route('client.index')->with('success','Votre choix a été enregistrer Avec success on va te mettre en contact avec un de nos chauffeurs, Merci de patienter💖');
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
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
