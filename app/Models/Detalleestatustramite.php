<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalleestatustramite extends Model
{
    use HasFactory;
    
    protected $table = 'estatus_tramite';

    protected $guarded = ['id','created_at','updated_at'];
}
