<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PontosTuristicos extends Model
{
    protected $fillable = ['nome','cidade', 'estado', 'descricao','imagem'];
}
