<?php $__env->startSection('content'); ?>
    <main class="header_banner">
        <div class="header_banner-img d-flex justify-content-center align-items-center">
            <div class="header_banner-content">
                <div class="container">
                    <div class="header_banner-content-txt">
                        <h1 class="header_banner-content-txt-title">Green Card</h1>
                        <div class="row justify-content-center align-items-center text-center">
                            <div class="col-lg-8 col-12">
                                <div class="header_banner-content-txt-desc">
                                    <p class="mb-1"><?php echo app('translator')->get('global.index-title-1'); ?></p>
                                    <br>
                                    <p class="mb-4"><?php echo app('translator')->get('global.index-title-2'); ?></p>
                                </div>
                          </div>
                        </div>
                        <a href="<?php echo e(route('siteForm')); ?>" class="header_banner-content-txt-btn d-flex justify-content-center align-items-center"><?php echo app('translator')->get('global.fill_form'); ?></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header_banner-box paddingClass-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4">
                        <div class="header_banner-box-item d-flex justify-content-center align-items-center text-center">
                            <i class="fas fa-passport color-icon1"></i>
                            <p class="mb-2 medium-18 pt-3"><?php echo app('translator')->get('global.index-boxs1-title'); ?></p>
                            <p class="mb-0 regular-16"><?php echo app('translator')->get('global.index-boxs1-txt'); ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-lg-0 mb-4">
                        <div class="header_banner-box-item d-flex justify-content-center align-items-center text-center">
                            <i class="fas fa-dollar-sign color-icon2"></i>
                            <p class="mb-2 medium-18 pt-3"><?php echo app('translator')->get('global.index-boxs2-title'); ?></p>
                            <p class="mb-0 regular-16"><?php echo app('translator')->get('global.index-boxs2-txt'); ?></p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="header_banner-box-item d-flex justify-content-center align-items-center text-center">
                            <i class="fas fa-chart-line color-icon3"></i>
                            <p class="mb-2 medium-18 pt-3"><?php echo app('translator')->get('global.index-boxs3-title'); ?></p>
                            <p class="mb-0 regular-16"><?php echo app('translator')->get('global.index-boxs3-txt'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="main__greenCard-mean paddingClass-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <blockquote class="blockquote-primary">
                        <h2 class="main_faq-box-h2 text-left"><?php echo app('translator')->get('global.green_card_title'); ?></h2>
                        <div class="main__greenCard-mean-content">
                            <p><?php echo app('translator')->get('global.green_card_txt-1'); ?></p>
                            <p><?php echo app('translator')->get('global.green_card_txt-2'); ?></p>
                            <p><?php echo app('translator')->get('global.green_card_txt-3'); ?></p>
                        </div>
                    </blockquote>
                    <a href="<?php echo e(route('siteForm')); ?>" class="header_banner-content-txt-btn d-flex justify-content-center align-items-center"><?php echo app('translator')->get('global.fill_form'); ?></a>
                </div>
            </div>
        </div>
    </main>

    <main class="main_news-box">
        <div class="container">
            <h2 class="main_faq-box-h2"><?php echo app('translator')->get('global.news'); ?></h2>
            <div class="row justify-content-center">
                <div class="col">
                    <div class="owl-carousel owl-theme custom-dots-style-1 mb-0"  style="height: 512px;">
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="https://www.greencards.uz/uploads/images/other/other_1649957690.jpg" alt="Card Image">
                                <div class="card-body">
                                    <p class="card-text mb-1">14.04.2022</p>
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">Green Card Natijalari e'lon qilinishiga 30 KUN qoldi...</h4>
                                    <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Batafsil <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="https://www.greencards.uz/uploads/images/other/other_1649957690.jpg" alt="Card Image">
                                <div class="card-body">
                                    <p class="card-text mb-1">14.04.2022</p>
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">Green Card Natijalari e'lon qilinishiga 30 KUN qoldi...</h4>
                                    <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Batafsil <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="https://www.greencards.uz/uploads/images/other/other_1649957690.jpg" alt="Card Image">
                                <div class="card-body">
                                    <p class="card-text mb-1">14.04.2022</p>
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">Green Card Natijalari e'lon qilinishiga 30 KUN qoldi...</h4>
                                    <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Batafsil <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card">
                                <img class="card-img-top" src="https://www.greencards.uz/uploads/images/other/other_1649957690.jpg" alt="Card Image">
                                <div class="card-body">
                                    <p class="card-text mb-1">14.04.2022</p>
                                    <h4 class="card-title mb-1 text-4 font-weight-bold">Green Card Natijalari e'lon qilinishiga 30 KUN qoldi...</h4>
                                    <a href="/" class="read-more text-color-primary font-weight-semibold text-2">Batafsil <i class="fas fa-angle-right position-relative top-1 ml-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="main_greenCard-box">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-8">
                    <div class="main_greenCard-box-item text-center">
                        <h2 class="main_greenCard-box-item-h2">
                            <?php echo app('translator')->get('global.index-greencardBox-title'); ?>
                            <br>
                            <?php echo app('translator')->get('global.index-greencardBox-subtitle'); ?>
                        </h2>
                        <a href="<?php echo e(route('siteForm')); ?>" class="header_banner-content-txt-btn d-flex justify-content-center align-items-center"><?php echo app('translator')->get('global.fill_form'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <main class="main_faq-box paddingClass-100">
        <div class="container">
            <h2 class="main_faq-box-h2"><?php echo app('translator')->get('global.index-lastBox-title'); ?></h2>
            <div class="toggle toggle-primary m-0" data-plugin-toggle="">
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.index-lastBox-q1'); ?></a>
                    <div class="toggle-content" style="display: none;">
                        <p><?php echo app('translator')->get('global.index-lastBox-ans1'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.index-lastBox-q2'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.index-lastBox-ans2'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.index-lastBox-q3'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.index-lastBox-ans3'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.index-lastBox-q4'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.index-lastBox-ans4'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.index-lastBox-q5'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.index-lastBox-ans5'); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:20,
            autoplay: true,
            autoplayTimeout: 2000,
            smartSpeed: 800,
            autoplayHoverPause: true,
            responsiveClass:true,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                576:{
                    items:1,
                    nav:false
                },
                768:{
                    items:2,
                    nav:false
                },
                991:{
                    items:2,
                    nav:false,
                },
                1200:{
                    items:3,
                    nav:false,
                }
            }
})
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/index.blade.php ENDPATH**/ ?>