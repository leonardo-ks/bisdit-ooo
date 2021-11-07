@extends('layouts.master')
@section('content')
    <div class="p-5 bg-image rounded-3"
        style="background-image: url('https://awol.junkee.com/wp-content/uploads/2015/07/Huacachina2.jpg');height: 400px; background-repeat: no-repeat; background-size: 100%;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex h-100">
                <div class="text-white">
                    <h1 class="m-3">Oasis Oleh - Oleh</h1>
                    <h4 class="m-3" style="max-width: 50%">Oasis oleh - oleh merupakan website utama untuk
                        membantu umat manusia memenuhi kebutuhannya dalam mencari oleh - oleh khas daerah Indonesia.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container for-about">
        <div class="row mt-3">
            <h5 class="bi bi-geo-alt">{{ $address['city'] }}, {{ $address['state'] }}</h5>
        </div>
        @if (count($olehPopuler) > 0)
            <div class="row mt-3">
                <h5>Oleh - Oleh Terpopuler</h5>
                <div class="row row-cols-4 align-items-center">
                    @foreach ($olehPopuler->slice(0, 4) as $p)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src={{ $p->gambarutama }} class="card-img-top" alt={{ $p->namaoleh }}>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $p->namaoleh }}</h5>
                                    <p class="mt-2 bi bi-geo-alt">{{ $p->kota }}</p>
                                    <a href="/varianoleh/{{ $p->idoleh }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if (count($olehKolega) > 0)
            <div class="row mt-3">
                <h5>Produk yang cocok untuk kolega</h5>
                <div class="row row-cols-4 align-items-center">
                    @foreach ($olehKolega->slice(0, 4) as $kol)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src={{ $kol->gambarutama }} class="card-img-top" alt={{ $kol->namaoleh }}>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kol->namaoleh }}</h5>
                                    <p class="mt-2 bi bi-geo-alt">{{ $kol->kota }}</p>
                                    <a href="/varianoleh/{{ $kol->idoleh }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
        @if (count($olehKeluarga) > 0)
            <div class="row mt-3">
                <h5>Produk yang cocok untuk kolega</h5>
                <div class="row row-cols-4 align-items-center">
                    @foreach ($olehKeluarga->slice(0, 4) as $kel)
                        <div class="col">
                            <div class="card" style="width: 18rem;">
                                <img src={{ $kel->gambarutama }} class="card-img-top" alt={{ $kel->namaoleh }}>
                                <div class="card-body">
                                    <h5 class="card-title">{{ $kel->namaoleh }}</h5>
                                    <p class="mt-2 bi bi-geo-alt">{{ $kel->kota }}</p>
                                    <a href="/varianoleh/{{ $kel->idoleh }}" class="stretched-link"></a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>
@endsection
