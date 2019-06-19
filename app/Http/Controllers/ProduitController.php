<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produit;

class ProduitController extends Controller
{
    public function create(Request $request)

    { 
             
        $post = $request->post();
        $nom = $post['nom'];
        $description = $post['description'];
        $categorie = $post['categorie'];
        $prix = $post['prix'];
        $marque = $post['marque'];
        $photo = $post['photo'];
        
        $produit = new Produit;
        $produit->nom = $nom;
        $produit->description = $description;
        $produit->categorie = $categorie;
        $produit->prix = $prix;
        $produit->marque = $marque;
        $produit->photo = $photo;
        /** C'est pour ça que le seed fonctionne pas faut mettre timestamp a false */
        $produit->timestamps = false;
    	$produit->save();

    	return 'Success';
          
    }
}
