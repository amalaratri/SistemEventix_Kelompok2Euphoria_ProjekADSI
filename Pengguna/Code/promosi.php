<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Promotion | Eventix</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: 'Inter', sans-serif;
            box-sizing: border-box;
        }
        body {
            background: url('bg tiket konser.png') no-repeat center center fixed;
            background-size: cover;
            color: white;
        }
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 40px;
            background-color: #1a0727;
        }
        .back-arrow {
            color: white;
            font-size: 24px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s;
        }
        .back-arrow:hover {
            color: #b33fff;
        }
        nav a {
            margin: 0 15px;
            color: white;
            text-decoration: none;
            font-size: 14px;
            font-weight: 500;
        }
        nav a:hover {
            text-decoration: underline;
        }
        .logo {
            font-weight: bold;
            font-size: 20px;
            color: white;
        }

        .container {
            text-align: center;
            padding: 60px 20px 40px;
        }
        .title {
            font-size: 36px;
            font-weight: 700;
        }
        .subtitle {
            font-size: 18px;
            font-weight: 400;
            margin-bottom: 30px;
        }
        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            max-width: 1000px;
            margin: 0 auto 40px auto;
        }
        .card {
            background-color: white;
            color: black;
            border-radius: 12px;
            padding: 20px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.2);
        }
        .card h3 {
            font-size: 18px;
            font-weight: 700;
            margin-bottom: 10px;
        }
        .card p {
            font-size: 14px;
            line-height: 1.6;
        }
        .next-button {
            background-color: white;
            color: black;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 12px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .next-button:hover {
            background-color: #ddd;
        }

        footer {
            background-color: black;
            color: white;
            padding: 40px 20px;
            font-size: 14px;
        }
        .footer-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            max-width: 1000px;
            margin: auto;
        }
        .footer-section {
            max-width: 250px;
            margin: 10px 20px;
        }
        .footer-section h4 {
            margin-bottom: 10px;
            font-size: 16px;
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
            margin-top: 20px;
        }
        .social-icons img {
            width: 140px;
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
    <div class="logo">🎟️ Eventix</div>
</header>

<div class="container">
    <div class="title">Promotion</div>
    <div class="subtitle">Optional</div>

    <div class="cards">
        <div class="card">
            <h3>🎫 Early Bird</h3>
            <p>Diskon khusus bagi pelanggan yang membeli tiket lebih awal sebelum tanggal tertentu.<br>Diskon 15% untuk pembelian sebelum 1 Juli 2024.</p>
        </div>
        <div class="card">
            <h3>⚡ Flash Sale</h3>
            <p>Diskon besar dalam waktu terbatas untuk pembelian tiket tertentu.<br>Diskon 10% untuk pembelian dalam 2 jam ke depan!</p>
        </div>
        <div class="card">
            <h3>🎟️ Buy 1 Get 1</h3>
            <p>Setiap pembelian 1 tiket akan mendapatkan 1 tiket tambahan secara gratis.<br>Beli 1 tiket Festival, gratis 1 tiket Festival (terbatas).</p>
        </div>
        <div class="card">
            <h3>💸 Cashback</h3>
            <p>Pelanggan yang membeli tiket dengan metode pembayaran tertentu akan mendapatkan cashback.<br>Cashback Rp50.000 untuk pembayaran menggunakan GPay atau OVO.</p>
        </div>
    </div>

    <button class="next-button">NEXT</button>
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
