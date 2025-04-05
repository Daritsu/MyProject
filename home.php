<?php
// No PHP logic yet, but ready for dynamic features!
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome Page</title>
  <style>
    /* Reset default styles */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
      color: #fff;
      line-height: 1.6;
    }

    a {
      text-decoration: none;
      color: inherit;
    }

    header {
      text-align: center;
      padding: 60px 20px;
    }

    header h1 {
      font-size: 3em;
      margin-bottom: 15px;
    }

    header p {
      font-size: 1.2em;
      margin-bottom: 20px;
    }

    .btn {
      background: #fff;
      color: #2575fc;
      padding: 12px 24px;
      border: none;
      border-radius: 50px;
      font-size: 1em;
      transition: all 0.3s ease;
      cursor: pointer;
      display: inline-block;
      margin-top: 10px;
    }

    .btn:hover {
      background: #2575fc;
      color: #fff;
      transform: scale(1.05);
    }

    section {
      padding: 60px 20px;
      text-align: center;
      background: rgba(255, 255, 255, 0.1);
      margin: 20px auto;
      border-radius: 15px;
      width: 90%;
      max-width: 1000px;
      backdrop-filter: blur(10px);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
    }

    section h2 {
      margin-bottom: 20px;
      font-size: 2.5em;
    }

    section p {
      margin-bottom: 20px;
      font-size: 1.1em;
    }

    .features {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 20px;
      margin-top: 30px;
    }

    .feature-item {
      background: rgba(255, 255, 255, 0.15);
      padding: 20px;
      border-radius: 12px;
      transition: transform 0.3s;
    }

    .feature-item:hover {
      transform: translateY(-5px);
    }

    .feature-item h3 {
      margin-top: 15px;
      margin-bottom: 10px;
    }

    footer {
      text-align: center;
      padding: 20px;
      background: rgba(0, 0, 0, 0.3);
      margin-top: 40px;
      font-size: 0.9em;
    }
  </style>
</head>
<body>

  <header>
    <h1>Welcome to Our Website!</h1>
    <p>We are glad to have you here. Explore and enjoy your stay.</p>
    <a href="#about" class="btn">Get Started</a>
  </header>

  <section id="about">
    <h2>About Us</h2>
    <p>We are a passionate team dedicated to creating beautiful and functional experiences for our users. Our mission is to deliver outstanding web solutions that help you succeed.</p>
  </section>

  <section id="features">
    <h2>Our Features</h2>
    <div class="features">
      <div class="feature-item">
        <h3>🚀 Fast Performance</h3>
        <p>Enjoy a blazing-fast experience thanks to our optimized code and modern design.</p>
      </div>
      <div class="feature-item">
        <h3>🔒 Secure & Reliable</h3>
        <p>We prioritize your security with advanced protection and reliable uptime.</p>
      </div>
      <div class="feature-item">
        <h3>🎨 Beautiful Design</h3>
        <p>Our designs are crafted with attention to detail to ensure a stunning interface.</p>
      </div>
      <div class="feature-item">
        <h3>📱 Responsive Layout</h3>
        <p>Access our website from any device with our fully responsive layout.</p>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Us</h2>
    <p>Have any questions or feedback? We would love to hear from you!</p>
    <a href="mailto:contact@example.com" class="btn">Send Email</a>
  </section>

  <footer>
    <p>&copy; 2025 Your Website. All rights reserved.</p>
  </footer>

</body>
</html>
