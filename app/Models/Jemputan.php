<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jemputan extends Model
{
    protected $table = 'jemputan';
    public $timestamps = false;

    protected $fillable = ['id_user', 'id_driver', 'id_setor', 'alamat_jemput', 'status', 'catatan'];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
