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
        $entity_type = new EntityType();
        $entity_type->entity_type_name = 'User';
        $entity_type->save();
        
        $entity_type = new EntityType();
        $entity_type->entity_type_name = 'Admin';
        $entity_type->save();
        
        $entity_type = new EntityType();
        $entity_type->entity_type_name = 'Super Admin';
        $entity_type->save();
        
        $entity_type = new EntityType();
        $entity_type->entity_type_name = 'Staff Operational';
        $entity_type->save();
        
        $entity_type = new EntityType();
        $entity_type->entity_type_name = 'Staff Finance';
        $entity_type->save();
    }
}
