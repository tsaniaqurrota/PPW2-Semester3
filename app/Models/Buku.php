<?php

namespace App\Models;
use Carbon\Carbon; // Import kelas Carbon


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    protected $table = 'buku';
    protected $guarded = [];
    protected $dates = ['tgl_terbit'];

    // public function getTglTerbitAttribute($value)
    // {
    //     return Carbon::parse($value)->format('d/m/Y');
    // }


}

