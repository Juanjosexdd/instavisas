<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tramiteafiliado extends Model
{
    
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    
    public function getRouteKeyName()
    {
        return "slug";
    }

    public function afiliados()
    {
        return $this->belongsToMany(Afiliado::class);
    }

    public function estatus()
    {
        return $this->belongsToMany(Estatus::class);
    }

}
