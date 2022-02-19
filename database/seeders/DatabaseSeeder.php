<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(10)->create();
        Customer::create(array('name'=>'Juan Pablo Escobar',
            'address'=>'Avenida Principal calle hacia el exito No 3',
            'phone_number'=>'502 55555555'));

        $customer = new Customer();
        $customer->name='Jorge Morales';
        $customer->address='Avenida las americas';
        $customer->phone_number='502 12345678';
        $customer->save();

        $this->call(CustomerSeeder::class);

    }
}
