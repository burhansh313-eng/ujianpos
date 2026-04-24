<!DOCTYPE html>
<html>
<head>
    <title>Edit Supplier</title>
</head>
<body>
    <h1>Edit Data Supplier</h1>
    <hr>
    <form action="/suppliers/{{ $supplier->id }}" method="POST">
        @csrf
        @method('PUT')
        <table cellpadding="5">
            <tr>
                <td>Nama Supplier</td>
                <td>: <input type="text" name="name" value="{{ $supplier->name }}" required maxlength="50"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="address" value="{{ $supplier->address }}" required maxlength="255"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>: <input type="text" name="phone" value="{{ $supplier->phone }}" required maxlength="50"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email" value="{{ $supplier->email }}" required maxlength="50"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" style="background: orange;">Update Data</button>
                    <a href="/suppliers">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
