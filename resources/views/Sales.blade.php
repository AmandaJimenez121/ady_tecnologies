<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Sales</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Estilo.css') }}" rel="stylesheet">
    <script src="{{ url('js/bootstrap.bundle.min.js') }}"></script>
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
        <br><br>
        <h2>Sales</h2> 
        <p style="text-align: right">
            <a href="{{ route('sales_alta') }}">
                <button type="button" class="btn btn-nuevo-registro btn-sm">New Record</button> 
            </a>
        </p>
        <br>
        <hr><br>
        <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Date</th>
                <th>Total</th>
                <th>User</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ( $sales as $sale )
        <tr class="table-row">
            <td>{{ $sale->id_sale }}</td>
            <td>{{ $sale->date }}</td>
            <td>{{ $sale->total }}</td>
            <td>{{ $sale->user }}</td>
            <td class="actions">
                <a href="{{ route('sales_editar', ['id'=>$sale->id_sale]) }}">
                    <button type="button" class="btn btn-outline-warning btn-sm">Editar</button>
                </a>
                <a href="{{ route('sales_borrar', ['id'=>$sale->id_sale]) }}">
                    <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('¿Seguro que desea borrar el registro?')">Borrar</button>
                </a>
                <a href="{{ route('sales_detalle', ['id'=>$sale->id_sale]) }}">
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
