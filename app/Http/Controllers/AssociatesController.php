<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AssociatesController extends Controller
{
    public function index()
    {
      return view("associates.index");
    }

    public function create()
    {
      return view("associates.create");
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'prenom' => 'required|string|max:255',
            'nom'=> 'required|string|max:255',
            'phone'=> 'required|int|max:10',
            'email' => 'required|email|unique:associates|max:255',
        ]);

        // Création d'un nouvel associé
        $associate = new Associate();
        $associate->name = $validatedData['name'];
        $associate->phone = $validatedData['phone'];
        $associate->email = $validatedData['email'];
        $associate->save();
        return redirect('/associates')->with('success', 'Ajout du nouvel associé !');
    }

  public function delete()
  {
    //
  }
}
