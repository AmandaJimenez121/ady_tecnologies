<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class ControladorSales extends Controller
{
    // Mostrar la lista de ventas
    public function Sales()
    {
        return view('sales')->with(['sales' => Sales::all()]);
    }

    // Mostrar formulario para crear un nuevo registro
    public function sales_alta()
    {
        return view("sales_alta");
    }

    // Registrar una nueva venta
    public function sales_registrar(Request $request)
    {
        $this->validate($request, [
            'date' => 'required',
            'total' => 'required',
            'user' => 'required',
        ]);

        Sales::create([
            'date' => $request->input('date'),
            'total' => $request->input('total'),
            'user' => $request->input('user'),
        ]);

        return redirect()->route('sales')->with('success', 'Registro guardado exitosamente.');
    }

    // Mostrar detalles de una venta específica
    public function sales_detalle($id)
    {
        $query = Sales::find($id);
        return view('sales_detalle')->with(['sales' => $query]);
    }

    // Mostrar formulario para editar un registro
    public function sales_editar($id)
    {
        $query = Sales::find($id);
        return view('sales_editar')->with(['sales' => $query]);
    }

    // Guardar cambios en un registro
    public function sales_salvar(Request $request, $id)
    {
        $query = Sales::find($id);

        $this->validate($request, [
            'date' => 'required',
            'total' => 'required',
            'user' => 'required',
        ]);

        $query->date = $request->input('date');
        $query->total = $request->input('total');
        $query->user = $request->input('user');
        $query->save();

        return redirect()->route("sales")->with('success', 'Registro actualizado exitosamente.');
    }

    // Eliminar un registro
    public function sales_borrar($id)
    {
        $sale = Sales::find($id);
        if ($sale) {
            $sale->delete();
        }

        return redirect()->route('sales')->with('success', 'Registro eliminado exitosamente.');
    }
}
