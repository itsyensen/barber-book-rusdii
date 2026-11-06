<?php
$title = "Rusdii BarberShop - Premium Barber";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?= $title ?>
  </title>

  <link rel="stylesheet" href="styles/main.css">
  <script src="scripts/main.js"></script>

</head>


<body>
  <!-- Ini bagian header -->
  <?php require_once __DIR__ . "/components/landing/header.php" ?>
  <section id="hero" class="hero">
    <div class="hero-text">
      <span class="text">Tradition, shaped for today</span>
      <h1>Finer Cut<br>Premium Finish</h1>
      <p>Classic barbering with a modern touch, crafted for your confidence.</p>
      <a href="#" class="btn-book">Book your appointment &rarr;</a>
    </div>
  <div class="hero-photo"></div>
</section>

<!-- OUR STORY -->
<section id="our-story" class="our-story">

    <!-- Gambar sebelah kiri -->
    <div class="story-image">
        <img src="assets/img/our-story-interior.png" alt="Interior Rusdii BarberShop">
    </div>

    <!-- Konten sebelah kanan -->
    <div class="story-content">

        <span class="story-label">Our Story</span>

        <h2>
            KAMI HADIR UNTUKMU
            <span>SEJAK 2026.</span>
        </h2>

        <p>
            Selamat datang ke Rusdii Barbershop, rumah bagi para laki-laki,
            tempat bergaya, tempat kegantengan. Baik potongan biasa sampai
            potongan yang bermodel.
        </p>

        <p>
            Rusdii Barbershop adalah tempat cukur rambut dengan pelayanan
            terbaik dan suasana yang nyaman.
        </p>

        <!-- Slogan -->
        <div class="story-slogan">
            <span class="scissors">✂</span>

            <div>
                <p>MORE THAN JUST A HAIRCUT</p>
                <p>IT'S A LIFESTYLE.</p>
            </div>
        </div>

    </div>

</section>


<section id="barber-choice" class="barber-choice">

</section>

<section id="location">

</section>


<section id="contact">

</section>


<section id="profile">

</section>


  <!-- Ini bagian footer -->
  <?php require_once __DIR__ . "/components/landing/footer.php" ?>

</body>

</html>