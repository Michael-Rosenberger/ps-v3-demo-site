<!DOCTYPE html>
<html>
  <head>
    <?php require 'render-product.php' ?>
    <?php require 'ps-v3-library.php' ?>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css">
    <title>ShopFoo</title>
    <style>
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
	<div class="container">
	  <a class="brand">ShopFoo</a>
	  <div class="nav-collapse collapse">
	    <ul class="nav">
	      <li><a href="c">Departments</a></li>
	      <li><a href="s">Stores</a></li>
	      <li><a href="coupons/1">Coupons</a></li>
	      <li><a href="about">About</a></li>
	    </ul>
	    <form class="navbar-form pull-right">
	      <input class="span2" type="text" placeholder="Search products...">
	      <button type="submit" class="btn">Go</button>
	    </form>
	  </div>
	</div>
      </div>
    </div>
    <?php
      $api = new PsApiCall(array(
        'account' => 'd1lg0my9c6y3j5iv5vkc6ayrd',
        'catalog' => 'dp4rtmme6tbhugpv6i59yiqmr',
        'logging' => false
      ));
      $api->get('products', array('keyword' => 'wallet'));
      foreach ($api->resource('products') as $product) {
	renderProduct($product);
      }
    ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
