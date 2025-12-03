<div class="container py-4">
    <div class="row">
        <div class="col-md-5">
            <div class="card shadow-sm p-3">
                @if($product->productImages && $product->productImages->count() > 0)
                <img src="{{ asset('storage/' . $product->productImages->first()->image_path) }}"
                    class="img-fluid rounded" alt="{{ $product->name }}">
                @else
                <img src="{{ asset('images/no-image.png') }}" class="img-fluid rounded">
                @endif
            </div>
        </div>
        <div class="col-md-7">
            <h2 class="mb-3">{{ $product->name }}</h2>
            <h4 class="text-primary mb-3">${{ number_format($product->price, 2) }}</h4>
            <p class="mb-4">{{ $product->description }}</p>
            <a href="{{ route('home') }}" class="btn btn-secondary">Back to Products>
        </div>
        <form method="post" action="">
            @csrf
            <button class="btn btn-primary">Add to Cart</button>
        </form>
    </div>
</div>