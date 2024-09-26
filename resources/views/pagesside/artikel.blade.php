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
            <h1>Menyusuri Keindahan Berry & Barn Farm: Petualangan di Alam Segar</h1>
                Pendahuluan
                
                Selamat datang di Berry & Barn Farm, tempat di mana alam bertemu kelezatan! Kami adalah sebuah farm yang berkomitmen untuk menawarkan pengalaman berharga bagi keluarga dan pecinta alam. Di sini, Anda akan menemukan keindahan kebun buah beri yang melimpah dan interaksi menyenangkan dengan hewan ternak.
                
                Kebun Buah Beri
                
                Salah satu daya tarik utama di Berry & Barn Farm adalah kebun buah beri kami yang luas. Setiap musim, pengunjung dapat memetik buah berry segar seperti strawberry, blueberry, dan raspberry. Kami mengadopsi metode pertanian organik, yang berarti buah-buahan yang Anda petik bebas dari pestisida dan bahan kimia berbahaya. Kami percaya bahwa kualitas buah sangat penting, dan kami berusaha untuk memberikan produk terbaik kepada Anda.
                
                Pengalaman Memetik Buah
                
                Kami mengundang Anda dan keluarga untuk merasakan pengalaman memetik buah langsung dari kebun. Kegiatan ini sangat menyenangkan, terutama untuk anak-anak, yang dapat belajar tentang pertanian sambil menikmati waktu berkualitas bersama keluarga. Setelah memetik, Anda dapat menikmati hasil petikan di area piknik kami, lengkap dengan berbagai makanan dan minuman segar.
                
                Peternakan dan Hewan Ternak
                
                Di Berry & Barn Farm, kami tidak hanya memiliki kebun buah, tetapi juga peternakan yang penuh dengan hewan-hewan lucu. Dari ayam yang berkokok di pagi hari hingga kelinci yang melompat-lompat, anak-anak akan menikmati kesempatan untuk berinteraksi dengan hewan-hewan tersebut. Kami juga menyediakan tur peternakan di mana pengunjung dapat belajar tentang cara merawat hewan ternak, memberi makan, dan memahami kehidupan sehari-hari di peternakan.
                
                Pendidikan dan Kesadaran Lingkungan
                
                Kami percaya bahwa pendidikan tentang pertanian dan lingkungan sangat penting. Oleh karena itu, kami mengadakan program edukasi bagi anak-anak dan orang dewasa. Program ini mencakup workshop tentang pertanian berkelanjutan, manfaat produk organik, dan cara melestarikan lingkungan. Kami ingin setiap pengunjung pulang dengan pengetahuan baru dan rasa cinta yang lebih dalam terhadap alam.
        </main>
    </div>
</body>
</html>
