<?php

use Illuminate\Database\Seeder;
use App\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $role=new Role;
        // $role->nom = 'Responsable';
        // $role->description = 'Directeur';
        // // $role->save();

        // $role=new Role;
        // $role->nom = 'Team leader';
        // $role->description = 'Chef équipe';
        // // $role->save();

        // $role=new Role;
        // $role->nom = 'Employé(e)';
        // $role->description = 'Employé';
        // // $role->save();

        DB::table('roles')->insert([
            ['nom' => 'admin', 'description' => "admin"],
            ['nom' => 'utilisateur', 'description' => "utilisateur"],
            ]);
    }
}
