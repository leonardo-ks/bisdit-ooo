    <nav class="navbar navbar-expand-md navbar-light">
        <a href="/" class="navbar-brand" style="margin-left: 10px">
            <img src="https://cdn.discordapp.com/attachments/906163180328325130/919144472237977640/Trinity.png"
                class="bi me-2" height="32">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#toggleMenu"
            aria-controls="toggleMenu" aria-expanded="false" aria-label="Toogle Navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="toggleMenu">
            <ul class="navbar-nav">
                <li class="nav-item dropdown" style="position: initial;">
                    <form>
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink"
                            data-bs-auto-close="outside" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu" style="margin-top: -1px; left: 0; right: 0;"
                            aria-labelledby="navbarDropdownMenuLink">
                            <div class="container-fluid">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="pane-A" data-bs-toggle="tab"
                                            data-bs-target="#paneA" type="button" role="tab" aria-controls="paneA"
                                            aria-selected="true">Daerah Asal</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pane-B" data-bs-toggle="tab"
                                            data-bs-target="#paneB" type="button" role="tab" aria-controls="paneB"
                                            aria-selected="false">Jenis oleh-oleh</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pane-C" data-bs-toggle="tab"
                                            data-bs-target="#paneC" type="button" role="tab" aria-controls="paneC"
                                            aria-selected="false">Bahan dasar</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pane-D" data-bs-toggle="tab"
                                            data-bs-target="#paneD" type="button" role="tab" aria-controls="paneD"
                                            aria-selected="false">Rasa</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pane-E" data-bs-toggle="tab"
                                            data-bs-target="#paneE" type="button" role="tab" aria-controls="paneE"
                                            aria-selected="false">Tekstur</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="pane-F" data-bs-toggle="tab"
                                            data-bs-target="#paneF" type="button" role="tab" aria-controls="paneF"
                                            aria-selected="false">Cara masak</button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade show active" id="paneA" role="tabpanel"
                                        aria-labelledby="pane-A">
                                        <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                            @foreach ($daerahasal as $d)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ $d->gambarlokasi }}"
                                                            class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                            style="object-fit: cover">
                                                        <div >
                                                            <h6 class="card-text m-2">{{ $d->kota }}</h6>
                                                            <a href="/filter/daerah/{{ $d->kota }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paneB" role="tabpanel" aria-labelledby="pane-B">
                                        <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                            @foreach ($jenisoleh as $j)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ $j->gambarjenis }}"
                                                            class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                            style="object-fit: cover">
                                                        <div >
                                                            <h6 class="card-text m-2">{{ $j->namajenis }}</h6>
                                                            <a href="/jenis/{{ $j->namajenis }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paneC" role="tabpanel" aria-labelledby="pane-C">
                                        <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                            @foreach ($bahandasar as $b)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ $b->gambarbahan }}"
                                                            class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                            style="object-fit: cover">
                                                        <div >
                                                            <h6 class="card-text m-2">{{ $b->namabahan }}
                                                            </h6>
                                                            <a href="/filter/bahandasar/{{ $b->namabahan }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paneD" role="tabpanel" aria-labelledby="pane-D">
                                        <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                            @foreach ($rasa as $r)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ $r->gambarasa }}"
                                                            class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                            style="object-fit: cover">
                                                        <div >
                                                            <h6 class="card-text m-2">{{ $r->namarasa }}</h6>
                                                            <a href="/filter/rasa/{{ $r->namarasa }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paneE" role="tabpanel" aria-labelledby="pane-E">
                                        <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                            @foreach ($tekstur as $t)
                                                <div class="col">
                                                    <div class="card h-100">
                                                        <img src="{{ $t->gambartekstur }}"
                                                            class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                            style="object-fit: cover">
                                                        <div >
                                                            <h6 class="card-text m-2">{{ $t->namatekstur }}
                                                            </h6>
                                                            <a href="/filter/tekstur/{{ $t->namatekstur }}"
                                                                class="stretched-link"></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="paneF" role="tabpanel" aria-labelledby="pane-F">
                                        <div class="" id="">
                                            <div class="row row-cols-1 row-cols-md-6 g-4 mt-1 mb-2">
                                                @foreach ($caramasak as $m)
                                                    <div class="col">
                                                        <div class="card h-100">
                                                            <img src="{{ $m->gambarmasak }}"
                                                                class="card-img-top d-block embed-responsive embed-responsive-16by9 rounded-top"
                                                                style="object-fit: cover">
                                                            <div >
                                                                <h6 class="card-text m-2">
                                                                    {{ $m->namamasak }}</h6>
                                                                <a href="/filter/caramasak/{{ $m->namamasak }}"
                                                                    class="stretched-link"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </li>
                <li>
                    <a class="nav-link" href="/mitra">Mitra</a>
                </li>
            </ul>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id=" toggleMenu">
            <form class="d-flex" action="/search" method="GET" role="search">
                @csrf
                <input type="search" class="form-control me-2" placeholder="Search..." aria-label="Search" name="param">
            </form>
            @guest
                <ul class="nav" style="margin-right: 10px">
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
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-start text-small" style="margin-right: 10px;"
                        aria-labelledby=" dropdownUser1">
                        <li><a class="dropdown-item" href="#">Profil</a></li>
                        <li><a class="dropdown-item" href="/favorit">Favorit</a></li>
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
    </nav>
