<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrador';
        $role->save();

        $role = new Role();
        $role->name = 'manager';
        $role->description = 'Gerente';
        $role->save();

        $role = new Role();
        $role->name = 'comm';
        $role->description = 'Atencion al Cliente';
        $role->save();
    }
}
