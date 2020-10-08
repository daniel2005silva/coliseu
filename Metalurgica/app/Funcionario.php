<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'dt_nascimento', 'estado_civil', 'pais', 'estado', 'cidade', 'bairro', 'rua', 'numero', 'cargo_ocupado', 'cargo_desejado', 'responsabilidades', 'formacao_academica', 'certificados', 'idiomas'];
}
