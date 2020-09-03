<div>
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            Update Your Tweet
        </div>
        <div class="card-body">
            <form action="#" method="post" wire:submit.prevent="addTweet">
                <div class="form-group">
                    <textarea style="resize:none" class="form-control" placeholder="Whats is Your Mind" wire:model="body"></textarea>
                    @error('body')
                        <div class="mt-2 text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" @error('body') disabled @enderror>Tweet</button>
                </div>
            </form>
        </div>
    </div>
</div>
