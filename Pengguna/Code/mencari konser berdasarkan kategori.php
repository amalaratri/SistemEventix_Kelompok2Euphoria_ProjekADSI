<?php
session_start();

// Kalau belum login, redirect ke login
if (!isset($_SESSION['username'])) {
    header("Location: login.html");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Event Promo Page</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Inter', sans-serif;
    }

    body {
  background-color: #1f0425;
  font-family: Arial, sans-serif;
  color: white;
  padding: 0; /* hilangkan padding body */
  margin: 0;
}

    header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 20px;
      background-color:  #1a0727;
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

    .btn {
      background-color:  #1a0727;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 14px;
    }

    .hero {
      position: relative;
      text-align: center;
    }

    .hero img {
      width: 100%;
      height: auto;
      opacity: 0.7;
    }

    .hero-text {
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
    }

    .hero-text h1 {
      font-size: 100px;
      font-weight: 1000;
    }

    .hero-text p {
      font-size: 50px;
      margin: 10px 0;
    }

    .hero-buttons {
      position: absolute;
      top: 20px;
      right: 20px;
      display: flex;
      gap: 1170px;
    }

    .categories {
      margin: 30px auto;
      max-width: 2000px;
    }

    .category {
  display: flex;
  align-items: center;
  padding: 20px 0;
  margin: 0;
}

.category img {
  width: 350px;
  height: auto;
  object-fit: cover;
  margin: 10px;
  display: block;
}

.content {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex: 1;
  padding: 0 20px;
}

.info h3 {
  margin: 0;
  font-size: 40px;
  font-weight: bold;
}

.info p {
  margin-top: 5px;
  font-size: 20px;
}

.btn {
  border: 1px solid white;
  padding: 8px 16px;
  text-decoration: none;
  color: white;
  font-weight: 500;
  border-radius: 4px;
  transition: background-color 0.3s, color 0.3s;
}

.btn:hover {
  background-color: white;
  color: #1f0425;
}

hr {
  border: none;
  border-top: 2px solid white;
  margin: 0;
}

footer {
  background-color: black;
  color: white;
  padding: 50px 20px;
  font-size: 14px;
}

.footer-container {
  display: flex;
  justify-content: space-around;
  flex-wrap: wrap;
  text-align: left;
  margin-bottom: 20px;
}

.footer-section {
  max-width: 350px;
}

.footer-section h4 {
  font-size: 16px;
  font-weight: 600;
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
}

.social-icons img {
  width: 150px;
  height: auto;
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
      <a href="#">Ticket</a>
    </nav>
    <div style="font-weight: bold; font-size: 20px;">Eventix</div>
  </header>

  <section class="hero">
    <img src="🦋 1.png" alt="Nadin Amizah Concert">
    <div class="hero-buttons">
      <button class="btn">Get Information</button>
      <button class="btn">Buy Tickets Now</button>
    </div>
    <div class="hero-text">
      <p>COMING SOON</p>
      <h1>Nadin Amizah</h1>
      <p>Gambir Expo, Jakarta<br>19-20 April 2025</p>
    </div>
  </section>

  <section class="categories">
  <div class="category">
  <img src="perempuan.png" alt="Kategori Penyanyi Solo Perempuan">
  <div class="content">
    <div class="info">
      <h3>Kategori Penyanyi Solo Perempuan</h3>
      <p>Nadin Amizah, Mahalini, Raisa, Lyodra, dll</p>
    </div>
    <a href="#" class="btn">More Info</a>
  </div>
</div>


<hr>

<div class="category">
  <img src="lakilaki.png" alt="Kategori Penyanyi Solo Laki-Laki">
  <div class="content">
    <div class="info">
      <h3>Kategori Penyanyi Solo Laki-Laki</h3>
      <p>Afgan, Tulus, Rizky Febian, Ardhito Pramono, dll</p>
    </div>
    <a href="#" class="btn">More Info</a>
  </div>
</div>

<hr>

<div class="category">
  <img src="grup.png" alt="Kategori Penyanyi Grup">
  <div class="content">
    <div class="info">
      <h3>Kategori Penyanyi Grup</h3>
      <p>Juicy Luicy, Dewa 19, Slank, Sheila on 7, Vierratale, dll</p>
    </div>
    <a href="#" class="btn">More Info</a>
  </div>
</div>

  </section>

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
    <img src="#" alt="Social Media Icons">
  </div>
</footer>
</body>
</html>
