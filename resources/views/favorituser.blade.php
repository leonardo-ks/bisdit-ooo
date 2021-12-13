@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="border rounded px-5 mx-5">
            <h3 class="mt-3 mb-3">Oleh-oleh yang telah {{ auth()->user()->name }} favoritkan</h3>
            @if (session()->has('info'))
                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                        {{ session('info') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            <div class="row row-cols-1 row-cols-md-4 g-4 mb-2">
                @foreach ($favorit as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>

                            </div>
                            <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                            <div class="card-footer bg-transparent">
                                <div class="row">
                                    <div class="col">
                                        <p class="card-text bi bi-heart-fill">
                                            {{ $d->favorit_count }}</p>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex justify-content-end" style='z-index: 2; position: relative;'>
                                            <a type="button" class="btn btn-outline-danger btn-sm"
                                                href="/favorit/hapus/{{ $d->idfavorit }}">Hapus</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex pagination justify-content-center mt-3 mb-2">
                {{ $favorit->links() }}
            </div>
        </div>
    </div>
@endsection
