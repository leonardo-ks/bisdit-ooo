@extends('layouts.master')
@section('content')

    <div class="container mb-3">
        <div class="card px-5 mx-5">
            <!-- Card stats -->
            @foreach ($varianoleh as $v)

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

                    <div class="row mb-2">
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">{{ $v->namaoleh }}</h3>
                                    <p class="fs-5 fw-light fst-italic lh-1">({{ $v->namalain }}) </p>
                                </div>
                                <div class="col">
                                    <img src="https://cdn.discordapp.com/attachments/906163180328325130/906801367820165140/logohalal.png"
                                        style="width:64px;height:auto;">
                                </div>

                            </div>

                        </div>
                        <div class="col d-flex justify-content-end">
                            <div class="align-items-center">
                                <button type="button" class="btn btn-light btn-lg">64 K <i class="bi bi-heart"></i></button>
                            </div>
                        </div>
                    </div>

                    @php
                    $deskripsi = preg_split('/---/', $v->deskripsioleh);
                    @endphp

                    @foreach ($deskripsi as $desk)
                    <p class="card-text">
                    {{$desk}}
                    </p>
                    @endforeach
                </div>

                <div class="container mb-3">

                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Detail</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#standard" type="button" role="tab" aria-controls="standard" aria-selected="false">Standar Oleh-oleh</button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button class="nav-link" id="trivia-tab" data-bs-toggle="tab" data-bs-target="#trivia" type="button" role="tab" aria-controls="trivia" aria-selected="false">Trivia</button>
                        </li>
                      </ul>
                      <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">...</div>
                        <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">...</div>
                        <div class="tab-pane fade" id="trivia" role="tabpanel" aria-labelledby="trivia-tab">...</div>
                      </div>

                </div>


        </div>





    </div>
    @endforeach






@endsection
