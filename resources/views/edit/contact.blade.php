@extends('layout.admin')
@section('content')

<div class="container">
<form method="post" action="/contactedit/{{$contacts->id}}/update">
    @csrf

    <div class="form-group">
        <label class="mt-5">Adress</label>
    <input type="text" value="{{$contacts->adress}}" name="adress" class="form-control" id="" aria-describedby="emailHelp">
      </div><div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Email</label>
      <input type="text" name='email' value=" {{$contacts->email}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="mt-5">Phone</label>
      <input type="text" name='phone' value=" {{$contacts->phone}} " class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="text-center">
      <button type="submit" class="btn btn-primary">Valider</button>
    </div>
    
</form>
</div>
@endsection