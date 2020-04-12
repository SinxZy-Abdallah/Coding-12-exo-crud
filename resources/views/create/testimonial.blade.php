@extends('layout.admin')
@section('content')

<div class="container">
<form method="post" action="/testimonialedit/store">
    @csrf

    <div class="form-group">
        <label class="mt-5">Image de profil</label>
    <input type="text" name="img_profil" class="form-control" id="" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Name</label>
      <input type="text" name='name' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Description</label>
      <input type="text" name='description' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Commentaire</label>
      <input type="text" name='commentaire' class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</form>
</div>
@endsection