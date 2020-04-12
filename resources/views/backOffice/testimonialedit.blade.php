@extends('layout.admin')

@section('content')

{{-- important --}}
  {{-- /testimonialedit/{{$testimonials->id}}/update --}}

<h1 class="text-center py-5 text-dark font-weight-bold">Testimonial Edit</h1>
<div class="text-center">
<a href="/testimonialedit/create" class="btn font-weight-bold btn-warning">Create</a>
</div>
  <div class="container font-weight-bold bg-dark text-light mt-5 text-center">
    <div class="row">
      <div class="col-1">
        <p>ID:</p>
      </div>
      <div class="col-1">
        <p>Titre:</p>
      </div>
      <div class="col-3">
        <p>Description:</p>
      </div>
      <div class="col-3">
       <p>Action:</p>
      </div>
    </div>
  </div>

  @foreach ($testimonials as $testimonial)
  <div class="container bg-dark text-light font-weight-bold mt-2">
    <div class="row">
      <div class="col-1">
        <div class="text-center">
        <p>{{$testimonial->id}}</p>
        </div>
      </div>
      <div class="col-2">
      
        <p>{{$testimonial->img_profil}}</p>
      
      </div>
      <div class="col-3 ">
      
        <p>{{$testimonial->commentaire}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$testimonial->name}}</p>
      
      </div>
      <div class="col-3">
      
        <p>{{$testimonial->description}}</p>
      
      </div>
      <div class=" px-1 col-3">
       <a href="/testimonialedit/{{$testimonial->id}}/edit" class="btn btn-success">Edit</a>
      </div>
      <a href="/testimonialedit/{{$testimonial->id}}/destroy" class="btn btn-danger">Delete</a>
      </div>
    </div>
  </div>

      
  @endforeach
@endsection

