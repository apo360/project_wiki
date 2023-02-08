<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    use HasFactory;

   protected $fillable = [
        'formacao_academica',
        'descricao',
        'reputacao',
        'fk_grau_academico',
        'isonline',
        'curriculum',
   ];
}
