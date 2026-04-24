<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
</head>
<body>
    <h1>Edit Supplier</h1>
    <hr>
    <form action="/suppliers/{{ $supplier->id }}" method="POST">
        @csrf
        @method('PUT') <!-- Wajib ada untuk proses Update di Laravel -->

        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ $supplier->name }}" required maxlength="50"><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="address" value="{{ $supplier->address }}" required maxlength="255"><br><br>

        <label>Telepon:</label><br>
        <input type="text" name="phone" value="{{ $supplier->phone }}" required maxlength="50"><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $supplier->email }}" required maxlength="50"><br><br>

        <button type="submit">Update Supplier</button>
        <a href="/suppliers">Batal</a>
    </form>
</body>
</html>
