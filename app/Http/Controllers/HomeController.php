<?php
<<<<<<< HEAD
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
  
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;

>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
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
    }
<<<<<<< HEAD
  
=======

>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
<<<<<<< HEAD
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
        return view('managerHome');
    }
}
=======
    }
}
>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
