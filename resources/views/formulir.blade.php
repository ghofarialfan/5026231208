<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel - www.malasngoding.com</title>
</head>
<body>

    <!-- Formulir dengan metode POST -->
    <form action="/formulir/proses" method="post">
        <!-- Blade directive untuk menambahkan CSRF token -->
         @csrf

        <!-- Input untuk nama -->
        Nama:
        <input type="text" name="nama" required> <br/>

        <!-- Input untuk alamat -->
        Alamat:
        <input type="text" name="alamat" required> <br/>

        <!-- Tombol kirim -->
        <input type="submit" value="Simpan">
    </form>

</body>
</html>
