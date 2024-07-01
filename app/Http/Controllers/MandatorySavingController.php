<?php

namespace App\Http\Controllers;

use App\Models\MandatorySaving;
use App\Http\Requests\StoreMandatorySavingRequest;
use App\Http\Requests\UpdateMandatorySavingRequest;
use Illuminate\Http\Request;
use App\Models\Customer;


class MandatorySavingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mandatorySavings = MandatorySaving::orderBy('id', 'DESC')->get();
        return view('mandatory_savings.index', compact('mandatorySavings'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $customers = Customer::orderBy('id', 'DESC')->get();
        $customers = Customer::all();
        return view('mandatory_savings.create', compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMandatorySavingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'customer_id' => 'required',
            'amount' => 'required|numeric',
        ]);

        // mengakses properti
        $mandatorySaving = new MandatorySaving();
        $mandatorySaving->date = date('Y-m-d');
        $mandatorySaving->customer_id = $request->customer_id;
        $mandatorySaving->amount = $request->amount;

        // insert ke database
        // insert into customers values ('name', 'address')
        // true/false
        // return true
        if($mandatorySaving->save()) {
            // return redirect()->route('customer.show', ['parameterKey' => 'value']);
            return redirect()->route('mandatory-saving.index')->with('success', 'Data Transaksi Berhasil Ditambah');

        } else {
            dd('Data gagal disimpan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function show(MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function edit(MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMandatorySavingRequest  $request
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMandatorySavingRequest $request, MandatorySaving $mandatorySaving)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MandatorySaving  $mandatorySaving
     * @return \Illuminate\Http\Response
     */
    public function destroy(MandatorySaving $mandatorySaving)
    {
        //
    }
}
