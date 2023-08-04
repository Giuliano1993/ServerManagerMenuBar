<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Http;
use Livewire\Component;

class DropletList extends Component
{

    public $droplets;

    public function render()
    {

        $response = Http::withToken(env('DO_AUTH_TOKEN'))->contentType('application/json')->get('https://api.digitalocean.com/v2/droplets?page=1')->json();
        $this->droplets = $response['droplets'];
        return view('livewire.droplet-list');
    }
}
