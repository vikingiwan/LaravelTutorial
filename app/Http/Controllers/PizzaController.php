<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
        
        //$pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('name', 'desc')->get();
        //$pizzas = Pizza::where('type', 'hawaiian')->get();
        $pizzas = Pizza::latest()->get();
    
        return view('pizzas.pizzas', [
            'pizzas' => $pizzas
        ]);
    }

    public function show($id){
        
        $pizza = Pizza::findOrFail($id);
        
        return view('pizzas.details', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        return redirect('/');
    }
}
