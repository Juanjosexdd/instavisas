<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoTramite extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    

    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }
}
