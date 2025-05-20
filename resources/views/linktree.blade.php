<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Now</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
            padding: 20px;
            width: 100%;
            max-width: 400px; /* Mengurangi lebar kontainer */
        }

        .header {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .jargon {
            font-size: 14px;
            font-weight: lighter;
        }

        .buttons {
            display: block;
            margin-top: 20px;
        }

        .buttons a {
            text-decoration: none;
            background-color: #f0f0f0;
            padding: 12px 18px;
            display: flex;
            align-items: center; /* Menyelaraskan gambar dan teks secara vertikal */
            justify-content: flex-start; /* Memposisikan gambar ke kiri */
            text-align: center;
            border-radius: 5px;
            margin: 12px 0; /* Menambahkan spasi antar tombol */
            width: 85%; /* Lebar tombol sedikit lebih kecil */
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1); /* Tambahkan bayangan */
            margin-left: auto;
            margin-right: auto;
            position: relative; /* Membuat tombol sebagai konteks posisi untuk titik tiga */
        }

        .buttons a img {
            margin-right: 15px; /* Memberi ruang antara gambar dan teks */
            width: 30px; /* Membesarkan ukuran ikon */
        }

        .buttons a span {
            text-align: center;
            flex-grow: 1; /* Membuat teks berada di tengah */
        }

        /* Styling untuk titik tiga vertikal */
        .three-dots {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            font-size: 20px;
            cursor: pointer;
        }

        .footer {
            margin-top: 20px;
            font-size: 14px;
        }

        .logo {
            width: 100px;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: black;
        }

        a:hover {
            color: #007bff;
        }

    </style>
</head>
<body>

    <div class="container">
        <img src="{{ asset('images/linktree/logo.png') }}" alt="Logo" class="logo">
        <div class="header">
            Shop now
        <div class="jargon">
            For daily activities
        </div>
        </div>

        <div class="buttons">
            <a href="https://wa.me/" target="_blank">
                <img src="{{ asset('images/linktree/whatsapp-icon.png') }}" alt="WhatsApp">
                <span>WHATSAPP</span>
                <span class="three-dots">...</span>
            </a>
            <a href="#" target="_blank">
                <img src="{{ asset('images/linktree/store-icon.png') }}" alt="Offline Store">
                <span>OFFLINE STORE</span>
                <span class="three-dots">...</span>
            </a>
            <a href="https://shopee.co.id/" target="_blank">
                <img src="{{ asset('images/linktree/shopee-icon.png') }}" alt="Shopee Indonesia">
                <span>SHOPEE INDONESIA</span>
                <span class="three-dots">...</span>
            </a>
            <a href="https://shopee.co.th/" target="_blank">
                <img src="{{ asset('images/linktree/shopee-icon.png') }}" alt="Shopee Thailand">
                <span>SHOPEE THAILAND</span>
                <span class="three-dots">...</span>
            </a>
            <a href="https://shopee.vn/" target="_blank">
                <img src="{{ asset('images/linktree/shopee-icon.png') }}" alt="Shopee Vietnam">
                <span>SHOPEE VIETNAM</span>
                <span class="three-dots">...</span>
            </a>
            <a href="https://shopee.sg/" target="_blank">
                <img src="{{ asset('images/linktree/shopee-icon.png') }}" alt="Shopee Singapore">
                <span>SHOPEE SINGAPORE</span>
                <span class="three-dots">...</span>
            </a>
            <a href="https://shopee.my/" target="_blank">
                <img src="{{ asset('images/linktree/shopee-icon.png') }}" alt="Shopee Malaysia">
                <span>SHOPEE MALAYSIA</span>
                <span class="three-dots">...</span>
            </a>
        </div>

        <div class="footer">
            Bergabung dengan 27.original di <a href="https://linktr.ee/" target="_blank">Linktree</a>
        </div>
    </div>

</body>
</html>
