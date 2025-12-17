<?php $base = $base ?? ''; ?>
<a href="https://dribbble.com/stevevorass" target="_blank" class="button_reference fix-bottom-left">
  <div>View on <strong>Dribbble</strong></div>
</a>

<nav class="nav">
  <div class="nav_top-wrapper">
    <div class="nav_top">
      <a href="<?= $base ?>/" class="logo-link">LOGO</a>

      <div class="nav_links">
        <a href="<?= $base ?>/recording.php#services" class="nav_link">SERVICES</a>
        <a href="<?= $base ?>/recording.php#pricing" class="nav_link">PRICING</a>
        <a href="<?= $base ?>/work.php" class="nav_link">WORK</a>
        <a href="mailto:yo@stevevorass.com" class="nav_link nav_cta">CONTACT</a>
      </div>

      <button class="mobile-menu-btn" aria-label="Toggle menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<div class="mobile-nav">
  <a href="/recording.php">Recording</a>
  <a href="/work.php">Work</a>
  <a href="/play.php">Play</a>
  <a href="mailto:yo@stevevorass.com">Contact</a>
</div>
