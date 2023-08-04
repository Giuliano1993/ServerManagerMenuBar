<div>
    @forelse ($sites as $site)
        <livewire:netlify-item :site="$site">
    @empty
        <h2>Still no sites here</h2>
    @endforelse
</div>
