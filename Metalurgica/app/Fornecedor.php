<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
      protected $fillable = ['empresa', 'cnpj'];

      public function treinamentos() {
    	return $this->hasMany('App\Treinamento');
    }
}
