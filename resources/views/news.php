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
		<h1>Новости</h1>
		<?php foreach ($news as $item): ?>
			<a href="<?= route('news.one', $item['id']) ?>">
				<?= $item['title'] ?>
			</a>
			<br>
		<?php endforeach ?>
	</main>
</body>

</html>