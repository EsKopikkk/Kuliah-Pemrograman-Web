<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>lauk</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background-color: #EFF5D2;
      color: #333;
    }

    h1 {
      text-align: center;
      margin: 2rem 0;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 1.5rem;
      padding: 0 2rem 3rem;
    }

    .gallery img {
      width: 250px;
      height: 250px;
      object-fit: cover;
      border-radius: 10px;
      transition: transform 0.3s, box-shadow 0.3s;
      cursor: pointer;
    }

    .gallery img:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }
  </style>
</head>

<body>
  <h1>Katalog Lauk</h1>
  <div class="gallery">
    <a href="{{ url('/ayamChick') }}">
      <img src="{{ asset('images/ayamchick.jpg') }}" alt="Makanan 1">
    </a>
    <a href="{{ url('/ayamBakar') }}">
      <img src="{{ asset('images/ayamBakar.jpg') }}" alt="Makanan 2">
    </a>
    <a href="{{ url('/ayamKari') }}">
      <img src="{{ asset('images/ayamKari.jpg') }}" alt="Makanan 3">
    </a>
    <a href="{{ url('/ayamKuning') }}">
      <img src="{{ asset('images/ayamKuning.jpg') }}" alt="Makanan 4">
    </a>
  </div>

</body>

</html>