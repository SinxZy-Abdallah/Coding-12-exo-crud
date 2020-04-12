@extends('layout.admin')
@section('content')

<div class="container">
<form method="post" action="/servicedit/store">
    @csrf

    <div class="form-group">
        <label class="mt-5">Titre Secondaire</label>
    <input type="text" name="titre" class="form-control" id="" aria-describedby="emailHelp">
      </div><div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Description Secondaire</label>
      <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Logo</label>
      <input type="text" name='logo' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</form>
</div>
@endsection