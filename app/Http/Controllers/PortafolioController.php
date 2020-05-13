<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortafolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Portlist = [
            ['title'=>'Proyecto no 1'],
            ['title'=>'Proyecto no 2'],
            ['title'=>'Proyecto no 3'],
            ['title'=>'Proyecto no 4'],
            ['title'=>'Proyecto no 5']
        ];

        return view('portafolio', compact('Portlist') );
    }



}
