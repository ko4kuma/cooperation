<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    // ketika nama table berbeda dengan model, harus dideklarasikan dgn $table->name
    protected $fillable = [
        'code',
        'name',
        'phone',
        'address'
    ];
}
