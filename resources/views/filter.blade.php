@extends('layouts.master')
@section('content')
<div class="container">
    <div class="border rounded px-5 mx-5">
        <div>
            @if ($kategori == 'daerah' && count($olehbydaerah->items()) > 0)
            @foreach ($olehbydaerah->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambarlokasi }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>Oleh Oleh dari {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbydaerah as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">{{ $d->namaoleh }}</h5>
                            <p class="card-text">{{ $d->namavarian }}</p>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbydaerah->links() }}
            </div>
            @endif
            @if ($kategori == 'rasa' && count($olehbyrasa->items()) > 0)
            @foreach ($olehbyrasa->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambarasa }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>Oleh Oleh dengan rasa {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbyrasa as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $d->namaoleh }}</h5>
                            <div style='z-index: 2; position: relative;'>
                                <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/{{ $d->kota }}" style='color: inherit;'>
                                    {{ $d->kota }}
                                </a>
                            </div>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbyrasa->links() }}
            </div>
            @endif
            @if ($kategori == 'bahandasar' && count($olehbybahan->items()) > 0)
            @foreach ($olehbybahan->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambarbahan }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>Oleh Oleh berbahan dasar {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbybahan as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $d->namaoleh }}</h5>
                            <div style='z-index: 2; position: relative;'>
                                <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/{{ $d->kota }}" style='color: inherit;'>
                                    {{ $d->kota }}
                                </a>
                            </div>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbybahan->links() }}
            </div>
            @endif
            @if ($kategori == 'tekstur' && count($olehbytekstur->items()) > 0)
            @foreach ($olehbytekstur->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambartekstur }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>Oleh Oleh yang memiliki tekstur {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbytekstur as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $d->namaoleh }}</h5>
                            <div style='z-index: 2; position: relative;'>
                                <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/{{ $d->kota }}" style='color: inherit;'>
                                    {{ $d->kota }}
                                </a>
                            </div>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbytekstur->links() }}
            </div>
            @endif
            @if ($kategori == 'caramasak' && count($olehbymasak->items()) > 0)
            @foreach ($olehbymasak->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambarmasak }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>Oleh Oleh dengan cara masak {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbymasak as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $d->namaoleh }}</h5>
                            <div style='z-index: 2; position: relative;'>
                                <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/{{ $d->kota }}" style='color: inherit;'>
                                    {{ $d->kota }}
                                </a>
                            </div>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbymasak->links() }}
            </div>
            @endif
            @if ($kategori == 'varian' && count($olehbyvarian->items()) > 0)
            @foreach ($olehbyvarian->slice(0, 1) as $d)
            <div class="p-5 bg-image rounded-3 mb-4 mt-4" style="background-image: url('{{ $d->gambarvarian }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
            </div>
            @endforeach
            <h3>{{ $by }}</h3>
            <p>{{ $d->deskripsivarian }}</p>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbyvarian as $d)
                <div class="col">
                    <div class="card h-100">
                        <img src="{{ $d->gambarutama }}" class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                        <div class="card-body">
                            <h5 class="card-title">
                                {{ $d->namaoleh }}</h5>
                            <div style='z-index: 2; position: relative;'>
                                <a class="card-text bi bi-geo-alt text-decoration-none" href="/filter/daerah/{{ $d->kota }}" style='color: inherit;'>
                                    {{ $d->kota }}
                                </a>
                            </div>
                        </div>
                        <a href="/varianoleh/{{ $d->idoleh }}" class="stretched-link"></a>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="d-flex pagination justify-content-center mt-3">
                {{ $olehbyvarian->links() }}
            </div>
            @endif
        </div>
    </div>
</div>
@endsection
