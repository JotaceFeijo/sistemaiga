<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Realiza un inser into en la tabla Permission
        Permission::create(['name' => 'administrar']);
        $role = Role::create(['name' => 'Administrador']);
        $role->syncPermissions("administrar");
        // create user
        $user1= User::create([
            //'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'name' => 'Anthony Robert',
            'password' => Hash::make('12345678'),
            //'datebirth' => '2000-10-10',
            //'cellphone' => '999999999',
            //'sex' => 'M',
            'email' => 'admin@gmail.com'
        ]);
        //asignar rol
        $user1->assignRole('Administrador');
     /////////////////////////////////////////////////////////////////////////
    //  Permission::create(['name' => 'coordinar']);
    //  $role = Role::create(['name' => 'Coordinador']);
    //  $role->syncPermissions("coordinar");
    //  // create user
    //  $user2= User::create([
    //      //'dni' => '44444444',
    //      'firstname' => 'zevallos',
    //      'lastname' => 'Aquinos',
    //      'name' => 'juan',
    //      'password' => Hash::make('12345678'),
    //      //'datebirth' => '2000-10-10',
    //      //'cellphone' => '999999999',
    //      //'sex' => 'M',
    //      'email' => 'zeballos@gmail.com'
    //  ]);
    //  //asignar rol
    //  $user2->assignRole('Coordinador');
    //       /////////////////////////////////////////////////////////////////////////
    //       Permission::create(['name' => 'especialista_permiso']);
    //       $role = Role::create(['name' => 'Especialista']);
    //       $role->syncPermissions("especialista_permiso");
    //       // create user
    //       $user3= User::create([
    //           //'dni' => '44444444',
    //           'firstname' => 'Mendoza',
    //           'lastname' => 'Balmaceda',
    //           'name' => 'Pedro',
    //           'password' => Hash::make('12345678'),
    //           //'datebirth' => '2000-10-10',
    //           //'cellphone' => '999999999',
    //           //'sex' => 'M',
    //           'email' => 'pedro@gmail.com'
    //       ]);
    //       //asignar rol
    //       $user3->assignRole('Especialista');
    }

}
