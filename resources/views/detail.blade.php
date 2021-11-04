@extends('layouts.master')
@section('content')

@foreach ($varianoleh as $v)
@php
$photos = preg_split("/---/", $v->gambaroleh);
@endphp
@endforeach
<div id="demo" class="carousel slide" data-bs-ride="carousel">

    <div class="carousel-indicators">
     @foreach( $photos as $photo )
        <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide "></button>
     @endforeach
    </div>

    <div class="carousel-inner">
      @foreach( $photos as $photo )
         <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
             <img class="d-block w-100" src="{{$photo}}">
         </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
  </div>
</div>



@endsection
