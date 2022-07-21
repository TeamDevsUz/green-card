<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title>GREEN-CARD</title>

		<meta name="description" content="GREEN-CARD">
		<meta name="author" content="techwiz.uz">

		<!-- Favicon -->
		<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">



		<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700&display=swap" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/bootstrap/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/fontawesome-free/css/all.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/animate/animate.compat.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/simple-line-icons/css/simple-line-icons.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/owl.carousel/assets/owl.carousel.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/vendor/owl.carousel/assets/owl.theme.default.min.css')); ?>">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/theme.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/theme-elements.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/theme-blog.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/theme-shop.css')); ?>">



        <!-- /////////////////////////////////////////////////////////////////// -->
        <!-- ////////// AdminLte 3 start /////////////////////////////////////// -->

        <link rel="stylesheet" href="<?php echo e(asset('adminLte/daterangepicker/daterangepicker.css')); ?>">
        <!-- iCheck for checkboxes and radio inputs -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">

        <!-- Bootstrap Color Picker -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css')); ?>">

        <!-- Tempusdominus Bootstrap 4 -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">

        <!-- Select2 start -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/select2/css/select2.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
        <!-- Select2 end -->

        <!-- Bootstrap4 Duallistbox start -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/bootstrap4-duallistbox/bootstrap-duallistbox.min.css')); ?>">
        <!-- Bootstrap4 Duallistbox end -->

        <!-- BS Stepper start -->
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/bs-stepper/css/bs-stepper.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/dropzone/min/dropzone.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/bs-stepper/css/bs-stepper.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/adminlte.min.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('adminLte/toastr/toastr.min.css')); ?>">
        <!-- BS Stepper end -->

        <!-- ////////// AdminLte 3 end /////////////////////////////////////// -->

        <link rel="stylesheet" href="<?php echo e(asset('plugins/bootstrap_my/my_style.css')); ?>">
		<!-- Demo CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/demos/demo-business-consulting-3.css')); ?>">
		<!-- Skin CSS -->
		<link id="skinCSS" rel="stylesheet" href="<?php echo e(asset('plugins_site/css/skins/skin-business-consulting-3.css')); ?>">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/custom.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('plugins_site/css/media.css')); ?>">

        <?php echo $__env->yieldContent('styles'); ?>

		<!-- Head Libs -->
		<script src="<?php echo e(asset('plugins_site/vendor/modernizr/modernizr.min.js')); ?>"></script>
	</head>

	<body>
		<div class="body">
            <header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 85}">
                <div class="header-body border-top-0">
                    <div class="header-top header-top-default header-top-borders border-bottom-0 bg-color-light">
                        <div class="container">
                            <div class="header-row">
                                <div class="header-column justify-content-between">
                                    <div class="header-row">
                                        <nav class="header-nav-top w-100 w-md-50pct w-xl-100pct">
                                            <ul class="nav nav-pills d-inline-flex custom-header-top-nav-background pr-5">
                                                <li class="nav-item py-2 d-inline-flex z-index-1">
													<span class="d-flex align-items-center p-0">
														<span>
															<img width="25" src="<?php echo e(asset('plugins_site/images/business-consulting-3/icons/phone.svg')); ?>" alt="Phone Icon" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ml-2" href="tel:1234567890" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">(800) 123-4567</a>
													</span>
                                                    <span class="font-weight-normal align-items-center px-0 d-none d-xl-flex ml-3">
														<span>
															<img width="25" src="<?php echo e(asset('plugins_site/images/business-consulting-3/icons/email.svg')); ?>" alt="Email Icon" data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-light'}" />
														</span>
														<a class="text-color-light text-decoration-none font-weight-semibold text-3-5 ml-2" href="mailto:business@portotheme.com" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light">porto@consulting.com</a>
													</span>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="d-flex align-items-center justify-content-end w-100">
                                            <ul class="social-icons social-icons-clean social-icons-icon-dark social-icons-big m-0 ml-lg-2 d-lg-block d-md-block d-sm-block d-none">
                                                <li class="social-icons-instagram">
                                                    <a href="http://www.instagram.com/" target="_blank" class="text-4" title="Instagram" data-cursor-effect-hover="fit"><i class="fab fa-instagram"></i></a>
                                                </li>
                                                <li class="social-icons-twitter">
                                                    <a href="http://www.twitter.com/" target="_blank" class="text-4" title="Twitter" data-cursor-effect-hover="fit"><i class="fab fa-twitter"></i></a>
                                                </li>
                                                <li class="social-icons-facebook">
                                                    <a href="http://www.facebook.com/" target="_blank" class="text-4" title="Facebook" data-cursor-effect-hover="fit"><i class="fab fa-facebook-f"></i></a>
                                                </li>
                                            </ul>
                                            <div class="lang">
                                                <div class="lang__currrent">
                                                    <span><?php echo e(session('locale') == 'uz' ? "O'zbekcha" : "Русский"); ?></span>
                                                    <div>
                                                        <i class="fas fa-angle-down"></i>
                                                    </div>
                                                </div>
                                                <div class="lang__list"}>
                                                    <a  href="<?php echo e(route('changelang', 'uz')); ?>" ZZ id="uzbek" >O'zbekcha</a>
                                                    <a  href="<?php echo e(route('changelang', 'ru')); ?>" id="russian">Русский</a>
                                                    <div class="lang__triangle"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-container container" style="height: 90px;">
                        <div class="header-row">
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-logo">
                                        <a href="<?php echo e(route('siteIndex')); ?>">
                                            <img alt="Porto" width="70" src="<?php echo e(asset('plugins_site/images/use-gerb.png')); ?>">
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column justify-content-end w-100">
                                <div class="header-row">
                                    <div class="header-nav header-nav-links order-2 order-lg-1">
                                        <div class="header-nav-main header-nav-main-square header-nav-main-text-capitalize header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                            <nav class="collapse">
                                                <ul class="nav nav-pills" id="mainNav">
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('/*') ? "active":''); ?>" href="<?php echo e(route('siteIndex')); ?>">
                                                            <?php echo app('translator')->get('global.home'); ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('services*') ? "active":''); ?>" href="<?php echo e(route('siteServices')); ?>">
                                                            <?php echo app('translator')->get('global.services'); ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('news*') ? "active":''); ?>" href="<?php echo e(route('siteNews')); ?>">
                                                            <?php echo app('translator')->get('global.news'); ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('information-visa*') ? "active":''); ?>" href="<?php echo e(route('siteInformation')); ?>">
                                                            <?php echo app('translator')->get('global.information'); ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('questions*') ? "active":''); ?>" href="<?php echo e(route('siteQuestions')); ?>">
                                                            <?php echo app('translator')->get('global.questions'); ?>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nav-link <?php echo e(Request::is('contactus*') ? "active":''); ?>" href="<?php echo e(route('siteContactus')); ?>">
                                                            <?php echo app('translator')->get('global.contacts'); ?>
                                                        </a>
                                                    </li>
                                                    <li class="d-lg-none">
                                                        <a class="nav-link <?php echo e(Request::is('registration*') ? "active":''); ?>" href="<?php echo e(route('siteForm')); ?>">
                                                            <?php echo app('translator')->get('global.fill_form'); ?>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="header-column header-column-search justify-content-end align-items-center d-flex w-auto flex-row">
                                <a href="<?php echo e(route('siteForm')); ?>" class="btn btn-anketa custom-btn-style-1 font-weight-semibold text-3-5 btn-px-3 py-2 ws-nowrap ml-4 d-none d-lg-block" data-cursor-effect-hover="plus" data-cursor-effect-hover-color="light"><span><?php echo app('translator')->get('global.fill_form'); ?></span></a>
                                <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div role="main" class="main">
                <?php echo $__env->yieldContent('content'); ?>
            </div>


            <footer id="footer">
                <div class="container">
                    <div class="footer-ribbon">
                        <span><?php echo app('translator')->get('global.get_in_touch'); ?></span>
                    </div>
                    <div class="row py-5 my-4 align-items-center">
                        <div class="col-md-6 mb-4 mb-lg-0">
                            <a href="index.html" class="logo pr-0 pr-lg-3">
                                <img alt="Porto Website Template" src="<?php echo e(asset('plugins_site/images/use-gerb.png')); ?>" class="opacity-7 bottom-4" width="80">
                            </a>
                            <p class="mt-2 mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna. Phasellus semper scelerisque purus, et semper nisl lacinia sit amet. Praesent venenatis turpis vitae purus semper...</p>
                            <a href="<?php echo e(route('siteForm')); ?>" class="header_banner-content-txt-btn d-flex justify-content-center align-items-center m-0 text-white mt-4"><?php echo app('translator')->get('global.fill_form'); ?></a>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-3 mb-3"><?php echo app('translator')->get('global.contacts'); ?></h5>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="list list-icons list-icons-lg">
                                        <li class="mb-1"><i class="far fa-dot-circle text-color-primary"></i><p class="m-0">234 Street Name, City Name</p></li>
                                        <li class="mb-1"><i class="fab fa-whatsapp text-color-primary"></i><p class="m-0"><a href="tel:8001234567">(800) 123-4567</a></p></li>
                                        <li class="mb-1"><i class="far fa-envelope text-color-primary"></i><p class="m-0"><a href="mailto:mail@example.com">mail@example.com</a></p></li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="list list-icons list-icons-sm">
                                        <li><i class="fas fa-angle-right"></i><a href="<?php echo e(route('siteQuestions')); ?>" class="link-hover-style-1 ml-1"> <?php echo app('translator')->get('global.answer_question'); ?></a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="<?php echo e(route('siteNews')); ?>" class="link-hover-style-1 ml-1"> <?php echo app('translator')->get('global.news'); ?></a></li>
                                        <li><i class="fas fa-angle-right"></i><a href="<?php echo e(route('siteForm')); ?>" class="link-hover-style-1 ml-1"> <?php echo app('translator')->get('global.fill_form'); ?></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright footer-copyright-style-2">
                    <div class="container py-2">
                        <div class="row py-1">
                            <div class="col d-flex align-items-center justify-content-center">
                                <p>© Copyright 2021. All Rights Reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
		</div>



      
        
        <!-- ADMINLTE scripts start -->
        <!-- jQuery -->
        <script src="<?php echo e(asset('adminLte/jquery/jquery.min.js')); ?>"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo e(asset('adminLte/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <!-- Select2 -->
        <script src="<?php echo e(asset('adminLte/select2/js/select2.full.min.js')); ?>"></script>
        <!-- Bootstrap4 Duallistbox -->
        <script src="<?php echo e(asset('adminLte/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js')); ?>"></script>
        <!-- InputMask -->
        <script src="<?php echo e(asset('adminLte/moment/moment.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminLte/inputmask/jquery.inputmask.min.js')); ?>"></script>
        <!-- date-range-picker -->
        <script src="<?php echo e(asset('adminLte/daterangepicker/daterangepicker.js')); ?>"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo e(asset('adminLte/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
        <!-- Bootstrap Switch -->
        <script src="<?php echo e(asset('adminLte/bootstrap-switch/js/bootstrap-switch.min.js')); ?>"></script>
        <!-- BS-Stepper -->
        <script src="<?php echo e(asset('adminLte/bs-stepper/js/bs-stepper.min.js')); ?>"></script>
        <!-- dropzonejs -->
        <script src="<?php echo e(asset('adminLte/dropzone/min/dropzone.min.js')); ?>"></script>
        <script src="<?php echo e(asset('adminLte/toastr/toastr.min.js')); ?>"></script>
        <!-- ADMINLTE scripts end -->
        <script src="<?php echo e(asset('plugins_site/js/adminlte.js')); ?>"></script>
        <!-- Vendor -->
		<script src="<?php echo e(asset('plugins_site/vendor/jquery.appear/jquery.appear.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/jquery.easing/jquery.easing.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/jquery.cookie/jquery.cookie.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/popper/umd/popper.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/bootstrap/js/bootstrap.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/jquery.validation/jquery.validate.min.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/vendor/owl.carousel/owl.carousel.min.js')); ?>"></script>
        
        <script src="<?php echo e(asset('plugins_site/js/theme.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/js/views/view.contact.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/js/custom.js')); ?>"></script>
		<script src="<?php echo e(asset('plugins_site/js/theme.init.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>
    
    <script>
    $(function() {
        //Initialize Select2 Elements
        $('.select2').select2();
        
        $('[data-mask]').inputmask()
        //Initialize Select2 Elements
        $('.select2bs4').select2({
        theme: 'bootstrap4'
        })
    });
    </script>
	</body>
</html>
<?php /**PATH D:\OpenServer\domains\green-card\resources\views/layouts/main.blade.php ENDPATH**/ ?>