@extends("layouts.master")
@section('content')

    <div class="container">
        <h3 class="text-center">Mitra Oasis Oleh-oleh</h3>
        <div class="row row-cols-1 row-cols-md-3 g-3">
            <div class="col">
                @foreach ($mitra as $m)
                    <div class="card mt-3">
                        <img src="{{ $m->foto_mitra }}" class="card-img-top">
                        <div class="card-body">
                            <h5 class="card-title">{{ $m->namamitra }}</h5>
                            <p class="card-text"><i class="bi bi-geo-alt"></i>{{ $m->alamat_mitra }}</p>
                            <h6 class="card-text">{{ $m->kota }}-{{ $m->provinsi }}</h6>
                            <a href="#" class="btn btn-outline-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">Lihat Detail</a>
                        </div>
                    </div>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-dialog-scrollable modal-xl modal-fullscreen-lg-down">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{ $m->namamitra }}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <h5 class="mx-3">Detail {{ $m->namamitra }}</h5>
                                    <div class="px-3">
                                        <div class="row">
                                            <div class="col-7">
                                                <figure class="figure">
                                                    <img class="d-block ratio ratio-16x9 rounded"
                                                        src="{{ $m->foto_mitra }}" style="object-fit: cover;">
                                                    <figcaption class="figure-caption text-center">Foto Lokasi
                                                        {{ $m->namamitra }}</figcaption>
                                                </figure>
                                            </div>
                                            <div class="col">
                                                <h6>Tentang {{ $m->namamitra }}</h6>
                                                <p>{{ $m->deskripsimitra }}</p>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <table class="table table-borderless">
                                                            <tbody>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Kontak</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7"><i class="bi bi-whatsapp"></i> {{ $m->kontak }}</td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Alamat</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->alamat_mitra }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Jam Buka</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->jam_buka_mitra }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td class="col-4 bi bi-dot">Sampel Cicip</td>
                                                                    <td class="col-1 text-center">:</td>
                                                                    <td class="col-7">{{ $m->cicip }}</td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <h5>Produk {{ $m->namamitra }}</h5>

                                        <div class="row row-cols-1 row-cols-md-4 g-4 mb-3">
                                            @foreach ($produkmitra as $pm)
                                                @if ($pm->idmitra = $m->idmitra)
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <img class="d-block ratio ratio-16x9 rounded"
                                                                src="{{ $pm->gambar_produk_mitra }}"
                                                                style="object-fit: cover;">
                                                            <div class="card-body">
                                                                <h5 class="card-title">{{ $pm->nama_produk_mitra }}
                                                                </h5>
                                                                <p class="card-text">Harga Produk :
                                                                    {{ $pm->harga_produk_mitra }} <br>
                                                                    @if ($pm->status_produkmitra == 1)
                                                                        Produk Asli Dapur {{ $pm->namamitra }}
                                                                    @else
                                                                        Produk Partner {{ $pm->namamitra }}
                                                                    @endif
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif
                                            @endforeach
                                        </div>

                                        <h5>Lokasi {{ $m->namamitra }}</h5>
                                        <div class="rounded">
                                            @php
                                                $embed = $m->gmap_mitra;
                                                $peta = stripslashes($embed);
                                                echo $embed;
                                            @endphp
                                        </div>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <a type="button" class="btn btn-outline-primary" href="{{$m->link}}" target="blank">Hubungi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
