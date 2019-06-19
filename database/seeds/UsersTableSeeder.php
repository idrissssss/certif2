<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=new User;
        
        $user->role_id = '1';             
        $user->name = 'DENIS';
        
        $user->email = 'responsable@exodata.fr'; 
        $user->password = bcrypt('password');
        $user->remember_token='root';
        $user->save();

        $user=new User;
          
        $user->role_id = '2';             
        $user->name = 'DUPOND';
       
        $user->email = 'chefequipe@exodata.fr'; 
        $user->password = bcrypt('password');
        $user->remember_token='root';
        $user->save();

       
    }
}
