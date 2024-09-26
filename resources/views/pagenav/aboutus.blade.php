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
            <h2>Selamat datang di Berry & Barn Farm</h2>
            Di Berry & Barn Farm, kami percaya bahwa kualitas dan keberlanjutan adalah dua pilar utama dalam dunia pertanian. Kami didirikan dengan misi untuk menyediakan produk pertanian segar dan berkualitas tinggi sambil menjaga lingkungan dan mendukung komunitas lokal.
            <h3>Produk Kami</h3>
            Kami menyediakan berbagai macam produk, termasuk:

Buah-buahan Segar: Dari stroberi yang manis hingga buah-buahan musiman lainnya, kami menawarkan pilihan yang bervariasi dan segar.

Daging Berkualitas: Kami mengelola peternakan kami dengan cinta dan perhatian, memastikan bahwa hewan-hewan kami dibesarkan dengan baik dan sehat.

Sayuran Organik: Kami bangga menyediakan sayuran organik yang ditanam tanpa bahan kimia berbahaya, sehingga aman untuk keluarga Anda.
        </main>
    </div>
</body>
</html>
