<?php 
$formatter = new IntlDateFormatter('ar_DZ', IntlDateFormatter::NONE, IntlDateFormatter::NONE, 'Africa/Algiers', IntlDateFormatter::GREGORIAN, "EEEE d MMMM y");
?>
<div class="box-notify bg-brand-1">
  <div class="container position-relative">
    <div class="box-container-sw">
      <div class="box-swiper">
        <div class="swiper-container swiper-notify">
          <div class="swiper-wrapper">
            <div class="swiper-slide" dir="rtl"><span class="d-inline-block font-sm color-brand-2"><?= (new hijri\datetime())->format('D _j _M _Yهـ'); ?></span></div>
            <div class="swiper-slide" dir="rtl"><span class="d-inline-block font-sm color-brand-2"><?= $formatter->format(time()); ?></span></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>