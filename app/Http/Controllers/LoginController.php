<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    protected function index()
    {
        $user = Auth::user();

        if($user->role=='admin'){
            return (new AdminController())->index();
        }
        if($user->role=='chauffeur'){
            return (new ChauffeurController())->index();
        }
        if($user->role=='client'){
            return (new ClientController())->index();
        }
    }
}
