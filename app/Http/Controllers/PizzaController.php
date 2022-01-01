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
        
        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');

        $pizza->save();

        return redirect('/')->with('msg', 'Thank you for your Order');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }

}
