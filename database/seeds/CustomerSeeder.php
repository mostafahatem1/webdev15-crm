<?php

use Illuminate\Database\Seeder;
use App\Customer;
class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Customer::create(["name"=>"Mostafa", "phone"=>"011121778841",  "address"=>"Semoha",     "email"=>"mostafa@gmail.com",  "city_id"=>3]);
      Customer::create(["name"=>"Ali",     "phone"=>"01012369878",   "address"=>"El-maadi",   "email"=>"ali@gmail.com",      "city_id"=>1]);
      Customer::create(["name"=>"Hany",    "phone"=>"01112369879",   "address"=>"El-Dokki",   "email"=>"hany@gmail.com",     "city_id"=>1]);
      Customer::create(["name"=>"Shady",   "phone"=>"01512369870",   "address"=>"Nasr City",  "email"=>"shady@gmail.com",    "city_id"=>2]);
      Customer::create(["name"=>"Wael",    "phone"=>"01212369874",   "address"=>"Miami",      "email"=>"wael@gmail.com",     "city_id"=>1]);
      Customer::create(["name"=>"Amged",   "phone"=>"01012311875",   "address"=>"Abbasia",    "email"=>"amged@gmail.com",    "city_id"=>3]);
      Customer::create(["name"=>"Ziad",    "phone"=>"01212361781",   "address"=>"Mohandseen", "email"=>"ziad@gmail.com",     "city_id"=>2]);
      Customer::create(["name"=>"Nader",   "phone"=>"01112369877",   "address"=>"El-Dokki",   "email"=>"nader@gmail.com",    "city_id"=>1]);
      Customer::create(["name"=>"Ahmed",   "phone"=>"01412369871",   "address"=>"El-Haram",   "email"=>"ahmed@gmail.com",    "city_id"=>2]);
      Customer::create(["name"=>"Yasser",  "phone"=>"01012369878",   "address"=>"ramses",     "email"=>"yasser@gmail.com",   "city_id"=>1]);
      
    }
}
