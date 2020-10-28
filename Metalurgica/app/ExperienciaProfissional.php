<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExperienciaProfissional extends Model
{
     protected $fillable = ['funcionario_id', 'empresa', 'cargo_ocupado', 'ano', 'responsabilidades'];

     public function funcionario() {
     	return $this->belongsTo('App\Funcionario');
     }
}
