<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alf's Cycle</title>
  <link rel="stylesheet" href="./assets/css/styles.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Libre+Baskerville:ital,wght@0,400..700;1,400..700&display=swap"
    rel="stylesheet">
</head>

<body>
  <?php include 'layout/header.php'; ?>
  <main>
    <!-- Hero section -->
    <section class="hero">
      <h1>Keeping <span>Cheriton</span> cycling for generations</h1>
      <!-- Cycle illustration -->
      <svg id="cycle-illustration" width="370" height="218" viewBox="0 0 370 218" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path
          d="M197.385 34.799h29.325l-29.838 111.346m0 0h102.134l-78.95-80.22m-23.184 80.22L97.079 46.717l-26.077 97.338L108.802 3l37.819 10.136"
          stroke="#5c1f2b" stroke-opacity=".1" stroke-width="6" stroke-linecap="square" stroke-linejoin="round" />
        <path
          d="M233.402 128.141a67.2 67.2 0 0 1 6.935-16.417M267.6 85.805a68.001 68.001 0 0 1 94.081 86.663 68 68 0 0 1-104.552 27.259 68 68 0 0 1-23.195-33.777M106.46 86.01a68.01 68.01 0 0 1-6.304 119.496 68.02 68.02 0 0 1-86.034-24.18A68.013 68.013 0 0 1 70.993 76.043"
          stroke="#000" stroke-opacity=".1" stroke-width="6" stroke-linecap="square" stroke-linejoin="round" />
      </svg>

      <figure>
        <img width="168" height="126" src="./assets/images/alfs/alf-in-store.webp" alt="Alf's Cycle workshop in 1983">
        <img width="160" height="284" src="./assets/images/alfs/young-alf.webp"
          alt="photograph of Alf's when he was a young man">
        <!-- Service 40 years illustration -->
        <svg id="service-40-years" viewBox="0 0 704 223" fill="none" stroke="white" stroke-width="0.35"
          xmlns="http://www.w3.org/2000/svg">
          <path
            d="m44.268 31.124.496 3.224-37.324 49.6.992-3.472h39.06q5.085 0 6.448-1.24 1.365-1.365 1.86-4.588h2.356q0 7.069.124 10.912.124 3.72.372 6.82-.868-.248-3.1-.248a384 384 0 0 0-5.208-.248q-2.976-.124-6.2-.124H0v-2.604zm1.984 0v83.328H33.356V47.244l10.912-16.12zm56.001 0q9.549 0 16.864 4.092t11.408 11.408q4.216 7.316 4.216 17.236t-4.34 17.856q-4.215 7.935-11.78 12.524-7.563 4.464-17.732 4.464-9.3 0-16.74-3.968-7.315-4.092-11.531-11.532t-4.216-17.36q0-9.795 4.216-17.608 4.215-7.812 11.78-12.4 7.688-4.712 17.855-4.712m-1.116 2.232q-7.068 0-11.656 8.556-4.587 8.432-4.587 23.56 0 11.16 2.355 17.98 2.357 6.82 6.325 9.92t8.431 3.1q7.192 0 11.656-8.556 4.588-8.556 4.588-23.684 0-11.16-2.356-17.856-2.355-6.82-6.2-9.92-3.843-3.1-8.556-3.1m140.119-24.18v2.48q-2.481.744-5.208 3.844-2.728 2.976-5.952 9.3l-23.932 47.492h-4.588L172.56 18.724q-2.356-4.34-4.092-5.58-1.737-1.365-3.1-1.364V9.176q2.976.124 6.2.372 3.348.124 7.192.124 4.96 0 10.664-.124t10.664-.372v2.604q-3.1 0-5.58.496-2.481.495-3.348 2.108-.868 1.612.62 4.712l20.088 38.44-2.976 3.472 14.136-28.024q4.092-8.184 4.216-12.772.248-4.588-2.604-6.448-2.728-1.984-7.812-2.108v-2.48q4.092.124 7.688.248 3.72.124 7.316.124 2.976 0 5.208-.124 2.356-.124 4.216-.248m-27.528 45.632v29.016q0 4.464.744 6.696t2.728 2.976q2.107.744 6.076.992v2.48q-3.1-.248-8.06-.248a413 413 0 0 0-20.212 0q-4.836 0-7.812.248v-2.48q4.092-.248 6.076-.992 2.107-.744 2.728-2.976.744-2.232.744-6.696v-25.42l9.424 7.688zm97.501-45.632q-.495 5.085-.744 9.92-.124 4.712-.124 7.192 0 2.355.124 4.588.125 2.108.248 3.596h-2.852q-.992-8.556-3.224-13.392-2.232-4.96-6.076-6.944-3.72-2.108-9.796-2.108h-6.82q-3.72 0-5.704.62t-2.728 2.604q-.62 1.984-.62 6.076v63.488q0 3.967.62 6.076.745 1.984 2.728 2.604t5.704.62h7.068q6.325 0 10.54-2.356 4.34-2.355 6.944-7.688 2.604-5.456 3.844-14.88h2.852q-.372 3.845-.372 9.92 0 2.604.124 7.564.249 4.96.744 10.292-6.324-.248-14.26-.248a916 916 0 0 0-14.136-.124h-7.564q-4.587 0-10.044.124-5.331 0-10.912.124-5.455 0-10.416.124v-2.48q4.093-.248 6.076-.992 2.109-.744 2.728-2.976.744-2.232.744-6.696V22.32q0-4.588-.744-6.696-.62-2.232-2.728-2.976-1.984-.869-6.076-.992v-2.48q4.96.124 10.416.248 5.58 0 10.912.124h30.504a497 497 0 0 0 13.02-.372m-19.964 42.408v2.48h-22.072v-2.48zm3.596-16.368q-.495 7.068-.496 10.788.124 3.72.124 6.82t.124 6.82.62 10.788h-2.852q-.62-4.216-1.984-7.936-1.239-3.844-4.092-6.076-2.728-2.355-7.936-2.356v-2.48q3.845 0 6.2-1.612a12.5 12.5 0 0 0 3.968-4.092 22.8 22.8 0 0 0 2.232-5.332q.868-2.852 1.24-5.332zm68.324-26.412 30.132 77.748q1.86 4.464 3.968 6.2 2.232 1.612 4.092 1.736v2.48q-3.224-.248-7.812-.248a331 331 0 0 0-9.176-.124q-5.455 0-10.168.124-4.712 0-7.688.248v-2.48q6.324-.248 8.06-2.108 1.737-1.984-.744-8.308l-21.824-58.9 2.232-2.728-19.84 51.46q-2.355 6.2-2.852 10.168-.495 3.968.62 6.2 1.116 2.232 3.72 3.224 2.605.869 6.448.992v2.48a123 123 0 0 0-7.688-.248q-3.72-.124-7.44-.124-2.727 0-5.208.124-2.355 0-4.216.248v-2.48q2.728-.62 5.332-3.224 2.728-2.604 5.208-9.052l28.396-73.408a39 39 0 0 0 3.224.124q1.737 0 3.224-.124m10.788 52.452v2.48h-36.952l1.24-2.48zm28.736-52.08q3.1.124 7.936.248t9.672.124q6.077 0 11.532-.124 5.456-.124 7.688-.124 11.16 0 18.352 2.728 7.317 2.604 10.912 7.44 3.597 4.836 3.596 11.408 0 4.092-1.612 8.432-1.611 4.216-5.58 7.812-3.967 3.595-10.912 5.952-6.819 2.232-17.484 2.232h-11.904v-2.48h10.664q7.812 0 11.904-2.728 4.216-2.852 5.58-7.44 1.488-4.711 1.488-10.416 0-9.795-3.844-15.128-3.843-5.456-13.268-5.456-5.083 0-6.696 2.108-1.488 2.108-1.488 8.556v61.504q0 4.464.744 6.696t2.728 2.976q2.109.744 6.076.992v2.48q-3.1-.248-7.936-.248a383 383 0 0 0-9.796-.124q-5.58 0-10.416.124-4.836 0-7.936.248v-2.48q4.093-.248 6.076-.992 2.109-.744 2.728-2.976.744-2.232.744-6.696V22.32q0-4.588-.744-6.696-.62-2.232-2.728-2.976-1.983-.869-6.076-.992zm22.196 44.02q5.829.248 9.672.62 3.969.247 6.696.496 2.852.248 5.084.62 10.293.992 15.128 4.836 4.96 3.72 6.572 11.408l2.852 12.772q1.117 5.085 2.356 7.316 1.365 2.108 3.844 1.984 1.737 0 2.976-.868 1.24-.992 2.48-2.604l1.736 1.488q-3.1 3.844-6.572 5.704-3.471 1.736-8.804 1.736-5.952 0-10.044-2.728-4.092-2.852-5.58-10.664l-2.356-12.4q-.991-5.207-2.356-9.176-1.24-3.968-3.472-6.2-2.231-2.232-6.572-2.232h-13.392zm91.234-45.508q6.945 0 10.664 1.488 3.72 1.488 6.448 3.224 1.488.868 2.356 1.364.993.372 1.86.372 1.24 0 1.736-1.364.62-1.364.992-4.092h2.852a198 198 0 0 1-.372 5.456 554 554 0 0 0-.248 8.308V35.96h-2.852a36.2 36.2 0 0 0-2.852-12.152q-2.356-5.828-6.82-9.548-4.34-3.844-11.16-3.844-6.076 0-10.168 3.596-3.968 3.596-3.968 9.672 0 5.208 2.604 8.804 2.604 3.472 7.316 6.82 4.836 3.225 11.408 7.44 6.076 3.967 10.912 7.936 4.837 3.844 7.564 8.556 2.852 4.712 2.852 11.532 0 8.06-3.968 13.392T532.631 96.1t-14.632 2.604q-7.315 0-11.656-1.488-4.215-1.488-7.316-3.1-2.727-1.736-4.216-1.736-1.239 0-1.86 1.364-.496 1.364-.868 4.092h-2.852q.248-2.851.248-6.696.124-3.845.124-9.92.124-6.2.124-15.624h2.852q.496 7.935 2.728 14.88 2.357 6.82 7.068 11.036 4.837 4.215 12.772 4.216 4.341 0 7.812-1.488 3.597-1.612 5.704-4.836 2.108-3.348 2.108-8.432t-2.356-8.928-6.572-7.192-9.92-6.82a168 168 0 0 1-10.912-7.564q-5.084-3.844-8.184-8.68-2.976-4.96-2.976-11.904 0-7.688 3.72-12.524 3.72-4.96 9.672-7.316 6.077-2.356 12.896-2.356m101.01 23.436q8.556 0 15.128 3.472 6.696 3.348 10.54 10.788 3.968 7.44 3.968 19.592t-3.968 19.592q-3.844 7.44-10.54 10.788-6.572 3.348-15.128 3.348t-15.252-3.348-10.54-10.788-3.844-19.592 3.844-19.592 10.54-10.788q6.696-3.472 15.252-3.472m0 2.48q-5.828 0-9.548 7.44-3.596 7.316-3.596 23.932t3.596 23.932q3.72 7.316 9.548 7.316 5.704 0 9.424-7.316t3.72-23.932-3.72-23.932q-3.72-7.44-9.424-7.44M686.911 0q4.092 0 7.068 1.116 3.1.991 5.332 2.728 1.86 1.488 2.976 3.72 1.24 2.232 1.24 4.96 0 3.348-2.356 5.704-2.233 2.355-5.704 2.356-3.72 0-6.2-2.108-2.356-2.232-2.356-6.076 0-2.976 1.612-5.084 1.736-2.232 4.836-3.1-.373-.868-1.612-1.488t-3.348-.62q-2.48 0-4.34.992a8.2 8.2 0 0 0-2.852 2.728q-1.24 2.108-1.736 6.2t-.496 12.4v8.556h13.268v2.48h-13.268v48.732q0 6.076 3.224 8.184 3.348 1.984 8.928 1.984v2.604a523 523 0 0 0-8.68-.248 269 269 0 0 0-11.904-.248q-4.464 0-8.928.248-4.464.124-6.696.248v-2.604q4.587 0 6.448-1.86 1.984-1.86 1.984-7.068V35.464h-8.928v-2.48h8.928q0-7.316.744-12.152.744-4.96 2.232-8.432a21.5 21.5 0 0 1 4.34-6.2q2.604-2.728 6.82-4.464Q681.827 0 686.911 0M25.544 155.124q5.208 0 8.928 1.488t5.456 2.604q4.215 3.1 5.084-3.968h2.728q-.248 3.596-.372 8.556-.124 4.836-.124 13.02h-2.728a37.5 37.5 0 0 0-2.356-8.928q-1.736-4.34-5.084-7.192-3.348-2.976-8.804-2.976-3.844 0-6.448 2.232-2.48 2.232-2.48 6.324 0 3.72 2.232 6.572 2.233 2.728 5.704 5.208a157 157 0 0 1 7.44 5.208q4.464 2.976 7.936 6.076 3.472 2.976 5.58 6.696 2.108 3.595 2.108 8.556 0 5.704-3.224 9.796-3.1 3.968-8.308 6.2-5.084 2.108-11.284 2.108-3.348 0-6.076-.62t-4.836-1.612a658 658 0 0 1-2.976-1.612 15 15 0 0 0-2.604-1.24q-1.24-.62-2.232.496-.868 1.116-1.364 3.72H4.712q.248-3.968.372-9.672t.124-15.128h2.728q.869 6.82 2.604 12.028 1.86 5.084 5.332 8.06 3.472 2.852 8.928 2.852 2.356 0 4.464-.992 2.232-.992 3.596-3.1 1.488-2.108 1.488-5.704 0-5.456-3.72-9.052t-9.3-7.688a246 246 0 0 1-7.936-6.076q-3.596-2.976-5.952-6.696-2.232-3.72-2.232-8.804 0-5.58 2.852-9.176 2.851-3.72 7.44-5.58 4.712-1.984 10.044-1.984m64.236 0q10.913 0 17.112 6.572 6.2 6.572 6.2 20.956H71.304l-.124-2.356h27.528q.248-6.076-.744-11.16-.993-5.208-3.224-8.308-2.107-3.1-5.58-3.1-4.712 0-8.184 5.58-3.472 5.456-4.34 17.98l.496.744a41 41 0 0 0-.372 3.472v3.72q0 8.556 2.48 14.136t6.448 8.184 8.184 2.604q2.852 0 5.828-.868t5.828-3.224q2.852-2.357 5.208-6.696l2.356.992q-1.364 4.34-4.588 8.68-3.1 4.216-8.06 6.944t-11.656 2.728q-8.431 0-14.88-3.72t-10.044-11.036q-3.596-7.44-3.596-18.104 0-11.284 3.72-18.972 3.844-7.688 10.54-11.656 6.696-4.092 15.252-4.092m72.041 0q3.844 0 6.324 1.612 2.604 1.613 3.844 4.092a11.5 11.5 0 0 1 1.24 5.208q0 4.092-2.48 6.82-2.357 2.728-6.324 2.728-3.72 0-6.076-1.984t-2.356-5.456q0-3.1 1.488-5.208 1.612-2.107 3.596-3.348-1.364-.744-3.1-.496-2.976.248-5.456 2.108t-4.216 4.588a25 25 0 0 0-2.728 5.828q-.868 3.1-.868 5.952v30.628q0 6.076 3.1 8.184 3.1 1.984 9.052 1.984v2.604q-2.852-.124-8.308-.248a241 241 0 0 0-11.16-.248q-4.836 0-9.672.248-4.712.124-7.068.248v-2.604q4.588 0 6.448-1.86 1.984-1.86 1.984-7.068v-39.06q0-5.58-1.86-8.184-1.736-2.728-6.572-2.728v-2.604q3.968.372 7.688.372 4.588 0 8.68-.372 4.216-.496 7.688-1.364v12.896a28.3 28.3 0 0 1 3.844-6.448 20.5 20.5 0 0 1 5.828-4.836 14.75 14.75 0 0 1 7.44-1.984m74.522 1.736v2.604q-2.356.497-4.464 2.604-1.984 2.107-3.844 7.44l-18.972 51.832a36 36 0 0 0-2.976-.124q-1.488 0-3.1.124l-22.32-54.932q-1.86-4.712-3.844-5.828t-3.348-1.116v-2.604q3.472.248 7.192.496 3.72.124 8.184.124 3.844 0 8.06-.124 4.34-.248 8.06-.496v2.604q-2.728 0-4.96.372-2.108.372-2.852 1.984-.744 1.488.62 5.332l14.88 38.564-1.116 1.364 11.284-30.628q2.108-5.828 1.736-9.424t-2.728-5.456q-2.232-1.86-6.448-2.108v-2.604q2.108.124 3.968.248 1.984.124 3.844.248h3.72q2.604 0 5.084-.124 2.604-.124 4.34-.372m18.721-31.62q4.464 0 7.316 2.48t2.852 6.572-2.852 6.572-7.316 2.48-7.316-2.48-2.852-6.572 2.852-6.572 7.316-2.48m8.68 30.256v53.94q0 5.208 1.86 7.068 1.984 1.86 6.572 1.86v2.604q-2.232-.124-6.82-.248a173 173 0 0 0-9.3-.248q-4.588 0-9.3.248-4.711.124-7.068.248v-2.604q4.588 0 6.448-1.86 1.984-1.86 1.984-7.068V170.5q0-5.704-1.86-8.308-1.736-2.728-6.572-2.728v-2.604q3.968.372 7.688.372 4.588 0 8.68-.372 4.216-.496 7.688-1.364m45.833-.372q4.587 0 8.432 1.116 3.967.992 6.82 2.852 2.975 1.86 4.712 4.712 1.736 2.728 1.736 6.076 0 4.092-2.48 6.572t-6.2 2.48q-3.844 0-6.324-2.232-2.356-2.232-2.356-5.952 0-3.595 2.108-5.952t5.084-3.1q-1.117-1.612-3.472-2.604-2.357-1.116-5.208-1.116-3.72 0-6.696 1.984-2.976 1.86-5.208 5.704-2.109 3.72-3.348 9.3-1.116 5.456-1.116 12.648 0 10.044 2.356 15.872 2.48 5.828 6.324 8.308 3.843 2.356 8.184 2.356 2.604 0 5.58-.992 2.975-.991 5.828-3.348 2.976-2.356 5.332-6.696l2.356.868q-1.365 4.34-4.464 8.68-2.976 4.34-7.812 7.192t-11.78 2.852q-7.937 0-14.384-3.596-6.449-3.72-10.292-11.16-3.72-7.44-3.72-18.476 0-10.912 3.844-18.476 3.843-7.688 10.664-11.78 6.944-4.092 15.5-4.092m60.656 0q10.912 0 17.112 6.572t6.2 20.956h-41.788l-.124-2.356h27.528q.248-6.076-.744-11.16-.992-5.208-3.224-8.308-2.107-3.1-5.58-3.1-4.712 0-8.184 5.58-3.472 5.456-4.34 17.98l.496.744a41 41 0 0 0-.372 3.472v3.72q0 8.556 2.48 14.136t6.448 8.184 8.184 2.604q2.852 0 5.828-.868t5.828-3.224q2.851-2.357 5.208-6.696l2.356.992q-1.364 4.34-4.588 8.68-3.1 4.216-8.06 6.944t-11.656 2.728q-8.431 0-14.88-3.72-6.448-3.72-10.044-11.036-3.596-7.44-3.596-18.104 0-11.284 3.72-18.972 3.844-7.688 10.54-11.656 6.696-4.092 15.252-4.092"
            fill="#5c1f2b" />
        </svg>
      </figure>

      <p>
        Alf’s Cycles began with Uncle Alf — a man, a workshop, and a lifelong
        love for bikes. What started as helping neighbours soon grew into a
        shop built on honesty, care, and craftsmanship.
      </p>
      <p>
        Today, we carry that same spirit forward. We believe everyone deserves
        a bike that feels right, and that cycling is better when it’s shared —
        through stories, knowledge, and the simple joy of the ride.
      </p>

      <a class="primary-link" href="./about.php"> Explore Alf's History</a>
    </section>

    <!-- Bike Section -->
    <section>
      <div class="section-header">
        <h2>The Town’s Exclusive Treasures</h2>
        <a href="./bikes.php" class="ghost-link"> Explore More</a>
      </div>
      <div class="articles-grid">
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/bikes/classic-collection/clc-the-roadseter.webp"
              alt="Timeless British classic bicycle for comfortable everyday rides">
            <figcaption>
              <h3>The Roadster</h3>
              <p>
                A timeless British classic built for comfort and everyday
                reliability. Perfect for steady rides through town and
                countryside lanes.
              </p>
              <div>
                <span>#Type City</span>
                <span>#Frame Steel</span>
                <span>#Size Medium</span>
              </div>
            </figcaption>
          </figure>
          <a href="./products/bike.php" class="ghost-link">View catalogue</a>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/bikes/classic-collection/clc-the-madam.webp" alt="Modern  One">
            <figcaption>
              <h3>The Madam</h3>
              <p>
                Elegant, upright, and designed for a relaxed riding posture.
                For riders who value tradition, style, and ease and comfort.
              </p>
              <div>
                <span>#Type Hybrid</span>
                <span>#Frame Alloy</span>
                <span>#Size Medium</span>
              </div>
            </figcaption>
          </figure>
          <a href="./products/bike.php" class="ghost-link">View catalogue</a>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/bikes/modern-collection/mod-flux-carbon.webp"
              alt="Urban Fold Pro folding bike – compact, lightweight, and easy to store, ideal for commuters">
            <figcaption>
              <h3>Urban Fold Pro</h3>
              <p>
                Smart folding design for commuters on the move. Compact,
                lightweight, light weight frame and quick to store.
              </p>
              <div>
                <span>#Type Hybrid</span>
                <span>#Frame Alloy</span>
                <span>#Size Medium</span>
              </div>
            </figcaption>
          </figure>
          <a href="./products/bike.php" class="ghost-link">View catalogue</a>
        </article>
      </div>
    </section>
    <section>
      <h2>Everything your bike needs</h2>
      <div class="articles-grid">
        <article>
          <figure>
            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" fill="none" viewBox="0 0 124 124">
              <path stroke="#000" stroke-width="2"
                d="M85 28H39v3c0 26-18 34-18 34m38-3a26 26 0 0 0-25-26A31 31 0 0 0 3 67a46 46 0 0 0 46 47h3m0 0q1 7 2 7h13m-15-7q1-8 2-8h13m0 15v-15m0 15h10m-10-15h10M59 62a26 26 0 0 1-25 26m0 0q-9 0-16-5m16 5q-6 0-11-3m3-70h20m57-12H85v28c0 26 18 34 18 34m-7 23a26 26 0 1 1 0-52 26 26 0 0 1 0 52Z" />
            </svg>
            <figcaption>
              <h3>Bike Repairs</h3>
              <p>
                We fix everything from flat tyres to full mechanical issues
              </p>
            </figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" fill="none" viewBox="0 0 124 124">
              <path stroke="#000" stroke-width="2"
                d="M98 52V10H36v62h36V36H10v62h42m20 21 31-31m6-16a10 10 0 1 0 10 11" />
            </svg>
            <figcaption>
              <h3>Maintenance & Services</h3>
              <p>Routine servicing to keep every ride smooth and reliable.</p>
            </figcaption>
          </figure>
        </article>
        <article>
          <figure>
            <svg xmlns="http://www.w3.org/2000/svg" width="124" height="124" fill="none" viewBox="0 0 124 124">
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M104 84h8a50 50 0 1 0-100 0h8" />
              <path stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M98 84a36 36 0 0 0-36-36m20 36a20 20 0 0 0-20-19M62 90a6 6 0 1 0 0-12 6 6 0 0 0 0 12M62 78V38" />
            </svg>
            <figcaption>
              <h3>Quick Fixes</h3>
              <p>
                Fast help for small problems, so you’re back on the road
                quickly.
              </p>
            </figcaption>
          </figure>
        </article>
      </div>
    </section>
    <!-- Accessories Section -->
    <section>
      <div class="section-header">
        <h2>Gear Up for the Ride</h2>
        <a href="./accessories.php" class="ghost-link"> Explore More</a>
      </div>
      <div class="articles-grid">
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/shimano-105.webp"
              alt="Shimano 105 CS-R7000 Cassette">
            <figcaption>
              <h3>Shimano 105 CS-R7000 Cassette</h3>
              <p>
                Sleek single-speed with timeless lines and quality steel
                frame.
              </p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/terk-verse.webp" alt="Trek Verse Trail Bike Saddle">
            <figcaption>
              <h3>Trek Verse Trail Bike Saddle</h3>
              <p>
                Offers all-day comfort for any rider on trails and off-road
                adventures.
              </p>
            </figcaption>
          </figure>
          <a href="./products/bike.php" class="ghost-link">View catalogue</a>
        </article>
        <article>
          <figure>
            <img width="304" height="405" src="./assets/images/accessories/specialized-bridge-sport.webp"
              alt="Specialized Bridge Sport Saddle">
            <figcaption>
              <h3>Specialized Bridge Sport Unisex Saddle</h3>
              <p>
                Provides comfort and control on any terrain with Body Geometry
                support.
              </p>
            </figcaption>
          </figure>
          <a href="./products/accessory.php" class="ghost-link">View catalogue</a>
        </article>
      </div>
    </section>
    <section class="event">
      <h2>Ride Through History</h2>
      <svg xmlns="http://www.w3.org/2000/svg" width="189" height="195" fill="none" viewBox="0 0 189 195">
        <path fill="#8a0303" fill-opacity=".2" d="m0 151 40-58L7 30l67 20 49-50 2 70 63 31-66 24-10 69-43-55z" />
      </svg>
      <figure>
        <img width="600" height="338" src="./assets/images/events/event-1998.webp" alt="1998 Alf's Cycle Event">
        <figcaption>
          <p>
            Join us on 23rd January for a journey through 40 years of cycling
            memories!
          </p>
          <a href="./event.php" class="primary-link">View Event Details</a>
        </figcaption>
      </figure>
    </section>
  </main>
  <?php include 'layout/footer.php'; ?>
</body>

</html>