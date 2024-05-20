<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donor extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country', 'age'];

    public function scholarshipReceivers()
    {
        return $this->hasMany(ScholershipReciever::class);
        
    }
}
