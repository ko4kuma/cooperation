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

    //  1 nasabah / customer punya banyak simpanan / mandatory savings (hasMany)
    // 1 simpanan milik 1 nasabah (belongsTo)

    public function mandatorySavings() {
        return $this->hasMany(MandatorySaving::class, 'customer_id');
    
}
}