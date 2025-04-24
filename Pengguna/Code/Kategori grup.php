<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Kategori Penyanyi Solo Perempuan</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
  position: relative;
  background: url('background.png') no-repeat center center fixed;
  background-size: cover;
  font-family: 'Poppins', sans-serif;   
  color: white;
  margin: 0;
  padding: 0;
  z-index: 0;
}

body::before {
  content: "";
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(74, 0, 92, 0.2); /* ungu + transparansi 50% */
  z-index: -1;
}

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color: #1a0727;
    }

    header nav a {
      margin: 0 10px;
      text-decoration: none;
      color: white;
      font-size: 14px;
    }

    .back-arrow {
      color: white;
      font-size: 1.5rem;
      text-decoration: none;
      font-weight: bold;
      transition: color 0.2s;
    }

    .back-arrow:hover {
      color: #b33fff;
    }

    h1 {
      text-align: center;
      font-size: 50px;
      padding: 40px 0 10px;
    }

    .artist-card {
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1000px;
      margin: 20px auto;
      padding: 20px;
      border-radius: 10px;
    }

    .artist-info {
  display: flex;
  align-items: flex-start;
  gap: 20px;
  flex: 1;
}

.artist-photo {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.artist-photo img {
  width: 150px;
  height: 150px;
  border-radius: 50%;
  object-fit: cover;
  border: 2px solid white;
}

.harga-tiket {
  font-size: 20px;
  color: #ccc;
  margin-top: 8px;
}

    .artist-text {
      max-width: 300px;
    }

    .artist-text h2 {
      margin: 0;
      font-size: 30px;
    }

    .artist-text p {
      margin: 5px 0;
      font-size: 20px;
      color: #ccc;
    }

    .ticket-box {
      background-color: #210321;
      padding: 1px;
      border-radius: 10px;
      text-align: center;
      min-width: 200px;
    }

    .ticket-box h4 {
      margin: 20px 10px 3px;
      text-align: left;
      font-size: 20px;
    }

    .ticket-box p {
      margin: 0 10px 25px;
      text-align: left;
      font-size: 15px;
      color: #f0f0f0;
    }
    .time-duration {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  margin: 10px 0;
  font-size: 15px;
  color: #f0f0f0;
}

.divider {
  width: 1px;
  height: 30px;
  background-color: #ccc;
}

.time-label {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.time-label .value {
  font-size: 13px;
  font-weight: bold;
  color: #f0f0f0;
}

.time-label .label {
  font-size: 11px;
  color: #aaa;
  margin-top: 2px;
}


    .ticket-box button {
      margin-top: 25px;
      margin-bottom: 25px;
      padding: 8px 15px ;
      background-color: transparent;
      border: 1px solid #fff;
      color: white;
      border-radius: 5px;
      cursor: pointer;
      font-size: 13px;
      transition: 0.3s;
    }

    .ticket-box button:hover {
      background-color: white;
      color: #3e005d;
    }

    footer {
      background-color: black;
      color: white;
      padding: 30px 20px;
      font-size: 14px;
      margin-top: 50px;
    }

    .footer-container {
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap;
    }

    .footer-section {
      max-width: 250px;
      margin: 10px;
    }

    .footer-section h4 {
      margin-bottom: 10px;
    }

    .footer-section a {
      color: white;
      text-decoration: none;
    }

    .footer-section a:hover {
      text-decoration: underline;
    }

    .social-icons {
      text-align: center;
      margin-top: 15px;
    }

    .social-icons img {
      width: 130px;
    }
  </style>
</head>
<body>
<header>
  <a href="#" class="back-arrow">←</a>
  <nav>
    <a href="#">Dashboard</a>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
    <a href="#">FAQ</a>
  </nav>
  <div style="font-weight: bold; font-size: 20px;">Eventix</div>
</header>

<h1>Kategori Penyanyi<br>Grup</h1>

<?php
$sql = "SELECT * FROM penyanyi_grup";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="artist-card">
        <div class="artist-info">
            <div class="artist-photo">
                <img src="' . $row['foto'] . '" alt="' . $row['nama'] . '">
                <p class="harga-tiket">' . $row['harga_tiket'] . '</p>
            </div>
            <div class="artist-text">
                <h2>' . $row['nama'] . '</h2>
                <p>' . $row['lokasi'] . '</p>
                <p>' . $row['kota'] . '</p>
                <p>' . $row['tanggal'] . '</p>
            </div>
        </div>

        <div class="ticket-box">
            <h4>' . $row['nama'] . '</h4>
            <p>' . $row['judul_konser'] . '</p>
            <div class="time-duration">
              <div class="time-label">
                  <span class="value">' . date('H:i', strtotime($row['jam_tampil'])) . ' WIB</span>
                  <span class="label">Start Time</span>
              </div>
              <div class="divider"></div>
              <div class="time-label">
                  <span class="value">' . round($row['durasi'] / 60, 1) . ' hours</span>
                  <span class="label">Duration</span>
              </div>
          </div>
            <button>Buy Tickets Now</button>
        </div>
    </div>';
}
?>

<footer>
  <div class="footer-container">
    <div class="footer-section">
      <h4>Contact Us</h4>
      <p>📧 eventix.concert@yahoo.com</p>
    </div>
    <div class="footer-section">
      <h4>Keep Up to Date</h4>
      <p>Sign Up to receive exclusive discounts &<br>pre sale links before anyone else!</p>
    </div>
    <div class="footer-section">
      <h4>Quick Links</h4>
      <p><a href="#">Work With Us</a><br><a href="#">Privacy Policy</a></p>
    </div>
  </div>
  <div class="social-icons">
    <img src="https://i.ibb.co/YcGrx0n/social-icons.png" alt="Social Media">
  </div>
</footer>

</body>
</html>
