<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estatus extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];

    //Relacion muchos a muchos
        public function afiliados()
    {
        return $this->belongsToMany(Afiliado::class);
    }

    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }
       

}
