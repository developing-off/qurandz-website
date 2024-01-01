<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <?php require "partials/head.php"; ?>
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
  <?php require "partials/notify.php"; ?>
  <?php require "partials/header.php"; ?>

  <main class="main">
    <!-- hero  -->
    <?php require "components/hero.php"; ?>
    <!-- counter for ramdan day -->
    <?php require "components/ramdan_day.php"; ?>
    <!-- prayer time -->
    <?php require "components/prayer_time.php"; ?>
    <!-- adkar -->
    <?php require "components/adkar_by_time.php"; ?>
    <!-- sourat of quran -->
    <?php require "components/quran_sourat.php"; ?>
    <!-- hadith random -->
    <?php require "components/hadith_show.php"; ?>
  </main>
  <?php require "partials/footer.php"; ?>

  <?php require "partials/script.php"; ?>
</body>

</html>