@extends('master')
@section('content')
    <div class="container detail--item">
        <h1>Cart List</h1>
        <div class="row">
            <div class="col-sm-10">
                <?php
                    if ($product)
                        foreach ($product as $item) { ?>
                    <div class="cart--list--item--wrapper">
                        <div class="row pt-5 cart--list--item">
                            <div class="col-3">
                                <img src="<?= $item->gallery ?>">
                            </div>
                            <div class="col-6">
                                <h5><?= $item->name ?></h5>
                                <p><?= $item->description ?></p>
                            </div>
                            <div class="col-3">
                                <a class="btn btn-warning">Remove in cart</a>
                            </div>
                        </div>
                    </div>
                <?php        }
                ?>
            </div>
        </div>
    </div>
@endsection
