# pertemuan-08
# DOKUMENTASI UTS PEMROGRAMAN WEB DASAR

## 1. Identitas Mahasiswa

| Keterangan | Data |
|---|---|
| Nama | ALDI |
| NIM | 2611500065 |
| Program Studi | Teknik Informatika |
| Kelas | TI1A |
| Mata Kuliah | Pemrograman Web Dasar |
| Tahun Akademik | 2026/2027 |
| Semester | Gasal |

## 2. Deskripsi Proyek

Proyek ini merupakan pengembangan aplikasi web Profil Mahasiswa dengan menambahkan fitur Formulir Permohonan Peminjaman Fasilitas Kampus.

Pengembangan dilakukan menggunakan HTML, CSS, JavaScript, dan PHP. Aplikasi dijalankan melalui localhost dan dikelola menggunakan GitHub.

## 3. Fitur yang Dikembangkan

### A. Menu Navigasi
Menambahkan menu baru bernama Peminjaman Fasilitas untuk mengarahkan pengguna ke bagian formulir peminjaman.

### B. Section dan Formulir
Menambahkan section dengan judul Permohonan Peminjaman Fasilitas Kampus.

Formulir memiliki beberapa kolom:
1. Nama Penanggung Jawab.
2. Jenis Fasilitas.
3. Tanggal Peminjaman.
4. Durasi Peminjaman (jam).
5. Keperluan Peminjaman.

Pilihan jenis fasilitas:
- Ruang Kelas.
- Aula.
- Laboratorium Komputer.
- Proyektor.

Formulir menyediakan tombol Kirim dan Batal.

### C. Pemrosesan Data
Data formulir diproses menggunakan metode POST dan PHP.

Pemrosesan data mencakup:
- Validasi menggunakan JavaScript.
- Validasi menggunakan PHP.
- Normalisasi dan sanitasi masukan.
- Pengamanan keluaran menggunakan htmlspecialchars().
- Penyimpanan data menggunakan session.
- Penerapan pola Post-Redirect-Get (PRG).

Data yang berhasil diproses ditampilkan kembali pada section Peminjaman Fasilitas.

### D. Mempertahankan Fitur Kontak
Fitur formulir Kontak tetap dipertahankan agar proses peminjaman tidak mengganggu fungsi formulir Kontak yang sudah tersedia.

## 4. Teknologi yang Digunakan

- HTML untuk struktur halaman web.
- CSS untuk mengatur tampilan halaman.
- JavaScript untuk validasi formulir.
- PHP untuk pemrosesan data pada sisi server.
- Git untuk mengelola perubahan kode.
- GitHub untuk menyimpan repository proyek.

## 5. Dokumentasi Pengujian

Pengujian dilakukan untuk memastikan fitur yang dikembangkan berjalan sesuai ketentuan soal UTS.

| No. | Pengujian | Hasil |
|---|---|---|
| 1 | Menu Peminjaman Fasilitas | Isi setelah diuji |
| 2 | Tampilan formulir peminjaman | Isi setelah diuji |
| 3 | Validasi JavaScript | Isi setelah diuji |
| 4 | Validasi PHP | Isi setelah diuji |
| 5 | Pemrosesan data POST | Isi setelah diuji |
| 6 | Penampilan data peminjaman | Isi setelah diuji |
| 7 | Fitur Kontak tetap berfungsi | Isi setelah diuji |

## 6. Dokumentasi Git dan GitHub

Setiap perubahan proyek disimpan menggunakan Git dan dikirim ke GitHub melalui perintah:

```bash
git add .
git commit -m "Pesan perubahan"
git push origin main
```

Repository GitHub:

https://github.com/2611500065-glitch/2611500065-PWD-TI1A-26271-

## 7. Kesimpulan

Melalui pengerjaan UTS ini, saya mempelajari pengembangan formulir web menggunakan HTML, CSS, JavaScript, dan PHP. Saya juga mempelajari proses validasi data, pengamanan masukan, penggunaan session, penerapan pola Post-Redirect-Get (PRG), serta pengelolaan proyek menggunakan Git dan GitHub.

Pengembangan ini bertujuan untuk menambahkan fitur peminjaman fasilitas kampus tanpa menghilangkan fitur aplikasi yang telah tersedia.

---

**Dibuat oleh ALDI**  
Teknik Informatika – TI1A  
Tahun Akademik 2026/2027