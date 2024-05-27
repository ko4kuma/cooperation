<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

//use berarti mengimport

class CustomerController extends Controller
{
    // untuk menambah datasss customer
    public function create() {
        return view('customers.create');
    }
    public function store(Request $request) {
        $this->validate($request, [
            'code' => 'required|unique:customers|max:4',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);
        $customer = new Customer;
        // mengakses properti
        $customer->code = $request->code;
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        // insert ke database
        $customer->save();

    }
}