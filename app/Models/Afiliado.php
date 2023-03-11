<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Afiliado extends Model
{
    use HasFactory;
    protected $guarded = ['id','created_at','updated_at'];
    

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    public function tipotramite()
    {
        return $this->belongsTo(TipoTramite::class);
    }
    public function tipodocumento()
    {
        return $this->belongsTo(Tipodocumento::class);
    }

    //Relacion muchos a muchos
    public function tramiteafiliados()
    {
        return $this->belongsToMany(Tramite::class);
    }
    public function estatuses()
    {
        return $this->belongsToMany(Estatus::class);
    }

}
