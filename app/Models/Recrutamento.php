<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recrutamento extends Model
{
    use HasFactory;

   protected $fillable = [
        'codigo',
        'nomecompleto',
        'apelido',
        'email',
        'telemovel',
        'telemovelalt',
        'provincia_id',
        'cidade_id',
        'morada',
        'academico_id',
   ];

   /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'verificado',
    ];
}
