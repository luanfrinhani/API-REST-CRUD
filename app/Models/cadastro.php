<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    use HasFactory;
    protected $fillable = [
        'Nome','CPF','DataNascimento','Email','Telefone','Logadouro','Cidade','Estado'
    ];
}
