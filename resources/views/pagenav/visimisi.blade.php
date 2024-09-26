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
            
            <h2>Visi Kami</h2> 
            <p>Kami berambisi untuk menjadi farm yang diakui secara nasional sebagai penyedia produk pertanian yang tidak hanya segar dan lezat, tetapi juga diproduksi dengan cara yang bertanggung jawab dan berkelanjutan. Kami ingin menjadikan setiap kunjungan ke Berry & Barn Farm sebagai pengalaman yang menyenangkan dan mendidik bagi pelanggan kami.</p>         
            <h2>Misi Kami</h2>
            <p>Menjamin Kualitas Produk

                Menghasilkan dan menyediakan produk pertanian yang berkualitas tinggi, segar, dan aman untuk konsumen. Kami berkomitmen untuk menjaga standar produksi yang ketat agar pelanggan kami mendapatkan yang terbaik dari kami.
                Praktik Pertanian Berkelanjutan
                
                Menerapkan praktik pertanian yang ramah lingkungan dan berkelanjutan untuk melindungi sumber daya alam dan meningkatkan kesehatan tanah. Kami percaya bahwa keberlanjutan adalah kunci untuk masa depan yang lebih baik bagi generasi mendatang.
                Memberdayakan Komunitas
                </p>
        </main>
    </div>
</body>
</html>
