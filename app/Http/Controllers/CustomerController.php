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
        // insert into customers values ('name', 'address')
        // true/false
        // return true
        if($customer->save()) {
            // return redirect()->route('customer.show', ['parameterKey' => 'value']);
            return redirect()->route('customer.show', $customer->id);

        } else {
            dd('Data gagal disimpan');
        }

    }
    public function show($id) {
        // select * from customers where id = x
        $customer = Customer::find($id);
        return view('customers.show', compact('customer'));
        // dd($customer);

    }
    public function index() {
    // select * from customers
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }
        
    // method untuk mengambil data yg diubah
    public function edit($id) {
        $customer = Customer::find($id);
        return view('customers.edit', compact('customer'));

        
    }
    // method untuk menyimpan data yg diubah
    public function update(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required|numeric'
        ]);

        // update customers set name='', phone='', address='' where id=''
        $customer = Customer::find($request->id);
        
        // mengakses properti
        $customer->name = $request->name;
        $customer->address = $request->address;
        $customer->phone = $request->phone;

        // insert ke database
        // insert into customers values ('name', 'address')
        // true/false
        // return true
        if($customer->save()) {
            // return redirect()->route('customer.show', ['parameterKey' => 'value']);
            return redirect()->route('customer.index')->with('success', "Data Nasabah $customer->code Berhasil diperbaharui");

        } else {
            dd('Data gagal disimpan');
        }

    }
    // method untuk hapus data
    public function destroy($id) {

        $customer = Customer::find($id);
        $name = $customer->name;
        if($customer->delete()) {
            return redirect()->route('customer.index')->with('success', "Data Nasabah $name Berhasil dihapus");

        } else {
            dd("Data gagal dihapus");
        }
    }

}