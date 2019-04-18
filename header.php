<header>
  <div class="logo-container">
    <?php
      if($page != "home-page"){
        echo '<a href="./">';
      }
    ?>
    <img class="desktop-logo" src="images/sweet-leaf-tea-logo.png" alt="Sweet Leaf Tea Logo">
    <img class="mobile-logo" src="images/sweet-leaf-tea-logo-mobile.svg" alt="Sweet Leaf Tea Logo">
    <?php
      if($page != "home-page"){
        echo '</a>';
      }
    ?>
    <div class="usda-badge"></div>
    <div class="usda-badge-mobile"></div>
  </div>
  <nav>
    <ul class="hr-list">
      <li><a href="mailto:sweetleaftea@casupport.com">Contact</a></li>
    </ul>
  </nav>
</header>
