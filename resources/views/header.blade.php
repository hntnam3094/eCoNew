<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Product</a>
                </li>

            </ul>
            <div class="d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <?php
                            use App\Http\Controllers\ProductController;
                             $totalCart = 0;
                            if (Session::has('user')) {
                                $totalCart = ProductController::cartItem();
                            }
                        ?>
                        <a class="nav-link active" aria-current="page" href="/cartList">Cart<span>(<?= $totalCart ?>)</span></a>
                    </li>

                    <li class="nav-item">
                        <div class="btn-group">
                            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                @if(Session::has('user'))
                                    {{Session::get('user')['name']}}
                                @else
                                    Login
                                @endif
                            </button>
                            <ul class="dropdown-menu">
                                @if(!Session::has('user'))
                                    <li><a class="nav-link active" href="/login">Login</a></li>
                                @else
                                    <li><a class="nav-link active" href="/logout">Logout</a></li>
                                @endif
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
