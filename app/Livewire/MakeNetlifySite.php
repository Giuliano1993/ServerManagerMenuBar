<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class MakeNetlifySite extends Component
{
    public function render()
    {
        return view('livewire.make-netlify-site');
    }




    public function createWebsite(){
        

        $deployKey = Http::withToken(env('NETLIFY_TOKEN'))->contentType('application/json')->post('https://api.netlify.com/api/v1/deploy_keys')->json(); 
        $n  = 'test-site-'.$this->generateRandomString(5);
        $response = Http::withToken(env('NETLIFY_TOKEN'))->contentType('application/json')->post('https://api.netlify.com/api/v1/giuliano1993/sites',[
            'name'=>$n,
            'subdomain'=>$n,
            "git_provider"=>'github',
            "repo"=>[
                "provider"=>"github",
                 "repo_id"=>565925417,
                 "repo"=>"Giuliano1993/vue-the-menue",
                 /*"repo_id"=>597540924,
                 "repo"=>"Giuliano1993/ghostylab-react-site",*/
                 "private"=>false,
                 "branch"=>"master",
                 "allowed_branches"=>["master"],
                 "repo_branch"=>"master",
                 "cmd"=>"npm run build",
                 "dir"=>"build/",
                 "deploy_key_id"=> $deployKey['public_key']
            ]

        ])->json();
        //return $response;
    }


    private function generateRandomString($length = 25) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    
}
