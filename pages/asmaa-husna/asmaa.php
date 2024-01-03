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
                    <h2 class="color-brand-2 mt-15 mb-60 font-bold-800">أسماء الله الحسنى
                    </h2>
                </div>
            </div>
        </section>
        <?php require 'function/asmaa/get_asmaa.php' ?>
        <section class="section mt-90">
            <div class="container">
                <div class="row">
                    <?php foreach ($asma as $asmaa): ?>
                        <div class="col-xl-2 col-lg-4 col-md-6 col-sm-6">
                            <div class="card-member">
                                <div class="card-top">
                                    <div class="card-info"><span class="font-lg-bold color-brand-1">
                                            <?= $asmaa["name"] ?>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-bottom">
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>
    <?php require 'partials/footer.php' ?>
    </script>
    <?php require 'partials/script.php' ?>
</body>

</html>