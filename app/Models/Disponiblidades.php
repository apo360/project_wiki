<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Disponiblidades extends Model
{
    use HasFactory;

   protected $fillable = [
        'professor_id',
        'periodo',
        'dias_semana',
   ];
   
}

            