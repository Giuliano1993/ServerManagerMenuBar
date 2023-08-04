<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Process;


class DropletItem extends Component
{


    public $droplet;

    public function mount($droplet)
    {
        $this->droplet = $droplet;
    }

    public function openTerminal(){
        Process::run('start cmd.exe');
    }

    public function render()
    {
        return view('livewire.droplet-item');
    }
}
