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
                <h1>Produk Kami</h1>
                <h2>Buah-Buahan Segar</h2>
                Kami bangga menawarkan berbagai macam buah-buahan segar yang ditanam dengan cinta dan perhatian. Beberapa varietas unggulan kami meliputi:

                Stroberi: Manis, juicy, dan penuh rasa. Ideal untuk camilan atau bahan dasar dessert.
                Blueberry: Kaya antioksidan dan sempurna untuk smoothie atau topping yogurt.
                    Apel Organik: Renyah dan segar, sangat baik untuk kesehatan.
                <h2>Sayuran Organik</h2> 
                Sayuran kami ditanam tanpa bahan kimia berbahaya, memastikan bahwa Anda mendapatkan yang terbaik untuk keluarga Anda. Produk sayuran kami meliputi:

                Bayam: Sayuran hijau yang kaya nutrisi, cocok untuk salad atau smoothie.
                Wortel: Manis dan renyah, kaya akan vitamin A, ideal untuk camilan sehat.
                Tomat: Segar dan penuh rasa, cocok untuk salad atau saus.
                <h2>Paket Spesial</h2> 
                Kami menyediakan paket spesial yang terdiri dari kombinasi produk kami dengan harga yang menarik. Paket ini cocok untuk keluarga atau sebagai hadiah:
                Paket Buah Segar: Kombinasi berbagai buah segar untuk dinikmati sekeluarga.
                Paket Sayuran Sehat: Berisi berbagai sayuran organik yang siap untuk diolah.  
        </main>
    </div>
</body>
</html>
