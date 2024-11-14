<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
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
                        <!-- Agregar ruta de Home aquí -->
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
                        <li class="nav-item">
                            <!-- Logout button -->
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container" style="margin-top: 80px;">
        <!-- Home Section -->
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card text-center">
                    <div class="card-body">
                        <h2 class="card-title mb-4">Bienvenido a ADYVANCE TECHNOLOGIES</h2>
                        <p class="card-text">Aquí puedes gestionar productos, usuarios, proveedores y más. Selecciona una opción en el menú para comenzar.</p>
                        <a href="{{ route('products') }}" class="btn btn-primary">Ver Productos</a>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <!-- You can add more sections or content below as needed -->

    </div>
</body>
</html>
