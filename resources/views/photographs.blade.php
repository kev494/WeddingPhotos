@extends('layouts.layout')
@section('content')
</br>
<h1 class="title">Bilder der Fotografin</h1>
@foreach ($file_paths as $image)
  <a href={{$image}} data-lightbox="guest_photos">
      <?php
      $image_thumb = $image;
      $image_thumb = str_replace('.png', '_thumb.png', $image);
      $image_thumb = str_replace('/photograph', '/thumb', $image_thumb);
    ?>
    <img src={{$image_thumb}} vspace="2">
  </a>
@endforeach

@endsection