@extends('layout.admin')
@section('content')

<div class="container">
<form method="post" action="/teamedit/{{$teams->id}}/update">
    @csrf

    <div class="form-group">
        <label class="mt-5">Name</label>
    <input type="text" value="{{$teams->name}}" name="name" class="form-control" id="" aria-describedby="emailHelp">
      </div><div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Description</label>
      <input type="text" name='description' value=" {{$teams->description}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Image team</label>
      <input type="text" name='img_team' value=" {{$teams->img_team}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</form>
</div>
@endsection