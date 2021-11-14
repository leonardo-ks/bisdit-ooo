@extends('layouts.master')
@section('content')

    <div class="container">
        <h3>Oleh Oleh dari {{ $kota }}</h3>
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
    </div>


@endsection
