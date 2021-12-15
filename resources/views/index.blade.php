@extends('layouts.master')
@section('content')

    <div class="p-5 bg-image rounded-3 mb-4"
        style="background-image: url('https://awol.junkee.com/wp-content/uploads/2015/07/Huacachina2.jpg');height: 400px; background-repeat: no-repeat; background-size: 100%;">
        <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
            <div class="d-flex h-100">
                <div class="text-white">
                    <h1 class="m-3">Oasis Oleh - Oleh</h1>
                    <h4 class="m-3" style="max-width: 60%">Oasis oleh - oleh merupakan website utama untuk
                        membantu umat manusia memenuhi kebutuhannya dalam mencari oleh - oleh khas daerah Indonesia.</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-4">
        @auth
        @foreach ($pernahwisata as $pw)
        <h5>Hai {{$pw->name}}, kamu sekarang berada di {{ $kota . ', ' . $provinsi }}</h5>
        @endforeach
        @endauth
        @guest
        <h5>Lokasi Sekarang: {{ $kota . ', ' . $provinsi }}</h5>
        @endguest

    </div>
    @if (count($olehPopuler) > 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <div class="row">
                            <h5>Oleh - oleh terpopuler di sekitarmu
                            </h5>
                        </div>
                    </div>
                    <div class="col-4 text-end">
                        <a class="btn btn-secondary mb-3 mr-1 btn-sm" data-bs-target="#olehPopuler" role="button"
                            data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#olehPopuler" role="button"
                            data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="olehPopuler" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($olehPopuler->slice(0, 4) as $rek)
                                            <div class="col-md-3 mb-3">
                                                <div class="card h-100">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src={{ $rek->gambarutama }}>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                        <div style='z-index: 2; position: relative;'>
                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                style='color: inherit;'>
                                                                {{ $rek->kota }}
                                                            </a>
                                                        </div>
                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                            class="stretched-link"></a>
                                                    </div>
                                                    <div class="card-footer bg-transparent">
                                                        <p class="card-text bi bi-heart-fill">
                                                            {{ $rek->favorit_count }}
                                                            Orang Menyukai ini</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @if (count($olehPopuler) > 4)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehPopuler->slice(4, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $rek->namaoleh }}
                                                            </h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                @if (count($olehPopuler) > 8)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehPopuler->slice(8, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                {{ $rek->namaoleh }}</h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (count($olehKolega) > 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h5>Rekomendasi oleh - oleh yang cocok untuk perseorangan </h5>
                    </div>
                    <div class="col-4 text-end">

                        <a class="btn btn-secondary mb-3 mr-1 btn-sm" data-bs-target="#olehKolega" role="button"
                            data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#olehKolega" role="button"
                            data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="olehKolega" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($olehKolega->slice(0, 4) as $rek)
                                            <div class="col-md-3 mb-3">
                                                <div class="card h-100">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src={{ $rek->gambarutama }}>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                        <div style='z-index: 2; position: relative;'>
                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                style='color: inherit;'>
                                                                {{ $rek->kota }}
                                                            </a>
                                                        </div>
                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                            class="stretched-link"></a>
                                                    </div>
                                                    <div class="card-footer bg-transparent">
                                                        <p class="card-text bi bi-heart-fill">
                                                            {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @if (count($olehKolega) > 4)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehKolega->slice(4, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $rek->namaoleh }}
                                                            </h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                @if (count($olehKolega) > 8)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehKolega->slice(8, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                {{ $rek->namaoleh }}</h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (count($olehKeluarga) > 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h5>Rekomendasi oleh - oleh yang cocok untuk group </h5>
                    </div>
                    <div class="col-4 text-end">

                        <a class="btn btn-secondary mb-3 mr-1 btn-sm" data-bs-target="#olehKeluarga" role="button"
                            data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#olehKeluarga" role="button"
                            data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="olehKeluarga" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($olehKeluarga->slice(0, 4) as $rek)
                                            <div class="col-md-3 mb-3">
                                                <div class="card h-100">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src={{ $rek->gambarutama }}>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                        <div style='z-index: 2; position: relative;'>
                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                style='color: inherit;'>
                                                                {{ $rek->kota }}
                                                            </a>
                                                        </div>
                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                            class="stretched-link"></a>
                                                    </div>
                                                    <div class="card-footer bg-transparent">
                                                        <p class="card-text bi bi-heart-fill">
                                                            {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @if (count($olehKeluarga) > 4)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehKeluarga->slice(4, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $rek->namaoleh }}
                                                            </h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                @if (count($olehKeluarga) > 8)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($olehKeluarga->slice(8, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                {{ $rek->namaoleh }}</h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text bi bi-heart-fill">
                                                                {{ $rek->favorit_count }} Orang Menyukai ini</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @if (count($harga) > 0)
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h5>Rekomendasi oleh - oleh dibawah Rp.40000 </h5>
                    </div>
                    <div class="col-4 text-end">
                        <a class="btn btn-secondary mb-3 mr-1 btn-sm" data-bs-target="#olehHarga" role="button"
                            data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                        </a>
                        <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#olehHarga" role="button"
                            data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                    <div class="col-12">
                        <div id="olehHarga" class="carousel slide" data-ride="carousel">
                            <div class="carousel">
                                <div class="carousel-item active">
                                    <div class="row">
                                        @foreach ($harga->slice(0, 4) as $rek)
                                            <div class="col-md-3 mb-3">
                                                <div class="card h-100">
                                                    <img class="img-fluid" alt="100%x280"
                                                        src={{ $rek->gambarutama }}>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                        <div style='z-index: 2; position: relative;'>
                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                style='color: inherit;'>
                                                                {{ $rek->kota }}
                                                            </a>
                                                        </div>
                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                            class="stretched-link"></a>
                                                    </div>
                                                    <div class="card-footer bg-transparent">
                                                        <p class="card-text">Mulai dari Rp.{{ $rek->hargamin }}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                                @if (count($harga) > 4)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($harga->slice(4, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">{{ $rek->namaoleh }}
                                                            </h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text">Mulai dari
                                                                Rp.{{ $rek->hargamin }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                                @if (count($harga) > 8)
                                    <div class="carousel-item">
                                        <div class="row">
                                            @foreach ($harga->slice(8, 4) as $rek)
                                                <div class="col-md-3 mb-3">
                                                    <div class="card h-100">
                                                        <img class="img-fluid" alt="100%x280"
                                                            src={{ $rek->gambarutama }}>
                                                        <div class="card-body">
                                                            <h5 class="card-title">
                                                                {{ $rek->namaoleh }}</h5>
                                                            <div style='z-index: 2; position: relative;'>
                                                                <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                    href="/filter/daerah/{{ $rek->kota }}"
                                                                    style='color: inherit;'>
                                                                    {{ $rek->kota }}
                                                                </a>
                                                            </div>
                                                            <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                        <div class="card-footer bg-transparent">
                                                            <p class="card-text">Mulai dari
                                                                Rp.{{ $rek->hargamin }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    @auth
        @foreach ($pernahwisata as $pw)
            @if ($pw->pernah_wisata != null)
                @if (count($lokasilalu) > 0)
                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h5>Rekomendasi oleh - oleh dari lokasi yang pernah kamu kunjungi </h5>
                                </div>
                                <div class="col-4 text-end">
                                    <a class="btn btn-secondary mb-3 mr-1 btn-sm" data-bs-target="#olehPernah" role="button"
                                        data-bs-slide="prev">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#olehPernah" role="button"
                                        data-bs-slide="next">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="olehPernah" class="carousel slide" data-ride="carousel">
                                        <div class="carousel">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    @foreach ($lokasilalu->slice(0, 4) as $rek)
                                                        <div class="col-md-3 mb-3">
                                                            <div class="card h-100">
                                                                <img class="img-fluid" alt="100%x280"
                                                                    src={{ $rek->gambarutama }}>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                                    <div style='z-index: 2; position: relative;'>
                                                                        <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                            href="/filter/daerah/{{ $rek->kota }}"
                                                                            style='color: inherit;'>
                                                                            {{ $rek->kota }}
                                                                        </a>
                                                                    </div>
                                                                    <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                        class="stretched-link"></a>
                                                                </div>
                                                                <div class="card-footer bg-transparent">
                                                                    <p class="card-text">Mulai dari
                                                                        Rp.{{ $rek->hargamin }}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @if (count($lokasilalu) > 4)
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        @foreach ($lokasilalu->slice(4, 4) as $rek)
                                                            <div class="col-md-3 mb-3">
                                                                <div class="card h-100">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">{{ $rek->namaoleh }}
                                                                        </h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
                                                                    </div>
                                                                    <div class="card-footer bg-transparent">
                                                                        <p class="card-text">Mulai dari
                                                                            Rp.{{ $rek->hargamin }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                            @if (count($lokasilalu) > 8)
                                                <div class="carousel-item">
                                                    <div class="row">
                                                        @foreach ($lokasilalu->slice(8, 4) as $rek)
                                                            <div class="col-md-3 mb-3">
                                                                <div class="card h-100">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            {{ $rek->namaoleh }}</h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/filter/daerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
                                                                    </div>
                                                                    <div class="card-footer bg-transparent">
                                                                        <p class="card-text">Mulai dari
                                                                            Rp.{{ $rek->hargamin }}</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                @endif
            @endif
        @endforeach
    @endauth
@endsection
