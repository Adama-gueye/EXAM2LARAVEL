<?php

namespace App\Http\Controllers;

use App\Models\Itineraire;
use App\Models\Réegion;
use Illuminate\Support\Facades\DB;

class RéegionController extends Controller
{

    public function region()
    {
        $regions = Réegion::all();
        return view('admin.region',compact('regions'));
    }

    public function destroy($id)
    {
        $region = Réegion::find($id);
        if ($region) {
            DB::table('itineraires')->where('réegion_id', $region->id)->delete();
            Réegion::destroy($region->id);
            return redirect()->route('admin.index')->with('success', 'La Région et les Itinéraire associés ont été supprimés avec succès');
        }
        return redirect()->route('admin.index')->with('error', 'Région introuvable');
    }
    
//     public function show($id)
// {
//     $region = Réegion::findOrFail($id);
//     $itineraires = $region->itineraires;
//     return view('region.show', compact('region', 'itineraires'));
// }


}
