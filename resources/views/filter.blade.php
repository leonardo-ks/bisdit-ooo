@extends('layouts.master')
@section('content')

    <div class="container">
        @if ($kategori = 'daerah' && count($olehbydaerah->items()) > 0)
            <h3>Oleh Oleh dari {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbydaerah as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
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
        @if ($kategori = 'rasa' && count($olehbyrasa->items()) > 0)
            <h3>Oleh Oleh dengan rasa {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbyrasa as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>
                                <p class="card-text">{{ $d->kota }}</p>
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
        @if ($kategori = 'bahandasar' && count($olehbybahan->items()) > 0)
            <h3>Oleh Oleh berbahan dasar {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbybahan as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>
                                <p class="card-text">{{ $d->kota }}</p>
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
        @if ($kategori = 'tekstur' && count($olehbytekstur->items()) > 0)
            <h3>Oleh Oleh yang memiliki tekstur {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbytekstur as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>
                                <p class="card-text">{{ $d->kota }}</p>
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
        @if ($kategori = 'caramasak' && count($olehbymasak->items()) > 0)
            <h3>Oleh Oleh dengan cara masak {{ $by }}</h3>
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbymasak as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>
                                <p class="card-text">{{ $d->kota }}</p>
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
        @if ($kategori = 'varian' && count($olehbyvarian->items()) > 0)
            <h3>{{ $by }}</h3>
            @foreach ($olehbyvarian->slice(0, 1) as $d)
                <p>{{ $d->deskripsivarian }}</p>
            @endforeach
            <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                @foreach ($olehbyvarian as $d)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ $d->gambarutama }}"
                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                style="object-fit: cover">
                            <div class="card-body">
                                <h5 class="card-title">{{ $d->namaoleh }}</h5>
                                <p class="card-text">{{ $d->kota }}</p>
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


@endsection
