<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    use HasFactory;
    protected $table = 'usuarios';
    protected $fillable = [
        'matricula',
        'img',
        'nombre',
        'app',
        'apm',
        'fn',
        'email',
        'pass',
        'idt_usuario',
        'activo'
    ];
    public function tiposusuarios(){
        return $this->hasOne(usuarios::class);
    }
}
