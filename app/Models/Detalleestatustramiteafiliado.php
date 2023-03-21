<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleestatustramiteafiliado extends Model
{
    use HasFactory;

    protected $table = 'afiliado_estatus';

    protected $guarded = ['id','created_at','updated_at'];

    public function estatus20()
    {
        return $this->belongsTo(Estatus::class);
    }
}
