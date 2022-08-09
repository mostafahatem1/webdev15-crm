<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\City;
class Customer extends Model
{
    use SoftDeletes;
    function city(){
     // $c->city(); ->SELECT * FROM cities WHERE id = $c->city_id;
       return $this->belongsTo(City::class);
    }
}
