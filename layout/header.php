<header>
  <nav aria-label="Main">
    <!-- Logo -->
    <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" aria-label="Alf's Cycle homepage">
      <svg xmlns="http://www.w3.org/2000/svg" width="85" height="46" fill="none" viewBox="0 0 85 46">
        <path fill="#000"
          d="m4 35-3-1-1-3 1-2v-1l1-1-1 3 1 2h2l6-1 7-5 6-5-12 1-1 1v2H9l-1-1 1-2 1-1 6-2h9L37 7l5-2h-3l-9 1-3 2-1 1v4h-1l-1-2V9l1-2 4-2 3-1h13l6-2h1l-1 1h-2l-1 1-2 3-8 13-3 9-1 2 1 2 1-1h2l1-2 4-4v1l-4 4-3 2h-1l-1 1-2-1-1-3 1-3 1-3L44 5h-2l-7 5-8 9h7l2-1-1 1-1 1-1 1h-8l-10 9-6 3zm42-2h-2l-1-2 1-4 1-2 4-8 2-5 6-9 1-1 2-1 2-1h1v2l-1 3-2 3-6 9-7 6-2 4v3l1 1 1 1h1l2-1 2-2 3-4v1l-3 4-3 2zm2-12 9-11 4-6V1l-2 1-2 4zm-7 24h-3l-2-2v-3h1l2 3 4 1 3-1 4-3 6-12 3-8h-3l1-1 2-1h1l7-13 3-3 6-2 1 1 1 1v2h-1l-1-2h-2l-4 1-3 5-5 10h6l-1 1-3 1h-2l-3 5-8 15-4 4zM72 8zl2-4V3l-1-1V1h1l1-1 1 1v1l-1 4zm4 26h-2l-2-1-1-2v-2l1-1h1-1v1l1 2 1 2zh2l1-1 1-2v-1l-2-2-1-2-1-1v-1l-3 4 1-2 1-2 2-2 1-1 1-2h4l1 2v1l-1 2v-1l-1-2v-1h-1l-2 1-1 1v1l1 2 2 2 1 3-1 2-2 2z" />
      </svg>
    </a>

    <!-- Contact information -->
    <aside aria-label="Contact information">
      <output aria-live="polite">Workshop is open</output>
      <a href="tel:+447484000000" aria-label="Call Alf's Cycle workshop">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
          <path fill="#000"
            d="m20 21-6-1A18 18 0 0 1 4 10L3 4l1-1h5v1l1 3v1H9l-2 3 1 2 5 4 2-2 1-1h1l3 1h1v5zM6 9l2-2-1-2H5zm9 9 4 1v-2l-2-1z" />
        </svg>
      </a>
    </aside>

    <!-- Navigation menu -->
    <input type="checkbox" id="menu-toggle" class="menu-btn" aria-label="Toggle navigation menu" aria-expanded="false">
    <label for="menu-toggle" class="menu-icon">
      <span class="navicon" aria-hidden="true"></span>
    </label>

    <!-- Navigation menu list -->
    <ul id="main-menu" role="menu">
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>index.php" role="menuitem">Home</a>
      </li>
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>bikes.php" role="menuitem">Bikes</a>
      </li>
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>accessories.php" role="menuitem">Accessories</a>
      </li>
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>event.php" role="menuitem">Events</a>
      </li>
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>about.php" role="menuitem">About</a>
      </li>
      <li role="none">
        <a href="<?php echo isset($base_url) ? $base_url : './'; ?>contact.php" role="menuitem">Contact</a>
      </li>
    </ul>
  </nav>
</header>