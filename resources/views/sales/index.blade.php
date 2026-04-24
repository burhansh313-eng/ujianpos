<!DOCTYPE html>
<html>
<head>
    <title>Daftar Sales</title>
</head>
<body>
    <h1>Data Transaksi Sales</h1>
    @if(session('success'))
    <div style="background: #d4edda; color: #155724; padding: 10px; margin-bottom: 10px; border: 1px solid #c3e6cb;">
        {{ session('success') }}
    </div>
@endif

    <a href="/"><button>Kembali ke Menu Utama</button></a>
    <a href="/sales/create"><button style="background: green; color: white;">+ Tambah Transaksi</button></a>
    <hr>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Total Transaksi</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sales as $sale)
            <tr>
                <td>{{ $sale->id }}</td>
                <td>{{ $sale->supplier->name ?? 'Supplier Tidak Ditemukan' }}</td>
                <td>Rp {{ number_format($sale->total, 0, ',', '.') }}</td>
                <td>{{ $sale->created_at->format('d/m/Y') }}</td>
                <td>
                    <a href="/sales/{{ $sale->id }}/edit"><button>Edit</button></a>
                    <form action="/sales/{{ $sale->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus transaksi ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
