<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Process;


class DropletItem extends Component
{


    public $droplet;

    public $error;

    public function mount($droplet)
    {
        $this->droplet = $droplet;
    }

    public function openTerminal(){
        try{
            Process::run('start cmd.exe ');
        }catch(\Exception $e){
            $this->error = $e->getMessage();
        }
    }

    public function render()
    {
        return view('livewire.droplet-item');
    }
}
