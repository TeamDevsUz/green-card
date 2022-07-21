

<?php $__env->startSection('content'); ?>
<section class="services paddingClass-50">
    <div class="container">
        <div class="services__mainBox">
            <div class="white-board"></div>
            <div class="services__mainBox__leftBox">
                <div class="text">
                    <h1 class="text_h1"><?php echo app('translator')->get('global.service-page-title'); ?></h1>
                    <div class="text-content">
                        <p>• <?php echo app('translator')->get('global.service-page-list-1'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-2'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-3'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-4'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-5'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-6'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;">• <?php echo app('translator')->get('global.service-page-list-7'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><?php echo app('translator')->get('global.service-page-list-8'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><?php echo app('translator')->get('global.service-page-list-9'); ?><br><?php echo app('translator')->get('global.service-page-list-10'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><?php echo app('translator')->get('global.service-page-list-11'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><?php echo app('translator')->get('global.service-page-list-12'); ?><br style="box-sizing: border-box; -webkit-font-smoothing: antialiased;"><br><img src="<?php echo e(asset('plugins_site/images/use-gerb.png')); ?>" alt="" width="209" height="209"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/services.blade.php ENDPATH**/ ?>