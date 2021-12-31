<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $usuario;
    public function __construct()
    {
        $this->middleware('auth');
        $this->usuario= new User();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $dato=$this->usuario->get();
        $datos=['datos'=>$dato];
        echo view('home',$datos);
    }
}
