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
  <?php require('partials/notify.php') ?>
  <?php require('partials/header.php') ?>

  <main class="main">
    <section class="section bg-7 adkar-image">
      <div class="container">
        <div class="banner-shop-grid">
          <h2 class="color-brand-2 mt-5 mb-10 font-bold-800">موقع خاص بكل ما يتعلق بالدين الإسلامي من أذكار و أحاديث و القرآن الكريم وغير ذلك<br class="d-none d-lg-block">
            <span style="color: #ffbb3e!important">عن أبي مسعود البدري رضي الله عنه عن النبي صلى الله عليه وسلم قال: <br> «من دلَّ على خير، فله مثلُ أجرِ فاعلِه»
            </span>
          </h2>
        </div>
      </div>
    </section>
    <!-- counter for ramdan day -->
    <?php require('components/ramdan_day.php') ?>
    <!-- prayer time -->
    <?php require('components/prayer_time.php') ?>
    <!-- adkar -->
    <?php require('components/adkar_by_time.php') ?>
    <!-- adkar -->
    <?php require('components/quran_sourat.php') ?>
        <!-- hadiths -->
    <?php require('components/hadith_show.php') ?>
  </main>
  <?php require('partials/footer.php') ?>
  <script>
    (function() {
      "use strict";

      /**
       * Easy selector helper function
       */
      const select = (el, all = false) => {
        el = el.trim()
        if (all) {
          return [...document.querySelectorAll(el)]
        } else {
          return document.querySelector(el)
        }
      }

      /**
       * Easy event listener function
       */
      const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
          if (all) {
            selectEl.forEach(e => e.addEventListener(type, listener))
          } else {
            selectEl.addEventListener(type, listener)
          }
        }
      }

      /**
       * Easy on scroll event listener 
       */
      const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
      }

      /**
       * Back to top button
       */
      let backtotop = select('.back-to-top')
      if (backtotop) {
        const toggleBacktotop = () => {
          if (window.scrollY > 100) {
            backtotop.classList.add('active')
          } else {
            backtotop.classList.remove('active')
          }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
      }

      /**
       * Countdown timer
       */
      let countdown = select('.countdown');
      const output = countdown.innerHTML;

      const countDownDate = function() {
        let timeleft = new Date(countdown.getAttribute('data-count')).getTime() - new Date().getTime();

        let days = Math.floor(timeleft / (1000 * 60 * 60 * 24));
        let hours = Math.floor((timeleft % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        let minutes = Math.floor((timeleft % (1000 * 60 * 60)) / (1000 * 60));
        let seconds = Math.floor((timeleft % (1000 * 60)) / 1000);

        countdown.innerHTML = output.replace('%d', days).replace('%h', hours).replace('%m', minutes)
          .replace('%s', seconds);
      }
      countDownDate();
      setInterval(countDownDate, 1000);

    })()
  </script>
  <?php require('partials/script.php') ?>
</body>

</html>