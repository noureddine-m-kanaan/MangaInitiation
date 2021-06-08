@extends('layouts.layout')
@section('titrePage')
    Liste des pages
@endsection

@section('titreItem')
    <h1> Tous les mangas : </h1>
@endsection

@section('contenu')

    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Titre</th>
            <th>Prix</th>
            <th>Genre</th>
            <th>Nom Dessinateur</th>
            <th>Prenom Dessinateur</th>
        </thead>
        @foreach($mangas as $manga) 
        <tr>
            <td class="table-primary">{{ $manga->id_manga }} </td>
            <td >{{ $manga->titre }} </td>
            <td class="table-primary">{{ $manga->prix }} </td>
            <td>{{ $manga->lib_genre }} </td>
            <td class="table-primary"> {{ $manga->prenom_dessinateur }} </td>
            <td>{{ $manga->nom_dessinateur }} </td>        
        </tr>
        @endforeach
    </table>
@endsection