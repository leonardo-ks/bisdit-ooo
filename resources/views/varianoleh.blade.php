@extends('layouts.master')
@section('content')

        <div class="container mb-3">
            <div class="card px-5 mx-5">
            <!-- Card stats -->
            @foreach ($varianoleh as $v)

                {{ $v->deskripsimitra }}

                    @php
                        $photos = preg_split('/---/', $v->gambaroleh);
                    @endphp

                    <div id="demo" class="carousel slide mt-4" data-bs-ride="carousel">

                        <div class="carousel-indicators">
                            @foreach ($photos as $photo)
                                <button type="button" data-bs-target="#demo" data-bs-slide-to="{{ $loop->index }}"
                                    class="{{ $loop->first ? 'active' : '' }}"
                                    aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide "></button>
                            @endforeach
                        </div>

                        <div class="carousel-inner">
                            @foreach ($photos as $photo)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img class="d-block ratio ratio-16x9" src="{{ $photo }}" style="object-fit: cover;">
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

                <div class="card-body">
                    <h3 class="card-title">{{ $v->namaoleh }}</h3>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>

            @endforeach

        </div>






@endsection
