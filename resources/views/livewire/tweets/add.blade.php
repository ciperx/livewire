<div>
    <div class="card mb-3">
        <div class="card-header">
            Update Your Tweet
        </div>
        <div class="card-body">
            <form action="#" method="post" wire:submit.prevent="addTweet">
                <div class="form-group">
                    <textarea style="resize:none" class="form-control" placeholder="Whats is Your Mind" wire:model="body"></textarea>
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary">Tweet</button>
                </div>
            </form>
        </div>
    </div>
</div>
