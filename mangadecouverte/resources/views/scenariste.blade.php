@extends('layouts.layout')
@section('titrePage')
    Liste des dessinateurs
@endsection

@section('titreItem')
    <h1> Tous les scenaristes : </h1>
@endsection

@section('contenu')

    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </thead>
    @foreach($scenaristes as $scenariste) 
    <tr>
            <td class="table-primary">{{ $scenariste->id_scenariste }} </td>
            <td>{{ $scenariste->nom_scenariste }} </td>
            <td class="table-primary">{{ $scenariste->prenom_scenariste }} </td>
        </tr>
        @endforeach
    </table>
@endsection