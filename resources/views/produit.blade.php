@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                <form action="/produit/create" method="POST">
        @csrf
                <div class="form-group">
                <label for="nom">Nom des produits :</label>
                <input type="text" name="nom" placeholder="Entrer un nom de produit">
            </div>
            @if ($errors->has('nom'))
                <span class="help-block">
                    <strong class="text-danger"> {{ $errors->first('nom') }}</strong>
                </span>
            @endif

            <!-- <div class="form-group">
                <label for="description">Description :</label>
                <input type="text" name="description"  placeholder="Entrer une description">
            </div>

            @if ($errors->has('description'))
                <span class="help-block">
                    <strong class="text-danger">{{ $errors->first('description') }}</strong>
                </span>
            @endif -->

            <button type="submit" class="btn btn-primary">Ajouter</button>
        </form> 
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                </div>
            </div>
        </div>
    </div>

{{-- copy colle table --}}
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Handle</th>
        <th scope="col">Editer</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($produits as $produit)
      <tr>
        <th scope="row">1</th>
        <td>{{ $produit->nom }}</td>
        <td>@mdo</td>
        <td><button type="button" class="btn btn-default">Editer</button></td>
        <td><button type="button" class="btn btn-default">Supprimer</button></td>
      </tr>
      @endforeach;
    </tbody>
  </table>

</div>
@endsection
