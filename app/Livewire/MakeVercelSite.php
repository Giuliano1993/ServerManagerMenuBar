<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MakeVercelSite extends Component
{
    public function render()
    {
        return view('livewire.make-vercel-site');
    }


    public function createWebsite(){

        $n  = 'test-site-'.$this->generateRandomString(5);
        $response = Http::withToken(env('VERCEL_TOKEN'))->contentType('application/json')->post('https://api.vercel.com/v9/projects',[
            "name"=>$n,
            "gitRepository"=>[
                "repo"=>"Giuliano1993/vue-the-menue",
                "type"=>"github"
            ],
        ])->json();
        dd($response);
        
    }


    private function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
}
