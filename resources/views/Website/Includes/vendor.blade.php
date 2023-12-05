    <!-- Vendor Start -->
    <div class="container-fluid">
        <div class="container ">
            <h2 class="mb-4">Our Brands</h2>
            <div class="owl-carousel vendor-carousel">
                @foreach($brands as $brand)
                <div class=" p-4">
                    <img src="{{ asset('storage/' . $brand->logo_path) }}" alt="Brand Logo">
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Vendor End -->
