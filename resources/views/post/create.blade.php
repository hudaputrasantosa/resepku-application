@extends('layouts.app')

@section('content')
<div class="container">
     <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data" class="col-8 py-4 mt-4 mx-auto">
          @csrf
     <div class="py-3">
          <h2>Buat Resep..</h2>
     </div>
  <div class="form-group mb-3">
    <label for="title">Judul</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
   <div class="form-group mb-3">
     <label for="description">Deskripsi</label>
    <textarea class="form-control" name="description" id="description" rows="3"></textarea>
  </div>

   <div class="form-group mb-3">
     <label for="material">Bahan - bahan</label>
    <textarea class="form-control" name="material" id="material" rows="3"></textarea>
  </div>

    <div class="form-group mb-3">
     <label for="making">Langkah Pembuatan</label>
    <textarea class="form-control" name="making" id="making" rows="3"></textarea>
  </div>

<div class="mb-3">
  <label for="image" class="form-label">Default file input example</label>
  <input class="form-control" type="file" id="image" name="image">
</div>

  <button type="submit" class="col-12 btn btn-primary">Terbitkan Resep</button>
</form>
</div>
@endsection

@section('js')
<script>
    ClassicEditor
        .create( document.querySelector( '#material' ) )
        .catch( error => {
            console.error( error );
        } );

        ClassicEditor
        .create( document.querySelector( '#making' ) )
        .catch( error => {
            console.error( error );
        } );
</script>

@endsection