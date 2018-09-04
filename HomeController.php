<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


class HomeController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        if( session('locale') ) 
            \App::setlocale(  session('locale')  );

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    /**
     * Muestra la vista de material pro
     */
    public function sistema()
    {

        $icono_idioma = [
             'en'       => 'us'
            ,'es'       => 'es'
            ,'pt_br'    => 'br'
            ,'de'       => 'de'
        ];


        return view('sistema.dashboard' )->with('icono_idioma', $icono_idioma);
    }



}
