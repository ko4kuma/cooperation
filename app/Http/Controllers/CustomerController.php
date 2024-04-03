<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//use berarti mengimport

class CustomerController extends Controller
{
    public function index()
    {
        echo "Indeks halaman";
    }
    public function getName()
    {
        echo "Fajriyyah";
    }
    public function getCity($city)
    {
        echo "Kota saya di " . $city;
    }
    public function getStudent($name, $code)
    {
        echo "Nama Saya " . $name . " NRP " . $code;
    }

    //
}
