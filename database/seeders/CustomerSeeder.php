<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Customer::create(array('name'=>'Juan Pablo Escobar',
            'address'=>'Avenida Principal calle hacia el exito No 3',
            'phone'=>'502 55555555'));

        $customer = new Customer();
        $customer->name='Jorge Morales';
        $customer->address='Avenida las americas';
        $customer->phone='502 12345678';
        $customer->save();*/
        Customer::factory(10)->create();
    }
}
