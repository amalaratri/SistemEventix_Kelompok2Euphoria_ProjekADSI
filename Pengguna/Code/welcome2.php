<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Eventix Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Poppins', sans-serif;
    }

    body, html {
      height: 100%;
    }

    body {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .header,
    .footer {
      position: absolute;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #1a0727;
      z-index: 2;
    }

    .header {
      top: 0;
      display: flex;
      align-items: center;
      justify-content: flex-end;
      padding-right: 30px;
    }

    .footer {
      bottom: 0;
    }

    .logo {
      font-weight: bold;
      color: #fff;
      font-size: 1.2rem;
    }

    .background-layer1,
    .background-layer2 {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-size: cover;
      background-position: center;
      z-index: -4;
    }

    .background-layer1 {
      background-image: url('Tampilan Awal.png');
      opacity: 1;
      mix-blend-mode: overlay;
    }

    .background-layer2 {
      background-image: url('merah.png');
      opacity: 0.5;
      mix-blend-mode: multiply;
    }

    .dark-overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: -3;
      box-shadow: inset 0 0 80px rgba(0, 0, 0, 0.8);
    }

    .welcome-text {
      position: absolute;
      top: 200px;
      right: 300px;
      text-align: center;
      color: white;
      z-index: 1;
    }

    .welcome-text h1 {
      font-size: 0.7rem;
      font-weight: 200;
      letter-spacing: 2px;
      line-height: 1.2;
    }

    .bold-text {
    font-weight: 700;
    font-size: 0.9rem;
    }

    .red-link {
    color: red;
    text-decoration: none;
    font-weight: 400;
    }

    .red-link:hover {
    text-decoration: underline;
    }

    .login-container {
      background-color: rgba(165, 169, 180, 0.24);
      padding: 8rem;
      border-radius: 18px;
      width: 100%;
      max-width: 500px;
      color: white;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

  </style>
</head>
<body>
  <div class="background-layer1"></div>
  <div class="background-layer2"></div>
  <div class="dark-overlay"></div>

  <div class="header">
    <div class="logo">Eventix</div>
  </div>

  <div class="welcome-text">
  <h1>
    <span class="bold-text">Login ke akunmu</span><br>
    Belum memiliki akun? <a href="Welcome.php" class="red-link">Daftar</a>
  </h1>
</div>


  <div class="login-container">
  </div>

</body>
</html>
