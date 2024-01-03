<?php
require('function/adkar/get_adkar.php');
?>
<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php require 'partials/head.php' ?>
</head>

<body>
 
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="page-loading">
                    <div class="page-loading-inner">
                        <div></div>
                        <div></div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- notify bar -->
    <?php require 'partials/notify.php' ?>
    <!-- header -->
    <?php require 'partials/header.php' ?>
    <!-- main -->
    <main class="main">
        <section class="section bg-7 adkar-image">
            <div class="container">
                <div class="banner-shop-grid">
                    <h2 class="color-brand-2 mt-15 mb-60 font-bold-800">أذكار <br class="d-none d-lg-block">الصباح
                        والمساء</h2>
                </div>
            </div>
        </section>
        <section class="section mt-80">
            <div class="container">

                <div class="mt-30 mb-60">
                    <ul class="list-buttons">
                        <li> <a class="button-click active" href="#" data-type="all">كل أذكار</a></li>
                        <li> <a class="button-click" href="#" data-type="sabah">الصباح</a></li>
                        <li> <a class="button-click" href="#" data-type="masaa">المساء</a></li>
                        <li> <a class="button-click" href="#" data-type="other">اخرون</a></li>
                    </ul>
                </div>
                <div class="box-list-blogs">
                    <div class="row mt-55">
                        <div class="col-lg-12 col-md-6 mb-30 item-article sabah">
                            <h4 class="tem-article sabah text-primary">أذكار الصباح</h4>
                        </div>
                        <?php foreach ($azkar_sabah as $itemam): ?>
                            <div class="col-lg-12 col-md-6 mb-30 item-article sabah" >
                                <div class="card-blog-grid card-blog-grid-3 hover-up">
                                    <div class="card-info">
                                        <div><span class="fs-5 fw-bold text-dark">
                                                <?php
                                                if (!empty($itemam['description'])) {
                                                    ?>
                                                    وصف:
                                                    <?= $itemam['description']; ?>
                                                    <?php
                                                }
                                                ?>
                                                <h4 class="mt-20 color-brand-1">
                                                    <?= $itemam['zekr']; ?>
                                                </h4>
                                            </span><span class="font-xs mt-10 color-grey-500 icon-read">
                                                <?php
                                                if (!empty($itemam['reference'])) {
                                                    ?>
                                                    مصدر:
                                                    <?= $itemam['reference']; ?>
                                                    <?php
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom"></div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-lg-12 col-md-6 mb-30 item-article masaa" >
                            <h4 class="tem-article masaa text-primary">اذكار المساء</h4>
                        </div>
                        <?php foreach ($azkar_masaa as $itempm): ?>
                            <div class="col-lg-12 col-md-6 mb-30 item-article masaa" >
                                <div class="card-blog-grid card-blog-grid-3 hover-up">
                                    <div class="card-info">
                                        <div><span class="fs-5 fw-bold text-dark">
                                                <?php
                                                if (!empty($itempm['description'])) {
                                                    ?>
                                                    وصف:
                                                    <?= $itempm['description']; ?>
                                                    <?php
                                                }
                                                ?>
                                                <h4 class="mt-20 color-brand-1">
                                                    <?= $itempm['zekr']; ?>
                                                </h4>
                                            </span><span class="font-xs mt-10 color-grey-500 icon-read">
                                                <?php
                                                if (!empty($itempm['reference'])) {
                                                    ?>
                                                    مصدر:
                                                    <?= $itempm['reference']; ?>
                                                    <?php
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom"></div>
                            </div>
                        <?php endforeach; ?>
                        <div class="col-lg-12 col-md-6 mb-30 item-article other" >
                            <h4 class="tem-article other text-primary"> اخرون</h4>
                        </div>
                        <?php foreach ($other as $itemo): ?>
                            <div class="col-lg-12 col-md-6 mb-30 item-article other" >
                                <div class="card-blog-grid card-blog-grid-3 hover-up">
                                    <div class="card-info">
                                        <div><span class="fs-5 fw-bold text-dark">
                                                <?php
                                                if (!empty($itemo['category'])) {
                                                    ?>
                                                    صنف :
                                                    <?= $itemo['category']; ?>
                                                    <?php
                                                }
                                                ?>
                                                <h4 class="mt-20 color-brand-1">
                                                    <?= $itemo['zekr']; ?>
                                                </h4>
                                            </span><span class="font-xs mt-10 color-grey-500 icon-read">
                                                <?php
                                                if (!empty($itemo['reference'])) {
                                                    ?>
                                                    مصدر:
                                                    <?= $itemo['reference']; ?>
                                                    <?php
                                                }
                                                ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="border-bottom"></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php require 'partials/footer.php' ?>
    </script>
    <?php require 'partials/script.php' ?>
</body>

</html>