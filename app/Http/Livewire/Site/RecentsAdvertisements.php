<?php

namespace App\Http\Livewire\Site;

use App\Models\Advertisement;
use Livewire\Component;

class RecentsAdvertisements extends Component
{
    public function getAdvertisementsProperty()
    {
        return Advertisement::where('status', Advertisement::STATUS_AVAILABLE)
            ->latest()
            ->take(4)
            ->get();
    }

    public function render()
    {
        return view('livewire.site.recents-advertisements');
    }
}
