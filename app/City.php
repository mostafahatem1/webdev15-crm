<?php

namespace App;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    // $city->customer(); ->SELECT * FROM customers WHERE City_id = $city-> id;
    function Customers(){
        return $this->hasMany(Customer::class);

    }
}
