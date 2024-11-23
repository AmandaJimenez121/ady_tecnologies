<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categories;

class ControladorCategories extends Controller
{
    public function Categories()
    {
        return view('categories')->with(['categories' => Categories::all()]);
    }

    public function categories_alta()
    {
        return view("categories_alta");
    }

    public function categories_registrar(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        Categories::create([
            'name' => $request->input('name'),
        ]);

        return redirect()->route('categories')->with('success', 'Registro guardado exitosamente.');
    }

    public function categories_detalle($id)
    {
        $query = Categories::find($id);
        return view('categories_detalle')->with(['categories' => $query]);
    }

    public function categories_editar($id)
    {
        $query = Categories::find($id);
        return view('categories_editar')->with(['categories' => $query]);
    }

    public function categories_salvar(Request $request, $id)
    {
        $query = Categories::find($id);

        $query->name = $request->name;
        $query->save();

        return redirect()->route("categories")->with('success', 'Registro actualizado exitosamente.');
    }

    public function categories_borrar($id)
    {
        $category = Categories::find($id);
        if ($category) {
            $category->delete();
        }

        return redirect()->route('categories')->with('success', 'Registro eliminado exitosamente.');
    }
}
