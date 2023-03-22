<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastrofilmeModel extends Model
{
    use HasFactory;
    protected $fillable =['nome_filme', 'atores_filme', 'datalacamento_filme','sinopse_filme','capa_filme'];
}
