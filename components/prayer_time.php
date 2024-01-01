<?php
require 'function/prayer/prayer_time_function.php';
?>
<section id="mawaqit" class="section">

    <div class="box-radius-bottom">
        <div class="container">
            <div class="table-box-help mt-20">
                <div class="text-center mb-10">
                    <h3 class="color-brand-1 mb-15">مواقيت صلاة</h3>
                    <h5 style="font-family: uthman_surat" class="color-grey-300">قال تعالى:"فَإِذَا قَضَيْتُمُ
                        الصَّلَاةَ فَاذْكُرُوا اللَّهَ قِيَامًا وَقُعُودًا وَعَلَىٰ جُنُوبِكُمْ ۚ فَإِذَا
                        اطْمَأْنَنْتُمْ فَأَقِيمُوا الصَّلَاةَ ۚ إِنَّ الصَّلَاةَ كَانَتْ عَلَى الْمُؤْمِنِينَ كِتَابًا
                        مَوْقُوتًا "</h5>

                    <div class="box-form-contact">
                        <div class="row">
                            <div class="show-info">
                                <p class="info-place">مواقيت الصلاة في ولاية <span class="wilaya-select">وهران</span>
                                    بــ <span class="country-select">الجزائر</span></p>
                            </div>
                        </div>
                    </div>

                </div>

                <style>
                    .times {
                        display: flex;
                        justify-content: space-around;
                        align-items: center;
                        flex-wrap: wrap;
                    }

                    .times .time h3 {
                        margin-bottom: 10px;
                        color: var(--brand-1);
                        font-size: 20px;
                    }

                    .times .time {
                        text-align: center;
                    }

                    .times .time p {
                        padding: 5px;
                        font-weight: bold;
                        font-size: 22px;
                        background-color: var(--brand-1);
                        color: #fff;
                        border-radius: 5px;
                        width: 63px;
                        height: 35px;
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        font-family: 'Tajawal', sans-serif;
                    }
                </style>
                <?php

                $start = false;
                foreach ($prayer_times as $time) {
                    if ($time["date"]["gregorian"]["date"] == $today_date) {
                        $start = true;
                    }
                    if ($start) {
                        ?>
                        <div class="mawaqit">
                            <h5 style="text-align:center" class="color-grey-800">تاريخ :
                                <?= str_replace("(CET)", "/", (new hijri\datetime($time["date"]["gregorian"]["date"]))->format('D j M Y')); ?>
                            </h5>
                            <div class="times ">
                                <div class="time">
                                    <h3>الفجر</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Fajr"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>الشروق</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Sunrise"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>الظهر</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Dhuhr"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>العصر</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Asr"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>المغرب</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Maghrib"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>العشاء</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Isha"]); ?>
                                    </p>
                                </div>
                                <div class="time">
                                    <h3>الإمساك</h3>
                                    <p>
                                        <?= str_replace("(CET)", "", $time['timings']["Imsak"]); ?>
                                    </p>
                                </div>
                            </div>
                            <hr>
                        </div>

                        <?php
                    }
                }
                ?>

                <center>
                    <button id="load-mawaqit"
                        style="background-color: #066a4c;border-radius: 50px;width: 141px;margin-bottom: 12px;"
                        class="btn color-brand-2 mt-10 col hover-up">المزيد للعرض<i
                            class="fa-solid fa-arrow-down"></i></button>
                </center>
                <script>
                    $(document).ready(function () {
                        $(".mawaqit").slice(0, 1).show();
                        if($(".mawaqit:hidden").length != 0) {
                            $("#load-mawaqit").show();
                        }
                        $("#load-mawaqit").on("click", function (e) {
                            e.preventDefault();
                            $(".mawaqit:hidden").slice(0, 3).slideDown();
                            if($(".mawaqit:hidden").length == 0) {
                                $("#load-mawaqit").text("لا يوجد المزيد للعرض")
                                    .fadOut("slow");
                            }
                        });
                    })
                </script>
            </div>
        </div>
    </div>
    </div>
</section>