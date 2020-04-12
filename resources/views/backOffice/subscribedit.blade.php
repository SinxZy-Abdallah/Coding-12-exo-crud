@extends('layout.admin')

@section('content')

{{-- important --}}
  {{-- /subscribedit/{{$subscribes->id}}/update --}}

<h1 class="text-center py-5 text-dark font-weight-bold">Subscribe Edit</h1>
<div class="text-center">
</div>
  <div class="container font-weight-bold bg-dark text-light mt-5 text-center">
    <div class="row">
      <div class="col-1">
        <p>ID:</p>
      </div>
      <div class="col-1">
        <p>Titre:</p>
      </div>
      <div class="col-3 ml-4">
        <p>Description:</p>
      </div>
      <div class="col-3 mr-auto ml-auto">
       <p>Action:</p>
      </div>
    </div>
  </div>

  @foreach ($subscribes as $subscribe)
  <div class="container bg-dark text-light font-weight-bold mt-2 ">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$subscribe->id}}</p>
        </div>
      </div>
      <div class="col-2">
      
        <p>{{$subscribe->titre}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$subscribe->description}}</p>
      
      </div>
      <div class=" px-1 ml-auto mt-3 col-3">
       <a href="/subscribedit/{{$subscribe->id}}/edit" class="btn btn-success">Edit</a>
      </div>
    </div>
  </div>

      
  @endforeach
  
@endsection

