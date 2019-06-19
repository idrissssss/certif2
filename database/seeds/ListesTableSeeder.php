<?php

use Illuminate\Database\Seeder;
use App\Liste as Liste;


class ListesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                    
        DB::table('listes')->insert([
            ['nom' => 'lundi', 'user_id' => "2"],
            ['nom' => 'mardi','user_id' => "2"]
        ]);   

    }
}
