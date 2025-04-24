<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <title>Nadin Amizah - Melanda Festival</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      width: 1440px;
      height: 1183px;
      font-family: 'Poppins', sans-serif;
      background: url('bg tiket konser.png') no-repeat center center fixed;
      background-size: cover;
      color: white;
    }

    nav {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      background: #2c003f;
      color: white;
      padding: 15px 40px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      z-index: 10;
    }

    .nav-center {
      flex: 1;
      text-align: center;
    }

    .nav-center a {
      color: white;
      margin: 0 15px;
      text-decoration: none;
      font-weight: 500;
    }

    .nav-right {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .eventix-logo {
      font-weight: bold;
      font-size: 1.1rem;
    }

    .brand-symbol {
      color: red;
      font-weight: bold;
    }

    .menu-icon {
      font-size: 20px;
      cursor: pointer;
    }

    .overlay {
      background-color: rgba(0, 0, 0, 0.7);
      min-height: 100vh;
      padding: 120px 20px 40px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 0.5rem;
    }

    h2 {
      font-size: 1.5rem;
      font-weight: 400;
      margin-bottom: 2rem;
    }

    .confirmation {
      font-size: 1.2rem;
      max-width: 600px;
      margin: auto;
    }

    .confirmation .highlight-red {
      color: red;
      font-weight: 600;
    }

    .confirmation .price {
      color: red;
      font-weight: 600;
    }

    .discount {
      margin-top: 1rem;
      font-size: 1rem;
      color: #fff;
    }

    .buttons {
      margin-top: 2rem;
    }

    .button {
      padding: 12px 30px;
      margin: 0 10px;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
    }

    .cancel-btn {
      background-color: white;
      color: black;
    }

    .next-btn {
      background-color: #9b00ff;
      color: white;
    }

    footer {
      background-color: #111;
      padding: 30px 10px;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-around;
      color: #ccc;
      font-size: 0.9rem;
    }

    footer div {
      margin: 10px;
      max-width: 200px;
      text-align: center;
    }
  </style>
</head>
<body>

  <nav>
    <div class="nav-center">
      <a href="#">Dashboard</a>
      <a href="#">About Us</a>
      <a href="#">Contact Us</a>
      <a href="#">FAQ</a>
    </div>
    <div class="nav-right">
      <div class="eventix-logo"><span class="brand-symbol">||</span> Eventix</div>
      <div class="menu-icon">⋮</div>
    </div>
  </nav>

  <div class="overlay">
    <h1>Nadin Amizah</h1>
    <h2>Melanda Festival</h2>
    <div class="confirmation">
      <p>
        <span class="highlight-red">Are you sure</span> you want to buy this ticket? CAT 8A seats<br />
        are priced at <span class="price"><s>Rp200.000</s></span> become <span class="price">Rp170.000</span>?
      </p>
      <p class="discount">With 15% discount for early buyers</p>
    </div>
    <form class="buttons" method="POST" action="process.php">
      <button type="submit" name="cancel" class="button cancel-btn">CANCEL</button>
      <button type="submit" name="next" class="button next-btn">NEXT</button>
    </form>
  </div>

  <footer>
    <div>
      <strong>Contact Us</strong><br />
      eventix.concert@yahoo.com
    </div>
    <div>
      <strong>Keep Up to Date</strong><br />
      Sign up to receive exclusive discounts & pre-sale links before anyone else!
    </div>
    <div>
      <strong>Quick Links</strong><br />
      Work With Us | Privacy Policy
    </div>
  </footer>

</body>
</html>
