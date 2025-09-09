## Analisa teks HTML file portodiri.html
<p align="justify">
Terdapat beberapa kode dan tag yang baru saya pelajari untuk file ini
contoh nya pada bagian:
```html
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portofolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
</html>
```

dimulai dari atas, lang="id" akan memberi informasi kepada browser bahwa teks html ini berbasis bahasa indonesia. Lalu pada baris ```charset="UTF-8"```, berfungsi untuk memuat hampir semua karakter dari semua bahasa dapat digunakan didalam html. Selanjutnya ```<meta name="viewport" content="width=device-width, initial-scale=1.0">``` bagian ini mengatur lebar dari halaman akan disamakan dengan lebar layar perangkat, ```initial-scale=1.0``` artinya halaman ditampilkan dengan zoom awal 100%. Terakhir ```link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">```, baris ini akan memanggil font dari google fonts, bernama poppins dengan atribut rel="stylesheet" yang artinya file yang dipanggil itu akan dibaca sebagai stylesheet (css)

masuk lebih dalam, ke tag ```<style>``` css pada file HTML ini saya satukan. 
```html 
body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #FFF0CE;
      color: #333;
    } 
```
Blok kode diatas akan mengatur gaya tampilan dari tag ```<body>```, dengan detail ukuran margin 0, ```font-family : 'Poppins', sans-seriff;``` bertipe font Poppins dengann latar warna #FFF0CE, lalu warna font #333.

```    
.container {
      display: flex;
      min-height: 100vh;
    }
```
Selanjutnya blok kode diatas akan mengatur gaya tampilan dari elemen yang menggunakan class '.container' dengan detail penampilan 'flex' artinya semua elemen didalamnya akan menhikuti tata letak flexbox. Lalu ```min-height: 100hv;``` ini mengatur tinggi minimum dari '.container' menjadi 100% dari tinggi layar.


```
    .sidebar {
      background-color: #3396D3;
      color: white;
      width: 280px;
      padding: 2rem;
      text-align: center;
    }
```

Blok kode diatas akan mengatur gaya tampilan dari elemen yang menggunakan class '.sidebar' dengan detail tampilan latar warna #3396D3 biru, lalu warna teks pada class ini akan berwarna putih, lebar dari '.sidebar' yaitu 280 pixel dengan padding 2rem kurang lebih 32 pixel. Lalu teks pada '.sidebar' akan rata tengah.

```
    .sidebar img {
      width: 200px;
      height: 200px;
      border-radius: 10%;
      border: 2px solid #fff;
      object-fit:cover;
      margin-bottom: 1rem;
    }
```

Blok kode diatas akan mengatur gaya tampilan dari elemen yang menggunakan selector'.sidebar img' dengan detail tampilan lebar dan tinggi gambar adalah 200x200 pixel, lalu 'border-radius' atau lengkungan sudut dari gambar di sidebar akan melengkung sebanyak 10 persen, dengan tebal garis fram gambar 2 pixel berwarna putih. 'object-fit:cover;' akan mengatur tampilan dari gambar yang memiliki elemen class ini, 'cover' akan menampilkan gambar secara penuh agar kotak fram gambar penuh. 'margin-bottom: 1rem;' akan memberikan jarak kebawah antara gambar dan elemen setelahnya sejauh 16 pixel.

```
    .sidebar h1 {
      font-size: 1.4rem;
      margin: 0.5rem 0;
    }

    .sidebar p {
      font-size: 0.9rem;
      font-weight: 300;
    }
```
Dua blok kode diatas mengatur gaya tampilan dari elemen yang menggunakan selector'.sidebar h1' dan '.sidebar p'. Untuk '.sidebar h1' akan mengatur ukuran font sebesar 1.4rem sekitar 22 pixel, dengan ukuran margin 0.5 rem sekitar 8 pixel. Selanjutnya untuk '.sidebar p' akan mengatur ukuran font sebesar sekitar 14 pixel dengan ketebalan font pada 300 (tipis).

```
    .content {
      flex: 1;
      padding: 2rem 3rem;
      background-color: #EBCB90;
    }
```
Blok kode diatas akan mengatur gaya tampilan dari elemen yang menggunakan class'.content' dengan detail flex: 1 artinya elemen .content akan mengisi sisa ruang yang ada setelah sidebar, lalu mengatur jarak antar konten sebesar 32 pixel untuk atas dan bawah, dan 48 pixel untuk kiri dan kanan, dan class ini berlatar warna #EBCB90;

```
    section {
      background: #ffffff;
      padding: 1.5rem;
      border-radius: 10px;
      margin-bottom: 1.5rem;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
    }

    section h2 {
      font-size: 1.2rem;
      margin-bottom: 0.8rem;
      color: #3396D3;
    }
```
Kedua blok kode diatas akan mengatur elemen-elemen yang menggunakan selector 'section' dan 'section h2'. Pada 'section', class ini akan mengatur tampilan dengan detail latar warna putih, dengan jarak antar konten sebesar 1.5 rem (24 pixel), lalu membuat sudut dari box sedikit melengkung. selanjutnya jarak margin bawah sebesar 1.5 rem (24 pixel), terakhir mengatur bayangan dibawah box ```0 2px 5px rgba(0,0,0,0.05);```. Selanjutnya untuk selector 'section h2' class ini akan mengatur tampilan dengan detail berikut, ukuran font sekitar 19 pixel dengan jarak margin bawah sebesar 0.8 rem sekitar 13 pixel, dengan latar warna biru. 

```
    ul {
      margin: 0;
      padding-left: 1.2rem;
    }

    ul li {
      margin-bottom: 0.5rem;
    }
```
Dua blok kode terakhir pada css file html portodiri, terdiri dari 'ul' dan 'ul li', selector 'ul' akan mengatur semua elemen 'ul', dengan menghapus margin bawaan 'ul' lalu ```padding-left: 1.2``` Memberi jarak ke dalam sisi kiri daftar, supaya bullet (•) dan teks tidak menempel ke tepi container sebesar 19 pixel. lalu pada 'ul li' Selector ini mengatur setiap ```<li>``` (list item) di dalam ```<ul>```, lalu memberi jarak antar item list secara vertikal sebesar 8 pixel.

Keseluruhan CSS diatas, diaplikasikan pada isi teks utama HTML dibawah.

```
<body>
  <div class="container">
    <!-- Sidebar kiri -->
    <div class="sidebar">
      <img src="me.jpg" alt="Foto Profil">
      <h1>Muhammad Riyadhy Al-Haadiy</h1>
      <p>Mahasiswa Teknik Komputer</p>
      <p>UI/UX & Frontend Developer Enthusiast</p>
    </div>

    <!-- Konten kanan -->
    <div class="content">
      <section>
        <h2>Pendidikan</h2>
        <p>MA</p>
        <p>Universitas Negeri Makassar Prodi Teknik Komputer</p>
      </section>

      <section>
        <h2>Ketertarikan</h2>
        <p>UI/UX</p>
        <p>Frontend Programmer</p>
      </section>

      <section>
        <h2>Bahasa Pemrograman</h2>
        <ul>
          <li>C++</li>
          <li>Java</li>
          <li>PHP</li>
        </ul>
      </section>

      <section>
        <h2>Mari Terhubung</h2>
        <p>Email: <a href="mailto:riyadhy@example.com">riyadhi377@gmail.com</a></p>
      </section>
    </div>
  </div>
</body>
```
