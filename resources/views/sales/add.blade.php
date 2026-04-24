<!DOCTYPE html>
<html>
<head>
    <title>Tambah Sales</title>
</head>
<body>
    <h1>Tambah Transaksi Baru</h1>
    <hr>
    <form action="/sales" method="POST">
        @csrf
        <label>Pilih Supplier:</label><br>
        <select name="supplier_id" required>
            <option value="">-- Pilih Supplier --</option>
            @foreach($suppliers as $s)
                <option value="{{ $s->id }}">{{ $s->name }}</option>
            @endforeach
        </select>
        <br><br>

        <label>Total Belanja (Rp):</label><br>
        <input type="number" name="total" placeholder="Masukkan angka saja" required>
        <br><br>

        <button type="submit" style="background: blue; color: white;">Simpan Transaksi</button>
        <a href="/sales">Batal</a>
    </form>
</body>
</html>
