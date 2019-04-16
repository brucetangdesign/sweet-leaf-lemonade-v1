<!doctype html>

<?php
//Page title
$pageTitle = "100% Organic teas  | Sweet Leaf Tea Co.";
$meta_description = "Born in Austin over 20 years ago, each bottle of Sweet Leaf Tea is 100% organic. Keep it weird, keep it organic and keep it simple.";
$page = "about-page";
?>

<html lang="en">
  <head>
    <?php include 'head.php'; ?>
  </head>

  <body id="<?php echo $page; ?>">
  <!-- Google Tag Manager -->
	<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FLPC"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-P9FLPC');</script>
	<!-- End Google Tag Manager -->
	
    <?php include 'header.php'; ?>
    <div class="cactus"></div>
    <section id="about-mimi">
      <h1>About Us</h1>
      <div class="about-content">
        <!--<div class="about-mimi-saying"></div>-->
        <div class="image-container">
          <div class="about-skull-stars"></div>
          <div class="austin-stamp"></div>
          <div class="slide-image glow"></div>
          <img src="images/slide-mimi.png">
        </div>
        <div class="copy">
          <p class="subtitle">Born in Austin over 20 years ago, today you’ll still find the same love in every bottle of our 100% organic sweet leaf tea. If y’all know Austin you know we take a heck of a lot of pride in the uniqueness of our home. We are committed to bringing you flavors as authentic as the
people, food, music, art and even dem damn bats, that keep back home as original as it comes. Keep it weird, keep it organic and keep it simple.</p>
        </div>
      </div>
    </section>
    <section id="our-products">
      <h1>Our Products</h1>
      <div class="about-content">
        <div class="copy">
          <p class="subtitle">We ain’t all cut from the same cloth, but we all wear clothes...We know that each of you has your own sweet. Some like it sweet, some not so much and others even less so, don’t fret we got something for you for whatever you like.</p>
        </div>
        <div class="image-container">
          <img src="images/about-products.png">
        </div>
      </div>
    </section>
    <?php include 'footer.php'; ?>
  </body>
</html>
