@extends('layouts.master')
@section('content')
    <div class="container">
        <div class="border rounded px-5 mx-5">
            <div>
                <h3 class="mt-3">Hasil pencarian {{ $param }}</h3>
                <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                    @foreach ($result as $r)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ $r->gambarutama }}"
                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                    style="object-fit: cover">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        {{ $r->namaoleh }}</h5>
                                    <div style='z-index: 2; position: relative;'>
                                        <a class="card-text bi bi-geo-alt text-decoration-none"
                                            href="/filter/daerah/{{ $r->kota }}" style='color: inherit;'>
                                            {{ $r->kota }}
                                        </a>
                                    </div>
                                </div>
                                <a href="/varianoleh/{{ $r->idoleh }}" class="stretched-link"></a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="d-flex pagination justify-content-center mt-3">
                    {{ $result->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection
