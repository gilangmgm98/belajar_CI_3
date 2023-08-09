<?php $this->load->view('partials/header'); ?>
<header class="masthead"
	style="background-image: url('https://c4.wallpaperflare.com/wallpaper/786/670/384/night-artwork-futuristic-city-science-fiction-wallpaper-preview.jpg')">
	<div class="container position-relative px-4 px-lg-5">
		<div class="row gx-4 gx-lg-5 justify-content-center">
			<div class="col-md-10 col-lg-8 col-xl-7">
				<div class="post-heading">
					<h1>Tambahkan Artikel</h1>
				</div>
			</div>
		</div>
	</div>
</header>

<div class="container">
	<div class="row justify-content-center">
		<div class="col-md-8">
			<form method="POST">
				<div class="form-group">
					<label for="title">Judul</label>
					<input class="form-control" type="text" name="title">
				</div>

				<div class="form-group">
					<label for="content">Konten</label>
					<textarea class="form-control" name="content" id="" cols="30" rows="10"></textarea>
				</div>

				<button class="btn btn-success rounded mt-2" type="submit">Simpan Artikel</button>
			</form>

			<a href="<?php echo site_url(); ?>"><button class="btn btn-danger rounded mt-2 mb-2">Kembali</button></a>
		</div>
	</div>
</div>

<?php $this->load->view('partials/footer'); ?>