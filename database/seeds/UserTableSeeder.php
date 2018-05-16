<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_comm = Role::where('name', 'comm')->first();
        $role_manager = Role::where('name', 'manager')->first();
        $role_admin = Role::where('name', 'admin')->first();

        $user = new User();
        $user->name = 'Admin';
        $user->email = 'Admin@mail.com';
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_admin);

        $user = new User();
        $user->name = 'Atn Clientes';
        $user->email = 'AtnClientes@mail.com';
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_comm);

        $user = new User();
        $user->name = 'Gerente';
        $user->email = 'Gerente@mail.com';
        $user->password = bcrypt('1234');
        $user->save();
        $user->roles()->attach($role_manager);



    }
}
