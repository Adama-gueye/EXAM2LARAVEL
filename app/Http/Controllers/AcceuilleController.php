<?php

namespace App\Http\Controllers;


class AcceuilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('acceuil');
    }
    public function propos()
    {
        return view('apropos');
    }

}