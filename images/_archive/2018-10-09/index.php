<!doctype html>

<?php
//Page title
$pageTitle = "Organic tea recipes made from simple ingredients available in original, semisweet and unsweet Teas | Sweet Leaf Tea Co.";
$meta_description = "Sweet Leaf Tea is 100% organic, made from simple ingredients like real cane sugar and available in original, semisweet and unsweet teas. Sweet but not too sweet.";
$footerClass="fixed";
$page = "home-page";
?>

<html lang="en">
  <head>
    <?php include 'head.php'; ?>
    <script src="js/isInView.js"></script>
    <script src="js/sweetleaf.js"></script>
  </head>

  <body id="<?php echo $page; ?>">
    <?php include 'header.php'; ?>
    <!-- Backgrounds -->
    <section id="bg">
      <div class="bg-gradient1">
        <div class="floral-bg"></div>
        <div class="floral-bg reverse"></div>
      </div>
      <div class="bg-gradient2 hidden">
      </div>
      <div class="bg-gradient3 hidden">
        <div class="lights"></div>
        <div class="lights reverse"></div>
        <div class="skyline"></div>
      </div>
      <div class="bg-gradient4 hidden">
        <div class="austin-bg"></div>
      </div>
    </section>

    <!-- Main Slides -->
    <section class="slide-main slide1">
      <div class="bg-graphics" data-rellax-speed="-4"></div>
      <div class="mint-fruit rellax" data-rellax-speed="2"></div>
      <div class="bottle peach rellax" data-rellax-speed="-5"></div>
      <div class="bottle honey rellax"></div>
      <div class="bg-lemon rellax" data-rellax-speed="1"></div>
      <div class="bg-orange rellax" data-rellax-speed="3"></div>
      <div class="bottle mint rellax" data-rellax-speed="1"></div>
      <div class="center"></div>
      <div class="slide-content">
        <div class="slide-image-container" data-rellax-speed="3">
          <div class="slide-image"></div>
        </div>
        <div class="slide-copy" data-rellax-speed="3">
          <h1>My family’s original tea recipe just for you.</h1>
          <p class="subtitle">Organic from day one... Sweet but not too sweet, y’all best believe!</p>
        </div>
      </div>
    </section>

    <section class="slide-main slide2">
      <div class="bg-graphics rellax" data-rellax-speed="-3"></div>
      <!--<div class="bg-text rellax" data-rellax-speed="1"></div>-->
      <div class="organic-stamp rellax" data-rellax-speed="5"></div>
      <div class="center"></div>
      <div class="slide-content">
        <div class="slide-image-container" data-rellax-speed="3">
          <div class="slide-image"></div>
          <div class="slide-image glow"></div>
        </div>
        <div class="slide-copy rellax" data-rellax-speed="2">
          <h1>100% Organic Sweet Leaf Tea! We wouldn't make it any other way!</h1>
          <p class="subtitle">Our hearts have been in it 20+ years! Times change but the love in each bottle don’t! We use ingredients you can pronounce like real cane sugar! We reckon it’s not the way of most, but it sure as heck is the way we’re gonna keep doin’ it!<br>LOVE, Mimi</p>
          <a class="button" href="about.php#our-products">Learn More</a>
        </div>
      </div>
    </section>

    <section class="slide-main slide3">
      <div class="bg-graphics rellax" data-rellax-speed="-2"></div>
      <div class="i-love-you rellax" data-rellax-speed="3"></div>
      <div class="bottle-cap rellax" data-rellax-speed="1"></div>
      <div class="austin-stamp rellax" data-rellax-speed="2"></div>
      <div class="est-1998 rellax" data-rellax-speed="5.4"></div>
      <div class="cactus rellax" data-rellax-speed="2"></div>
      <div class="cactus reverse"></div>
      <div class="center"></div>
      <div class="slide-content">
        <div class="slide-image-container" data-rellax-speed="1">
          <div class="slide-image"></div>
          <div class="slide-image glow"></div>
        </div>
        <div class="slide-copy rellax" data-rellax-speed="-2">
          <h1>Special places brew special flavor.</h1>
          <p class="subtitle">Born in Austin in Mimi’s kitchen, our original recipe of 100% organic sweet tea still has that flavor only found ‘round here.</p>
          <a class="button" href="about.php">Our Story</a>
        </div>
      </div>
    </section>

    <section id="about-products" class="slide-main slide4">
      <div class="about-products-main">
        <h1>Our famous 100% organic tea recipes for y’all and all y’alls taste.</h1>
        <p class="subtitle">Made from simple ingredients and a whole lotta love. Original Sweet Teas, Semisweet Teas and Unsweet Teas in different flavors to enjoy.</p>
        <a class="button" href="about.php">Tell Me More</a>
        <div class="about-products-main-image"></div>
        <div class="center"></div>
      </div>
      <div class="product-chart">
        <!--<img src="images/home-about-chart.png">-->
        <span class="chart-title">Pick Your Sweet!</span>
        <div class="honeycomb"></div>
        <table class="nutritional-chart">
          <thead>
            <tr>
              <th>Flavor</th>
              <th>Calories<span class="small-text">per serving</span></th>
              <th>Sugar<span class="small-text">in grams(g)</span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><span class="chart-flavor sweet">Sweet</span></td>
              <td>80 – 55</td>
              <td>14<sub>g</sub> – 19<sub>g</sub></td>
            </tr>
            <tr>
              <td><span class="chart-flavor semisweet">Semisweet</span></td>
              <td>45</td>
              <td>10<sub>g</sub></td>
            </tr>
            <tr>
              <td><span class="chart-flavor unsweet">Unsweet</span></td>
              <td>5 – 2</td>
              <td>0<sub>g</sub></td>
            </tr>
            <tr>
              <td class="subhead" colspan="3">Compare Our Sweet</td>
            </tr>
            <tr>
              <td>Leading National Ice Tea Brand</td>
              <td>160</td>
              <td>39<sub>g</sub></td>
            </tr>
            <tr>
              <td>Leading National Soft Drink Brand</td>
              <td>140 – 180</td>
              <td>39<sub>g</sub> – 44<sub>g</sub></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="about-products-subs">
        <div class="about-product-content">
          <div class="slide-image-container core">
            <div class="slide-image"></div>
          </div>
          <div class="slide-copy rellax">
            <h1>My Original Teas</h1>
            <ul>
              <li>Our original blend</li>
              <li>Cut sugar and calories by 25%</li>
              <li>50 calories per serving</li>
            </ul>
          </div>
        </div>
        <div class="about-product-content">
          <div class="slide-image-container semisweet">
            <div class="slide-image"></div>
          </div>
          <div class="slide-copy rellax">
            <h1>Semisweet Teas</h1>
            <ul>
              <li>Great taste, less sugar</li>
              <li>Under 10 grams of sugar</li>
              <li>50 calories per serving</li>
            </ul>
          </div>
        </div>
        <div class="about-product-content last-content">
          <div class="slide-image-container unsweet">
            <div class="slide-image"></div>
          </div>
          <div class="slide-copy rellax">
            <h1>Unsweet Teas</h1>
            <ul>
              <li>Refreshing taste, no sugar</li>
              <li>ZERO SUGAR</li>
              <li>5 calories per serving</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>
  </body>
</html>
