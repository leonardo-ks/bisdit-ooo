@extends('layouts.master')
@section('content')

    <div class="container">
        <div class="border rounded px-5 mx-5">
            <div >
                @foreach ($jenisoleh as $j)
                    <div class="p-5 bg-image rounded-3 mb-4 mt-4"
                        style="background-image: url('{{ $j->gambarjenis }}');height: 400px; background-repeat: no-repeat; background-size: 100%;">
                    </div>
                    <h3>{{ $j->namajenis }}</h3>
                    <p>{{ $j->deskripsijenis }}</p>
                    <div class="row row-cols-1 row-cols-md-4 g-4 mt-2">
                        @foreach ($varianjenis as $v)
                            <div class="col">
                                <div class="card h-100">
                                    <img src="{{ $v->gambarvarian }}"
                                        class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                        style="object-fit: cover">
                                    <div class="card-body">
                                        <h6 class="card-text">{{ $v->namavarian }}</h6>
                                    </div>
                                    <a href="/filter/varian/{{ $v->namavarian }}" class="stretched-link"></a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="d-flex pagination justify-content-center mt-3">
                        {{ $varianjenis->links() }}
                    </div>
                @endforeach
            </div>
        </div>
    </div>


@endsection
