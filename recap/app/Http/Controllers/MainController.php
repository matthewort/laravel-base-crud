<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Peripheral;

class MainController extends Controller
{
    public function index() {
        $peripherals = Peripheral::all();
        return view('pages.peripherals-index', compact('peripherals'));
    }

    public function show($id) {
        $peripheral = Peripheral::findOrFail($id);
        return view('pages.peripheral-show', compact('peripheral'));
    }

    public function create() {
        return view('pages.peripheral-create');
    }

    public function store(Request $request) {
        // dd($request -> all()); 
        $newPeripheral = new Peripheral;
        $newPeripheral -> name = $request -> get('name');
        $newPeripheral -> model = $request -> get('model');
        $newPeripheral -> price = $request -> get('price');
        $newPeripheral -> consumption = $request -> get('consumption');
        return redirect() -> route('peripherals-index');
    }
}
