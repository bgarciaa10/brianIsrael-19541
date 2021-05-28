<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCorreo;
use App\Models\ModelCorreo;
use Illuminate\Http\Request;

class ControllerCorreo extends Controller
{
    public function create()
    {
        return view('correo.create');
    }

    public function store(RequestCorreo $request)
    {
        //predeterminado
        $data = $request->validated();
        $varCorreo = ModelCorreo::create($data);
        return redirect()->route('home')->with('status', 'Correo Registrado');

    }
}
