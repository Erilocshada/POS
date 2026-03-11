<html>
    <body>
        <h2>Form Ubah Data User</h2>
        <a href="..">Kembali</a>

        <form method="post" action="../ubah_simpan/{{$data->user_id}}">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" placeholder="Masukkan username" value="{{$data->username}}"><br><br>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" placeholder="Masukkan nama" value="{{$data->nama}}"><br><br>

            <label>password</label>
            <input type="password" name="password" placeholder="Masukkan password" value="{{$data->password}}"><br><br>

            <label for="level_id">ID Level Pengguna:</label>
            <input type="number" name="level_id" placeholder="Masukkan level_id" value="{{$data->level_id}}"><br><br>

            <input type="submit" class="btn btn-succes" value="Ubah">
        </form>
    </body>
</html>