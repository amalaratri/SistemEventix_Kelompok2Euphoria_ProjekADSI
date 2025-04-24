<?php
include 'koneksi.php';

if (!isset($_GET['asal_tabel']) || !isset($_GET['id'])) {
    die("Link tidak valid.");
}

$asal = $_GET['asal_tabel'];
$id = (int) $_GET['id'];

switch ($asal) {
    case 'perempuan':
        $tabel = 'penyanyi_perempuan';
        break;
    case 'lakilaki':
        $tabel = 'penyanyi_lakilaki';
        break;
    case 'grup':
        $tabel = 'penyanyi_grup';
        break;
    default:
        die("Sumber data tidak valid.");
}

$query = "SELECT * FROM $tabel WHERE id = $id";
$result = mysqli_query($conn, $query);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Pilih Kursi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Poppins', sans-serif;
      background: url('bg tiket konser.png') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }
    .container {
      max-width: 1000px;
      margin: auto;
      padding: 2rem;
    }
    h1 {
      text-align: center;
      font-size: 2rem;
    }
    .concert-info {
      text-align: center;
      margin-bottom: 2rem;
    }
    .venue-map {
      display: flex;
      justify-content: center;
      margin: 2rem 0;
    }
    .venue-map img {
      max-width: 400px;
      border-radius: 10px;
    }
    .seat-selection {
      display: flex;
      flex-wrap: wrap;
      gap: 1rem;
      justify-content: center;
      margin-bottom: 2rem;
    }
    .seat-category {
      background-color: rgba(255, 255, 255, 0.1);
      padding: 1rem 1.5rem;
      border-radius: 12px;
      min-width: 200px;
    }
    .seat-category h3 {
      margin-top: 0;
      font-size: 1.1rem;
      color: #ffeb3b;
    }
    .seat-category ul {
      list-style: none;
      padding: 0;
    }
    .seat-category ul li {
      margin: 0.5rem 0;
    }
    .btn-book {
      display: block;
      margin: auto;
      padding: 0.8rem 2rem;
      font-size: 1rem;
      font-weight: bold;
      color: #fff;
      background-color: #b33fff;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }
    .btn-book:hover {
      background-color: #922ecf;
    }
  </style>
</head>
<body>
<div class="container">
  <h1>Pilih Kursi Anda</h1>
  <div class="concert-info">
    <p><strong><?php echo $data['nama']; ?> - <?php echo $data['judul_konser']; ?></strong></p>
    <p><?php echo $data['lokasi']; ?> | <?php echo date('d F Y', strtotime($data['tanggal'])); ?> | <?php echo date('H:i', strtotime($data['jam_tampil'])); ?></p>
  </div>

  <div class="venue-map">
    <img src="<?php echo $data['venue']; ?>" alt="Denah Kursi">
  </div>

  <div class="seat-selection">
    <div class="seat-category">
      <h3>VVIP</h3>
      <ul>
        <li>Festival</li>
        <li>CAT B</li>
      </ul>
    </div>
    <div class="seat-category">
      <h3>VIP</h3>
      <ul>
        <li>CAT C</li>
        <li>CAT D</li>
      </ul>
    </div>
    <div class="seat-category">
      <h3>Reguler</h3>
      <ul>
        <li>CAT E</li>
        <li>CAT F</li>
        <li>CAT G</li>
      </ul>
    </div>
  </div>

  <button class="btn-book">LANJUT KE PEMESANAN</button>
</div>
</body>
</html>
