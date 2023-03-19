<header class="tm-welcome-section">
    <h2 class="col-12 text-center tm-section-title">Welcome to food of Silly House</h2>
    <p class="col-12 text-center">
        Thực phẩm sạch là thực phẩm được sản xuất, chế biến hợp vệ sinh, an toàn, không sử dụng hóa chất. Thực phẩm sạch
        thường được trồng theo phương pháp hữu cơ, không sử dụng phân bón, thuốc trừ sâu, thuốc kháng sinh hay hormone.
        Ăn thực phẩm sạch không chỉ giúp nâng cao sức khỏe mà còn bảo vệ môi trường, đảm bảo an toàn thực phẩm cho cộng
        đồng. Vì vậy, ủng hộ và sử dụng thực phẩm sạch là hành động tích cực cho sức khỏe và môi trường sống của chúng
        ta.
    </p>
</header>

<div class="row tm-gallery">
    <!-- gallery page 1 -->
    <div class="tm-gallery-page">
        <?php
        for ($i = $start; $i < $end; $i++) {
            if ($i > count($food) - 1)
                break;

            ?>

            <article class="col-lg-4 col-md-4 col-sm-6 col-12 tm-gallery-item">
                <figure>
                    <img src="./assets/img/gallery/<?= $food[$i]->picture ?>" style="width: 350px; height: 250px;"
                        alt="Image" class="img-fluid tm-gallery-img" />
                    <figcaption>
                        <h4 class="tm-gallery-title"><a href="index.php?controller=food&action=details&id=<?= $food[$i]->id?>"><?= $food[$i]->name ?></a></h4>
                        <p class="tm-gallery-description"><?= $food[$i]->description ?></p>
                        <p class="tm-gallery-price">$<?= $food[$i]->price ?></p>
                    </figcaption>
                </figure>
            </article>

            <?php
        }
        ?>
        <div class="col-lg-12">

            <div class="room-pagination">
                <?php
                for ($j = 1; $j <= $totalPage; $j++) {

                    ?>
                    <a href="index.php?controller=food&page=<?= $j ?>"><?= $j ?></a>
                    <?php
                }
                ?>

            </div>
        </div>
    </div>
</div>