<?php
require_once('function/hadiths/get_collection_by_name.php');

?>

<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php require('partials/head.php') ?>
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
    <?php require('partials/notify.php') ?>
    <!-- header -->
    <?php require('partials/header.php') ?>
    <!-- main -->
    <main class="main">
        <section class="section mt-50">
            <div class="container">
                <div class="row">

                    <div class="row align-items-end">
                        <div class="col-lg-8 col-md-8">
                            <h2 class="color-brand-1 mb-10">الأحاديث:</h2>
                        </div>
                    </div>
                    <h2 class="text-center color-brand-1 mb-20">
                        <?= $url[1] ?>
                    </h2>
                    <?php foreach ($collections as $collection) { ?>
                        <div class="col-lg-6 col-md-4 col-sm-6 col-12">
                            <a href="<?=$base_url?>hadiths/<?= $url[1] . '/' . $collection->bookNumber ?>">
                                <div class="card-small">
                                    <div class="card-image">
                                        <div class="box-image">
                                            <div class="box-image">
                                                <h6 class="color-brand-1 icon-up" dir="ltr">
                                                    <?= $collection->book[1]->name ?>
                                                </h6>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="card-info">
                                        <h6 class="color-brand-1 icon-up" dir="ltr">
                                            <?= $collection->book[0]->name ?>
                                        </h6>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
    </main>
    <?php require('partials/footer.php') ?>
    </script>
    <?php require('partials/script.php') ?>
</body>

</html>