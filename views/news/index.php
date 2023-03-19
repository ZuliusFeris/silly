    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>News Of Silly House</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                <?php
                require_once('models/category.php');
                    for($i=$start;$i<$end;$i++){
                        
                        
                        if($i>count($news)-1)
                        break;
                    
                ?>
                <div class="col-lg-4 col-md-6">
                    <div class="blog-item set-bg" data-setbg="assets/img/blog/<?= $news[$i]->picture?>">
                        <div class="bi-text">
                            <h4><a href="index.php?controller=news&action=details&id=<?= $news[$i]->id?>"><?= $news[$i]->name?></a></h4>
                            <div class="b-time"><i class="icon_clock_alt"></i> <?= $news[$i]->publisheddate?></div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
                <div class="col-lg-12">
                   
                    <div class="room-pagination">
                    <?php
                    for($j=1;$j<=$totalPage;$j++)
                    {
                        
                    ?>
                    <a href="index.php?controller=news&page=<?=$j?>"><?= $j?></a>
                    <?php
                    }
                    ?>
                        <a href="#">Next <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->