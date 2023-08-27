<div class="p-5 rounded-xl shadow-xl bg-zinc-300 my-3 mx-2 hover:bg-blue-100 transition-colors flex">
    <img class="float-left w-16 mr-3" src="">
    <div>
        <h6 class="font-bold  text-base capitalize">
            @if(isset($site['targets']['production']))
                <a target="_blank" href="https://{{ $site['targets']['production']['url']}}">{{ $site['name']}} </a>
            @else
                {{ $site['name']}}
            @endif
        </h6>
        <p class="text-blue-800">
            <span class="font-bold text-black">Provider:</span> 
            @if($site['link']['type'] == 'github')
                <a target="_blank" href="https://github.com/{{$site['link']['org']}}/{{$site['link']['repo']}}">{{ $site['link']['type']}}</a>
            @endif
        </p>
    </div>
</div>