<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <?php require 'partials/head.php'?>
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
    <?php require 'partials/notify.php'?>
  <!-- header -->
  <?php require 'partials/header.php'?>

    <main class="main">
      <section class="section box-404">
        <div class="container">
          <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-lg-10">
              <div class="row align-items-center">
                <div class="col-md-5 col-sm-12 mb-30 text-center text-md-start"><img src="<?=$base_url?>assets/imgs/error/404/404.png" alt="qurandz error page"></div>
                <div class="col-md-7 col-sm-12 text-center text-md-start">
                  <h1 class="color-brand-1 font-84 mb-10">404</h1>
                  <h3 class="color-brand-1 mb-25">عفوًا ، لا يوجد شيء لتراه هنا</h3>
                  <p class="font-md color-grey-500">لسوء الحظ ، لم نتمكن من العثور على ما كنت تبحث عنه أو لم تعد الصفحة موجودة.</p>
                  <div class="mt-50"><a class="btn btn-default color-grey-900 pl-0" href="index">
                  العودة إلى الصفحة الرئيسية<svg class="w-6 h-6 icon-16 mr-5" fill="none" stroke="currentColor" viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path>
                      </svg></a></div>
                </div>
              </div>
            </div>
          </div>
          <div class="border-bottom bd-grey-80 mt-110 mb-0"></div>
        </div>
      </section>
    </main>

    <?php require 'partials/footer.php'?>
    <?php require 'partials/script.php'?>
  </body>
</html>