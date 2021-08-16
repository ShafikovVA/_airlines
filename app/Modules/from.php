<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class from extends Model
{
    //
    protected $table = 'from_point';
    public function flight(){
        return $this->belongsTo('App\Modules\flight', 'flight_id');
    }
    public function city() {
        return $this->belongsTo('App\Modules\city', 'city_id');
        }
    public function country() {
        return $this->belongsTo('App\Modules\country',  'country_id');
        }
    
}
