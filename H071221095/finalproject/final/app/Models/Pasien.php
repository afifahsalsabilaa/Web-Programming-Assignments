<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasien';
   
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }

    use HasFactory;
}
