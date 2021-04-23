<!DOCTYPE html>
<html lang="en">
<head>
	<?php wp_head();  ?>
</head>
<body>
	<div class="container">
		<div class="row navigation">
			<div class="col-md-3 align-items-center d-flex py-3">
				<div class="logo">Your Logo</div>
			</div>
			<div class="col-md-9 d-flex align-items-center justify-content-around py-3">
				<small><a class="text-muted nav-item" href="#">Platform</a></small>
				<small><a class="text-muted nav-item" href="#">Features</a></small>
				<small><a class="text-muted nav-item" href="#">Why data stack</a></small>
				<small><a class="text-muted nav-item" href="#">Solutions</a></small>
				<small><a class="text-muted nav-item" href="#">Blog</a></small>
				<button class="btn btn-btn__primary"> 
					<small class="text-white">Book a Demo</small>
				</button>
			</div>
		</div>
		<div class="mob-nav">
			<div class="nav-toggle-btn">
				<img class="nav-toggle-btn-img" src="<?php echo get_theme_file_uri('/images/bars-solid.svg'); ?>" alt="">
			</div>
			<div class="mob-nav-items">
				<small><a class="text-muted nav-item d-block my-3" href="#">Platform</a></small>
				<small><a class="text-muted nav-item d-block my-3" href="#">Features</a></small>
				<small><a class="text-muted nav-item d-block my-3" href="#">Why data stack</a></small>
				<small><a class="text-muted nav-item d-block my-3" href="#">Solutions</a></small>
				<small><a class="text-muted nav-item d-block my-3" href="#">Blog</a></small>
				<button class="btn btn-btn__primary d-block my-3"> 
					<small class="text-white">Book a Demo</small>
				</button>
			</div>
		</div>
	</div>
	