<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Produk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      padding: 2rem;
      background-color: #EFF5D2;
      color: #333;
    }

    .detail-container {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      align-items: flex-start;
    }

    .detail-container img {
      width: 350px;
      height: 350px;
      object-fit: cover;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0,0,0,0.2);
    }

    .info {
      max-width: 400px;
    }

    .info h1 {
      margin: 0 0 1rem;
      font-size: 2rem;
    }

    .info p {
      margin: 0.5rem 0;
    }

    .back-link {
      display: inline-block;
      margin-top: 1.5rem;
      padding: 10px 20px;
      background: #FFD700;
      color: #000;
      border-radius: 8px;
      text-decoration: none;
      font-weight: bold;
    }

    .back-link:hover {
      background: #e6c200;
    }
  </style>
</head>
<body>
  <div class="detail-container">
    <!-- Foto produk -->
    <img src="{{ asset('images/kering3.jpg') }}"alt="Makanan 1">

    <!-- Info produk -->
    <div class="info">
      <h1>Nastar</h1>
      <p>Kue dengan aroma nanas dan Butter, paling pas saat acara keluarga.</p>
      <p>Harga: Rp80.000/500gr + toples kaca</p>
      <a href="{{ url('/kueKering') }}" class="back-link">← Kembali</a>
      <a href="https://wa.me/6282347285247" >Pesan ini</a>
    </div>
  </div>
</body>
</html>
