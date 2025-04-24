<?php
include 'koneksi.php';

// Pagination setup
$per_page = 2;
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$offset = ($page - 1) * $per_page;

// Fetch data
$sql = "SELECT * FROM penyanyi_perempuan LIMIT $per_page OFFSET $offset";
$result = mysqli_query($conn, $sql);

// Total for pagination
$total_query = mysqli_query($conn, "SELECT COUNT(*) as total FROM penyanyi_perempuan");
$total_data = mysqli_fetch_assoc($total_query)['total'];
$total_pages = ceil($total_data / $per_page);
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Profil Eksklusif Penyanyi</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      background: url('background.png') no-repeat center center fixed;
      background-size: cover;
      font-family: 'Poppins', sans-serif; 
      color: white;
      margin: 0;
      
    }

    body::before {
      content: "";
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: rgba(62, 0, 93, 0.5);
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
      padding-top: 40px;
      font-size: 28px;
    }

    .profile-card {
      max-width: 1500px;
      margin: 40px 20px auto;
      padding: 30px;
      border-radius: 16px;
      backdrop-filter: blur(8px);
      text-align: center;
    }

    .profile-card h2 {
      text-align: left;
      margin: 0;
      font-size: 22px;
    }

    .profile-card h4 {
      text-align: left;
      font-size: 13px;
      margin-top: 4px;
      margin-left: 23px;
      margin-bottom: 16px;
      
    }

    .profile-card img {
      width: 180px;
      height: 180px;
      object-fit: cover;
      border-radius: 12px;
      border: 2px;
      margin-bottom: 20px;
    }

    .profile-card p {
      font-size: 15px;
      line-height: 1.7;
      color: #eee;
      text-align: justify;
    }

    .nav-button {
      max-width: 2000px;
      margin: 20px 30px 60px;
      display: flex;
      justify-content: space-between;
    }

    .nav-button a {
      padding: 10px 20px;
      background-color: #ffffff;
      color: black;
      text-decoration: none;
      border-radius: 8px;
      font-weight: bold;
      transition: 0.3s;
    }

    .nav-button a:hover {
      background-color: #9300cc;
    }

    .nav-button a.disabled {
        background-color: #ffffff;
      pointer-events: none;
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
  <a href="mencari_konser_berdasarkan_kategori.php" class="back-arrow">←</a>
  <nav>
    <a href="#">Dashboard</a>
    <a href="#">About Us</a>
    <a href="#">Contact Us</a>
    <a href="#">FAQ</a>
  </nav>
  <div style="font-weight: bold; font-size: 20px;">Eventix</div>
</header>

<h1>Profil Eksklusif:<br> Suara, Karya, dan Perjalanan</h1>

<?php
$index = $offset + 1;
while ($row = mysqli_fetch_assoc($result)) {
    echo '<div class="profile-card">';
    echo '<h2>' . $index . '. ' . $row['nama'] . '</h2>';
    echo '<h4>' . $row['nama'].': '. strtoupper($row['judul_konser']) . '</h4>';
    echo '<img src="' . $row['foto2'] . '" alt="' . $row['nama'] . '">';
    echo '<p>' . $row['deskripsi'] . '</p>';
    echo '</div>';
    $index++;
}
?>

<div class="nav-button">
  <?php if ($page > 1): ?>
    <a href="?page=<?php echo $page - 1; ?>">PREV</a>
  <?php else: ?>
    <a class="disabled">PREV</a>
  <?php endif; ?>

  <?php if ($page < $total_pages): ?>
    <a href="?page=<?php echo $page + 1; ?>">NEXT</a>
  <?php else: ?>
    <a class="disabled">NEXT</a>
  <?php endif; ?>
</div>

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
