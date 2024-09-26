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
            </a>
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
        <div>
            <h2> Festival Pemetikan Buah 
                Tanggal: 15-16 Maret 2024</h2>
            Bergabunglah dengan kami dalam Festival Pemetikan Buah yang meriah! Keluarga dapat menikmati waktu bersama dengan memetik berbagai jenis buah beri dari kebun kami. Selain itu, akan ada pertunjukan musik lokal, stan makanan, dan berbagai kegiatan anak-anak, termasuk kerajinan tangan dan permainan. Ajak teman dan keluarga untuk menikmati akhir pekan yang penuh kesenangan!
        </div>
        <div>
            <h2>Malam Film di Peternakan
                Tanggal: 5 Oktober 2024</h2>
            Nikmati malam film di luar ruangan bersama keluarga dan teman-teman! Kami akan menayangkan film ramah keluarga di area piknik kami. Bawa selimut, makanan ringan, dan siapkan diri untuk menikmati film sambil dikelilingi oleh keindahan alam. Film yang ditayangkan akan diumumkan satu minggu sebelum acara.
        </div>
        <div>
            <h2>Festival Panen
                Tanggal: 1 November 2024</h2>
                Rayakan hasil panen tahun ini di festival kami yang penuh warna! Nikmati produk lokal segar, permainan anak-anak, dan kerajinan tangan dari pengrajin lokal. Acara ini adalah cara yang sempurna untuk mengucapkan terima kasih atas hasil bumi dan merayakan komunitas. Bergabunglah dengan kami untuk pengalaman yang tidak akan terlupakan!
        </div>
    </main>
    </div>
</body>
</html>
