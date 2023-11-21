@extends('layouts.app')

@section('content')
<main class="py-4 mt-4">

     <div class="container">
          <div class="col-8 py-4 mt-4 mx-auto">
          <div class="img-fluid mx-auto">
               <img src="{{ url('storage/post/'.$post->image) }}" alt="" width="500">
          </div>
          <div class="title fs-4">
          <h2>{{ $post->title }}</h2>
          <div class="fs-6 mb-0 mt-0">
               <p>Author : {{ $post->user->name }}</p>
          </div>
          <div class="fs-6">
          <p>{{ $post->description }}</p>
          </div>
          </div>
          <h5>Bahan - bahan</h5>
          <p>{!! $post->material !!}</p>
          <h5>Langkah Pembuatan</h5>
          <p>{!! $post->making !!}</p>
     </div>
</div>
</main>
@endsection