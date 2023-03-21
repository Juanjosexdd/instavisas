<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramite extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    
    public function getRouteKeyName()
    {
        return "slug";
    }
    //Relacion muchos a muchos
    public function clientes()
    {
        return $this->belongsToMany(Cliente::class);
    }
    public function afiliados()
    {
        return $this->belongsToMany(Afiliado::class);
    }
    public function estatuses()
    {
        return $this->belongsToMany(Estatus::class);
    }
    public function estatusafiliado()
    {
        return $this->belongsToMany(Estatus::class);
    }


    

}
