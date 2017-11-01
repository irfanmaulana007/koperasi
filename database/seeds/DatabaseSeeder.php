<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EntityTypeTableSeeder::class);
        $this->call(AddressTypeSeeder::class);
        $this->call(ContactTypeSeeder::class);
    }
}
