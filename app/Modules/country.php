<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class country extends Model
{
    //
    protected $primaryKey = 'id';
    protected $table = 'country';
    public function where(){
        return $this->belongsTo('App\Modules\where', 'id');
    }
    public function from(){
        return $this->belongsTo('App\Modules\from', 'id');
    }
}
