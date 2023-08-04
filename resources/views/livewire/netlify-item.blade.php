<div class="p-5 rounded-xl shadow-xl bg-zinc-300 my-3 mx-2 hover:bg-blue-100 transition-colors flex">
    <img class="float-left w-16 mr-3" src="{{ $site['screenshot_url']}}">
    <div>
        <h6 class="font-bold  text-base capitalize"><a target="_blank" href="{{$site['url']}}">{{ $site['name']}} </a></h6>
        <p class="text-blue-800">
            <span class="font-bold text-black">Provider:</span> 
            @if(isset($site['build_settings']['provider']))
                <a href="{{$site['build_settings']['repo_url']}}">{{ $site['build_settings']['provider']}}</a>
            @endif
        </p>
    </div>
</div>