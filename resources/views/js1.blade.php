<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjumlahan Dua Bilangan</title>
    <link rel="stylesheet" href="{{ asset('css/JS/styles.css') }}">
    <script src="{{ asset('js/JS/script.js') }}" defer></script>
</head>
<body>

    <div class="container">
        <h2>Klik di sini untuk melakukan penjumlahan</h2>

        <div class="form-group">
            <label for="bilangan1">Bilangan 1:</label>
            <input type="number" id="bilangan1" name="bilangan1">
        </div>

        <div class="form-group">
            <label for="bilangan2">Bilangan 2:</label>
            <input type="number" id="bilangan2" name="bilangan2">
        </div>

        <div class="result">
            <p>Hasil Penjumlahan: <span id="hasil">0</span></p>
        </div>

        <button class="button" onclick="tambah()">Tambah</button>
    </div>

</body>
</html>
