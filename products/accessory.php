<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alf's Cycle - single accessories page</title>
  <link rel="stylesheet" href="../assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php $base_url = '../'; ?>
  <?php include '../layout/header.php'; ?>

  <nav aria-label="Breadcrumb">
    <ol>
      <li><a href="../index.php">Home</a></li>
      <li><a href="../bikes.php">Accessories</a></li>
      <li aria-current="page">Cassette</li>
    </ol>
  </nav>

  <main class="content">
    <h2>Shimano 105 CS-R7000 Cassette</h2>
    <section class="p-0">
      <figure>
        <img width="992" height="661" src="../assets/images/accessories/rim.webp" alt="Shimano 105 CS-R7000 Cassette">
        <figcaption>
          <p>Shimano 105 CS-R7000 Cassette</p>
        </figcaption>
      </figure>
      <p>
        The Shimano 105 CS-R7000 Cassette is a high-performance 11-speed
        cassette designed for smooth, reliable, and precise gear changes.
        Engineered with durable materials, it delivers consistent performance
        ride after ride, whether you’re tackling city streets, long road
        rides, or challenging hills.
      </p>
      <p>
        Its lightweight yet robust construction ensures efficiency while
        minimizing wear, making it a perfect upgrade or replacement for riders
        seeking dependable shifting and long-lasting performance. Compatible
        with Shimano 105 drivetrains, it combines quality, precision, and
        durability in one essential cycling component.
      </p>

      <h2>Specifications</h2>

      <table>
        <tbody>
          <tr>
            <td>Model</td>
            <td>Shimano 105 CS-R7000</td>
          </tr>
          <tr>
            <td>Type</td>
            <td>Cassette</td>
          </tr>
          <tr>
            <td>Speed</td>
            <td>11-Speed</td>
          </tr>
          <tr>
            <td>Compatibility</td>
            <td>Shimano 105 / Shimano Road Groupsets</td>
          </tr>
          <tr>
            <td>Material</td>
            <td>Steel / Aluminum Alloy (sprockets)</td>
          </tr>
          <tr>
            <td>Cog Range</td>
            <td>11–28T (common; varies by variant)</td>
          </tr>
          <tr>
            <td>Weight</td>
            <td>~230g (depending on size)</td>
          </tr>
          <tr>
            <td>Finish</td>
            <td>Silver</td>
          </tr>
          <tr>
            <td>Use</td>
            <td>Road cycling, performance shifting</td>
          </tr>
          <tr>
            <td>Durability</td>
            <td>High; designed for long-lasting performance</td>
          </tr>
        </tbody>
      </table>

      <div class="articles-grid">
        <article>
          <figure>
            <img width="304" height="405" src="../assets/images/accessories/shimano-105.webp" alt="1980s Workshop">
          </figure>
          <h3>Shimano Deore CN-HG54 Chain</h3>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="../assets/images/accessories/terk-verse.webp" alt="Community Events">
          </figure>
          <h3>Trek Verse Trail Bike Saddle</h3>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="../assets/images/accessories/specialized-bridge-sport.webp" alt="Alf's Legacy">
          </figure>
          <h3>Specialized Bridge Sport Saddle</h3>
        </article>
      </div>
    </section>

    <section class="event-cta">
      <h2>Fancy it?</h2>
      <p>
        Come to our shop and try our gear firsthand. Feel the quality,
        comfort, and performance up close.
      </p>

      <div>
        <a href="mailto:alfscycle@email.com" class="primary-link">Email Us For Any Questions</a>
      </div>
    </section>
  </main>
  <?php include '../layout/footer.php'; ?>
</body>

</html>