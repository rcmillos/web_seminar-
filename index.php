<?php session_start(); ?>

<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Web Seminar</title>

    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/feather-icons"></script>

    <!-- FIX CSS -->
    <link rel="stylesheet" href="styl.css" />
  </head>

  <body>
    <!-- NAVBAR -->
    <nav class="navbar">
      <a href="index.php" class="logo">Web<span>Seminar</span></a>

      <div class="nav-links" id="navLinks">
        <a href="index.php">Home</a>
        <a href="login.php">Login</a>
        <a href="register.php">Daftar</a>
        <a href="seminar.php">Seminar</a>
      </div>

      <div class="menu" id="menu">
        <i data-feather="menu"></i>
      </div>
    </nav>

    <!-- HERO -->
    <section class="hero">
      <div class="content">
        <h1>
          Belajar Lebih Jauh <br />
          Dari <span>Mana Saja</span>
        </h1>

        <p>Platform webinar modern untuk belajar online dengan mudah.</p>

        <a href="register.php" class="btn">Daftar Sekarang</a>
      </div>
    </section>

    <!-- ICON -->
    <script>
      feather.replace();
    </script>

    <!-- FIX JS -->
    <script src="scrip.js"></script>
  </body>
</html>
