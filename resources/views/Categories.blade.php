<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of category</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Estilo.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="">
                <img src="{{ asset('img/LogoA.jpg')}}" alt="" width="60"> <!-- corregido el typo 'scr' por 'src' -->
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
        <h2>Categories</h2> 
        <p style="text-align: right">
            <a href="{{ route('categories_alta') }}">
                <button type="button" class="btn btn-nuevo-registro btn-sm">New Record</button> 
            </a>
        </p>
        <br>
        <hr><br>
        <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($categories as $category)
        <tr class="table-row">
            <td>{{ $category->id_category }}</td>
            <td>{{ $category->name }}</td>
            <td class="actions">
                <a href="{{ route('categories_editar', ['id'=>$category->id_category]) }}">
                    <button type="button" class="btn btn-outline-warning btn-sm">Editar</button>
                </a>
                <a href="{{ route('categories_borrar', ['id'=>$category->id_category]) }}">
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Seguro que desea borrar el registro?')">Borrar</button>
                </a>
                <a href="{{ route('categories_detalle', ['id'=>$category->id_category]) }}">
                    <button type="button" class="btn btn-outline-info btn-sm">Detalles</button>
                </a>
            </td>
        </tr> 
        @endforeach
        </tbody>
        </table>
    </div>

</body>
</html>
