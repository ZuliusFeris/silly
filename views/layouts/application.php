<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>Silly House</title>

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400" rel="stylesheet" />
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" />
	<link href="./assets/css/templatemo-style.css" rel="stylesheet" />
	<link href="./assets/css/all.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="./assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/elegant-icons.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/flaticon.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/owl.carousel.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/nice-select.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/jquery-ui.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/magnific-popup.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/slicknav.min.css" type="text/css">
	<link rel="stylesheet" href="./assets/css/style.css" type="text/css">

	
</head>
<!--

Simple House

https://templatemo.com/tm-539-simple-house

-->

<body>

	<div class="container">
		<!-- Top box -->
		<!-- Logo & Site Name -->
		<div class="placeholder">
			<div class="parallax-window" data-parallax="scroll" data-image-src="./assets/img/simple-house-01.jpg">
				<div class="tm-header">
					<div class="row tm-header-inner">
						<div class="col-md-6 col-12">
							<img src="./assets/img/simple-house-logo.png" alt="Logo" class="tm-site-logo" />
							<div class="tm-site-text-box">
								<h1 class="tm-site-title text-white">Silly House</h1>
								<h6 class="tm-site-description text-white">New restaurant space</h6>
							</div>
						</div>
						<nav class="col-md-6 col-12 tm-nav">
							<ul class="tm-nav-ul">
								<li class="tm-nav-li"><a href="index.php" class="tm-nav-link active">Home</a></li>
								<li class="tm-nav-li"><a href="index.php?controller=abouts"
										class="tm-nav-link">About</a></li>
								<li class="tm-nav-li"><a href="index.php?controller=contact"
										class="tm-nav-link">Contact</a></li>
								<li class="tm-nav-li"><a href="index.php?controller=food" class="tm-nav-link">Food</a>
								</li>
								<li class="tm-nav-li"><a href="index.php?controller=news" class="tm-nav-link">News</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>

		<main>


			<?= @$content ?>

		</main>

		<footer class="tm-footer text-center">
			<p>Silly house &copy; 2023 New restaurant

				| Design: <a rel="nofollow" href="#">by Silly-chan</a></p>
		</footer>
	</div>
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/parallax.min.js"></script>
	<script src="./assets/js/silly.js"></script>
	<script src="./assets/js/jquery-3.3.1.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>
	<script src="./assets/js/jquery.magnific-popup.min.js"></script>
	<script src="./assets/js/jquery.nice-select.min.js"></script>
	<script src="./assets/js/jquery-ui.min.js"></script>
	<script src="./assets/js/jquery.slicknav.js"></script>
	<script src="./assets/js/owl.carousel.min.js"></script>
	<script src="./assets/js/main.js"></script>

	
	<script>
		$(document).ready(function () {
			// Handle click on paging links
			$('.tm-paging-link').click(function (e) {
				e.preventDefault();

				var page = $(this).data("id");
				$('.tm-gallery-page').addClass('hidden');
				$('.' + page).removeClass('hidden');
				$('.tm-paging-link').removeClass('active');
				$(this).addClass("active");
			});
		});
	</script>
	<script>
		$(document).ready(function () {
			var acc = document.getElementsByClassName("accordion");
			var i;

			for (i = 0; i < acc.length; i++) {
				acc[i].addEventListener("click", function () {
					this.classList.toggle("active");
					var panel = this.nextElementSibling;
					if (panel.style.maxHeight) {
						panel.style.maxHeight = null;
					} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
					}
				});
			}
		});
	</script>
</body>

</html>