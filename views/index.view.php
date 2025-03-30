<?php require "partials/head.php"; ?>
<?php require "partials/banner.php"; ?>

<main>
  <!-- ABOUT US SECTION -->
  <section id="about" aria-labelledby="about-us-title">
    <header>
      <h2 id="about-us-title">About Us</h2>
    </header>
    <div id="our-mission-section" aria-labelledby="our-mission-title">
      <header>
        <h3 id="our-mission-title">Our Mission</h3>
      </header>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sit
        sed harum explicabo, ut numquam veniam placeat corrupti alias! Sint
        accusantium laboriosam inventore, totam fugiat facilis numquam
        ducimus neque quos!
      </p>
    </div>
    <div class="our-vision-section" aria-labelledby="our-vision-title">
      <header>
        <h3 id="our-vision-title">Our Vision</h3>
      </header>
      <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic maxime
        nihil perferendis aperiam necessitatibus odit quisquam nesciunt
        blanditiis magnam. Repellat nulla odit dicta soluta veritatis? Qui
        corrupti exercitationem inventore eligendi?
      </p>
    </div>
  </section>

  <!-- PRODUCTS SECTION -->
  <section id="products" aria-labelledby="products-title">
    <header>
      <h2 id="products-title">Our Products</h2>
    </header>
    <div id="essential-oils-section" aria-labelledby="essential-oils-title">
      <header>
        <h3 id="essential-oils-title">Pure Essential Oils</h3>
      </header>
      <div class="card-grid">
        <!-- Card 1 -->
        <?php require "partials/product-card.php"; ?>

        <!-- Card 2 -->
        <?php require "partials/product-card.php"; ?>

        <!-- Card 3 -->
        <?php require "partials/product-card.php"; ?>

        <!-- Card 4 -->
        <?php require "partials/product-card.php"; ?>
      </div>
    </div>

    <div class="bar-soaps-section" aria-labelledby="bar-soaps-title">
      <header>
        <h3 id="bar-soaps-title">Bar Soaps</h3>
      </header>
      <div class="card-grid">
        <!-- Card 1 -->
        <?php require "partials/product-card.php"; ?>

        <!-- Card 2 -->
        <?php require "partials/product-card.php"; ?>

        <!-- Card 3 -->
        <?php require "partials/product-card.php"; ?>
      </div>
    </div>
  </section>

  <!-- TESTIMONIALS SECTION -->
  <section id="testimonials" aria-labelledby="testimonials-title">
    <header>
      <h2 id="testimonials-title">Testimonials</h2>
    </header>
  </section>

  <!-- CONTACT US SECTION -->
  <section id="contact" aria-labelledby="contact-us-title">
    <header>
      <h2 id="contact-us-title">Contact Us</h2>
    </header>
  </section>
</main>

<footer>
  <p>Copyright &copy; 2025 | Pure Zen Essence</p>
  <ul>
    <li>
      <a class="social-link" href="" target="_blank">
        <i class="fa-brands fa-instagram"></i>
      </a>
    </li>
    <li>
      <a class="social-link" href="">
        <i class="fa-brands fa-tiktok"></i>
      </a>
    </li>
  </ul>
</footer>

<?php require "partials/foot.php"; ?>