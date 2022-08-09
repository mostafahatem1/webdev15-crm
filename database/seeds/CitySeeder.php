<?php

use Illuminate\Database\Seeder;
use App\City;
class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::create(["name"=>"Cairo"]);
        City::create(["name"=>"Giza"]);
        City::create(["name"=>"Alex"]);
        City::create(["name"=>"Aswan"]);
        City::create(["name"=>"Luxor"]);
        City::create(["name"=>"Hurghada"]);
        City::create(["name"=>"Matrouh"]);
        City::create(["name"=>"Banha"]);
        City::create(["name"=>"monufia"]);
        City::create(["name"=>"Tanta"]);
    }
}
