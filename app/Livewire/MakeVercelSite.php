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

        
        $deployCreated = $this->createDeploy($response['id']);
        dd($deployCreated);
    }

    public function createDeploy($projId){
        $response = Http::withToken(env('VERCEL_TOKEN'))->contentType('application/json')->post('https://api.vercel.com/v13/deployments',[
            "name"=> "",
            "build"=> [
                "env"=> []
            ],
            "buildCommand"=> "npm build",
            "builds"=> [
                [
                    "src"=> "package.json",
                    "use"=> "@vite/vite"
                ]
            ],
            "project"=> $projId,
            "installCommand"=> "npm install",
            "devCommand"=> "npm run dev",
            "framework"=> "vue",
            "git"=> [
                "deploymentEnabled"=> [
                    "main"=> true
                ]
            ],
            "gitMetadata"=> [
                "remoteUrl"=> "Giuliano1993/vue-the-menue",
                "commitAuthorName"=> "Giuliano1993",
                "commitRef"=> "master",
                "commitSha"=> ""
            ],
            "gitSource"=> [
                "type"=> "github",
                "repoId"=> "565925417",
                "ref"=> "master"
            ],
            "public"=> true,
            "target"=> "production",
            "projectSettings"=> [
                "buildCommand"=> "npm build",
                "commandForIgnoringBuildStep"=> null,
                "devCommand"=> "npm run dev",
                "framework"=> "vue",
                "installCommand"=> "npm install",
                "outputDirectory"=> null,
                "rootDirectory"=> null,
                "serverlessFunctionRegion"=> null,
                "skipGitConnectDuringLink"=> false,
                "sourceFilesOutsideRootDirectory"=> false
            ]
        ])->json();

        return $response;
    }

    public function redeploy($deployproj){
        $response = Http::withToken(env('VERCEL_TOKEN'))->contentType('application/json')->post('https://api.vercel.com/v9/projects',[
            "name"=>"UNIQUE_TITLE_FROM_INIT",
            "project"=>"PRJ_ID_FROM_INIT_RESPONSE",
            "deploymentId"=>"DEPLOYMENT_ID"
        ])->json();
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
