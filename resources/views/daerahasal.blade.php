@extends('layouts.master')
@section('content')

    <div class="container">
        <h2>Oleh Oleh Berdasarkan Daerah Asal</h2>
        <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
            @foreach ($daerahasal as $d)
            <div class="col">
                <div class="card h-100">
                    <img src="{{$d->gambarlokasi}}"
                        class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded" style="object-fit: cover">
                    <div class="card-body">
                        <h6 class="card-text">{{$d->kota}}</h6>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
        <div class="d-flex pagination justify-content-center mt-3">
            {{$daerahasal->links()}}
        </div>
    </div>


@endsection
