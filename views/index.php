<!DOCTYPE html>
<html lang="sq">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cosmetic Pharmacy – Homepage</title>
  <link rel="stylesheet" href="../styles/style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet" />
</head>
<body>
<!-- Top bar -->
<div class="top-bar">
  <div>info@cosmeticpharmacy.al | +355 00 00 00 000</div>
  <div>
    <a href="#">Facebook</a>
    <a href="#">Instagram</a>
    <a href="#">YouTube</a>
  </div>
</div>

<!-- Logo & Search -->
<div class="logo-search">
  <div class="logo">Cosmetic Pharmacy</div>
  <div class="search-box">
    <input type="text" id="searchInput" placeholder="Kërkoni për produkte..." />
  </div>
  <div class="cart" id="cart">Cart (0)</div>
</div>

<!-- Language & Currency Switchers -->
<div class="switchers">
  <div class="language-switcher">
    <label for="language">Gjuha:</label>
    <select id="language">
      <option value="sq">Shqip</option>
      <option value="en">English</option>
    </select>
  </div>
  <div class="currency-switcher">
    <label for="currency">Monedha:</label>
    <select id="currency">
      <option value="ALL">ALL</option>
      <option value="EUR">EUR</option>
      <option value="USD">USD</option>
    </select>
  </div>
</div>

<!-- Menu -->
<nav class="main-nav">
  <a href="#">DERMOKOZMETIKË</a>
  <a href="#">FARMACI</a>
  <a href="#">SUPLEMENTE</a>
  <a href="#">HIGJIENË</a>
  <a href="#">BEBE DHE NËNA</a>
  <a href="#">GIFT CARD</a>
  <a href="#">OFERTË</a>
  <a href="#">QUIZ</a>
</nav>

<!-- Banner -->
<section class="banner">
  <div class="banner-text">
    <h2 data-i18n="choose">Zgjidh</h2>
    <h1 data-i18n="protection">MBROJTJEN NDAJ DIELLIT</h1>
    <p data-i18n="fits_skin">që i përshtatet lëkurës tënde</p>
  </div>
</section>

<!-- Dropdown Kategori -->
<section class="products">
  <h2 data-i18n="offer_products">Produkte në ofertë</h2>
  <p class="sub" data-i18n="spring_offers">OFERTAT E PRANVERËS</p>

  <div class="dropdown-container">
    <label for="categoryDropdown">Zgjidh Kategorinë:</label>
    <select id="categoryDropdown">
      <option value="all">Të gjitha</option>
      <option value="dermokozmetike">Dermokozmetikë</option>
      <option value="farmaci">Farmaci</option>
      <option value="suplemente">Suplemente</option>
    </select>
  </div>

  <div class="product-list">
    <div class="product-card" data-price="1200" data-category="dermokozmetike">
      <img src="https://www.farmaon.al/wp-content/uploads/2024/03/produkt1.png" />
      <h3>Krem Dielli SPF 50+</h3>
      <p class="price">1200 ALL</p>
      <button class="add-to-cart" data-i18n="add_to_cart">Shto në shportë</button>
    </div>
    <div class="product-card" data-price="950" data-category="suplemente">
      <img src="https://www.farmaon.al/wp-content/uploads/2024/03/produkt2.png" />
      <h3>Spray Natyral</h3>
      <p class="price">950 ALL</p>
      <button class="add-to-cart" data-i18n="add_to_cart">Shto në shportë</button>
    </div>
    <div class="product-card" data-price="1500" data-category="farmaci">
      <img src="https://www.farmaon.al/wp-content/uploads/2024/03/produkt3.png" />
      <h3>Krem FYTYRE</h3>
      <p class="price">1500 ALL</p>
      <button class="add-to-cart" data-i18n="add_to_cart">Shto në shportë</button>
    </div>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="footer-content">
    <div class="footer-section">
      <h4 data-i18n="about_us">Rreth nesh</h4>
      <a href="#">Kontakt</a><br />
      <a href="#">Misioni yne</a><br />
      <a href="#">Blog</a>
    </div>
    <div class="footer-section">
      <h4 data-i18n="contact_us">Kategoritë</h4>
      <a href="#">Dermokozmetikë</a><br />
      <a href="#">Farmaci</a><br />
      <a href="#">Suplemente</a><br />
      <a href="#">Higjienë</a><br />
      <a href="#">Markat</a><br />
      <a href="#">Bebe dhe nëna</a><br />
      <a href="#">Gift Card</a>
    </div>
    <div class="footer-section">
      <h4 data-i18n="costumer_service">Shërbim klienti</h4>
      <a href="#">Profili im</a><br />
      <a href="#">Si të blej</a><br />
      <a href="#">Dërgesa dhe transporti</a><br />
      <a href="#">Mënyrat e pagesës</a><br />
      <a href="#">Gjurmimi i dërgesës</a>
    </div>
    <div class="footer-section">
      <h4 data-i18n="social">Na ndiqni</h4>
      <a href="#">Facebook</a><br />
      <a href="#">Instagram</a><br />
      <a href="#">YouTube</a>
    </div>
    <div class="footer-section">
      <h4 data-i18n="security">Siguria</h4>
      <a href="#">Siguria e te dhenave personale</a><br />
      <a href="#">Siguria e produkteve</a><br />
      <a href="#">Termat dhe kushtet e bleries</a>
    </div>
  </div>
  <p class="footer-description__content">Cosmetic Pharmacy është farmacia juaj online</p>
  <p class="copyright">© 2025 Cosmetic Pharmacy. Të gjitha të drejtat e rezervuara.</p>
</footer>

<script src="../js/script.js"></script>
</body>
</html>
