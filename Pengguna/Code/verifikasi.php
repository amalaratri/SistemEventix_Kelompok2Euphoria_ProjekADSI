<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Verify Code - Eventix</title>
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
      width: 100%;
    }

    body {
      background-image: url('Tampilan Awal.png'); /* Ganti jika ingin sesuai gambar konser */
      background-size: cover;
      background-position: center;
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      overflow: hidden;
    }

    .dark-overlay {
      position: absolute;
      top: 0;
      left: 0;
      height: 100%;
      width: 100%;
      background-color: rgba(0, 0, 0, 0.7);
      z-index: -1;
    }

    .header {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 60px;
      background-color: #1a0727;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 2;
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

    .logo {
      font-weight: bold;
      color: #fff;
      font-size: 1.2rem;
    }

    .verify-container {
      background-color: rgba(28, 15, 38, 0.9);
      padding: 3rem;
      border-radius: 16px;
      text-align: center;
      color: white;
      width: 90%;
      max-width: 500px;
      box-shadow: 0 0 30px rgba(0, 0, 0, 0.6);
      z-index: 1;
    }

    .verify-container h2 {
      margin-bottom: 0.5rem;
      font-size: 1.5rem;
    }

    .verify-container p {
      font-size: 0.95rem;
      margin-bottom: 1.5rem;
    }

    .otp-inputs {
      display: flex;
      justify-content: space-between;
      gap: 10px;
      margin-bottom: 1rem;
    }

    .otp-inputs input {
      width: 50px;
      height: 50px;
      font-size: 1.5rem;
      text-align: center;
      border-radius: 8px;
      border: 2px solid white;
      background-color: transparent;
      color: white;
    }

    .otp-inputs input:focus {
      outline: 2px solid #b33fff;
    }

    .resend {
      margin-bottom: 1.5rem;
      font-size: 0.9rem;
    }

    .resend a {
      color: red;
      text-decoration: none;
    }

    .resend a:hover {
      text-decoration: underline;
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

  </style>
</head>
<body>
  <div class="dark-overlay"></div>

  <div class="header">
    <a href="sign up.php" class="back-arrow">←</a>
    <div class="logo">Eventix</div>
  </div>

  <div class="verify-container">
    <h2>Verify Code</h2>
    <p>Please enter the code we just sent to your email</p>
    <form>
      <div class="otp-inputs">
        <input type="text" maxlength="1" required />
        <input type="text" maxlength="1" required />
        <input type="text" maxlength="1" required />
        <input type="text" maxlength="1" required />
      </div>
      <div class="resend">
        Didn't receive OTP? <br><a href="verifikasi.php">Resend Code</a>
      </div>
      <button type="submit" class="btn">Verify</button>
    </form>
  </div>
</body>
</html>
