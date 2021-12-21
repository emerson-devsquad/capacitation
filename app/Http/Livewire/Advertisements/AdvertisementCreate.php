<?php

namespace App\Http\Livewire\Advertisements;

use Livewire\Component;

class AdvertisementCreate extends Component
{
    public function render()
    {
        return view('livewire.advertisements.advertisement-create')->layout('layouts.site');
    }
}
