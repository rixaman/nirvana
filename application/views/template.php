<!DOCTYPE html>
<html>
<head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link rel="stylesheet" href="<?php echo Less::compile('bootstrap') ?>">

        <title><?= $title; ?></title>
</head> 

<body>
	<nav><?= $navigation ?></nav>

	<br><br><br>

	<div class="container">
		<?= $content ?>
	</div>
</body>
</html>