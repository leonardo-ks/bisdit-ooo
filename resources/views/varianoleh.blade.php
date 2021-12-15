@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="border rounded px-5 mx-5">
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
                                <img class="d-block ratio ratio-16x9 rounded" src="{{ $photo }}"
                                    style="object-fit: cover;">
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
                        <div class="col-10">
                            <div class="row">
                                <div class="col-5">
                                    <h3 class="card-title">{{ $v->namaoleh }}</h3>
                                    @if ($v->namalain != null)
                                        <p class="fs-5 fw-light fst-italic lh-1">({{ $v->namalain }}) </p>
                                    @endif

                                    @if ($v->statushalal == 1)
                                        <img src="https://cdn.discordapp.com/attachments/906163180328325130/906801367820165140/logohalal.png"
                                            style="width:64px;height:auto;">
                                    @endif
                                    @if ($v->gluten_free == 1)
                                        <img src="https://cdn.discordapp.com/attachments/906163180328325130/917087399748702248/pngfind.com-bakery-icon-png-4155726.png"
                                            style="width:64px;height:auto;">
                                    @endif
                                    @if ($v->vegetarian == 1)
                                        <img src="https://cdn.discordapp.com/attachments/906163180328325130/917087465695748096/vegetarianism-vegan-friendly-veganism-logo-brand-vegetarian-logo-3c9e4e12543f37bd7903e99215502861.png"
                                            style="width:64px;height:auto;">
                                    @endif
                                    @if ($v->vegan == 1)
                                        <img src="https://cdn.discordapp.com/attachments/906163180328325130/917087437480689744/Daco_4443108.png"
                                            style="width:64px;height:auto;">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-2 d-flex justify-content-end">
                            <livewire:favorite-index :idoleh="$idoleh"></livewire:favorite-index>
                        </div>
                    </div>

                    @php
                        $deskripsi = preg_split('/---/', $v->deskripsioleh);
                    @endphp

                    @foreach ($deskripsi as $desk)
                        <p class="card-text">
                            {{ $desk }}
                        </p>
                    @endforeach
                </div>

                <div class="container">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">Detail</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#standard"
                                type="button" role="tab" aria-controls="standard" aria-selected="false">Standar
                                Oleh-oleh</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="trivia-tab" data-bs-toggle="tab" data-bs-target="#trivia"
                                type="button" role="tab" aria-controls="trivia" aria-selected="false">Trivia</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="tempat-tab" data-bs-toggle="tab" data-bs-target="#tempat"
                                type="button" role="tab" aria-controls="tempat" aria-selected="false">Tempat Beli</button>
                        </li>

                        @if ($v->idmitra != null)
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mitra-tab" data-bs-toggle="tab" data-bs-target="#mitra"
                                    type="button" role="tab" aria-controls="mitra" aria-selected="false">Mitra</button>
                            </li>
                        @endif
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-borderless mt-2">
                                        <tbody>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Varian Jenis</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/varian/{{ $v->namavarian }}">{{ $v->namavarian }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Rasa</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/rasa/{{ $v->namarasa }}">{{ $v->namarasa }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Tekstur</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/tekstur/{{ $v->namatekstur }}">{{ $v->namatekstur }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Bahan Dasar</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/bahandasar/{{ $v->namabahan }}">{{ $v->namabahan }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Komposisi</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9">{{ $v->komposisi }}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Cara Masak</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/caramasak/{{ $v->namamasak }}">{{ $v->namamasak }}</a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Rentang Harga</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9">
                                                    Rp.{{ $v->hargamin }}-Rp.{{ $v->hargamax }} per
                                                    {{ $v->satuan }}
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="col-2 bi bi-dot">Daerah Asal</td>
                                                <td class="col-1 text-center">:</td>
                                                <td class="col-9"><a class="text-dark"
                                                        href="/filter/daerah/{{ $v->kota }}">{{ $v->kota }},
                                                        {{ $v->provinsi }}</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="standard" role="tabpanel" aria-labelledby="standard-tab">
                            <div class="row">
                                <div class="col-11 mt-2">
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td><i class="bi bi-clock"></i></td>
                                                <td>Kadaluwarsa</td>
                                                <td>:</td>
                                                @php
                                                    $kadarl = preg_split('/---/', $v->kadarluarsa);
                                                @endphp
                                                <td>
                                                    @foreach ($kadarl as $kar)
                                                        {{ $kar }}<br>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="bi bi-layers"></i></td>
                                                <td>Cara Penyimpanan</td>
                                                <td>:</td>
                                                <td>{{ $v->carapenyimpanan }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="bi bi-cup"></i></td>
                                                <td>Cara Penyajian</td>
                                                <td>:</td>
                                                <td>{{ $v->carapenyajian }}</td>
                                            </tr>
                                            <tr>
                                                <td><i class="bi bi-emoji-smile"></i></td>
                                                <td>Manfaat</td>
                                                <td>:</td>
                                                <td>
                                                    @php
                                                        $manfaat = preg_split('/---/', $v->manfaat);
                                                    @endphp

                                                    @foreach ($manfaat as $mm)
                                                        <p>{{ $mm }}<br></p>
                                                    @endforeach
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><i class="bi bi-emoji-frown"></i></td>
                                                <td>Pantangan</td>
                                                <td>:</td>
                                                <td>
                                                    @php
                                                        $pantangan = preg_split('/---/', $v->pantangan);
                                                    @endphp

                                                    @foreach ($pantangan as $pp)
                                                        <p>{{ $pp }}<br></p>
                                                    @endforeach
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col"></div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="trivia" role="tabpanel" aria-labelledby="trivia-tab">
                            @php
                                $trivia = preg_split('/---/', $v->trivia);
                            @endphp
                            <div class="container mt-2">
                                @foreach ($trivia as $triv)
                                    <p class="{{ $loop->index % 2 == 0 ? 'fw-bold' : '' }}">{{ $triv }}<br></p>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade mb-3" id="tempat" role="tabpanel" aria-labelledby="tempat-tab">

                            <div class="row row-cols-1 row-cols-md-3 g-3">
                                @foreach ($tempatbeli as $t)
                                    <div class="col mb-3">
                                        <div class="card  h-100 mt-3">
                                            <img src="{{ $t->gambarproduk }}" class="card-img-top">
                                            <div class="card-body">
                                                <h5 class="card-title">{{ $t->merk }}</h5>
                                                <p class="bi bi-geo-alt">{{ $t->kota }},
                                                    {{ $t->provinsi }}
                                                </p>
                                                <a href="#" type="button" class="btn btn-primary" data-bs-toggle="modal"
                                                    data-bs-target="#myModal{{ $t->idtempatbeli }}">Detail</a>
                                            </div>
                                        </div>
                                        <!-- The Modal -->
                                        <div class="modal" id="myModal{{ $t->idtempatbeli }}">
                                            <div
                                                class="modal-dialog modal-dialog-scrollable modal-lg modal-fullscreen-md-down">
                                                <div class="modal-content">

                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">{{ $t->merk }}</h4>
                                                        <button type="button" class="btn-close"
                                                            data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="modal-body">
                                                        <div class="p-3">
                                                            <img class="d-block ratio ratio-16x9 rounded"
                                                                src="{{ $t->gambarproduk }}" style="object-fit: cover;">
                                                            <h5 class="mx-2 mt-2">Detail {{ $t->merk }}</h5>
                                                            <div class="row mt-2">
                                                                <div class="col-12">
                                                                    <table class="table table-borderless">
                                                                        <tbody>
                                                                            @if ($t->best_seller != null)
                                                                                <tr>
                                                                                    <td class="col-3 bi bi-dot">Varian Best
                                                                                        Seller</td>
                                                                                    <td class="col-1">:</td>
                                                                                    <td class="col-8">
                                                                                        @php
                                                                                            $beseler = preg_split('/---/', $t->best_seller);
                                                                                        @endphp
                                                                                        @foreach ($beseler as $bs)
                                                                                            {{ $bs }} <i
                                                                                                type="button"
                                                                                                class="bi bi-hand-thumbs-up"
                                                                                                data-bs-toggle="tooltip"
                                                                                                data-bs-placement="right"
                                                                                                title="Best Seller"></i><br>
                                                                                        @endforeach
                                                                                    </td>

                                                                                    <script>
                                                                                        // Initialize tooltips
                                                                                        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                                                                                        var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                                                                                            return new bootstrap.Tooltip(tooltipTriggerEl)
                                                                                        })
                                                                                    </script>
                                                                                </tr>
                                                                            @endif
                                                                            @if ($t->varianjual != null)
                                                                                <tr>
                                                                                    @if ($t->best_seller != null)
                                                                                        <td class="col-3 bi bi-dot">Varian
                                                                                            Lainnya</td>
                                                                                    @else
                                                                                        <td class=" col-3 bi bi-dot">Varian
                                                                                            Yang Dijual</td>
                                                                                    @endif
                                                                                    <td class="col-1">:</td>
                                                                                    <td class="col-8">
                                                                                        @php
                                                                                            $varjul = preg_split('/---/', $t->varianjual);
                                                                                        @endphp
                                                                                        @foreach ($varjul as $var)
                                                                                            {{ $var }}<br>
                                                                                        @endforeach
                                                                                    </td>
                                                                                </tr>
                                                                            @endif
                                                                            @if ($t->bundle != null)
                                                                                <tr>

                                                                                    <td class="col-3 bi bi-dot">Bundle Yang
                                                                                        Dijual</td>
                                                                                    <td class="col-1">:</td>
                                                                                    @php
                                                                                        $bundel = preg_split('/---/', $t->bundle);
                                                                                    @endphp
                                                                                    <td class="col-8">
                                                                                        @foreach ($bundel as $bun)
                                                                                            {{ $bun }}<br>
                                                                                        @endforeach
                                                                                    </td>


                                                                                </tr>
                                                                            @endif
                                                                            <tr>
                                                                                <td class="col-3 bi bi-dot">Rentang Harga
                                                                                </td>
                                                                                <td class="col-1">:</td>
                                                                                <td class="col-8">
                                                                                    @php
                                                                                        $renhar = preg_split('/---/', $t->rentang_harga);
                                                                                    @endphp
                                                                                    Rp.{{ $renhar[0] }} -
                                                                                    Rp.{{ $renhar[1] }}
                                                                                    per {{ $t->satuan }}
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="col-3 bi bi-dot">Kemasan
                                                                                    Tersedia
                                                                                </td>
                                                                                <td class="col-1">:</td>
                                                                                <td class="col-8">
                                                                                    {{ $t->kemasan }}</td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="col-3 bi bi-dot">Alamat</td>
                                                                                <td class="col-1">:</td>
                                                                                <td class="col-8">
                                                                                    {{ $t->alamat }},
                                                                                    {{ $t->kota }}</td>
                                                                            </tr>
                                                                            @if ($t->jambuka != null)
                                                                                <tr>

                                                                                    <td class="col-3 bi bi-dot">Jam Buka
                                                                                    </td>
                                                                                    <td class="col-1">:</td>
                                                                                    <td class="col-8">
                                                                                        {{ $t->jambuka }}</td>


                                                                                </tr>
                                                                            @endif
                                                                            <tr>
                                                                                @if ($t->sosmed != null)
                                                                                    <td class="col-3 bi bi-dot">Sosial
                                                                                        Media
                                                                                    </td>
                                                                                    <td class="col-1">:</td>

                                                                                    @php
                                                                                        $sos = preg_split('/---/', $t->sosmed);
                                                                                    @endphp
                                                                                    <td class="col-8">
                                                                                        @if ($sos[0] == 'instagram')
                                                                                            <i class="bi bi-instagram"></i>
                                                                                            <a href="https://www.instagram.com/{{ $sos[1] }}"
                                                                                                target="_blank"
                                                                                                class="text-dark">{{ $sos[1] }}</a>
                                                                                        @elseif ($sos[0] == 'whatsapp')
                                                                                            <i class="bi bi-whatsapp"></i>
                                                                                            <a href="https://www.wa.me/{{ $sos[1] }}"
                                                                                                target="_blank"
                                                                                                class="text-dark">{{ $sos[1] }}</a>
                                                                                        @elseif ($sos[0] == 'facebook')
                                                                                            <i class="bi bi-facebook"></i>
                                                                                            <a href="https://www.facebook.com/{{ $sos[1] }}"
                                                                                                target="_blank"
                                                                                                class="text-dark">{{ $sos[1] }}</a>
                                                                                        @endif
                                                                                    </td>
                                                                                @endif
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>

                                                                </div>

                                                                <h5 class="mx-2 mt-2">Lokasi {{ $t->merk }}
                                                                </h5>
                                                                <div class="d-flex justify-content-center rounded">
                                                                    @php
                                                                        $embed = $t->google_map;
                                                                        $peta = stripslashes($embed);
                                                                        echo $embed;
                                                                    @endphp
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- Modal footer -->
                                                    <div class="modal-footer">
                                                        <a type="button" class="btn btn-outline-info"
                                                            href="{{ $t->link }}" target="blank">Kunjungi
                                                            Website</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="mitra" role="tabpanel" aria-labelledby="mitra-tab">
                            ...
                        </div>
                    </div>
                </div>
                <span class="border-top mb-3"></span>
                <div class="container mb-3">

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h5>Rekomendasi oleh-oleh lain dari {{ $v->provinsi }} </h5>
                                </div>
                                <div class="col-4 text-end">

                                    <a class="btn btn-secondary mb-3 mr-1 btn-sm"
                                        data-bs-target="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#carouselExampleIndicators2"
                                        role="button" data-bs-slide="next">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                        <div class="carousel">
                                            <div class="carousel-item active">
                                                <div class="row">

                                                    @foreach ($rekomlokasi->slice(0, 3) as $rek)
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="img-fluid" alt="100%x280"
                                                                    src={{ $rek->gambarutama }}>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                                    <div style='z-index: 2; position: relative;'>
                                                                        <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                            href="/olehbydaerah/{{ $rek->kota }}"
                                                                            style='color: inherit;'>
                                                                            {{ $rek->kota }}
                                                                        </a>
                                                                    </div>
                                                                    <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                        class="stretched-link"></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                            @if (count($rekomlokasi) > 3)

                                                <div class="carousel-item">
                                                    <div class="row">

                                                        @foreach ($rekomlokasi->slice(3, 3) as $rek)
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">{{ $rek->namaoleh }}
                                                                        </h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/olehbydaerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            @endif
                                            @if (count($rekomlokasi) > 6)

                                                <div class="carousel-item">
                                                    <div class="row">

                                                        @foreach ($rekomlokasi->slice(6, 3) as $rek)
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            {{ $rek->namaoleh }}</h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/olehbydaerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
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
                                {{-- <a href="#" class="link-dark text-end col-12">Lebih Banyak >>></a> --}}
                            </div>
                        </div>
                    </section>
                </div>
                <span class="border-top mb-3"></span>

                <div class="container mb-3">

                    <section>
                        <div class="container">
                            <div class="row">
                                <div class="col-8">
                                    <h5>Rekomendasi {{ $v->namavarian }} lain yang dapat kamu temukan</h5>
                                </div>
                                <div class="col-4 text-end">

                                    <a class="btn btn-secondary mb-3 mr-1 btn-sm"
                                        data-bs-target="#carouselExampleIndicators2" role="button" data-bs-slide="prev">
                                        <i class="bi bi-arrow-left"></i>
                                    </a>
                                    <a class="btn btn-secondary mb-3 btn-sm" data-bs-target="#carouselExampleIndicators2"
                                        role="button" data-bs-slide="next">
                                        <i class="bi bi-arrow-right"></i>
                                    </a>
                                </div>
                                <div class="col-12">
                                    <div id="carouselExampleIndicators2" class="carousel slide" data-ride="carousel">

                                        <div class="carousel">
                                            <div class="carousel-item active">
                                                <div class="row">

                                                    @foreach ($rekomvarianjenis->slice(0, 3) as $rek)
                                                        <div class="col-md-4 mb-3">
                                                            <div class="card">
                                                                <img class="img-fluid" alt="100%x280"
                                                                    src={{ $rek->gambarutama }}>
                                                                <div class="card-body">
                                                                    <h5 class="card-title">{{ $rek->namaoleh }}</h5>
                                                                    <div style='z-index: 2; position: relative;'>
                                                                        <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                            href="/olehbydaerah/{{ $rek->kota }}"
                                                                            style='color: inherit;'>
                                                                            {{ $rek->kota }}
                                                                        </a>
                                                                    </div>
                                                                    <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                        class="stretched-link"></a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    @endforeach

                                                </div>
                                            </div>
                                            @if (count($rekomvarianjenis) > 3)

                                                <div class="carousel-item">
                                                    <div class="row">

                                                        @foreach ($rekomvarianjenis->slice(3, 3) as $rek)
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">{{ $rek->namaoleh }}
                                                                        </h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/olehbydaerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>
                                                </div>
                                            @endif
                                            @if (count($rekomvarianjenis) > 6)

                                                <div class="carousel-item">
                                                    <div class="row">

                                                        @foreach ($rekomvarianjenis->slice(6, 3) as $rek)
                                                            <div class="col-md-4 mb-3">
                                                                <div class="card">
                                                                    <img class="img-fluid" alt="100%x280"
                                                                        src={{ $rek->gambarutama }}>
                                                                    <div class="card-body">
                                                                        <h5 class="card-title">
                                                                            {{ $rek->namaoleh }}</h5>
                                                                        <div style='z-index: 2; position: relative;'>
                                                                            <a class="card-text bi bi-geo-alt text-decoration-none"
                                                                                href="/olehbydaerah/{{ $rek->kota }}"
                                                                                style='color: inherit;'>
                                                                                {{ $rek->kota }}
                                                                            </a>
                                                                        </div>
                                                                        <a href="/varianoleh/{{ $rek->idoleh }}"
                                                                            class="stretched-link"></a>
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
                                {{-- <a href="#" class="link-dark text-end col-12">Lebih Banyak >>></a> --}}
                            </div>
                        </div>
                    </section>
                </div>

            @endforeach
        </div>
    </div>
@endsection
