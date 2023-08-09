<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Edit</title>
</head>

<body>
	<h1> Edit Artikel </h1>
	<form method="POST">
		<div>
			<label for="title">Judul</label>
			<input type="text" name="title" value="<?php echo $blog['title'] ?>">
		</div>

		<div>
			<label for="content">Konten</label>
			<textarea name="content" id="" cols="30" rows="10">
				<?php echo $blog['content'] ?>
			</textarea>
		</div>

		<button type="submit">Simpan Perubahan Artikel</button>
	</form>

</body>

</html>