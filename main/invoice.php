<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Mustafidz Faturachman</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        /* Variabel tema */
        :root {
            --text-color: #ffffff;
            /* Warna teks default */
            --bg-overlay: rgba(0, 0, 0, 0.5);
            /* Overlay gelap pada background */
            --bg-button: #ff9800;
            /* Warna tombol */
            --bg-hover: #e68900;
            /* Warna tombol saat hover */
        }

        /* Latar belakang wallpaper */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: var(--text-color);
        }

        /* Wallpaper untuk dua section */
        #home,
        #seaworld {
            background: linear-gradient(var(--bg-overlay), var(--bg-overlay)),
                url('Desain tanpa judul.png') no-repeat center center/cover;
            color: var(--text-color);
        }

        #home {
            height: 100vh;
            /* Full viewport height */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
        }

        #seaworld {
            padding: 2rem;
        }
         /* Variabel tema */
         :root {
            --text-color: #ffffff; /* Warna teks default */
            --bg-overlay: rgba(0, 0, 0, 0.5); /* Overlay latar belakang */
            --bg-button: #ff9800; /* Warna tombol */
            --bg-hover: #e68900; /* Warna tombol saat hover */
            --bg-dark: #121212; /* Warna latar belakang mode gelap */
            --text-dark: #cfcfcf; /* Warna teks di mode gelap */
        }

        /* Efek transisi untuk mode gelap */
        * {
            transition: all 0,01s ease-in-out;
        }

        /* Latar belakang dan warna teks */
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            color: var(--text-color);
            background-color: var(--bg-dark);
        }

        /* Section latar belakang */
        #home, #seaworld {
            background: linear-gradient(var(--bg-overlay), var(--bg-overlay)),
                        url('Desain tanpa judul.png') no-repeat center center/cover;
            color: var(--text-color);
        }

        #home {
            height: 100vh; /* Full viewport height */
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 2rem;
        }

        #seaworld {
            padding: 2rem;
        }

        /* Navbar */
        nav {
            background-color: rgba(0, 0, 0, 0.8);
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            list-style: none;
            display: flex;
            justify-content: center;
            padding: 0;
            margin: 0;
        }

        nav ul li {
            margin: 0 1.5rem;
        }

        nav ul li a {
            color: var(--text-color);
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            color: var(--bg-button);
        }

        /* Tombol */
        button {
            background-color: var(--bg-button);
            color: var(--text-color);
            border: none;
            padding: 1rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }

        button:hover {
            background-color: var(--bg-hover);
            transform: scale(1.05);
        }

        /* Konten Hero Section */
        .hero-content h1 {
            font-size: 3rem;
            margin: 0;
        }

        .hero-content h2 {
            font-size: 2rem;
            margin: 0.5rem 0;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin: 1.5rem 0;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin: 0 0.5rem;
            transition: transform 0.3s;
        }

        .social-icons img:hover {
            transform: scale(1.1);
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
        }

        /* Gallery */
        .seaworld-gallery {
            display: flex;
            justify-content: space-around;
            padding: 2rem;

        }

        .seaworld-gallery img:hover{
            transform: scale(1.1);
        }

        .gallery-item img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .gallery-item p {
            text-align: center;
            margin-top: 0.5rem;
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: rgba(0, 0, 0, 0.8);
            color: var(--text-color);
            margin-top: 2rem;
        }

        /* Mode Gelap */
        .dark-mode {
            background-color: var(--bg-dark);
            color: var(--text-dark);
        }

        .dark-mode nav {
            background-color: rgba(0, 0, 0, 0.9);
        }

        .dark-mode #home, 
        .dark-mode #seaworld {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                        url('Desain tanpa judul.png') no-repeat center center/cover;
        }
        section#about, section#contact {
    padding: 2rem;
    background-color: var(--bg-dark);
    color: var(--text-color);
    text-align: center;
}
        /* Tombol Dark Mode */
        button {
            background-color: var(--bg-button);
            color: var(--text-color);
            border: none;
            padding: 0.7rem 1.5rem;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.3s, background-color 0.3s;
        }

        button:hover {
            background-color: var(--bg-hover);
            transform: scale(1.05);
        }

        /* Konten Hero Section */
        .hero-content h1 {
            font-size: 3rem;
            margin: 0;
        }

        .hero-content h2 {
            font-size: 2rem;
            margin: 0.5rem 0;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin: 1.5rem 0;
        }

        .social-icons img {
            width: 40px;
            height: 40px;
            margin: 0 0.5rem;
            transition: transform 0.3s;
        }

        .social-icons img:hover {
            transform: scale(1.1);
        }

        .hero-image img {
            width: 100%;
            max-width: 400px;
            border-radius: 15px;
        }

        /* Gallery */
        .seaworld-gallery {
            display: flex;
            justify-content: space-around;
            padding: 2rem;
        }

        .gallery-item img {
            width: 100%;
            max-width: 300px;
            border-radius: 10px;
        }

        .gallery-item p {
            text-align: center;
            margin-top: 0.5rem;
            font-weight: bold;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1rem;
            background-color: rgba(0, 0, 0, 0.8);
            color: var(--text-color);
            margin-top: 2rem;
        }

        /* Mode Gelap */
        .dark-mode #home,
        .dark-mode #seaworld {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)),
                url('Desain tanpa judul.png') no-repeat center center/cover;
            color: var(--text-color);
        }
    </style>
</head>
<header>
    <nav>
        <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="../#about">About</a></li>
            <li><a href="pemesanan/index.html">Pemesanan</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
    <button id="darkModeToggle">🌙 Mode Gelap</button>
</header>

<body>

<?php
include '../lib/koneksi.php';

$id_pemesanan = htmlentities($_GET['id_pemesanan']);

$sql = "SELECT * FROM pemesanan where id_pemesanan = '$id_pemesanan'";

$query = mysqli_query($db,$sql);

if(mysqli_num_rows($query)==0)
{
    echo 'tidak ada'; exit;
}else{
    $detail = mysqli_fetch_row($query);
?>

<main class="flex-shrink-0">
  <div class="container">
    <form method="post" action="lib/proses.php">
<div class="card mt-2">
  <div class="card-header bg-dark text-white">
    Detail Pemesanan Paket Wisata #<?=$detail[0]?>
  </div>
  <div class="card-body">
	<div class="mb-3">
	  <label for="nama_pemesanan" class="form-label">Nama Lengkap</label>
	  <div id="nama_pemesan"><?=$detail[1]?></div>
	</div>
	<div class="mb-3">
	  <label for="hp_pemesan" class="form-label">Nomor Handphone</label>
	  <div id="hp_pemesan"><?=$detail[2]?></div>
	</div>
	<div class="mb-3">
	  <label for="waktu_wisata" class="form-label">Waktu Mulai Perjalanan</label>
	  <div id="waktu_wisata"><?=$detail[3]?></div>
	</div>
	<div class="mb-3">
	  <label for="hari_wisata" class="form-label">Hari Wisata</label>
	  <div id="hari_wisata"><?=$detail[4]?></div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_inap" value="1" id="paket_inap" <?=($detail[5]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_inap">
			Penginapan (Rp. 1.000.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_transport" value="1" id="paket_transport" <?=($detail[6]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_transport">
			Transportasi (Rp. 1.200.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	    <div class="form-check">
		  <input class="form-check-input" type="checkbox" name="paket_makan" value="1" id="paket_makan" <?=($detail[7]==1)?'checked':''?> disabled>
		  <label class="form-check-label" for="paket_makan">
			Service/ Makan (Rp. 500.000)
		  </label>
		</div>
	</div>
	<div class="mb-3">
	  <label for="jumlah_peserta" class="form-label">Jumlah Peserta</label>
	   <div id="jumlah_peserta"><?=$detail[8]?></div>
	 </div>
	<div class="mb-3">
	  <label for="total" class="form-label">Total Tagihan</label>
	  <div id="total">Rp. <?=number_format($detail[9],0,',','.')?></div>
	</div>
	<div class="mb-3">
	  <label for="created_at" class="form-label">Waktu Pemesanan</label>
	  <div id="created_at"><?=$detail[11]?></div>
	</div>
  </div>
  <div class="card-footer d-print-none">
    <a href="index.php?aksi=pesan" class="btn btn-primary">Buat Pesanan Baru</a>
	<a href="#" onclick="window.print()" class="btn btn-success">Cetak</a>
  </div>
</div>
<?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>