<!DOCTYPE html>
<html lang="id">
<head>
    <title>Daftar Supplier</title>
    <link rel="icon" href="{{ asset('images/favicon.ico') }}">
</head>
<body>
    <h1>Data Supplier</h1>
    @if(session('success'))
    <div style="background-color: #d4edda; color: #155724; padding: 10px; margin-bottom: 10px; border: 1px solid #c3e6cb; border-radius: 5px;">
        {{ session('success') }}
    </div>
    @endif

    <a href="/"><button>Kembali ke Menu Utama</button></a>
    <a href="/suppliers/create"><button style="background: green; color: white;">+ Tambah Supplier Baru</button></a>
    <hr>

    <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; border-collapse: collapse;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th>ID</th>
                <th>Nama Supplier</th>
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($suppliers as $s)
            <tr>
                <td>{{ $s->id }}</td>
                <td>{{ $s->name }}</td>
                <td>{{ $s->address }}</td>
                <td>{{ $s->phone }}</td>
                <td>{{ $s->email }}</td>
                <td>
                    <a href="/suppliers/{{ $s->id }}/edit"><button>Edit</button></a>

                    <form action="/suppliers/{{ $s->id }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin hapus supplier ini? Data sales terkait juga akan terhapus (Cascade)')" style="background: red; color: white;">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
