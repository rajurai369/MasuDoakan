@extends('frontend.app')

@section('content')

<div class="container">
    <h1>Fovorite Items</h1>
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="https://img.freepik.com/premium-photo/raw-chicken-meat-white-background_58830-691.jpg?w=2000" alt="">
                <div class="card-body">
                    <h2 class="card-title">Chicken</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>Rs.200</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://www.allrecipes.com/thmb/zN81HQ86Fa2rHnkH-KUvUf6pBZE=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Cuts-of-Beef-3x2-1-a557f31f8b13462185b4f2c17ab5b746.png" alt="">
                <div class="card-body">
                    <h2 class="card-title">Beef</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>Rs.360</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="{{ asset($home->image) }}" alt="">
                <div class="card-body">
                    <h2 class="card-title">{{ $home->title }}</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>{{$home->price  }}</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>

        <div class="col-md-4 py-2">
            <div class="card ">
                <img src="https://i0.wp.com/maidencreekbeef.com/wp-content/uploads/2022/06/raw-pork-chops-.jpeg?fit=612%2C408&ssl=1" alt="">
                <div class="card-body">
                    <h2 class="card-title">Pork</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>Rs.400</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="https://img.freepik.com/premium-photo/raw-chicken-meat-white-background_58830-691.jpg?w=2000" alt="">
                <div class="card-body">
                    <h2 class="card-title">Chicken</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>Rs.200</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="https://cdn.shopify.com/s/files/1/1509/5104/products/lambchops_jpeg_grande.jpg?v=1617345381" alt="">
                <div class="card-body">
                    <h2 class="card-title">Goat</h2>
                    <p class="card-text">The chicken is a domesticated red junglefowl species that is originally from Southeast Asia. They have also partially hybridized with other wild species of junglefowl. </p>
                    <p>Price: <strong>Rs.500</strong> </p>
                    <button class="btn btn-primary">Click</button>

                </div>

            </div>
        </div>
    </div>
</div>

@endsection
