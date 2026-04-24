<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Supplier;

class SaleController extends Controller
{
    public function index() {
        $sales = Sale::with('supplier')->get(); // Mengambil data sales & nama suppliernya
        return view('sales.index', compact('sales'));
    }

    public function create() {
        $suppliers = Supplier::all(); // Mengambil daftar supplier untuk dropdown
        return view('sales.add', compact('suppliers'));
    }

    public function store(Request $request) {
        \App\Models\Sale::create($request->all());

        // Pastikan mengirim pesan 'success'
        return redirect('/sales')->with('success', 'Data Penjualan Berhasil Disimpan!');
    }

    public function edit($id) {
        $sale = Sale::findOrFail($id);
        $suppliers = Supplier::all();
        return view('sales.edit', compact('sale', 'suppliers'));
    }

    public function update(Request $request, $id) {
        $sale = \App\Models\Sale::findOrFail($id);
        $sale->update($request->all());

        // Kirim pesan sukses ke halaman index sales
        return redirect('/sales')->with('success', 'Data Penjualan Berhasil Diperbarui!');
    }

    public function destroy($id) {
        $sale = \App\Models\Sale::findOrFail($id);
        $sale->delete();

        // Kirim pesan sukses ke halaman index sales
        return redirect('/sales')->with('success', 'Data Penjualan Berhasil Dihapus!');
    }
}
