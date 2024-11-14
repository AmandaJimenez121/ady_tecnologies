<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Record</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Estilo.css') }}" rel="stylesheet"> 
    <script src="{{ url('js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/logo_utvt.jpg')}}" alt="" width="45"> <!-- corregido el typo 'scr' por 'src' -->
                ADYVANCE TECHNOLOGIES
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button> <!-- corregido 'officanvas' por 'offcanvas' -->
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
    <div class="container" style="margin-top: 80px;">
        <h2>Products</h2>
        <hr>
        <br>
        <form action="{{ route('products_registrar') }}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <h3>Nuevo Registro</h3>
            <br>
            <br>
            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="name" value="{{ old('name') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Name</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="description" value="{{ old('description') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Description</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="price" value="{{ old('price') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Price</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="stock" value="{{ old('stock') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Stock</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="category" value="{{ old('category') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Category</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <div class="form-floating mb-3">
                <input type="text" class="form-control transparent-input" name="suppliers" value="{{ old('suppliers') }}" id="floatingFecha" aria-describedby="FnHelp">
                <label for="floatingPrice">Suppliers</label>
                <div id="FnHelp" class="form-text"></div>
            </div>

            <hr><br>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('products') }}" class="btn btn-danger">Cancelar</a> 
        </form>

        <br><br><br>
    </div>
</body>
</html>
