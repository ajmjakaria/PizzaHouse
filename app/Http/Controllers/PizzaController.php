<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
class PizzaController extends Controller
{
    public function index(){
        // $pizzas = [
        //     ['type' => 'hawain','base' => 'cheesy crust'],
        //     ['type' => 'volcano','base' => 'garlic crust'],
        //     ['type' => 'veg supreme','base' => 'thin & crispy']
        // ];
        $pizzas = Pizza::all();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
            ]);
    }
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }
    
    public function create() {
        return view('pizzas.create');
    }
    public function store() {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->save();
        error_log($pizza);
        
        // error_log(request('name'));
        // error_log(request('type'));
        // error_log(request('base'));
        return redirect('/')->with('mssg', 'Thanks for your order!');
    }
}