<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Sales</title>
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
        <h2>Sales</h2> 
        <hr>
        <br>
        <form action="{{ route('sales_salvar', $sales->id_sale) }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @method('PUT') 

            <h3>Edit Sales</h3>

            <div class="form-floating mb-3">
                <input type="date" class="form-control transparent-input" name="date" value="{{ old('date', $sales->date) }}" id="floatingNombre" aria-describedby="NombreHelp">
                <label for="floatingNombre">Date</label>
                <div id="NombreHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="total" value="{{ old('total', $sales->total) }}" id="floatingNombre" placeholder="ejemplo: Carol Valeria Garcia Peña" aria-describedby="NombreHelp">
                <label for="floatingNombre">Total</label>
                <div id="NombreHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="user" value="{{ old('user', $sales->user) }}" id="floatingFechaN" aria-describedby="FnHelp">
                <label for="floatingFechaN">User</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <hr><br>
            <button type="submit" class="btn btn-primary">Modificar</button>
            <a href="{{ route('sales') }}">
                <button type="button" class="btn btn-danger">Cancelar</button>
            </a>
        </form>

        <br><br><br>
    </div>
</body>
</html>
