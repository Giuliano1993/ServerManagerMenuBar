<?php

namespace App\Livewire;

use Livewire\Component;

class VercelItem extends Component
{

    public $site;

    public function mount($site){
        $this->site = $site;
    }
    
    public function render()
    {   
        return view('livewire.vercel-item');
    }
}
