@extends('layouts.layout')
@section('content')
<p> photograph </p>
<a href="http://127.0.0.1:8000/storage/photograph/testphoto.jpeg" data-lightbox="testphoto" data-title="My caption">
<img src="http://127.0.0.1:8000/storage/photograph/testphoto.jpeg">
</a>

<figure class="image is-128x128">
  <img src="{{storage_path('app/public/testphoto.jpeg')}}">
</figure>
@endsection