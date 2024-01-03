<?php
require('function/mails/send_message_contact.php')

?>
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

        <section class="section mt-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card-small card-small-2">
                            <div class="card-image">
                                <div class="box-image"><img src="<?=$base_url?>assets/imgs/contact/headphone.png" alt="email">
                                </div>
                            </div>
                            <div class="card-info">
                                <h6 class="color-brand-1 mb-10">مساعدة &amp; الدعم</h6>
                                <p style="font-size: 17px!important" class="font-xs color-grey-500">بريد إلكتروني: <a
                                        class="color-success"
                                        href="mailto:contact@qurandz.ga"><span>contact@qurandz.ga</span>
                                    </a><br>للحصول على مساعدة بخصوص خدمة حالية</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="card-small card-small-2">
                            <div class="card-image">
                                <div class="box-image"><img src="<?=$base_url?>assets/imgs/contact/phone.png" alt="phone"></div>
                            </div>
                            <div class="card-info">
                                <h6 class="color-brand-1 mb-10">اتصل بنا</h6>
                                <p style="font-size: 17px!important" class="font-xs color-grey-500">اتصل بنا للتحدث إلى
                                    أحد أعضاء فريقنا.<br> <span dir="ltr"> (+213) 560
                                        48 0184 </span></p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </section>
        <section class="section mt-70">
            <div class="container">
                <div class="col-lg-5">
                    <h2 class="color-brand-1 mb-15">ابقى على تواصل</h2>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="box-form-contact">
                            <div class="row">
                                <?php if(isset($notify)){ ?>
                                <div class="col-lg-12">
                                    <div class="alert alert-<?php echo $notifyType; ?> alert-dismissible fade show"
                                        role="alert">
                                        <strong><?php echo $notify; ?></strong>
                                    </div>
                                </div>
                                <?php } ?>

                                <form method="POST">
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-25">
                                            <input class="form-control icon-user" name="name" type="text"
                                                placeholder="اسمك">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-25">
                                            <input class="form-control icon-email" name="email" type="text"
                                                placeholder="بريد إلكتروني">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-sm-6">
                                        <div class="form-group mb-25">
                                            <input class="form-control icon-phone" style="background-position: left 15px center!important; padding-left: 46px!important;" name="phone" type="text" placeholder="هاتف" dir="ltr">
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group mb-25">
                                            <input class="form-control" name="subject" type="text" placeholder="موضوع">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group mb-25">
                                            <textarea name="msg" class="form-control textarea-control"
                                                placeholder="أكتب شيئا"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-5 col-md-5 col-sm-6 col-9">
                                        <div class="form-group">
                                            <button class="btn btn-brand-1-full font-sm" name="contact-us"
                                                type="submit">
                                                <svg class="w-6 h-6 icon-16 ml-5" fill="none" stroke="currentColor"
                                                    viewbox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
                                                </svg>
                                                أرسل رسالة
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <?php require 'partials/footer.php' ?>
    </script>
    <?php require 'partials/script.php' ?>
</body>

</html>