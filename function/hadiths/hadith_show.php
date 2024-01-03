<?php require('get_all.php') ?>
<section class="section pt-80  ">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg col-md-8">
                <style>
                    p{
                        font-family: "HadithFont";
                        font-size: 22px;
                        font-weight: 700;
                        line-height: 33px;
                        
                    }
                </style>
                <h2 class="text-center color-brand-1 mb-20">أحاديث عشوائية</h2>
                <?php
                foreach ($data['hadith'] as $hadith) {
                    if ($hadith['lang'] == 'ar') {
                ?>
                        <?= $hadith['body']; ?>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>

    <div class="border-bottom"></div>
</section>