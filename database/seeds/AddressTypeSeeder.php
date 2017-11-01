<?php

use Illuminate\Database\Seeder;
use App\AddressType;

class AddressTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $address_type = new AddressType();
        $address_type->address_type_name = 'Kantor Pusat';
        $address_type->save();

        $address_type = new AddressType();
        $address_type->address_type_name = 'Kantor Cabang';
        $address_type->save();
    }
}
