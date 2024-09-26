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
            <div class="kliennih">
                <h2>Toko Organik Segar 99</h2>               
                Toko ini menyediakan produk pertanian organik kepada konsumen yang peduli kesehatan. Kami menyediakan mereka dengan berbagai jenis buah dan sayuran organik yang kami tanam di farm kami.
            </div>
            <div class="kliennih">
                <h2>Restoran Gourmet Rasa Alam</h2>
                Restoran ini terkenal dengan menu masakan yang menggunakan bahan-bahan lokal dan segar. Kami menyediakan mereka dengan daging hewan yang sehat dan buah-buahan segar untuk hidangan istimewa mereka.
            </div>
            <div class="kliennih">
             <h2>Pusat Penelitian Pertanian PPP</h2>
             Kami bekerja sama dengan pusat penelitian ini untuk mengembangkan teknik pertanian yang lebih baik dan ramah lingkungan. Kerjasama ini membantu kami meningkatkan hasil panen dan keberlanjutan usaha kami.
            </div>
            <div class="kliennih">
                <h2>Koperasi Petani Lokal</h2>
                Melalui koperasi ini, kami mendukung petani lokal dalam memasarkan produk mereka. Kami berkomitmen untuk memperkuat komunitas petani dan menyediakan akses pasar yang lebih luas bagi mereka.
            </div>
        </main> 
    </div>
</body>
</html>
