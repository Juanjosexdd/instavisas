<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = ['id','name','slug','last_name','identification','email','user','password','phone','phone2','observation','cita_cas','cita_embajada','abono','debe','total','tipodocumento_id','tipotramite_id','nacionalidad_id','created_at','updated_at'];


    public function getRouteKeyName()
    {
        return "slug";
    }


    //Relacion uno a muchos

    public function afiliados()
    {
        return $this->hasMany(Afiliado::class);
    }
   

    //relacion uno a uno
    public function nacionalidad()
    {
        return $this->belongsTo(Nacionalidad::class);
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

    public function tramites()
    {
        return $this->belongsToMany(Tramite::class)
                    ->withPivot('estatus_id')
                    ->withPivotValue(['estatus_id' => 1]);
    }
}
