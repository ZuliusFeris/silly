<main>
	<header class="tm-welcome-section">
		<h2 class="col-12 text-center tm-section-title">Welcome to Silly House</h2>
		<p class="col-12 text-center">
			Đây là danh sách các thành viên nỗi bật của nhà hàng chúng tôi.
		</p>
	</header>



	<div class="tm-container-inner tm-persons">
		<div class="row">
			<?php
			$i = 1;
			foreach ($staffs as $sta) {
				?>
				<article class="col-lg-6">
					<figure class="tm-person">
						<img src="./assets/img/<?= $sta->picture ?>" alt="Image" class="img-fluid tm-person-img" />
						<figcaption class="tm-person-description">
							<h4 class="tm-person-name"><?= $sta->name ?></h4>
							<p class="tm-person-title"><?= $sta->position ?></p>
							<p class="tm-person-about">
								<?= $sta->detailsCV ?>
							</p>
							<div>
								<a href="https://fb.com" class="tm-social-link"><i
										class="fab fa-facebook tm-social-icon"></i></a>
								<a href="https://twitter.com" class="tm-social-link"><i
										class="fab fa-twitter tm-social-icon"></i></a>
								<a href="https://instagram.com" class="tm-social-link"><i
										class="fab fa-instagram tm-social-icon"></i></a>
							</div>
						</figcaption>
					</figure>
				</article>
				<?php
				if($i % 2 == 0) {
					echo '<div class="clearfix"></div>';
				}
				$i++;
				}
			?>
		</div>
	</div>

	</div>
	<div class="tm-container-inner tm-featured-image">
		<div class="row">
			<div class="col-12">
				<div class="placeholder-2">
					<div class="parallax-window-2" data-parallax="scroll" data-image-src="./assets/img/about-05.jpg">
					</div>
				</div>
			</div>
		</div>
	</div>
</main>