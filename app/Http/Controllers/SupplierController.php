<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier; // Import model Supplier

class SupplierController extends Controller
{
    // READ (index.php) - Menampilkan semua data
    public function index()
    {
        $suppliers = Supplier::all();
        return view('suppliers.index', compact('suppliers'));
    }

    // CRUD - ADD (add.php) - Menampilkan form tambah
    public function create()
    {
        return view('suppliers.add');
    }

    // CRUD - SAVE (save.php) - Menyimpan data ke database
    public function store(Request $request)
    {
        \App\Models\Supplier::create($request->all());
        return redirect('/suppliers')->with('success', 'Data Supplier Berhasil Disimpan!');
    }

    // UPDATE - EDIT (edit.php) - Menampilkan form edit
    public function edit($id)
    {
        $supplier = Supplier::findOrFail($id);
        return view('suppliers.edit', compact('supplier'));
    }

    // UPDATE - UPDATE (update.php) - Memperbarui data
    public function update(Request $request, $id)
    {
        $supplier = \App\Models\Supplier::findOrFail($id);
        $supplier->update($request->all());

        // Pastikan ada bagian ->with('success', ...)
        return redirect('/suppliers')->with('success', 'Data Supplier Berhasil Diperbarui!');
    }

    // DELETE (delete.php) - Menghapus data
    public function destroy($id)
    {
        $supplier = \App\Models\Supplier::findOrFail($id);
        $supplier->delete();

        // Kirim pesan sukses ke halaman index
        return redirect('/suppliers')->with('success', 'Data Supplier Berhasil Dihapus!');
    }
}
