<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Konfirmasi Tiket</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: 'Poppins', sans-serif;
      color: white;
      background: url('bg tiket konser.png') no-repeat center center fixed;
      background-size: cover;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
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
    main {
      flex: 1;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      text-align: center;
      padding: 3rem 1rem;
    }
    .title {
      font-size: 2.5rem;
      font-weight: bold;
    }
    .subtitle {
      font-size: 1.5rem;
      margin-bottom: 2rem;
    }
    .confirmation {
      font-size: 1.6rem;
      margin: 20px 0;
      max-width: 900px;
      line-height: 1.6;
    }
    .highlight {
      color: red;
      font-weight: bold;
    }
    
    .button-group {
      display: flex;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
    }
    .btn {
      background-color: white;
      color: #1a0727;
      padding: 10px 30px;
      font-weight: bold;
      text-decoration: none;
      border-radius: 10px;
      transition: background-color 0.3s, color 0.3s;
    }

    .btn-cancel:hover {
      background-color: #ff4d4d;
      color: white;
    }
    .btn-next:hover {
      background-color: #28a745;
      color: white;
    }

    footer {
      background-color: black;
      color: white;
      padding: 30px 20px;
      font-size: 14px;
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

<main>
  <div class="title">Nadin Amizah</div>
  <div class="subtitle">Melanda Festival</div>

  <div class="confirmation">
    <span class="highlight">Are you sure </span>you want to buy this ticket?
    CAT 8A seats <br>are priced at <span class="highlight">Rp200.000</span> become <span class="highlight">Rp170.000</span>?<br>
    With <span class="discount">15% discount</span> for early buyers
  </div>

  <div class="button-group">
  <a href="cancel.php" class="btn btn-cancel">CANCEL</a>
<a href="konfirmasi.php" class="btn btn-next">NEXT</a>

  </div>
</main>

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
