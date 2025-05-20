function tambah() {
    // Ambil nilai dari input dan ubah menjadi string
    var bilangan1 = document.getElementById('bilangan1').value;
    var bilangan2 = document.getElementById('bilangan2').value;

    // Gabungkan kedua bilangan sebagai string
    var hasil = bilangan1 + bilangan2;

    // Tampilkan hasil gabungan
    document.getElementById('hasil').innerText = hasil;
}
