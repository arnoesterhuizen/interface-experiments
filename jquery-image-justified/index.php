<?php
	function get_image ($height = 400, $min = 100, $max = 700) {
		$url_prefix = 'http://localhost/experiments/dummyimage/';
		$url_suffix = 'x' . (int)$height . '/000/fff.png';

		return $url_prefix . (rand((int)$min, (int)$max)) . $url_suffix;
	}
?>
<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title></title>
	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" media="screen" href="css/screen.css">
</head>
<body>

<div id="container">
	<h1>Testing an algorithm for Flickr's image justification</h1>
	<div id="main" role="main">
	<?php
		for ($i = 0; $i < 25; $i++) {
			?><img src="<?php echo get_image(); ?>" /><?php
		}
	?>
	</div>
</div> <!--! end of #container -->

<script src="js/script.js"></script>
<!-- end scripts-->
</body>
</html>
