<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seleksi extends Model
{
    use HasFactory;
    protected $table = 'seleksi';


    public function cities()
    {
         return $this->belongsTo('Laravolt\Indonesia\Models\Kabupaten', 'id_cities');
    }
}
