<html>
    <head>
        <title>Data User</title>
    </head>
    <body>
        <h2>Data User</h2>
        <a href="/POS/public/user/tambah">Tambah User</a><br><br>
        <table border="1" cellpadding="2" cellspacing="0">
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Nama</th>
                <th>ID Level pengguna</th>
                <th>Kode Level</th>
                <th>Nama Level</th>
                <th>Aksi</th>
            </tr>
            @foreach($data as $user)
            <tr>
                <td>{{ $user->user_id }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->nama }}</td>
                <td>{{ $user->level_id }}</td>
                <td>{{ $user->level->level_kode }}</td>
                <td>{{ $user->level->level_nama }}</td>
                <td><a href="../public/user/ubah/{{ $user->user_id }}">Ubah</a>
                <a href="../public/user/hapus/{{ $user->user_id }}">Hapus</a></td>
            </tr>
            @endforeach
        </table>
    </body>
</html>