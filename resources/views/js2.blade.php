<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran ISE</title>
    <link rel="stylesheet" href="{{ asset('css/js2/styles.css') }}">
    <script src="{{ asset('js/js2/script.js') }}" defer></script>
</head>
<body>

    <div class="container">
        <h2>Form Pendaftaran ISE</h2>

        <form id="formPendaftaran">
            <div class="form-group">
                <label for="nrp">NRP:</label>
                <input type="text" id="nrp" name="nrp" required>
            </div>

            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>

            <button type="submit" class="button">Daftar</button>
        </form>
    </div>

    <!-- Modal for error message -->
    <div id="errorModal" class="modal">
        <div class="modal-content">
            <span class="close-btn">&times;</span>
            <h3>Pesan Kesalahan</h3>
            <p id="errorMessage">Nama tidak boleh mengandung angka</p>
            <button id="closeModal" class="button">OK</button>
        </div>
    </div>

</body>
</html>
