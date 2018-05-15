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
        //Creacion de datos de Roles
        $this->call(RoleTableSeeder::class);

        //Creacion de usuarios basicos
        $this->call(UserTableSeeder::class);
    }
}
