<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alf's Cycle - Accessories</title>

  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php include 'layout/header.php'; ?>

  <nav aria-label="Breadcrumb">
    <ol>
      <li><a href="./index.php">Home</a></li>
      <li aria-current="page">Accessories</li>
    </ol>
  </nav>

  <main>
    <section>
      <h2>The Perfect Add-Ons</h2>

      <div class="articles-grid">
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/shimano-105.webp"
              alt="Shimano 105 CS-R7000 Cassette">
            <figcaption>
              <h3>Shimano Deore CN-HG54</h3>
              <p>Sleek single-speed with timeless lines and quality steel frame.</p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>

        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/terk-verse.webp" alt="Trek Verse Trail Bike Saddle">
            <figcaption>
              <h3>Trek Verse Trail Bike Saddle</h3>
              <p>Offers all-day comfort for any rider on trails and off-road adventures.</p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>

        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/specialized-bridge-sport.webp"
              alt="Specialized Bridge Sport Saddle">
            <figcaption>
              <h3>Specialized Bridge Sport Unisex Saddle</h3>
              <p>Provides comfort and control on any terrain with Body Geometry support.</p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>

        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/schwalbe-rapid.webp"
              alt="Schwalbe Rapid Rob K-Guard tire">
            <figcaption>
              <h3>Schwalbe Rapid Rob K-Guard</h3>
              <p>
                A fast-rolling, puncture-resistant tire designed for reliable
                performance on city streets and light trails.
              </p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>

        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/lazer-chiru.webp" alt="Lazer Chiru cycling helmet">
            <figcaption>
              <h3>Lazer Chiru Helmets</h3>
              <p>
                Lightweight and ventilated helmet designed for comfort and safety
                on every ride.
              </p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>
      </div>
    </section>
  </main>

  <?php include 'layout/footer.php'; ?>
</body>

</html>