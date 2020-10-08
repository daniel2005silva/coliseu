<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treinamento extends Model
{
    protected $fillable = ['nome', 'fornecedor', 'conteudo', 'inicio', 'fim', 'tipo'];
}
