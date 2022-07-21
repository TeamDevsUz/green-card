

<?php $__env->startSection('content'); ?>
<section class="information paddingClass-50">
    <div class="container">
        <div class="information__mainBox">
            <div class="information__mainBox-content">
                <div class="headerline">
                    <span class="masha_index masha_index1" rel="1"></span>
                    <?php echo app('translator')->get('global.information-page-title'); ?>
                </div>
                <p><?php echo app('translator')->get('global.information-page-txt-1'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-2'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-3'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-4'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-5'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-6'); ?></p>
                <h3 class="information__mainBox-content-h3"><?php echo app('translator')->get('global.information-page-txt-7'); ?></h3>
                <ul>
                    <li style="text-align:justify;">
                      <?php echo app('translator')->get('global.information-page-txt-8'); ?>
                    </li>
                    <li style="text-align:justify;">
                        <?php echo app('translator')->get('global.information-page-txt-9'); ?>
                    </li>
                    <li style="text-align:justify;">
                        <?php echo app('translator')->get('global.information-page-txt-10'); ?>
                    </li>
                </ul>
                <h3 class="information__mainBox-content-h3"><?php echo app('translator')->get('global.information-page-txt-11'); ?></h3>
                <p><?php echo app('translator')->get('global.information-page-txt-12'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-13'); ?></p>
                <p><?php echo app('translator')->get('global.information-page-txt-14'); ?></p>
                <div style="text-align:justify;">
                    <a href="<?php echo e(route('siteForm')); ?>"><b><?php echo app('translator')->get('global.information-page-txt-15'); ?></b>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/information.blade.php ENDPATH**/ ?>