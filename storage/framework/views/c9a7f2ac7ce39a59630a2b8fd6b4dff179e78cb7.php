





<?php $__env->startSection('content'); ?>
<!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?php echo app('translator')->get('cruds.visa.title_index'); ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('global.home'); ?></a></li>
                        <li class="breadcrumb-item active"><?php echo app('translator')->get('cruds.visa.title_index'); ?></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Green Card</h3>
                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.add')): ?>
                            <a href="<?php echo e(route('visaAdd')); ?>" class="btn btn-success btn-sm float-right">
                                <span class="fas fa-plus-circle"></span>
                                <?php echo app('translator')->get('global.add'); ?>
                            </a>
                        <?php endif; ?>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <!-- Data table -->
                        <table  class="table table-bordered">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th><?php echo app('translator')->get('cruds.visa.fields.table-title-1'); ?></th>
                                <th><?php echo app('translator')->get('cruds.visa.fields.table-title-2'); ?></th>
                                <th><?php echo app('translator')->get('cruds.visa.fields.table-title-3'); ?></th>
                                <th><?php echo app('translator')->get('global.actions'); ?></th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $deadline; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $day): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($day->id); ?></td>
                                    <td><?php echo e($day->{'name_' . $locale}); ?></td>
                                    <td><?php echo e($day->deadline); ?></td>
                                    <td><?php echo e($day->created_at); ?></td>
                                    <td class="text-center">
                                        <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('permission.delete')): ?>
                                            <form action="" method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="btn-group">
                                                    <a href="<?php echo e(route('visaEdit',$day->id)); ?>" type="button" class="btn btn-info btn-sm"> <?php echo app('translator')->get('global.edit'); ?></a>
                                                </div>
                                            </form>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/visa/index.blade.php ENDPATH**/ ?>