<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MandatorySaving extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'customer_id',
        'amount',
    ];
    //  1 nasabah / customer punya banyak simpanan / mandatory savings (hasMany)
    // 1 simpanan milik 1 nasabah (belongsTo)

    public function customer() {
        return $this->belongsTo(Customer::class, 'customer_id');
    }
}
