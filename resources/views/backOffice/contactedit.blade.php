@extends('layout.admin')

@section('content')

{{-- important --}}
  {{-- /contactedit/{{$contacts->id}}/update --}}

<h1 class="text-center py-5 text-dark font-weight-bold">Contact Edit</h1>
<div class="text-center">
</div>
  <div class="container font-weight-bold bg-dark text-light mt-5 text-center">
    <div class="row">
      <div class="col-1">
        <p>ID:</p>
      </div>
      <div class="col-1">
        <p>Adress:</p>
      </div>
      <div class="col-3">
        <p>Email:</p>
      </div>
      <div class="col-3">
       <p>Phone:</p>
      </div>
      <div class="col-3">
       <p>Action:</p>
      </div>
    </div>
  </div>

  @foreach ($contacts as $contact)
  <div class="container bg-dark text-light font-weight-bold mt-2 ">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$contact->id}}</p>
        </div>
      </div>
      <div class="col-2">
      
        <p>{{$contact->adress}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$contact->email}}</p>
      
      </div>
      <div class="col-3 ">
      
        <p>{{$contact->phone}}</p>
      
      </div>
      <div class=" px-1 col-3">
       <a href="/contactedit/{{$contact->id}}/edit" class="btn btn-success">Edit</a>
      </div>
    </div>
  </div>

      
  @endforeach
  
@endsection

