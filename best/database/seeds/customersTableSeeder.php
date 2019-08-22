<?php

use Illuminate\Database\Seeder;
use App\Customer;
// use App\Company;

class customersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Customer::class)->create();
    }
}
