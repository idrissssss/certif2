<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Liste;

class ListeController extends Controller
{

    public function __construct(){

        $this->liste = new Liste;
        

    }

    public function create(Request $request)

    { 
        $user_id = Auth::id();

        $post = $request->post();
        $nom = $post['nom'];

        
        $this->liste->nom = $nom;
        /** C'est pour ça que le seed fonctionne pas faut mettre timestamp a false */
        $this->liste->timestamps = false;
        $this->liste->user_id = $user_id;
    	$this->liste->save();

    	return redirect('/');
          
    }

    public function edit(Request $request)

    {

        Liste::where('id', $id)->update(['nom' => '']);

        return redirect('/');

    }

    public function delete(Request $request, $id) 
    {
        
        Liste::where('id', $id)->delete();

        return redirect('/');
    }
}
