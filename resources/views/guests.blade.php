@extends('layouts.layout')
@section('content')
<form action="/guests" method="POST" enctype="multipart/form-data" id="upload_new_form">
{{ csrf_field() }}
</br>
<h1 class="title">Bilder der Gäste</h1>

<div class="field">
  <div class="file is-primary is-medium">
    <label class="file-label">
      <input class="file-input" id="upload_new_file" type="file" name="upload_new_file">
      <span class="file-cta">
        <span class="file-label">
          Bild hochladen
        </span>
      </span>
    </label>
  </div>
</div>
@foreach ($file_paths as $image)
  <a href={{$image}} data-lightbox="guest_photos">
    <?php
      $image_thumb = $image;
      $image_thumb = str_replace('.png', '_thumb.png', $image);
      $image_thumb = str_replace('/guest', '/thumb', $image_thumb);
    ?>
    <img src={{$image_thumb}}>
  </a>
@endforeach
</form>

@endsection