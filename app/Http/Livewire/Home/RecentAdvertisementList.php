<?php

namespace App\Http\Livewire\Home;

use App\Models\Advertisement;
use Livewire\Component;

class RecentAdvertisementList extends Component
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
        return view('livewire.home.recent-advertisement-list');
    }
}
