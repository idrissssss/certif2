<?php

use Illuminate\Database\Seeder;
use App\Produit;


class ProduitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $produit=new Produit;
        // $produit->nom = 'pommes';  
        // $produit->description = '';             
        // $produit->categorie = '';
        // $produit->prix = '';
        // $produit->marque = ''; 
        // $produit->photo = '';
        // // $produit->save();

        // $produit=new Produit;
        // $produit->nom = 'steak';  

        // // $produit>save();

        // $produit=new Produit;
        // $produit->nom = 'pommes';  
        // $produit->description = 'bon fruit';             
        // $produit->categorie = 'fruit';
        // $produit->prix = '5';
        // $produit->marque = ''; 
        // $produit->photo = '';
        // // $user->save();

        // $produit=new Produit;
        // $produit->nom = 'steak';  
        // $produit->description = 'bonne viande';             
        // $produit->categorie = 'boucherie';
        // $produit->prix = '5';
        // $produit->marque = ''; 
        // $produit->photo = '';
        // $user->save();
        DB::table('produits')->insert([
        ['nom' => 'steak', 'description' => "viande",'categorie' => 'boucherie','prix' => '5','marque' => '','photo' => ''],
        ['nom' => 'pomme', 'description' => "un bon fruit",'categorie' => 'fruits','prix' => '5','marque' => 'apple','photo' => ''],
        ]); 
    }
}
