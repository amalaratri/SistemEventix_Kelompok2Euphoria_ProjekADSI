<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Kategori Tiket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet"> 
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('bg tiket konser.png') no-repeat center center fixed;
      background-size: cover;
      color: white;
      padding: 2rem 1rem;
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    h1 {
      font-size: 2rem;
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .container {
      max-width: 800px;
      background: rgba(33, 3, 33);
      backdrop-filter: blur(6px);
      padding: 2rem 2.5rem;
      border-radius: 18px;
      box-shadow: 0 0 12px rgba(0,0,0,0.4);
    }

    h2 {
      font-size: 1.2rem;
      color: #ffffff;
      margin-top: 2rem;
    }

    p {
      font-size: 0.95rem;
      line-height: 1.7;
      color: #e0e0e0;
    }

    ul {
      padding-left: 1.5rem;
      margin-top: 0.5rem;
      color: #ccc;
    }

    ul li {
      margin-bottom: 0.5rem;
    }

    .btn-back {
        margin-top: 2rem;
      margin-left: 1rem; /* Jarak dari kiri */
      background: white;
      color: black;
      padding: 0.6rem 1.2rem;
      text-decoration: none;
      border-radius: 10px;
      font-weight: bold;
      transition: background 0.3s;
      align-self: flex-start; /* Membuat tombol berada di sisi kiri */
    }

    .btn-back:hover {
      background: #ddd;
    }
  </style>
</head>
<body>

  <!-- Judul di luar box -->
  <h1>VVIP, VIP, dan Reguler</h1>

  <!-- Box konten -->
  <div class="container">
    <h2>1. VVIP (Very Very Important Person)</h2>
    <p>Kategori tiket ini menawarkan pengalaman terbaik dalam sebuah konser. 
       Pemegang tiket VVIP biasanya mendapatkan tempat paling strategis, baik itu di barisan paling depan atau area khusus dengan pemandangan terbaik. 
       Selain itu, mereka sering mendapatkan berbagai fasilitas eksklusif seperti jalur masuk khusus, merchandise premium, serta kesempatan untuk bertemu langsung dengan artis (Meet & Greet) jika tersedia. 
       Beberapa konser juga menyediakan lounge eksklusif dengan makanan dan minuman gratis bagi pemegang tiket VVIP.<br><br>Benefit tiket VVIP yaitu sebagai berikut:</p>
    <ul>
      <li>Posisi terbaik (paling depan atau area eksklusif)</li>
      <li>Akses prioritas (jalur masuk khusus)</li>
      <li>Meet & Greet atau foto bersama (jika tersedia)</li>
      <li>Merchandise premium</li>
      <li>Lounge atau fasilitas khusus lainnya</li>
    </ul>

    <h2>2. VIP (Very Important Person)</h2>
    <p>VIP adalah kategori tiket dengan keuntungan lebih dibanding reguler, tetapi masih di bawah VVIP. 
        Pemegang tiket VIP mendapatkan posisi lebih dekat ke panggung dibanding tiket reguler, serta akses masuk yang lebih cepat. Terkadang, 
        mereka juga mendapatkan merchandise eksklusif atau fasilitas tambahan seperti kursi lebih nyaman atau area khusus yang lebih nyaman untuk menonton konser.
        <br><br>Benefit tiket VIP yaitu sebagai berikut:</p>
    <ul>
      <li>Area duduk lebih dekat ke panggung dibanding regular</li>
      <li>Akses lebih cepat dibanding reguler</li>
      <li>Merchandise eksklusif</li>
      <li>Fasilitas tambahan tertentu (jika tersedia)</li>
    </ul>

    <h2>3. Reguler</h2>
    <p>
    Tiket reguler adalah pilihan standar bagi penonton dengan harga paling terjangkau. 
    Pemegang tiket reguler tidak mendapatkan fasilitas tambahan seperti jalur prioritas atau merchandise eksklusif. Area duduk atau standing mereka biasanya lebih jauh dari panggung dibanding VIP dan VVIP. 
    Meskipun demikian, mereka tetap bisa menikmati konser dengan atmosfer yang tetap seru.<br><br>Benefit tiket Regular yaitu sebagai berikut:</p>
    <ul>
      <li>Tiket dengan harga paling terjangkau</li>
      <li>Posisi lebih jauh dari panggung dibanding VIP & VVIP</li>
      <li>Akses masuk standar tanpa prioritas</li>
      <li>Tidak mendapatkan fasilitas tambahan</li>
    </ul>
  </div>

  <!-- Tombol di luar box -->
  <a href="javascript:history.back()" class="btn-back">BACK</a>

</body>
</html>
