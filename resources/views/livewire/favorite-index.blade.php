    @php
        use App\Models\favorite;
        $count = 0;
        $favoriteId;
        $favoriteIdOleh;
    @endphp
    @foreach ($favorites as $favorite)
        @if ($favorite->idoleh = $idoleh)
            @php
                $count++;
                $favoriteId = $favorite->id;
                $favoriteIdOleh = $favorite->idoleh;
            @endphp
        @endif
    @endforeach
    <div>
        @auth
            <div class="align-items-center">
                @if (favorite::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists())
                    <a wire:click="favorite({{ $idoleh }})" class="btn btn-light btn-lg bi bi-heart-fill">
                        {{ $count }}</a>
                @else
                    <a wire:click="favorite({{ $idoleh }})" class="btn btn-light btn-lg bi bi-heart">
                        {{ $count }}</a>
                @endif
            </div>
        @endauth
        @guest
            <div class="align-items-center">
                <a type="button" class="btn btn-light btn-lg bi bi-heart" href="/login"> {{ $count }}</a>
            </div>
        @endguest
    </div>
