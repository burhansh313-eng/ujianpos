<!DOCTYPE html>
<html>
<head>
    <title>Edit Sales</title>
</head>
<body>
    <h1>Edit Transaksi Sales</h1>
    <hr>
    <form action="/sales/{{ $sale->id }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama Supplier:</label><br>
        <select name="supplier_id" required>
            @foreach($suppliers as $s)
                <option value="{{ $s->id }}" {{ $sale->supplier_id == $s->id ? 'selected' : '' }}>
                    {{ $s->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <label>Total Transaksi (Rp):</label><br>
        <input type="number" name="total" value="{{ $sale->total }}" required>
        <br><br>

        <button type="submit" style="background: orange;">Update Transaksi</button>
        <a href="/sales">Batal</a>
    </form>
</body>
</html>
