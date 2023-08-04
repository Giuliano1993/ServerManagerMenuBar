<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class NetlifyList extends Component
{

    public $sites;

    public function render()
    {
        $response = Http::withToken(env('NETLIFY_TOKEN'))->contentType('application/json')->get('https://api.netlify.com/api/v1/sites')->json();
        $this->sites = $response;
        
        return view('livewire.netlify-list');
    }
}
