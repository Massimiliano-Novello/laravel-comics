<section class="shop-content d-flex align-items-center">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">

            @foreach ($shop as $item)
            <div class="card">
                <p>{{ $item['title'] }}</p>
            </div>
            @endforeach
        </div>
    </div>
</section>