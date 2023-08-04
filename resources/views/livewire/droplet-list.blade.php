<div>
    @forelse ($droplets as $droplet)
        <livewire:droplet-item :droplet="$droplet">
    @empty
        <h2>Still no droplets here</h2>
    @endforelse
</div>
<script>
    const ips = document.querySelectorAll(".ip");
    ips.forEach(element => {
        element.addEventListener('click',(e)=>{
            const IP = e.target.innerText; 
            console.log(e.target.innerText)
            navigator.clipboard.writeText(IP)
            e.target.innerHTML = '<span class="text-green-800">Copied</span>';
            setTimeout(() => {
                e.target.innerHTML = IP
            }, 2000);
        })
    });
</script>