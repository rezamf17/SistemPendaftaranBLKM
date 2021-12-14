<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Formulir extends Model
{
    use HasFactory;
    protected $table = 'formulir';
    protected $guarded = [];
    // protected $fillable = [
    //     'id_user',
    //     'nama',
    //     'ttl',
    //     'alamat',
    //     'kota',
    //     'no_kk',
    //     'no_ktp',
    //     'jenis_kelamin',
    //     'pekerjaan',
    //     'no_hp',
    //     'no_rek',
    //     'bank',
    //     'peminatan',
    //     'foto_ktp'
    // ];

    public function form()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    public function provinces()
    {
         return $this->belongsTo('Laravolt\Indonesia\Models\Province', 'id_provinces',);
    }
    public function cities()
    {
         return $this->belongsTo('Laravolt\Indonesia\Models\Kabupaten', 'id_cities');
    }
    public function districts()
    {
         return $this->belongsTo('Laravolt\Indonesia\Models\Kecamatan', 'id_districts');
    }
    public function villages()
    {
         return $this->belongsTo('Laravolt\Indonesia\Models\Kelurahan', 'id_villages');
    }
    public function formulir()
    {
        return $this->belongsTo(Formulir::class);
    }
}
