<!doctype html>

<?php
//Page title
$pageTitle = "Organic lemonade with an attitude made from simple ingredients you can pronounce | Sweet Leaf Tea Co.";
$meta_description = "Sweet Leaf Tea organic lemonades are available in Cranberry Lime, Orange Mango, Pomegranate Blueberry, and Classic Lemonade. Sweet but not too sweet.";
$footerClass="fixed";
$page = "home-page";
?>

<html lang="en">
  <head>
    <?php include 'head.php'; ?>
    <!--<script src="js/isInView.js"></script>-->
    <script src="js/sweetleaf.js"></script>
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

	<!-- Start of DoubleClick Floodlight Tag: Please do not remove -->
	<script type="text/javascript">
	var axel = Math.random() + "";
	var a = axel * 10000000000000;
	document.write('<iframe src="http://2275258.fls.doubleclick.net/activityi;src=2275258;type=homep670;cat=sweet0;ord=1;num=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
	</script>
	<noscript>
	<iframe src="http://2275258.fls.doubleclick.net/activityi;src=2275258;type=homep670;cat=sweet0;ord=1;num=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
	</noscript>
	<!-- End of DoubleClick Floodlight Tag: Please do not remove -->
	<!-- Code for Action: Mirum Sweet Leaf Tea - Homepage - Landing -->
	<!-- Begin Sizmek DSP Conversion Action Tracking Code Version 9 -->
	<script type='text/javascript'>
	(function() {
		var w = window, d = document;
		var s = d.createElement('script');
		s.setAttribute('async', 'true');
		s.setAttribute('type', 'text/javascript');
		s.setAttribute('src', '//c1.rfihub.net/js/tc.min.js');
		var f = d.getElementsByTagName('script')[0];
		f.parentNode.insertBefore(s, f);
		if (typeof w['_rfi'] !== 'function') {
			w['_rfi']=function() {
				w['_rfi'].commands = w['_rfi'].commands || [];
				w['_rfi'].commands.push(arguments);
			};
		}
		_rfi('setArgs', 'ver', '9');
		_rfi('setArgs', 'rb', '34369');
		_rfi('setArgs', 'ca', '20808024');
		_rfi('setArgs', '_o', '34369');
		_rfi('setArgs', '_t', '20808024');
		_rfi('track');
	})();
	</script>
	<noscript>
	  <iframe src='//20808024p.rfihub.com/ca.html?rb=34369&ca=20808024&_o=34369&_t=20808024&ra=<?php echo(rand(1000,1000000)); ?>' style='display:none;padding:0;margin:0' width='0' height='0'>
	</iframe>
	</noscript>
	<!-- End Sizmek DSP Conversion Action Tracking Code Version 9 -->
    <?php include 'header.php'; ?>
    <!-- Backgrounds -->
    <section id="bg">
      <div class="bg-gradient4">
        <div class="texture-top"></div>
        <div class="nyc-bg"></div>
      </div>
    </section>

    <section id="about-products" class="slide-main slide4">
      <div class="product-clouds-left rellax" data-rellax-speed="-8"></div>
      <div class="product-left-blue-mango rellax" data-rellax-speed="-2"></div>
      <div class="product-left-pom-lem-lime rellax" data-rellax-speed="3"></div>
      <div class="product-right-lem-lime rellax" data-rellax-speed="-3"></div>
      <div class="product-right-cran-orange rellax" data-rellax-speed="4"></div>
      <div class="product-clouds-right rellax" data-rellax-speed="3"></div>
      <div class="about-products-main">
        <h1>What's both sour and sweet all at once? Our new organic lemonades for y'all and y'alls taste.</h1>
        <p class="subtitle">Just like Sweet Leaf Organic Iced Teas, our Lemonades are made with simple ingredients that you can pronounce, like organic lemon juice and organic cane sugar, along with a whole lotta love. Try one of our four flavors today! Sweet but not too sweet.</p>
        <div class="about-products-main-image"></div>
        <!--<div class="center"></div>-->
      </div>
      <div class="product-chart">
        <!--<img src="images/home-about-chart.png">-->
        <span class="chart-title">Our Flavors</span>
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
              <td><span class="chart-flavor">Classic lemonade</span></td>
              <td>150</td>
              <td>37<sub>g</sub></td>
            </tr>
            <tr>
              <td><span class="chart-flavor">Cranberry lime</span></td>
              <td>160</td>
              <td>37<sub>g</sub></td>
            </tr>
            <tr>
              <td><span class="chart-flavor">Orange Mango</span></td>
              <td>150</td>
              <td>37<sub>g</sub></td>
            </tr>
            <tr>
              <td><span class="chart-flavor">Pomegranate Blueberry</span></td>
              <td>160</td>
              <td>36<sub>g</sub></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <?php include 'footer.php'; ?>
  </body>
</html>
