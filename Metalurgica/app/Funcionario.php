<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\DB;

class Funcionario extends Model
{
    protected $fillable = ['nome', 'sobrenome', 'dt_nascimento', 'estado_civil', 'nacionalidade', 'pais_onde_mora', 'estado_onde_mora', 'cidade_onde_mora', 'bairro_onde_mora', 'rua_onde_mora', 'numero_onde_mora', 'cargo_ocupado', 'cargo_desejado', 'responsabilidades', 'formacao_academica', 'certificados', 'idiomas'];

    public function experiencias() {
    	return $this->hasMany('App\ExperienciaProfissional');
    }
    /* NÃO USADA, AO INVÉS DELA USADA NO CONTROLLER BUSCA MANUAL NO SQL
    public function treinamentos() {
    	return $this->belongsToMany('App\Treinamento');
    }

   */
    
}
