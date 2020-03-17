<?php

namespace FederalSt;

use Illuminate\Database\Eloquent\Model;
use FederalSt\User;

class Veiculo extends Model {

    protected $fillable = [
        'placa',
        'renavam',
        'modelo',
        'marca',
        'ano',
        'user_id',
    ];
    
    public function user() {
        //belongsTo pertence a um ..
        return $this->belongsTo(User::class);
    }

}
