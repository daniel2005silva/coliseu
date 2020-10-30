<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Funcionario_treinamento extends Model
{
     protected $fillable = ['funcionario_id', 'treinamento_id'];

     public function treinamento() {
    	return $this->belongsTo('App\Treinamento');
    }
}
