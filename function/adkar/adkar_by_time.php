<?php require('get_adkar.php') ?>
<section class="section ">
<div class="border-bottom"></div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg col-md-8">
                <h2 class="text-center color-brand-1 mb-10">
                    <?= $random_item['category']; ?>
                </h2>
                <h5 class="color-grey-500">
                    <?php
                    if (!empty($random_item['description'])) {
                        ?>
                        وصف:
                        <?= $random_item['description']; ?>
                        <?php
                    }
                    ?>
                </h5>
                <h5 class="mt-10 color-grey-800">
                    <?php
                    if (!empty($random_item['refernce'])) {
                        ?>
                        مصدر:
                        <?= $random_item['reference']; ?>
                        <?php
                    }
                    ?>
                </h5>
                <p class="mt-10" style="text-align: center;">
                    <?= $random_item['zekr']; ?>
                </p>
            </div>
        </div>
    </div>

   
</section>