<div>
    <div class="card">
        <div class="card-header">Timeline</div>
        <div class="card-body">
            @foreach ($tweets as $tweet)
                <livewire:tweets.single :key="$tweet->id" :tweet="$tweet">
            @endforeach
            <div class="row justify-content-center">
                {{ $tweets->links() }}
            </div>
            <div class="row justify-content-center">
                @if ($tweets->hasMorePages())
                    <button class="btn btn-primary" wire:click.prevent="loadMore">Load More</button>
                @endif
            </div>
        </div>
    </div>
</div>
