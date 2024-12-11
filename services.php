<?php
include 'database.php';
include 'header.php';
?>

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="styles.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Services</title>
</head>
<header>
  <h1>Chroma Spa</h1>
</header>

<section class="services">
  <h2>Our Services</h2>
  <div class="service">
    <img src="swedish_massage.jpg" alt="Massage Icon">
    <h3>Swedish Massage</h3>
    <p>Enjoy a full-body massage to relax your muscles and relieve tension.</p>
    <p class="price">Php 1,200/hour</p>
    <a href="appointment.php" class="avail-btn">Avail Now</a>
  </div>
  <div class="service">
    <img src="facial_treatment.jpg" alt="Facial Icon">
    <h3>Facial Treatments</h3>
    <p>Revitalize your skin with our refreshing and cleansing facial treatments.</p>
    <p class="price">Php 1,000/session</p>
    <a href="appointment.php" class="avail-btn">Avail Now</a>
  </div>
  <div class="service">
    <img src="manicure&pedicure.jpg" alt="Manicure Icon">
    <h3>Manicure & Pedicure</h3>
    <p>Pamper your hands and feet with our deluxe nail services.</p>
    <p class="price">Php 700/session</p>
    <a href="appointment.php" class="avail-btn">Avail Now</a>
  </div>
<div class="service">
    <img src="body_scrub.jpg" alt="Body Scrub Icon">
    <h3>Body Scrub</h3>
    <p>Enjoy a full-body exfoliation to remove dead skin cells and reveal smoother, softer skin.</p>
    <p class="price">Php 1,500/session</p>
    <a href="appointment.php" class="avail-btn">Avail Now</a>
  </div>
  <div class="service">
    <img src="sauna.jpg" alt="Sauna Icon">
    <h3>Sauna</h3>
    <p>Enjoy a heated room that helps to relax muscles and improve circulation.</p>
    <p class="price">Php 500/session</p>
    <a href="appointment.php" class="avail-btn">Avail Now</a>
  </div>
</section>


<?php include 'footer.php'; ?>