@extends('master')

@section('content')
<div class="container detail--item">
    <div class="row">
        <div class="col-6">
            <img src="<?= $product->gallery ?>">
        </div>
        <div class="col-6">
            <h1>Name: <?= $product->name ?></h1>
            <h2>Description: <?= $product->description ?></h2>
            <h3>Price: <?= $product->price ?> VND</h3>
            <br><br>
            <form action="/add-to-cart" method="post">
                @csrf
                <input type="hidden" name="product_id" value="<?= $product->id ?>">
                <button class="btn btn-success">Add to Cart</button>
            </form>
            <a class="btn btn-danger">Buy now</a>
            <br><br><br>
            <div class="row">
                <h5>More Image</h5>
                <div class="col-3">
                    <img src="<?= $product->gallery ?>">
                </div>
                <div class="col-3">
                    <img src="<?= $product->gallery ?>">
                </div>
                <div class="col-3">
                    <img src="<?= $product->gallery ?>">
                </div>
                <div class="col-3">
                    <img src="<?= $product->gallery ?>">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
