<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="company-name">
            <a href="/home" class="underline">
            <h1>Berry & Barn Farm</h1>
        </div>
    </header>

    <nav class="navbar">
        <ul>
            <li><a href="/profil">Profil</a></li>
            <li><a href="/visimisi">Visi/Misi</a></li>
            <li><a href="/produkkami">Produk Kami</a></li>
            <li><a href="/kontakkami">Kontak Kami</a></li>
            <u><strong><li><a href="/aboutus">About Us</a></li></strong></u>
        </ul>
    </nav>

    <div class="container">
        <aside class="sidebar">
            <div class="logo">
            <a href="/home">
            <img src="berryfarm.png" alt="Company Logo">
            </a>
            </div>
            <div class="h1">
            <h1><a href="/home">Home</a></h1>
        </div>
            <ul>    
                <li><a href="/artikel">Artikel</a></li>
                <li><a href="/event">Event</a></li>
                <li><a href="/galeryimg">Galeri Foto</a></li>
                <li><a href="/klien">Klien Kami</a></li>
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" style="background:none; border:none; color:inherit; padding: 0;">Sign Out</button>
                    </form>
                </li>
                
            </ul>
        </aside>

        <main class="content">
            <div class="kontakkami">
                <h3>Kontak Kami,
Kami senang mendengar dari Anda! Jika Anda memiliki pertanyaan, saran, atau ingin mengetahui lebih lanjut tentang produk dan layanan kami, jangan ragu untuk menghubungi kami melalui informasi di bawah ini.

Alamat
Berry & Barn Farm
123 Jalan Pertanian,
Kota Segar, Provinsi Hijau,
Kode Pos: 12345
</h3>
        <h2>Nomor Telepon</h2>
        Telepon: +62 123 456 7890
<h2>WhatsApp:</h2> +62 987 654 3210
<h2>Email</h2>
Email: info@berryandbarnfarm.com
<h2>Dukungan Pelanggan:</h2> support@berryandbarnfarm.com
<h2>Jam Operasional</h2>
Senin - Jumat: 08:00 - 17:00
Sabtu: 09:00 - 15:00
Minggu: Tutup
                </div> 
        </main>
    </div>
</body>
</html>
