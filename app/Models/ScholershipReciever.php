<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScholershipReciever extends Model
{
    use HasFactory;

    protected $fillable = [
        'reciever_name',
        'donor_name',
        'monthly_payment',
        'still_recieving',
        'donor_id'
    ];

    public function donor()
    {
        return $this->belongsTo(Donor::class);
    }
}
