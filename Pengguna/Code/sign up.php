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
    .back-arrow {
    color: white;
    font-size: 1.5rem;
    margin-left: 20px;
    text-decoration: none;
    margin-right: auto;
    font-weight: bold;
    transition: color 0.2s;
    }

    .back-arrow:hover {
    color: #b33fff;
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

    .login-container {
      background-color: rgba(165, 169, 180, 0.24);
      padding: 2rem;
      border-radius: 18px;
      width: 100%;
      max-width: 500px;
      color: white;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    .login-container h2 {
      margin-bottom: 1.5rem;
      font-weight: 700;
    }

    .form-group {
      margin-bottom: 1rem;
    }

    .form-group label {
      display: block;
      margin-bottom: 0.5rem;
      font-size: 0.95rem;
    }

    .form-group input {
      width: 100%;
      padding: 0.75rem;
      border: 1.5px solid white;
      border-radius: 6px;
      background-color: #ff000000;
      color: white;
    }

    .form-group input:focus {
      outline: 2px solid #8f41ff;
      border-color: #ffffff;
    }

    .btn {
      background-color: #b33fff;
      color: white;
      border: none;
      width: 100%;
      padding: 0.75rem;
      border-radius: 6px;
      font-weight: 600;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .btn:hover {
      background-color: #8f41ff;
    }

    .forgot-password {
      margin-top: 1rem;
      text-align: right;
      font-size: 0.9rem;
      color: #ccc;
    }

    .forgot-password a {
      color: white;
      text-decoration: none;
    }

    .forgot-password a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="background-layer1"></div>
  <div class="background-layer2"></div>
  <div class="dark-overlay"></div>

<div class="header">
  <a href="Welcome2.php" class="back-arrow">←</a>
  <div class="logo">Eventix</div>
</div>

  <div class="login-container">
    <h2>Sign Up to Your Account</h2>
    <form>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder=" " required />
      </div>
      <div class="form-group">
        <label for="username">Email</label>
        <input type="email" id="email" placeholder=" " required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder=" " required />
      </div>
      <button type="submit" class="btn">Continue</button>
    </form>
    <div class="forgot-password">
      <a href="#">Forgot password?</a>
    </div>
  </div>

  <div class="footer"></div>
</body>
</html>