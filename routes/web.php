<?php

use App\Http\Controllers\AcceuilleController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ChauffeurController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RéegionController;
use App\Models\Itineraire;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/listeClient', [AdminController::class, 'listeClient'])->name('client.liste');
});
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/listeChauffeur', [AdminController::class, 'listeChauffeur'])->name('chauffeur.liste');
});



Route::middleware(['auth', 'role:client'])->group(function () {
  
    Route::get('/client', [ClientController::class, 'index'])->name('client.index');
});

Route::middleware(['auth', 'role:chauffeur'])->group(function () {
  
    Route::get('/chauffeur', [ChauffeurController::class, 'index'])->name('chauffeur.index');
});

Route::get('/',[AcceuilleController::class,'index'])->name('acceuil');
Route::get('/A_Propos',[AcceuilleController::class,'propos'])->name('propos');
Route::get('/Passager',[ClientController::class,'passager'])->name('passager');
Route::get('/Chauffeur',[ChauffeurController::class,'chauffeur'])->name('chauffeur');


Route::post('region.store',[AdminController::class,'store'])->name('region.store');
Route::get('/Region',[RéegionController::class,'region'])->name('ajoutRegion');

Route::post('itineraire.store2',[AdminController::class,'store2'])->name('itineraire.store2');
Route::get('itineraire/{regionId}', [AdminController::class, 'getByRegion']);
Route::get('itineraireChauffeur/{regionId}', [AdminController::class, 'getByRegionChauffeur']);
Route::get('getTarif/{itineraireId}', [AdminController::class, 'getTarif']);
Route::get('getTarifChauffeur/{itineraireId}', [AdminController::class, 'getTarifChauffeur']);

Route::get('update{id}',[AdminController::class,'modif'])->name('update');
Route::patch('itineraire/update{id}', [AdminController::class, 'update'])->name('itineraire.update');
Route::delete('/delete{id}', [AdminController::class, 'destroy'])->name('itineraire.destroy');
Route::delete('/regions/{id}', [RéegionController::class, 'destroy'])->name('destroyRegion');

Route::delete('/chauffeur/{id}', [ChauffeurController::class, 'destroy'])->name('destroyChauffeur');
Route::delete('/client/{id}', [ClientController::class, 'destroy'])->name('destroyClient');
//Route::get('/regions/{id}', [RéegionController::class, 'show'])->name('region.show');

Route::get('/chat', function () {
    return view('chat');
})->middleware('auth');

Route::post('/send-message', function () {
    $message = request()->input('message');

    event(new App\Events\NewMessage($message));

    return redirect('/chat');
})->middleware('auth');

Route::post('message',[ClientController::class,'message'])->name('message');
Route::post('messageChauffeur',[ChauffeurController::class,'message'])->name('messageChauffeur');

// routes/web.php

//Route::post('/send-notification-to-driver', [ChauffeurController::class, 'sendNotificationToDriver'])->name('send.notification.driver');




require __DIR__.'/auth.php';
