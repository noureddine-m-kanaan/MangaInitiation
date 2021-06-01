<table class="table table-bordered table-striped">
    <thead>
        <th>Id</th>
        <th>Titre</th>
        <th>Prix</th>
        <th>Couverture</th>
    </thead>
   @foreach($dessinateurs as $dessinateur) 
   <tr>
        <td>{{ $dessinateur->id_dessinateur }} </td>
        <td>{{ $dessinateur->nom_dessinateur }} </td>
        <td>{{ $dessinateur->prenom_dessinateur }} </td>
    </tr>
    @endforeach
</table>