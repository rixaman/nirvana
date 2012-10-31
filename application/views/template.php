<?php $mediabase = Route::url('media'); ?>

<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php echo Less::compile('bootstrap') ?>">
		<link rel="stylesheet" type="text/css" href="/public/css/styles.css">
		<script type="text/javascript" src="/public/js/jquery-1.8.2.min.js"></script>

		<script type="text/javascript" src="<?php echo $mediabase ?>/pjax/js/jquery.pjax.js"></script>

		  <script type="text/javascript">
		    $(function(){
		      // pjax
		      $('a').pjax('#pjax');
		    })
		  </script>

        <title id="title"><?= $title; ?></title>
</head> 

<body>
	<nav>
		<a href="/"  data-pjax="#pjax">main</a>
		<a href="catalog" data-pjax="#pjax">catalog</a>
		<a href="contacts"  data-pjax="#pjax">contacts</a>
	</nav>

	<br><br><br>

<div class="container">
	<div id="pjax">
		<?php echo View::factory('content')->set('content', $content) ?>
	</div>
	<footer>
		
	</footer>
</div>
</body>
<br><br><br><br><br><br><br><br><br><br>
</html>