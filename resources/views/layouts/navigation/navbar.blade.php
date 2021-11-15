<header class="p-2 mb-3 border-bottom">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                <img src="https://www.logolynx.com/images/logolynx/b2/b2ccb6c7acafb50b06c1d103e11ccd53.png"
                    class="bi me-2" height="32">
            </a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/daerahasal" class="nav-link px-2 link-secondary">Daerah asal</a></li>
                <a class="nav-link px-2 link-secondary" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasTop" aria-controls="offcanvasTop">Kategori</a>
                <div class="offcanvas offcanvas-top h-75" tabindex="-1" id="offcanvasTop"
                    aria-labelledby="offcanvasTopLabel">
                    <div class="offcanvas-header">
                        <h4 id="offcanvasTopLabel">Kategori oleh-oleh</h4>
                        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <nav>
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-jenis-oleh-oleh-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-jenis-oleh-oleh" type="button" role="tab"
                                    aria-controls="nav-jenis-oleh-oleh" aria-selected="true">Jenis oleh-oleh</button>
                                <button class="nav-link" id="nav-bahan-dasar-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-bahan-dasar" type="button" role="tab"
                                    aria-controls="nav-bahan-dasar" aria-selected="false">Bahan dasar</button>
                                <button class="nav-link" id="nav-rasa-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-rasa" type="button" role="tab" aria-controls="nav-rasa"
                                    aria-selected="false">Rasa</button>
                                <button class="nav-link" id="nav-tekstur-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-tekstur" type="button" role="tab" aria-controls="nav-tekstur"
                                    aria-selected="false">Tekstur</button>
                                <button class="nav-link" id="nav-caramasak-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-caramasak" type="button" role="tab"
                                    aria-controls="nav-caramasak" aria-selected="false">Cara masak</button>
                            </div>
                        </nav>
                        <div class="tab-content mx-1" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-jenis-oleh-oleh" role="tabpanel"
                                aria-labelledby="nav-jenis-oleh-oleh-tab">

                                <div class="row row-cols-1 row-cols-md-5 g-4 mt-1">
                                    @foreach ($jenisoleh as $j)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ $j->gambarjenis }}"
                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                    style="object-fit: cover">
                                                <div class="card-body">
                                                    <h6 class="card-text">{{ $j->namajenis }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                                {{-- <div class="d-flex align-items-start">
                                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                        aria-orientation="vertical">
                                        @foreach ($jenisoleh as $j)
                                            <button class="nav-link {{ $loop->first ? 'active' : '' }}"
                                                id="v-pills-{{ $j->namajenis }}-tab" data-bs-toggle="pill"
                                                data-bs-target="#v-pills-{{ $j->namajenis }}" type="button" role="tab"
                                                aria-controls="v-pills-{{ $j->namajenis }}"
                                                aria-selected="true">{{ $j->namajenis }}</button>
                                        @endforeach

                                    </div>
                                    <div class="tab-content" id="v-pills-tabContent">
                                        @foreach ($jenisoleh as $j)
                                            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                                id="v-pills-{{ $j->namajenis }}" role="tabpanel"
                                                aria-labelledby="v-pills-{{ $j->namajenis }}-tab">
                                                <div class="row row-cols-1 row-cols-md-5 g-4">
                                                    @foreach ($varianjenis as $v)
                                                        <div class="col">
                                                            <div class="card h-100">
                                                                <img src="{{ $v->gambarvarian }}"
                                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                                    style="object-fit: cover">
                                                                <div class="card-body">
                                                                    <h6 class="card-text">{{ $v->namavarian }}
                                                                    </h6>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </div> --}}
                            </div>
                            <div class="tab-pane fade" id="nav-bahan-dasar" role="tabpanel"
                                aria-labelledby="nav-bahan-dasar-tab">

                                <div class="row row-cols-1 row-cols-md-5 g-4 mt-1">
                                    @foreach ($bahandasar as $b)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ $b->gambarbahan }}"
                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                    style="object-fit: cover">
                                                <div class="card-body">
                                                    <h6 class="card-text">{{ $b->namabahan }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                            <div class="tab-pane fade" id="nav-rasa" role="tabpanel" aria-labelledby="nav-rasa-tab">
                                <div class="row row-cols-1 row-cols-md-5 g-4 mt-1">
                                    @foreach ($rasa as $r)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ $r->gambarasa }}"
                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                    style="object-fit: cover">
                                                <div class="card-body">
                                                    <h6 class="card-text">{{ $r->namarasa }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-tekstur" role="tabpanel"
                                aria-labelledby="nav-tekstur-tab">
                                <div class="row row-cols-1 row-cols-md-5 g-4 mt-1">
                                    @foreach ($tekstur as $t)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ $t->gambartekstur }}"
                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                    style="object-fit: cover">
                                                <div class="card-body">
                                                    <h6 class="card-text">{{ $t->namatekstur }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="tab-pane fade" id="nav-caramasak" role="tabpanel"
                                aria-labelledby="nav-caramasak-tab">
                                <div class="row row-cols-1 row-cols-md-5 g-4 mt-1">
                                    @foreach ($caramasak as $m)
                                        <div class="col">
                                            <div class="card h-100">
                                                <img src="{{ $m->gambarmasak }}"
                                                    class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded"
                                                    style="object-fit: cover">
                                                <div class="card-body">
                                                    <h6 class="card-text">{{ $m->namamasak }}</h6>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
                {{-- <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle px-2 link-secondary" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Kategori
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Jenis oleh-oleh</a></li>
                        <li><a class="dropdown-item" href="#">Bahan dasar</a></li>
                        <li><a class="dropdown-item" href="#">Rasa</a></li>
                        <li><a class="dropdown-item" href="#">Tekstur</a></li>
                    </ul>
                </li> --}}
                <li><a href="#" class="nav-link px-2 link-secondary">Mitra</a></li>
            </ul>
            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
            </form>
            @guest
                <ul class="nav">
                    <li><a href="/login" class="nav-link px-2 link-secondary">Login</a></li>
                    <li><a href="/register" class="nav-link px-2 link-secondary">Register</a></li>
                </ul>
            @endguest
            @auth
                <div class="dropdown text-end">
                    <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ auth()->user()->photo }}" width="32" height="32" class="rounded-circle">
                    </a>
                    <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="#">Favorit</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <form action="/logout" method="post">
                            @csrf
                            <button class="dropdown-item" type="submit">Logout</button>
                        </form>
                    </ul>
                </div>
            @endauth
        </div>
    </div>
</header>
