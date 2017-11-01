<?php

use Illuminate\Database\Seeder;
use App\ContactType;

class ContactTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $contact_type = new ContactType();
        $contact_type->contact_type_name = 'Order';
        $contact_type->save();

        $contact_type = new ContactType();
        $contact_type->contact_type_name = 'Penagihan';
        $contact_type->save();

        $contact_type = new ContactType();
        $contact_type->contact_type_name = 'CS';
        $contact_type->save();
    }
}
