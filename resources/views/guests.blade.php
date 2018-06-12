@extends('layouts.layout')
@section('content')
<form action="/guests" method="POST" enctype="multipart/form-data" id="upload_new_form">
{{ csrf_field() }}
</br>
<h1 class="title">Bilder der Gäste</h1>

<div class="field is-clearfix">
  <div class="file is-primary is-medium is-pulled-right">
    <label class="file-label">
      <input class="file-input" id="upload_new_file" type="file" name="upload_new_file[]" multiple>
      <span class="file-cta">
          <span class="file-icon">
              <i class="fas fa-upload"></i>
            </span>
        <span class="file-label">
          Bild hochladen
        </span>
      </span>
    </label>
  </div>
</div>
<section
      data-featherlight-gallery
      data-featherlight-filter="a"
    >
@foreach ($file_paths as $image)

  <a href={{$image}}>
    
    <?php
      $image_thumb = $image;
      $image_thumb = str_replace('.png', '_thumb.png', $image);
      $image_thumb = str_replace('/guest', '/thumb', $image_thumb);
    ?>
    <img src={{$image_thumb}} vspace="2">
  </a>
  

@endforeach
</section>
</form>

@endsection