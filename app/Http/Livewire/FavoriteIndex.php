<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\favorite;

class FavoriteIndex extends Component
{
    public $idoleh;

    public function mount($idoleh)
    {
        $this->idoleh = $idoleh;
    }


    public function render()
    {
        if (favorite::where(['idoleh' => $this->idoleh, 'id' => auth()->user()->id])->exists()) {
            $heart = 'bi-heart-fill';
        } else {
            $heart = 'bi-heart';
        }
        return view('livewire.favorite-index', [
            'favorites' => favorite::get(),
            'idoleh',
            'heart',
        ]);
    }

    public function unfavorite($idoleh)
    {
        if (favorite::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            favorite::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->delete();
            $this->render();
        }
    }

    public function favorite($idoleh)
    {
        if (!favorite::where(['idoleh' => $idoleh, 'id' => auth()->user()->id])->exists()) {
            favorite::create(['idoleh' => $idoleh, 'id' => auth()->user()->id]);
            $this->render();
        } else {
            $this->unfavorite($idoleh);
        }
    }
}