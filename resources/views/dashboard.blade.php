@extends('layouts.app')

@section('content')

<main class="py-4">
  

  <div class="album py-4 mt-4">
    <div class="container col-md-12">
      
  <div class="py-2">
  <h4>Resep Terbaru</h4>
  </div>

<div class="row row-cols-1 row-cols-md-3 g-4">
@foreach ($posts as $post )
<div class="col">
<div class="card h-100">
  <a href="{{ route('post.show', $post->id) }}" class="text-decoration-none text-body">
      <img src="{{ url('storage/post/'.$post->image) }}" class="card-img-top">
<div class="card-body">
  <p class="mb-0 fs-6 text-secondary">
    1 Orang menyukai ini
  </p>
  <h5 class="card-title" style="color: #547794">{{ $post->title }}</h5>
  <div class="row d-flex align-items-center">
    <p>
      {{ $post->description }}
    </p>
  </div>
  <div class="mb-0">

   <button class="btn btn-secondary w-100"> Suka </button>
  </div>  
</div>
</a>
</div>
</div>
@endforeach

        
      </div>
    </div>
  </div>

</main>

@endsection