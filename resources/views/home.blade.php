@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">

                <form action="/liste/create" method="POST">
        @csrf
                <div class="form-group">
                <label for="nom">Nom de la liste :</label>
                <input type="text" name="nom" placeholder="Entrer un nom de liste">
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
        <th scope="col">Liste</th>
        <th scope="col">Editer</th>
        <th scope="col">Supprimer</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($listes as $liste)
      <tr>
        <th scope="row">1</th>
        <td>{{ $liste->nom }}</td>
        <td><a href="" class="btn btn-success">Editer</a></td>
        <td><a href="/liste/delete/{{ $liste->id }}" class="btn btn-danger">Supprimer</a></td>
      </tr>
      @endforeach;
    </tbody>
  </table>

</div>
@endsection
