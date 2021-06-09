<?php


namespace App\Http\Controllers;



use http\Client\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        return view('welcome');
    }
}
