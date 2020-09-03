<div class="container">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-header">{{ $product->name }}</div>
                    <div class="card-body">{{ $product->description }}</div>
                    <div class="card-footer d-flex justify-content-between align-items-center">
                        <div>
                            <sup>Rp.</sup>{{ number_format($product->price) }}
                        </div>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
