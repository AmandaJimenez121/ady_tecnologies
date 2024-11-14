<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class ControladorSales extends Controller
{
    public function Sales()
    {
        return view('sales')->with(['sales' => Sales::all()]);
    }

    public function sales_alta()
    {
        return view("sales_alta");
    }

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

        return redirect()->route('sales');
    }

    public function sales_detalle($id)
    {
        $query = Sales::find($id);
        return view('sales_detalle')->with(['sales' => $query]);
    }

    public function sales_editar($id)
    {
        $query = Sales::find($id);
        return view('sales_editar')->with(['sales' => $query]);
    }

    public function sales_salvar(Request $request, $id)
    {
        $query = Sales::find($id);

        $query->date = $request->date;
        $query->total = $request->total;
        $query->user = $request->user;
        $query->save();

        return redirect()->route("sales");
    }

    public function sales_borrar($id)
    {
        $sale = Sales::find($id);
        if ($sale) {
            $sale->delete();
        }

        return redirect()->route('sales');
    }
}
