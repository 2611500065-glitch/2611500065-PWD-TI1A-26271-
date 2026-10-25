<?php
// Variabel profil mahasiswa
$nama = "Aldi";
$jurusan = "Teknik Informatika";
$semester = 1;
$ipk = 3.75;
$statusAktif = true;
$catatan = null;

// Konstanta
define("NAMA_KAMPUS", "ISB Atma Luhur");

// Kondisi if-elseif-else
if ($semester == 1) {
    $statusMahasiswa = "Mahasiswa Baru";
} elseif ($semester <= 4) {
    $statusMahasiswa = "Mahasiswa Pertengahan";
} else {
    $statusMahasiswa = "Mahasiswa Tingkat Akhir";
}

// Kondisi switch
switch ($semester) {
    case 1:
        $keteranganSemester = "Semester Pertama";
        break;
    case 2:
        $keteranganSemester = "Semester Kedua";
        break;
    default:
        $keteranganSemester = "Semester $semester";
}

// Perulangan for
$daftarHobi = ["Coding", "Gaming", "Membaca"];

// Perulangan while
$jumlahHobi = count($daftarHobi);
$nomorHobi = 0;
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil Mahasiswa</title>
<link rel="stylesheet" href="style.css" />
</head>
<body>
<header>
<h1>Profil Mahasiswa</h1>
<button
  class="nav-toggle"
  id="navToggle"
  type="button"
  aria-label="Buka navigasi"
  aria-controls="navMenu"
  aria-expanded="false"
>
  ☰
</button>

<nav>
  <ul id="navMenu">
    <li><a href="#home">Beranda</a></li>
    <li><a href="#about">Tentang</a></li>
    <li><a href="#contact">Kontak</a></li>
  </ul>
</nav>
</header>
<main>
<section id="home">
    <h2>Selamat Datang</h2>
    <p>
        Halo, nama saya <?= htmlspecialchars($nama) ?>.
        Saya sedang mempelajari Pemrograman Web Dasar.
    </p>
    <img src="img/foto-aldi.jpg" alt="Foto profil <?= htmlspecialchars($nama) ?>" width="100">

    <p>Jurusan: <?= htmlspecialchars($jurusan) ?></p>
    <p>Kampus: <?= NAMA_KAMPUS ?></p>
    <p>Semester: <?= $semester ?> (<?= $keteranganSemester ?>)</p>
    <p>Status: <?= $statusMahasiswa ?></p>
    <p>IPK: <?= number_format($ipk, 2, ',', '.') ?></p>
    <p>Status aktif: <?= $statusAktif ? 'Aktif' : 'Tidak aktif' ?></p>
    <p>Catatan: <?= $catatan ?? 'Belum ada catatan' ?></p>
</section>
<section id="about">
<h2>Tentang Saya</h2>
<article>
<h3>Profil Singkat</h3>
<p>Saya mahasiswa Program Studi Teknik Informatika.</p>

<h3>Target Belajar</h3>
<ol>
    <?php
    for ($i = 1; $i <= 3; $i++) {
        echo "<li>Target belajar ke-$i</li>";
    }
    ?>
</ol>

<h3>Hobi Saya</h3>
<ul>
    <?php
    while ($nomorHobi < $jumlahHobi) {
        echo "<li>" . htmlspecialchars($daftarHobi[$nomorHobi]) . "</li>";
        $nomorHobi++;
    }
    ?>
</ul>
</article>
</section>
<section id="contact">
    <h2>Kontak</h2>
<p>Kunjungi <a href="https://github.com/2611500065-glitch/2611500065-PWD-TI1A-26271-">profil GitHub saya</a>.
</p>
<form id="contactForm" action="index.php" method="post" novalidate>
<div class="form-group">
<label for="nama">Nama Lengkap</label><br>
<input class="input-form"
type="text"
id="nama"
name="nama"
placeholder="Masukkan nama lengkap"
minlength="3"
maxlength="50"
required>
</div>
<div class="form-group">
<label for="email">Email</label><br>
<input class="input-form"
type="email"
id="email"
name="email"
placeholder="nama@email.com"
required>
</div>
<div class="form-group">
<label for="semester">Semester</label><br>
<input class="input-form"
type="number"
id="semester"
name="semester"
min="1"
max="14"
required>
</div>
<div class="form-group">
<label for="tanggal">Tanggal Kunjungan</label><br>
<input class="input-form"
type="date"
id="tanggal"
name="tanggal"
required>
</div>
<div class="form-group">
<p>Jenis Pesan</p>
<input type="radio" id="pertanyaan" name="jenis_pesan"
value="pertanyaan" required>
<label for="pertanyaan">Pertanyaan</label>
<input type="radio" id="saran" name="jenis_pesan"
value="saran">
<label for="saran">Saran</label>
</div>
<div class="form-group">
<p>Topik yang Diminati</p>
<input type="checkbox" id="minat-html" name="minat" value="HTML">
<label for="minat-html">HTML</label>
<input type="checkbox" id="minat-css" name="minat" value="CSS">
<label for="minat-css">CSS</label>
</div>
<div class="form-group">
<label for="prodi">Program Studi</label><br>
<select class="input-form" id="prodi" name="prodi" required>
<option value="">-- Pilih Program Studi --</option>
<option value="SI">Sistem Informasi</option>
<option value="TI">Teknik Informatika</option>
</select>
</div>
<div class="form-group">
<label for="pesan">Pesan</label><br>
<textarea class="input-form"
id="pesan"
name="pesan"
maxlength="300"
placeholder="Tulis pesan Anda"
required></textarea>

</div>
<button type="submit">Kirim</button>
<button type="reset">Batal</button>
<p id="formFeedback" role="status" aria-live="polite"></p>
</form> 

</section>
</main>
<footer>
<p>&copy; 2026 Aldi-2611500065</p>
</footer>
<script src="script.js"></script>
</body>
</html>