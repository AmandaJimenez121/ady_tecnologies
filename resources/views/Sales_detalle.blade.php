<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail of Sales</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Estilo.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="">
            <img src="{{ asset('img/LogoA.jpg')}}" alt="" width="60">
            ADYVANCE TECHNOLOGIES
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('home')}}">Home</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('sales')}}">Sales</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('categories')}}">Categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('products')}}">Products</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
    <div class="container">
        </div>
        <br>
        <hr>
        <br>
        <h2>Detail of Sales</h2>
        <hr>
        <br>
        
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-md-8">
                    <div class="card-body info-container">
                        <p class="card-text"><strong>Id of sales:</strong> {{ $sales->id_sale }}</p>
                        <p class="card-text"><strong>Date:</strong> {{ $sales->date }}</p>
                        <p class="card-text"><strong>Total:$</strong> {{ $sales->total }}</p>
                        <p class="card-text"><strong>User:</strong> {{ $sales->user }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <a href="{{ route('sales') }}" class="btn btn-regresar">Regresar</a>
        
    </div>
</body>
</html>
