<?php

namespace App\Http\Livewire\App;

use Livewire\Component;

class Alert extends Component
{
    public $iteration;

    public $alerts;

    protected $listeners = [
        'add',
    ];

    public function mount()
    {
        $this->alerts    = [];
        $this->iteration = 0;

        $alert = session()->get('alert');
        if ($alert) {
            $this->alerts[] = $alert;
        }
    }

    public function add(array $options)
    {
        $this->alerts[] = [
            'level'    => $options['level'] ?? 'success',
            'title'    => $options['title'] ?? '',
            'subtitle' => $options['subtitle'] ?? '',
            'timeout'  => $options['timeout'] ?? 3000,
        ];
    }

    public function render()
    {
        return view('livewire.app.alert');
    }
}
