
<header class="tm-welcome-section">
				<h2 class="col-12 text-center tm-section-title">Welcome to details of news, Silly House</h2>
				<p class="col-12 text-center">
                
				</p>
</header>

<section class="room-details-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="room-details-item">
                    <div class="float-left" style="margin-right: 40px; height: 550px; width: 450px;">
                        <img src="./assets/img/blog/<?=$news->picture ?>" alt="">
                    </div>
                        <div class="rd-text">
                            <div class="title">
                                <h3><?= $news->name?></h3>
                            </div>

                            <h2><span>Ngày tạo: </span><?= $news->publisheddate?></h2>
                            
                            <p class="f-para">
                                <?= $news->description?>
                            </p>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </section>
    <div class="tm-container-inner tm-featured-image">
				<div class="row">
					<div class="col-12">
						<div class="placeholder-2">
							<div class="parallax-window-2" data-parallax="scroll" data-image-src="./assets/img/about-07.jpg"></div>		
						</div>
					</div>
				</div>
			</div>