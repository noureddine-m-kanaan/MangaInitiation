@extends('layouts.layout')
@section('titrePage')
    Liste des dessinateurs
@endsection

@section('titreItem')
    <h1> Tous les dessinateurs : </h1>
@endsection

@section('contenu')

    <table class="table table-bordered table-striped">
        <thead>
            <th>Id</th>
            <th>Nom</th>
            <th>Prenom</th>
        </thead>
    @foreach($dessinateurs as $dessinateur) 
    <tr>
            <td class="table-primary">{{ $dessinateur->id_dessinateur }} </td>
            <td>{{ $dessinateur->nom_dessinateur }} </td>
            <td class="table-primary">{{ $dessinateur->prenom_dessinateur }} </td>
        </tr>
        @endforeach
    </table>
@endsection