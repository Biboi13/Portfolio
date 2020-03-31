<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index(){

        $login =  [
            ['type' => 'Admin', 'name' => 'Oliver'],
            ['type' => 'Guest', 'name' => 'Biboi'],
            ['type' => 'Guest', 'name' => 'Timmy']
            
         ];
         
         $name = request('name');
         
          return view('login', ['login' => $login,
          
          'name' => $name
          
          ]);

    }

    public function show($id){
        return view('details', ['id' => $id]);
    }
}
