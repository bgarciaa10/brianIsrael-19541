<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestCorreo;
use App\Models\ModelCorreo;
use Illuminate\Database\QueryException;
use Illuminate\Http\Client\Request;



class ControllerCorreo extends Controller
{
    public function create(Request $request)
    {
        return view('correo.create');
    }

    public function store(RequestCorreo $request)
    {
            $data = $request->validated();
            if($varCorreo = ModelCorreo::create($data)){

                return back()->with('status', 'ok');

            }else{

                return back()->with('status', 'error');
            }
    }
}
