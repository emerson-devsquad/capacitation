<?php

namespace App\Http\Livewire\Advertisements;

use App\Models\Advertisement;
use App\Models\Category;
use App\Rules\Money;
use Livewire\Component;

class AdvertisementCreate extends Component
{

    public $title       = '';
    public $price       = '0.00';
    public $category    = '';
    public $description = '';

    public function submit()
    {
        $validatedData = $this->validate([
            'title'       => ['required', 'min:6', 'max:255'],
            'price'       => ['required', new Money],
            'category'    => ['required', 'integer'],
            'description' => ['required', 'string', 'max:2048'],
        ]);

        $advertisement = new Advertisement;

        $advertisement->title       = $validatedData['title'];
        $advertisement->price       = (float)str_replace(',', '', $validatedData['price']);
        $advertisement->category_id = $validatedData['category'];
        $advertisement->description = $validatedData['description'];

        $advertisement->save();

        $this->emit('add', [
            'title'    => 'Successfully created!',
            'subtitle' => 'The content of the advertisement will be verified.',
        ]);

        // session()->flash('alert', [
        //     'level'    => 'success',
        //     'title'    => 'Successfully created!',
        //     'subtitle' => "The content of the advertisement will be verified.",
        //     'timeout'  => 3000,
        // ]);

        // return redirect()->to(route('my-advertisements'));

    }

    public function getCategoriesProperty()
    {
        return Category::select('id', 'name')->get();
    }

    public function render()
    {
        return view('livewire.advertisements.advertisement-create')->layout('layouts.site');
    }
}
