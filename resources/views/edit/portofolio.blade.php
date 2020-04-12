@extends('layout.admin')
@section('content')

<div class="container">
<form method="post" action="/portofolioedit/{{$portofolios->id}}/update">
    @csrf

    <div class="form-group">
        <label class="mt-5">Titre </label>
    <input type="text" value="{{$portofolios->titre}}" name="titre" class="form-control" id="" aria-describedby="emailHelp">
      </div>
      <!-- <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Description </label>
      <input type="text" name='description' value=" {{$portofolios -> description}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div> -->
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Img Porto</label>
      <input type="text" name='img_porto' value=" {{$portofolios->img_porto}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Description Secondaire</label>
      <input type="text" name='description2' value=" {{$portofolios -> description2}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</form>
</div>
@endsection