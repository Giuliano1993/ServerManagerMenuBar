<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class VercelSiteList extends Component
{

    public $sites;
    
    public function render()
    {


        $response = Http::withToken(env('VERCEL_TOKEN'))->contentType('application/json')->get('https://api.vercel.com/v9/projects')->json();
        $this->sites = $response['projects'];

        return view('livewire.vercel-site-list');
    }
}
