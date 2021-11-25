<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Kuesioner extends Model
{
    use HasFactory;
    protected $table = 'kuesioner';

    public function a()
    {
        $a = Kuesioner::select('soal_1')->where('soal_1','a')->count();
    }
    public function nama()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
