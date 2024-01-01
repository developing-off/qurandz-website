<?php 
require('function/quran/get_all_sourat.php');

?>
<section id="quran" class="section bg-brand-1 mt-100">
    <div class="container">
        <div class="row mt-50 align-items-end">
            <div class="col-lg-8 col-md-8">
                <h2 class="color-brand-2 mb-20">سور القرآن الكريم</h2>
            </div>
        </div>
        <div class="row mt-50">
           

            <style>
                .surat {
                    display: none;
                }
            </style>
            <div class="container bootstrap snippets bootdey">
                <div class="row">
                    <div class="col-lg-12 mb-25">
                        <input type="search" class="form-control" id="input-search" placeholder="Search...">
                    </div>

                </div>
            </div>
            <?php foreach ($surat_all as $sa) { ?>

                <div id="quran" class="surat col-lg-3 col-md-6 col-sm-6 ">
                    <div class="searchable-container">
                        <div class="items clearfix">
                            <div class="info-block block-info clearfix">
                                <a href="/surat/<?= $sa['id'] ?>">
                                    <div class="card-offer hover-up">
                                        <div class="card-info">
                                            <h4 class="color-brand-2 mb-15">
                                                <?= $sa['name_arabic'] ?>
                                            </h4>
                                            <p class="font-md color-white mb-15">عدد الآيات:
                                                <?= $sa['verses_count'] ?>
                                            </p>
                                            <div class="box-button-offer">
                                                <div class="btn btn-default font-sm-bold pl-0 color-brand-2"> <i
                                                        class="fa-solid fa-play"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <button id="load-more"
                style="background-color: #066a4c;border-radius: 50px;width: 141px;margin-bottom: 12px;"
                class="btn color-brand-2 col hover-up">المزيد للعرض <i class="fa-solid fa-arrow-down"></i></button>

            <script type="text/javascript">
                $(function () {
                    $('#input-search').on('keyup', function () {
                        var rex = new RegExp($(this).val(), 'i');
                        $('.searchable-container .items').hide();
                        $('.searchable-container .items').filter(function () {
                            return rex.test($(this).text());
                        }).show();
                    });
                });
            </script>
            <script>
                $(document).ready(function () {
                    $(".surat").slice(0, 8).show();
                    if ($(".surat:hidden").length != 0) {
                        $("#load-more").show();
                    }
                    $("#load-more").on("click", function (e) {
                        e.preventDefault();
                        $(".surat:hidden").slice(0, 8).slideDown();
                        if ($(".surat:hidden").length == 0) {
                            $("#load-more").text("لا يوجد المزيد للعرض")
                                .fadOut("slow");
                        }
                    });
                });
            </script>
        </div>
    </div>
</section>
<!-- hadiths -->