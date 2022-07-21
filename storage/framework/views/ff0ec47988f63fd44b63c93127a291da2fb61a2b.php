

<?php $__env->startSection('content'); ?>
<section class="content__home paddingClass-50">
    <div class="container">
        <div class="content__home__form__confirmed">
            <h5 class="text-center content__home__header_h5"><?php echo app('translator')->get('global.complet-registr-page-title'); ?></h5>
            <p class="mt-4 content__home__form__confirmed-p"><?php echo app('translator')->get('global.complet-registr-page-txt-1'); ?></p>
            <table class="table table-striped">
                <tbody>
                    <?php $__currentLoopData = $registration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><b><?php echo app('translator')->get('global.complet-registr-page-txt-2'); ?></b></td>
                            <td><?php echo e($item->last_name.' '.$item->first_name); ?></td>
                        </tr>
                        <tr>
                            <td><b>ID:</b></td>
                            <td><?php echo e($item->registration_id); ?></td>
                        </tr>
                        <tr>
                            <td><b><?php echo app('translator')->get('global.registration-page-birthdate'); ?></b></td>
                            <td><?php echo e(date('d-m-Y', strtotime($item->birthdate))); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <p class="content__home__form__confirmed-p">
               <?php echo app('translator')->get('global.complet-registr-page-txt-3'); ?>
            </p>
            <p class="content__home__form__confirmed-p">
                <?php echo app('translator')->get('global.complet-registr-page-txt-4'); ?>
            </p>
            <p class="content__home__form__confirmed-p">
                <?php echo app('translator')->get('global.complet-registr-page-txt-5'); ?>
            </p>
            <p class="content__home__form__confirmed-p">
                UZCARD <b>8600 1404 0456 7506</b> MUSTAFAYEV BAHODIR<br>
                HUMO <b>9860 1701 0941 1646</b> BAKHODIR MUSTAFAEV<br>
                Сбербанк <b>5106 2180 3265 9559</b> BAKHODIR MUSTAFAEV<br>
            </p>
            <p class="content__home__form__confirmed-p"><b style="color: #ff0000;"><?php echo app('translator')->get('global.complet-registr-page-txt-6'); ?></b></p>
            <div class="pay_btns">
                <p class="text-center content__home__form__confirmed-p"><?php echo app('translator')->get('global.complet-registr-page-txt-7'); ?></p>
                <div class="pay_btns-div d-flex justify-content-center">
                    <a href="#!" class="waves-effect waves-light btn-large click"><img src="<?php echo e(asset('plugins_site/images/click.png')); ?>"></a>
                    <a href="#!" class="waves-effect waves-light btn-large payme">
                        <img src="<?php echo e(asset('plugins_site/images/payme.png')); ?>">
                    </a>
                </div>
            </div>
            <p class="content__home__form__confirmed-p pt-4"><b><?php echo app('translator')->get('global.complet-registr-page-txt-8'); ?></b></p>
            <p class="content__home__form__confirmed-p">
                <?php echo app('translator')->get('global.complet-registr-page-txt-9'); ?>
            </p>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/completeRegistration.blade.php ENDPATH**/ ?>