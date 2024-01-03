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
    <?php require('function/quran/surat_option.php') ?>
  </main>
  <?php require('partials/footer.php') ?>
  </script>
  <?php require('partials/script.php') ?>
</body>

</html>