<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<header>
		<?php include 'menu.php'; ?>
	</header>
	<main>
		<h1><?= $news['title'] ?></h1>
		<p>
			<?= $news['text'] ?>
		</p>
	</main>
</body>

</html>