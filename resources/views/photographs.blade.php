@extends('layouts.layout')
@section('content')
</br>
<h1 class="title">Bilder der Fotografin</h1>
@foreach ($file_paths as $image)
  <a href={{$image}} data-lightbox="guest_photos">
  <img src={{$image}}>
  </a>
@endforeach

@endsection