<?php
$A=
[
  [
    "gambar" =>"img/e.png" ,
  "menu"=> "-espresso-",
  "harga"=>" IDR 15K"
],
[
  "gambar" =>"img/hi.png",
  "menu"=> "-pisak epek-",
  "harga"=>"IDR 5k"
],
[
  "gambar" => "img/s.png",
  "menu"=> "-Spagetti Bolognese-",
  "harga"=>"IDR 35k"
],
[
  "gambar"=>"img/b.png",
  "menu"=> "-boba-",
  "harga"=>"IDR 20k"
],
[
  "gambar"=>"img/hi.png",
  "menu"=> "-Pisang goreng-",
  "harga"=>" IDR 10K"
],
[
  "gambar"=>"img/s.png",
  "menu"=> "-spagetti-",
  "harga"=>"IDR 30K"
]
];
?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kesidari Hill CAFE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <nav class="navbar">
      <a href="#" class="navbar-logo">KESIDARI <span>HillCAFE</span>.</a>
      <div class="navbar-nav">
        <a href="#home">HOME</a>
        <a href="#about">Tentang Kami</a>
        <a href="#Menu">Menu</a>
        <a href="#contact">kontak</a>
      </div>
      <div class="navbar-extra">
        <a href="#" id="search-button"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
      </div>
      <div class="search-form">
        <input type="search" id="search-box" placeholder="search here..." />
        <label for="search-box"><i data-feather="search"></i></label>
      </div>
    </nav>
    <section class="hero" id="home">
      <main class="content">
        <h1>Mari Berbelanja <span>kopi</span></h1>
        <p>
          Kesidari hill cafe memberikan sensasi ngopi sambil melihat indahnya
          sunset
        </p>
        <a
          href="https://floresku.com/read/kesidari-hill-cafee-bernuansa-wisata-di-mbay-nagekeo"
          class="cta"
          >Kunjungi Sekarang</a
        >
      </main>
    </section>
    <section id="about" class="about">
      <h2>Tentang <span>Kami</span></h2>
      <div class="container">
        <img src="img/i-min.png" alt="Gambar Anda" />

        <div class="teks-samping">
          <h2>Apa itu Unit Produksi ?</h2>
          <p>
          Unit Produksi adalah suatu Divisi yang bertugas untuk menjualkan
            hasil desain siswa/siswi MAKN Ende. diunit Produksi tersedia
            berbagai produk desain , anda bisa bisa memesannya sesuai keinginan
            dan kemauan anda .
          </p>
          <p>
          dengan harga terjangkau tak membuat dompet kosong , desain kece dan
            trampil hasil kreativitas siswa/siswa MAKN Ende. Tak akan membuat
            anda kecewa .Produk yang kami tawarkan antara lain, cangkir, kaos,
            topi, Id Card dan masih banyak lagi. silahkan dilihat dan jangan
            lupa Chenkout.
          </p>
        </div>
      </div>
    </section>
    <section id="Menu" class="menu">
  
      <h2>Menu <span>Kami</span></h2>
      <p>
        Kami menyediakan beberapa menu lokal dan internasional silahkan di pilih
        :
      </p>
      
      <div class="row">
      <?php foreach ($A as $a) :?>
        <div class="menu-card">
          <img class="menu-card-img" src=<?php echo $a["gambar"] ?> alt="espresso" />
          <h3 class="menu-card-tittle"><?= $a["menu"] ?></h3>
          <p class="price"><?= $a["harga"] ?></p>
        </div>

        <?php  endforeach; ?> 
      </div>
     
    </section>
    <section id="contact" class="contact">
      <h2>kontak <span>Kami</span></h2>
      <p>Jika Ingin Berkunjung silahkan Hubungi kami :</p>
      <div class="peta">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.121577890775!2d121.30268454034211!3d-8.584307791495874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2db28d4d5aa61499%3A0x3858b0d1caec189c!2sKesidari%20Hill%20Cafe!5e0!3m2!1sid!2sid!4v1695992960409!5m2!1sid!2sid"
          allowfullscreen=""
          loading="lazy"
          referrerpolicy="no-referrer-when-downgrade"
          class="map"
        ></iframe>
        <form action="">
          <div class="input-group">
            <i data-feather="user"></i>
            <input type="text" placeholder="nama" />
          </div>
          <div class="input-group">
            <i data-feather="mail"></i>
            <input type="text" placeholder="email" />
          </div>
          <div class="input-group">
            <i data-feather="phone"></i>
            <input type="text" placeholder="no hp " />
          </div>
          <button type="submit" class="btn">Kirim pesan</button>
        </form>
      </div>
    </section>
    <footer>
      <div class="social">
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
        <a href="#"><i data-feather="twitter"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">Tentang Kami</a>
        <a href="#Menu">Menu</a>
        <a href="#contact">kontak</a>
      </div>
      <div class="credit">
        <p>Created by Naja <a href="">NajwaAlwi</a> &copy;2023</p>
      </div>
    </footer>
    <script>
      feather.replace();
    </script>
    <script src="js/script.js"></script>
  </body>
</html>
