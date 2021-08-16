<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    //
    protected $table = 'city';
    protected $primaryKey = "id_city";
    
    public function flight()
    {
            return $this->belongsTo('App\Modules\flight')->using('App\Modules\where', 'id_city');
    }

}
