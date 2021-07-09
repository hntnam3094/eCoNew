@extends('master')
@section('content')
    <div class="container-fluid">
        <div class="container">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <?php
                        if ($product)
                            foreach ($product as $key => $item) { ?>
                        <a href="product/{{$item['id']}}">
                            <div class="carousel-item <?= $item->id === 1 ? 'active' : '' ?>">
                                <img src="<?= $item->gallery ?>" class="slider-img d-block w-100" alt="...">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5><?= $item->name ?></h5>
                                    <p><?= $item->description ?></p>
                                </div>
                            </div>
                        </a>
                    <?php         }
                    ?>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div class="trending--wrapper">
                <h3>Trending Products</h3>
                <?php
                if ($product)
                foreach ($product as $key => $item) {
                if ($key === 5)
                    break;
                ?>
                <a href="product/{{$item['id']}}">
                    <div class="trending--item <?= $item->id === 1 ? 'active' : '' ?>">
                        <img src="<?= $item->gallery ?>" class="trending--image" alt="...">
                    </div>
                </a>
                <?php         }
                ?>
            </div>
        </div>
    </div>

@endsection
