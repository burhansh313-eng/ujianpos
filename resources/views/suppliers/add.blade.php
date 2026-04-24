<!DOCTYPE html>
<html>
<head>
    <title>Tambah Supplier</title>
</head>
<body>
    <h1>Tambah Supplier Baru</h1>
    <hr>
    <form action="/suppliers" method="POST">
        @csrf
        <table cellpadding="5">
            <tr>
                <td>Nama Supplier</td>
                <td>: <input type="text" name="name" required maxlength="50"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>: <input type="text" name="address" required maxlength="255"></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>: <input type="text" name="phone" required maxlength="50"></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>: <input type="email" name="email" required maxlength="50"></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <button type="submit" style="background: blue; color: white;">Simpan Data</button>
                    <a href="/suppliers">Batal</a>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
