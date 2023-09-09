<div class="p-5 rounded-xl shadow-xl bg-zinc-300 my-3 mx-2 hover:bg-blue-100 transition-colors">
    <h6 class="font-bold  text-base capitalize"><a target="_blank" href="https://cloud.digitalocean.com/droplets/{{$droplet['id']}}/">{{ $droplet['name']}} </a></h6>
    <p class="text-blue-800">
        <span class="font-bold text-black">Ip:</span> 
        <span wire:click="openTerminal" class="ip cursor-pointer">{{$droplet['networks']['v4'][0]['ip_address']}}</span>
    </p>
    @if($error)
        <p class="text-red-300">{{ $error }}</p>
    @endif
</div>