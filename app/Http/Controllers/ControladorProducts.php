<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ControladorProducts extends Controller
{
    public function Products(Request $request)
    {
        $query = $request->input('search');

        $products = Products::when($query, function ($queryBuilder) use ($query) {
            $queryBuilder->where('name', 'LIKE', '%' . $query . '%');
        })->paginate(3);

        return view('products')->with(['products' => $products]);
    }

    public function products_alta()
    {
        return view("products_alta");
    }

    public function products_registrar(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'category' => 'required',
            'suppliers' => 'required',
        ]);

        Products::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'price' => $request->input('price'),
            'stock' => $request->input('stock'),
            'category' => $request->input('category'),
            'suppliers' => $request->input('suppliers')
        ]);

        return redirect()->route('products')->with('success', 'Registro guardado exitosamente.');
    }

    public function products_detalle($id)
    {
        $query = Products::find($id);
        return view('products_detalle')->with(['products' => $query]);
    }

    public function products_editar($id)
    {
        $query = Products::find($id);
        return view('products_editar')->with(['products' => $query]);
    }

    public function products_salvar(Request $request, $id)
    {
        $query = Products::find($id);

        $query->name = $request->name;
        $query->description = $request->description;
        $query->price = $request->price;
        $query->stock = $request->stock;
        $query->category = $request->category;
        $query->suppliers = $request->suppliers;
        $query->save();

        return redirect()->route("products")->with('success', 'Registro actualizado exitosamente.');
    }

    public function products_borrar($id)
    {
        $product = Products::find($id);
        if ($product) {
            $product->delete();
        }

        return redirect()->route('products')->with('success', 'Registro eliminado exitosamente.');
    }
}
