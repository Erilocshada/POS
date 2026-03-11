<html>
    <head>
        <title>Tambah User</title>
    </head>
    <body>
        <h2>Tambah User</h2>
        <form action="../user/tambah_simpan" method="post">
            @csrf
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="Masukkan Username"><br><br>

            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama"><br><br>

            <label> Password </label>
            <input type="password" name="password" id="password" placeholder="Masukkan Password"><br><br>

            <label for="level_id">ID Level Pengguna:</label>
            <input type="number" name="level_id" id="level_id" placeholder="Masukkan ID Level"><br><br>

            <input type="submit" value="Simpan">
        </form>
    </body>
</html>