<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    // protected $guarded = [];
    protected $fillable = [
        'id_user',
        'nama',
        'ttl',
        'alamat',
        'kota',
        'no_kk',
        'no_ktp',
        'jenis_kelamin',
        'pekerjaan',
        'no_hp',
        'no_rek',
        'bank',
        'peminatan'
    ];

    public function form()
    {
        return $this->belongsTo('App\Models\Formulir', 'id_user');
    }
}
