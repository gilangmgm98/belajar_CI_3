<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blog</title>
</head>

<body>
	<h1> List Artikel Dalam Blog </h1>

	<?php foreach ($blogs as $index => $blog): ?>

		<h2>
			<a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
				<?php echo $blog['title'] ?>
			</a>
		</h2>
		<p>
			<?php echo $blog['content'] ?>
		</p>

	<?php endforeach ?>

</body>

</html>