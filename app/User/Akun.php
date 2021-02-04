<?php

namespace App\User;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    protected $table = 'akuns';
    protected $fillable = ['id_akun', 'identitas', 'password',  'categori'];
    protected $primaryKey = 'id_akun';
    protected $guard = [];

    public function Mahasiswa()
    {
        return $this->hasOne('App\User\Mahasiswa', 'nim');
    }

}
