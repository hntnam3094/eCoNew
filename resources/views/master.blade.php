<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>eCo Laravel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}
    @yield('content')
{{--    {{View::make('footer')}}--}}
</body>
</html>

<style>
    .login-form {
        padding-top: 100px;
    }

    .fullwidth-btn {
        width: 100%;
    }

    img.slider-img {
        height: 400px !important;
    }

    .carousel-caption {
        background-color: #67a9abb0;
    }

    .trending--item {
        float:left;
        padding: 25px;
    }
    .trending--image {
        width: 200px;
        height: 150px;
    }

    .detail--item {
        padding-top: 100px;
    }
    .detail--item img {
        width: 100%;
        height: auto;
    }
</style>
