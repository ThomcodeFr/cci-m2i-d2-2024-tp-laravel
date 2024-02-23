@extends('layouts.app')

@section('title', 'Adhésion associé')

@section('header')
    <h1>Adhésion associé</h1>
@endsection

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@section('content')
      <form action="/associates" method="POST">
        @csrf
        <label for="nom">Nom:</label><br>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}"><br>

        <label for="prenom">Prénom:</label><br>
        <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}"><br>

        <label for="phone">Téléphone:</label><br>
        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}"><br>

        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="{{ old('email') }}"><br>
        <br>

        <button type="submit">Ajouter l'associé</button>
    </form>
@endsection
