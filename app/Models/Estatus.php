<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion muchos a muchos
    public function tramites()
    {
        return $this->belongsToMany(Tramite::class);
    }

    public function tramitesafiliados()
    {
        return $this->belongsToMany(Tramiteafiliado::class);
    }
}
