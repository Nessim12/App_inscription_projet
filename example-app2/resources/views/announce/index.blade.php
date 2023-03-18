<button type="button" class="btn btn-dark"><a href="/master/create">Ajouter</a></button>
<table class="table" border="1">
    <thead>
      <tr>
        <th>name</th>
        <th>description</th>
      </tr>

    </thead>
    <tbody>
@foreach($as as $a)
      <tr>
        <td>{{$a->name}}</td>
        <td>{{$a->description}}</td>
</tr>
@endforeach
    </tbody>
  </table>

