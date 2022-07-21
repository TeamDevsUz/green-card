

<?php $__env->startSection('content'); ?>
<section class="content__home paddingClass-50">
    <div class="container">
        <div class="content__home__header d-flex justify-content-between align-items-center">
            <h5 class="content__home__header_h5">
                <?php echo app('translator')->get('global.registration-receipt-page-title'); ?>
            </h5>
            <div class="content__home__header-btns d-flex justify-content-between align-items-center mt-lg-0 mt-3">
                <a href="<?php echo e(route('siteRegistrationEdit')); ?>" class="appl blue" style="margin: 0 12px 0 auto;">
                <i class="fas fa-pen"></i>
                <?php echo app('translator')->get('global.registration-receipt-page-btn-edit'); ?>
                </a>
                <a href="<?php echo e(route('siteCompleteRegistration')); ?>" class="appl">
                <img src="<?php echo e(asset('plugins_site/images/check_light.png')); ?>">
                <?php echo app('translator')->get('global.registration-receipt-page-btn-submit'); ?>
                </a>
            </div>
        </div>
        <div class="content__home__form__confirm mt-4">
            <?php $__currentLoopData = $registration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="content__home__form__confirm-item">
                    <div class="row flex-lg-row flex-column-reverse">
                        <div class="col-lg-8">
                            <h4><?php echo app('translator')->get('global.registration-receipt-page-txt-title'); ?></h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-1'); ?> </td>
                                        <td><?php echo e($item->first_name.' '.$item->last_name); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-page-gender'); ?></td>
                                        <td>
                                            <?php if($locale == "ru"): ?>
                                                <?php echo e($item->gender == 'men' ? 'Мужской' : 'Женщина'); ?>

                                            <?php else: ?>
                                                <?php echo e($item->gender == 'men' ? 'Erkak' : 'Ayol'); ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-page-birthdate'); ?></td>
                                        <td><?php echo e(date('d-m-Y', strtotime($item->birthdate))); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-birth-country'); ?> </td>
                                        <td><?php echo e($item->country->{'name_' . $locale}." ".$item->region_name->{'name_' . $locale}." ".$item->district_name->{'name_' . $locale}); ?>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-page_numm-pass'); ?></td>
                                        <td><?php echo e($item->passport_number); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-residence-place'); ?></td>
                                        <td><?php echo e($item->full_address); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-phone-num'); ?></td>
                                        <td><?php echo e("+998".$item->phone); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-email'); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-edu-lev'); ?></td>
                                        <td><?php echo e($item->education_name->{'name_' . $locale}); ?></td>
                                    </tr>
                                    <tr>
                                        <td><?php echo app('translator')->get('global.registration-receipt-page-txt-family-st'); ?></td>
                                        <td>
                                            <?php if($item->family_status == "Married"): ?>
                                                <?php if($locale == "ru"): ?>
                                                    Женат / Замужем
                                                <?php else: ?>
                                                    Uylangan / turmushga chiqgan
                                                <?php endif; ?>
                                            <?php elseif($item->family_status == "Unmarried"): ?>
                                                <?php if($locale == "ru"): ?>
                                                    Холост / Не замужем
                                                <?php else: ?>
                                                    Uylanmagan / turmushga chiqmagan
                                                <?php endif; ?>
                                            <?php elseif($item->family_status == "Divorced"): ?>
                                                <?php if($locale == "ru"): ?>
                                                    Разведен
                                                <?php else: ?>
                                                    Ajrashgan / ajrashuvda
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <?php if($locale == "ru"): ?>
                                                    Вдовец/ва
                                                <?php else: ?>
                                                    Beva / yolg'iz
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-lg-4">
                            <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                <img src="<?php echo e(asset('images/'.$item->user_image)); ?>" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if(isset($familyMembers)): ?>
            <?php $__currentLoopData = $familyMembers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->is_child == "0"): ?>
                    <div class="content__home__form__confirm mt-4">
                        <div class="content__home__form__confirm-item">
                            <div class="row flex-lg-row flex-column-reverse">
                                <div class="col-lg-8">
                                    <h4><?php echo app('translator')->get('global.registration-receipt-page-spouse-inform'); ?></h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-receipt-page-txt-1'); ?></td>
                                                <td><?php echo e($item->first_name.' '.$item->last_name); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-page-gender'); ?></td>
                                                <td>
                                                    <?php if($locale == "ru"): ?>
                                                        <?php echo e($item->gender == 'men' ? 'Мужской' : 'Женщина'); ?>

                                                    <?php else: ?>
                                                        <?php echo e($item->gender == 'men' ? 'Erkak' : 'Ayol'); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-page-birthdate'); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($item->birthdate))); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-receipt-page-txt-residence-place'); ?></td>
                                                <td><?php echo e($item->family_country_name->{'name_' . $locale}." ".$item->family_region_name->{'name_' . $locale}." ".$item->family_district_name->{'name_' . $locale}); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-page-form-title-4'); ?></td>
                                                <td><?php echo e($item->education_name->{'name_' . $locale}); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                    <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                        <div class="content__home__form__confirm-item-img">
                                            <img src="<?php echo e(asset('images/'.$item->user_image)); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if($item->is_child == "1"): ?>
                    <div class="content__home__form__confirm mt-4">
                        <div class="content__home__form__confirm-item">
                            <div class="row flex-lg-row flex-column-reverse">
                                <div class="col-lg-8">
                                    <h4><?php echo app('translator')->get('global.registration-receipt-page-child-inform'); ?></h4>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-receipt-page-txt-1'); ?></td>
                                                <td><?php echo e($item->first_name.' '.$item->last_name); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-page-gender'); ?></td>
                                                <td>
                                                    <?php if($locale == "ru"): ?>
                                                        <?php echo e($item->gender == 'men' ? 'Мужской' : 'Женщина'); ?>

                                                    <?php else: ?>
                                                        <?php echo e($item->gender == 'men' ? 'Erkak' : 'Ayol'); ?>

                                                    <?php endif; ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-page-birthdate'); ?></td>
                                                <td><?php echo e(date('d-m-Y', strtotime($item->birthdate))); ?></td>
                                            </tr>
                                            <tr>
                                                <td><?php echo app('translator')->get('global.registration-receipt-page-txt-residence-place'); ?></td>
                                                <td><?php echo e($item->family_country_name->{'name_' . $locale}." ".$item->family_region_name->{'name_' . $locale}." ".$item->family_district_name->{'name_' . $locale}); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="col-lg-4">
                                    <div class="content__home__form__confirm-item-img mb-lg-0 mb-3">
                                        <div class="content__home__form__confirm-item-img">
                                            <img src="<?php echo e(asset('images/'.$item->user_image)); ?>" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/registrationReceipt.blade.php ENDPATH**/ ?>