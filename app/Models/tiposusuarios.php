<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiposusuarios extends Model
{
    use HasFactory;
    protected $table = 'tiposusuarios';
    protected $fillable = [
        'clave',
        'nombre',
        'detalle',
        'activo'
    ];
    public function tb_usuarios(){
        return $this->belongsTo('App\Models\usuarios');
    }
}
