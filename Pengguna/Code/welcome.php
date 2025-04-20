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
      flex-direction: column;
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
      top: 25%;
      text-align: center;
      color: white;
      z-index: 1;
      opacity: 0;
      transform: translateY(-50px);
      animation: slideDownFade 2s ease-out forwards;
    }

    @keyframes slideDownFade {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .welcome-text h1 {
      font-size: 4.5rem;
      font-weight: 900;
      letter-spacing: 2px;
      line-height: 1.2;
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
    <h1>WELCOME TO<br>Eventix</h1>
  </div>

</body>
</html>
