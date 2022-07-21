

<?php $__env->startSection('styles'); ?>
<style>
    .card-body .copybtn{
        width: 30px;
        height: 30px;
        background: transparent;
        color: #fff;
        font-size: 14px;
        border: none;
        outline: none;
        border-radius: 10px;
        cursor: pointer;
        float: right;
        padding: 0;
        color: #5784f5;
    }
    
    .table-bordered td {
        text-align: center;
    }
    
    .modal-body-img{
        width: 300px;
        height: 300px;
        margin: 0 auto;
    }
    
    .modal-body-img figure{
        width: 100%;
        height: 100%;
    }
    
    .modal-body-img figure img{
        width: 100%;
        height: 100%;
    }
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo app('translator')->get('cruds.registration.title_1'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('global.home'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo app('translator')->get('cruds.registration.title_1'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"><?php echo app('translator')->get('cruds.registration.title_table_1'); ?></h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered table-striped table-responsive-lg">
                                <thead>
                                    <tr class="text-center">
                                        <th>ID</th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.username'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.gender'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.birthdate'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.phone'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.email'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><?php echo e($registration->id); ?></td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <?php echo e($registration->last_name.' '.$registration->first_name); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->last_name.' '.$registration->first_name); ?>" title="<?php echo e($registration->last_name.' '.$registration->first_name); ?>" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <?php echo e($registration->gender == "men" ? "Erkak" : "Ayol"); ?>

                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <?php echo e(date('d-m-Y', strtotime($registration->birthdate))); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e(date('d-m-Y', strtotime($registration->birthdate))); ?>" title="<?php echo e(date('d-m-Y', strtotime($registration->birthdate))); ?>" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <?php echo e("+998".''.$registration->phone); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e('+998'.''.$registration->phone); ?>" title="<?php echo e('+998'.''.$registration->phone); ?>" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <?php echo e($registration->email); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->email); ?>" title="<?php echo e($registration->email); ?>" class="btn copybtn"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="3"><?php echo app('translator')->get('cruds.registration.fields.family_status'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.country'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.region'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.district'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php if($registration->family_status == "Married"): ?>
                                                    Uylangan / turmushga chiqgan
                                                <?php elseif($registration->family_status == "Unmarried"): ?>
                                                    Uylanmagan / turmushga chiqmagan
                                                <?php elseif($registration->family_status == "Divorced"): ?>
                                                    Ajrashgan / ajrashuvda
                                                <?php else: ?>
                                                    Beva / yolg'iz
                                                <?php endif; ?>
                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->family_status); ?>" title="<?php echo e($registration->family_status); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->country->name_en); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->country->name_en); ?>" title="<?php echo e($registration->country->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->region_name->name_en); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->region_name->name_en); ?>" title="<?php echo e($registration->region_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->district_name->name_en); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->district_name->name_en); ?>" title="<?php echo e($registration->district_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th><?php echo app('translator')->get('cruds.registration.fields.passport_num'); ?></th>
                                        <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.passport_expire_date'); ?></th>
                                        <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.passport_address'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.education'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->passport_number); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->passport_number); ?>" title="<?php echo e($registration->passport_number); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e(date('d-m-Y', strtotime($registration->expired_date))); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e(date('d-m-Y', strtotime($registration->expired_date))); ?>" title="<?php echo e(date('d-m-Y', strtotime($registration->expired_date))); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->passport_given_address); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->passport_given_address); ?>" title="<?php echo e($registration->passport_given_address); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex align-items-center justify-content-center">
                                                <?php echo e($registration->education_name->name_en); ?>

                                                <button data-toggle="tooltip" data-clipboard-text="<?php echo e($registration->education_name->name_en); ?>" title="<?php echo e($registration->education_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <thead>
                                    <tr class="text-center">
                                        <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.application_st'); ?></th>
                                        <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.pay_status'); ?></th>
                                        <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.user_img'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="2"><?php echo e($registration->application_status); ?></td>
                                        <td colspan="2"><?php echo e($registration->payment_status == "0" ? "To'lanmadi" : "To'landi"); ?></td>
                                        <td colspan="2">
                                            <div class="d-flex justify-content-center align-items-center">
                                                <a  href="<?php echo e(route('download', $registration->user_image)); ?>"><?php echo e($registration->user_image); ?></a>
                                                <button data-toggle="modal" data-target="#modal-lg_<?php echo e($registration->id); ?>" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                <div class="modal fade" id="modal-lg_<?php echo e($registration->id); ?>">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title"><?php echo app('translator')->get('cruds.registration.fields.username'); ?>: <?php echo e($registration->last_name.' '.$registration->first_name); ?></h4>
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <div class="modal-body-img">
                                                                    <figure>
                                                                        <img src="<?php echo e(asset('images/'.$registration->user_image)); ?>" alt="">
                                                                    </figure>
                                                                </div>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('cruds.registration.fields.close'); ?></button>
                                                                <a href="<?php echo e(route('download', $registration->user_image)); ?>" type="button" class="btn btn-primary"><?php echo app('translator')->get('cruds.registration.fields.download'); ?></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <?php if(isset($wife)): ?>
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title"><?php echo app('translator')->get('cruds.registration.title_table_2'); ?></h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table class="table table-bordered table-striped table-responsive-lg">
                                    <thead>
                                        <tr class="text-center">
                                            <th><?php echo app('translator')->get('cruds.registration.fields.user_id'); ?></th>
                                            <th><?php echo app('translator')->get('cruds.registration.fields.username'); ?></th>
                                            <th><?php echo app('translator')->get('cruds.registration.fields.gender'); ?></th>
                                            <th><?php echo app('translator')->get('cruds.registration.fields.birthdate'); ?></th>
                                            <th><?php echo app('translator')->get('cruds.registration.fields.education'); ?></th>
                                            <th><?php echo app('translator')->get('cruds.registration.fields.user_img'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <?php echo e($wife->user_id); ?>

                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->last_name.' '.$wife->first_name); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e($wife->last_name.' '.$wife->first_name); ?>" title="<?php echo e($wife->last_name.' '.$wife->first_name); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->gender == "men" ? "Erkak" : "Ayol"); ?>

                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e(date('d-m-Y', strtotime($wife->birthdate))); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e(date('d-m-Y', strtotime($wife->birthdate))); ?>" title="<?php echo e(date('d-m-Y', strtotime($wife->birthdate))); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->education_name->name_en); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e($wife->education_name->name_en); ?>" title="<?php echo e($wife->education_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center">
                                                    <a href="<?php echo e(route('download', $wife->user_image)); ?>"><?php echo e($wife->user_image); ?></a>
                                                    <button data-toggle="modal" data-target="#modal-wife-lg_<?php echo e($wife->id); ?>" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                    <div class="modal fade" id="modal-wife-lg_<?php echo e($wife->id); ?>">
                                                        <div class="modal-dialog modal-lg">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h4 class="modal-title"><?php echo app('translator')->get('cruds.registration.fields.username'); ?>: <?php echo e($wife->last_name.' '.$wife->first_name); ?></h4>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <div class="modal-body-img">
                                                                        <figure>
                                                                            <img src="<?php echo e(asset('images/'.$wife->user_image)); ?>" alt="">
                                                                        </figure>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('cruds.registration.fields.close'); ?></button>
                                                                    <a href="<?php echo e(route('download', $wife->user_image)); ?>" type="button" class="btn btn-primary"><?php echo app('translator')->get('cruds.registration.fields.download'); ?></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <thead>
                                        <tr class="text-center">
                                            <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.country'); ?></th>
                                            <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.region'); ?></th>
                                            <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.district'); ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->family_country_name->name_en); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e($wife->family_country_name->name_en); ?>" title="<?php echo e($wife->family_country_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->family_region_name->name_en); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e($wife->family_region_name->name_en); ?>" title="<?php echo e($wife->family_region_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                            <td colspan="2">
                                                <div class="d-flex align-items-center justify-content-center">
                                                    <?php echo e($wife->family_district_name->name_en); ?>

                                                    <button data-toggle="tooltip" data-clipboard-text="<?php echo e($wife->family_district_name->name_en); ?>" title="<?php echo e($wife->family_district_name->name_en); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
                
                <?php if($children !== null): ?>
                    <?php $__currentLoopData = $children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title"><?php echo app('translator')->get('cruds.registration.title_table_3'); ?></h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-responsive-lg">
                                        <thead>
                                            <tr class="text-center">
                                                <th><?php echo app('translator')->get('cruds.registration.fields.user_id'); ?></th>
                                                <th><?php echo app('translator')->get('cruds.registration.fields.username'); ?></th>
                                                <th><?php echo app('translator')->get('cruds.registration.fields.gender'); ?></th>
                                                <th><?php echo app('translator')->get('cruds.registration.fields.birthdate'); ?></th>
                                                <th><?php echo app('translator')->get('cruds.registration.fields.user_img'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($child->user_id); ?></td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <?php echo e($child->last_name.' '.$child->first_name); ?>

                                                        <button data-toggle="tooltip" data-clipboard-text="<?php echo e($child->last_name.' '.$child->first_name); ?>" title="<?php echo e($child->last_name.' '.$child->first_name); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <?php echo e($child->gender == "men" ? "Erkak" : "Ayol"); ?>                                               
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex align-items-center justify-content-center">
                                                        <?php echo e(date('d-m-Y', strtotime($child->birthdate))); ?>

                                                        <button data-toggle="tooltip" data-clipboard-text="<?php echo e(date('d-m-Y', strtotime($child->birthdate))); ?>" title="<?php echo e(date('d-m-Y', strtotime($child->birthdate))); ?>" class="btn copybtn ml-3"><i class="fas fa-copy"></i></button>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="d-flex justify-content-center align-items-center">
                                                        <a href="<?php echo e(route('download', $child->user_image)); ?>"><?php echo e($child->user_image); ?></a>
                                                        <button data-toggle="modal" data-target="#modal-child-lg_<?php echo e($child->id); ?>" class="copybtn ml-3"><i class="fas fa-eye"></i></button>
                                                        
                                                        <div class="modal fade" id="modal-child-lg_<?php echo e($child->id); ?>">
                                                            <div class="modal-dialog modal-lg">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title"><?php echo app('translator')->get('cruds.registration.fields.username'); ?>: <?php echo e($child->last_name.' '.$child->first_name); ?></h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="modal-body-img">
                                                                            <figure>
                                                                                <img src="<?php echo e(asset('images/'.$child->user_image)); ?>" alt="">
                                                                            </figure>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" id="closeModel" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('cruds.registration.fields.close'); ?></button>
                                                                        <a href="<?php echo e(route('download', $child->user_image)); ?>" type="button" class="btn btn-primary"><?php echo app('translator')->get('cruds.registration.fields.download'); ?></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <thead>
                                            <tr class="text-center">
                                                <th><?php echo app('translator')->get('cruds.registration.fields.country'); ?></th>
                                                <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.region'); ?></th>
                                                <th colspan="2"><?php echo app('translator')->get('cruds.registration.fields.district'); ?></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td><?php echo e($child->family_country_name->name_en); ?></td>
                                                <td colspan="2"><?php echo e($child->family_region_name->name_en); ?></td>
                                                <td colspan="2"><?php echo e($child->family_district_name->name_en); ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });

    $('button').tooltip({
        //trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(btn,message) {
        btn.tooltip('hide')
            .attr('data-original-title', message)
            .tooltip('show');
    }

    function hideTooltip(btn) {
        setTimeout(function() {
            btn.tooltip('hide');
        }, 1000);
    }

    // Clipboard
    var clipboard = new ClipboardJS('button');

    clipboard.on('success', function(e) {
        var btn = $(e.trigger);
        setTooltip(btn,'Copied!');
        hideTooltip(btn);
    });

    clipboard.on('error', function(e) {
        var btn = $(e.trigger);
        setTooltip('Failed!');
        hideTooltip(btn);
    });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/orders/detail.blade.php ENDPATH**/ ?>