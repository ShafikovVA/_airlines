<?php

namespace App\Modules;

use Illuminate\Database\Eloquent\Model;

class flight extends Model
			{
  			  //
   				public function where() {
       				 return $this->belongsTo('App\Modules\where', 'where_point_id');
   			 			}
    				public function from() {
        			return $this->belongsTo('App\Modules\from', 'from_point_id');
    						}
			}