<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'dt_nascimento', 'estado_civil', 'nacionalidade', 'pais_onde_mora', 'estado_onde_mora', 'cidade_onde_mora', 'bairro_onde_mora', 'rua_onde_mora', 'numero_onde_mora', 'cargo_ocupado', 'cargo_desejado', 'responsabilidades', 'formacao_academica', 'certificados', 'idiomas'];
}
