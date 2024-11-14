<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Products</title>
    <link href="{{ url('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ url('css/Estilo.css') }}" rel="stylesheet">
    <link href="{{ url('css/pagination.css') }}" rel="stylesheet"> <!-- Referencia al archivo CSS de paginación -->
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
<br>
<div class="container" style="margin-top: 80px;">
    <form method="GET" action="{{ route('products') }}" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search products" name="search" value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>

    <hr>
    <h2>Products</h2>
    <p style="text-align: right">
        <a href="{{ route('products_alta') }}">
            <button type="button" class="btn btn-nuevo-registro btn-sm">New Record</button> 
        </a>
    </p>
    <hr><br>
    <table class="table table-hover table-striped">
        <thead class="thead-dark">
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Stock</th>
                <th>Category</th>
                <th>Supplier</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
        @foreach ($products as $product)
            <tr class="table-row">
                <td>{{ $product->id_product }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->stock }}</td>
                <td>{{ $product->category }}</td>
                <td>{{ $product->suppliers }}</td>
                <td class="actions">
                    <a href="{{ route('products_editar', ['id'=>$product->id_product]) }}">
                        <button type="button" class="btn btn-outline-warning btn-sm">Edit</button>
                    </a>
                    <a href="{{ route('products_borrar', ['id'=>$product->id_product]) }}">
                        <button type="button" class="btn btn-outline-danger btn-sm" onclick="return confirm('Are you sure you want to delete this record?')">Delete</button>
                    </a>
                    <a href="{{ route('products_detalle', ['id'=>$product->id_product]) }}">
                        <button type="button" class="btn btn-outline-info btn-sm">Details</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="custom-pagination">
        {{ $products->links() }}
    </div>
</div>
</body>
</html>
