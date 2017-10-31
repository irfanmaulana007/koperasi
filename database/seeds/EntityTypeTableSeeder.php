<?php

use Illuminate\Database\Seeder;
use App\EntityType;

class EntityTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new EntityType();
        $user->entity_type_name = 'User';
        $user->save();
        
        $user = new EntityType();
        $user->entity_type_name = 'Admin';
        $user->save();
        
        $user = new EntityType();
        $user->entity_type_name = 'Super Admin';
        $user->save();
        
        $user = new EntityType();
        $user->entity_type_name = 'Staff Operational';
        $user->save();
        
        $user = new EntityType();
        $user->entity_type_name = 'Staff Finance';
        $user->save();
    }
}
