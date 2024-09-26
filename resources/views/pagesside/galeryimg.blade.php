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
        <main>
            <div class="imgcontent">
                <img src="g1.jpg" alt="Gambar 1">
                <h1>Gambar 1</h1>
            </div>
            <div class="imgcontent">
                <img src="g2.jpg" alt="Gambar 2">
                <h1>Gambar 2</h1>
            </div>
            <div class="imgcontent">
                <img src="g3.jpg" alt="Gambar 3">
                <h1>Gambar 3</h1>
            </div>
            <div class="imgcontent">
                <img src="g4.jpg" alt="Gambar 4">
                <h1>Gambar 4</h1>
            </div>
    </main>
    </div>
</body>
</html>
