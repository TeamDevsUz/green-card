

<?php $__env->startSection('styles'); ?>
<style>
    .btn-group>.btn:not(:first-child) {
    border-top-left-radius: .2rem !important;
    border-bottom-left-radius: .2rem !important;
}
</style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1><?php echo app('translator')->get('cruds.registration.title'); ?></h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>"><?php echo app('translator')->get('global.home'); ?></a></li>
                            <li class="breadcrumb-item active"><?php echo app('translator')->get('cruds.registration.title'); ?></li>
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
                            <h3 class="card-title"><?php echo app('translator')->get('cruds.user.title_singular'); ?></h3>
                            <span class="badge badge-light"><?php echo app('translator')->get('global.amount'); ?> : <?php echo e($registration->total() ?? 0); ?></span>
                            <div class="card-tools">
                                <div class="btn-group">
                                    <button name="filter" type="button" value="1" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#filter-modal"><i class="fas fa-filter"></i> <?php echo app('translator')->get('global.filter'); ?></button>
                                    <form action="" method="get">
                                        <div class="modal fade" id="filter-modal" tabindex="-1" role="dialog" aria-labelledby="filters" aria-hidden="true">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel"><?php echo app('translator')->get('global.filter'); ?></h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">

                                                        <!-- full_name -->
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Пользователи</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm">
                                                                    <option value=""> like </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <input type="hidden" name="full_name_operator" value="like">
                                                                <input class="form-control form-control-sm" type="text" name="name" value="<?php echo e(old('name',request()->name??'')); ?>">
                                                            </div>
                                                        </div>

                                                        <!-- status -->
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Статус</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm">
                                                                    <option value=""> = </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <select class="form-control form-control-sm" name="status">
                                                                    <option value=""></option>
                                                                    <option value="0" <?php echo e((request()->status == '0') ? 'selected':''); ?>>В обработке</option>
                                                                    <option value="1" <?php echo e(request()->status == 1 ? 'selected':''); ?>>Подтвержден</option>
                                                                    <option value="2" <?php echo e(request()->status == 2 ? 'selected':''); ?>>Выполняется</option>
                                                                    <option value="3" <?php echo e(request()->status == 3 ? 'selected':''); ?>>Выполнено</option>
                                                                    <option value="4" <?php echo e(request()->status == 4 ? 'selected':''); ?>>Отменен</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- payment_status -->
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Статус оплаты</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm">
                                                                    <option value=""> = </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <select class="form-control form-control-sm" name="payment">
                                                                    <option value=""></option>
                                                                    <option value="0" <?php echo e((request()->payment == '0') ? 'selected':''); ?>>Не Оплачен</option>
                                                                    <option value="1" <?php echo e(request()->payment == 1 ? 'selected':''); ?>>Оплачен</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <!-- summa  -->
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Сумма</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm" name="summa_operator"
                                                                        onchange="
                                                                                if(this.value == 'between'){
                                                                                document.getElementById('summa_pair').style.display = 'block';
                                                                                } else {
                                                                                document.getElementById('summa_pair').style.display = 'none';
                                                                                }
                                                                                ">
                                                                    <option value="" <?php echo e(request()->summa_operator == '=' ? 'selected':''); ?>> = </option>
                                                                    <option value=">" <?php echo e(request()->summa_operator == '>' ? 'selected':''); ?>> > </option>
                                                                    <option value="<" <?php echo e(request()->summa_operator == '<' ? 'selected':''); ?>> < </option>
                                                                    <option value="between" <?php echo e(request()->summa_operator == 'between' ? 'selected':''); ?>> Between </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <input class="form-control form-control-sm" type="text" name="summa" value="<?php echo e(old('summa',request()->summa??'')); ?>">
                                                            </div>
                                                            <div class="col-3" id="summa_pair" style="display: <?php echo e(request()->summa_operator == 'between' ? 'block':'none'); ?>">
                                                                <input class="form-control form-control-sm" type="text" name="summa_pair" value="<?php echo e(old('summa_pair',request()->summa_pair ??'')); ?>">
                                                            </div>
                                                        </div>

                                                        <!-- payment_method -->
                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Тип оплаты</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm">
                                                                    <option value=""> = </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <select class="form-control form-control-sm" name="payment_method">
                                                                    <option value=""></option>
                                                                    <option value="naqd" <?php echo e((request()->payment_method == 'naqd') ? 'selected':''); ?>>💵 Наличные</option>
                                                                    <option value="plastik" <?php echo e(request()->payment_method == 'plastik' ? 'selected':''); ?>>💳 Пластик</option>
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-group row align-items-center">
                                                            <div class="col-3">
                                                                <h6>Дата создания</h6>
                                                            </div>
                                                            <div class="col-2">
                                                                <select class="form-control form-control-sm" name="created_at_operator"
                                                                        onchange="
                                                                                if(this.value == 'between'){
                                                                                document.getElementById('created_at_pair').style.display = 'block';
                                                                                } else {
                                                                                document.getElementById('created_at_pair').style.display = 'none';
                                                                                }
                                                                                ">
                                                                    <option value="" <?php echo e(request()->created_at_operator == '=' ? 'selected':''); ?>> = </option>
                                                                    <option value=">" <?php echo e(request()->created_at_operator == '>' ? 'selected':''); ?>> > </option>
                                                                    <option value="<" <?php echo e(request()->created_at_operator == '<' ? 'selected':''); ?>> < </option>
                                                                    <option value="between" <?php echo e(request()->created_at_operator == 'between' ? 'selected':''); ?>> От .. до .. </option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3">
                                                                <input class="form-control form-control-sm" type="date" name="created_at" value="<?php echo e(old('created_at',request()->created_at??'')); ?>">
                                                            </div>
                                                            <div class="col-3" id="created_at_pair" style="display: <?php echo e(request()->created_at_operator == 'between' ? 'block':'none'); ?>">
                                                                <input class="form-control form-control-sm" type="date" name="created_at_pair" value="<?php echo e(old('created_at_pair',request()->created_at_pair??'')); ?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="submit" name="filter" class="btn btn-primary"><?php echo app('translator')->get('global.filtering'); ?></button>
                                                        <button type="button" class="btn btn-outline-warning float-left pull-left" id="reset_form"><?php echo app('translator')->get('global.clear'); ?></button>
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"><?php echo app('translator')->get('global.closed'); ?></button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <a href="<?php echo e(route('orderIndex')); ?>" class="btn btn-secondary btn-sm"><i class="fa fa-redo-alt"></i> <?php echo app('translator')->get('global.clear'); ?></a>
                                    <a href="#" class="btn btn-danger btn-sm" id="deleteAllRecords"><i class="fa fa-trash"></i> <?php echo app('translator')->get('global.deleteAll'); ?></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <!-- Data table -->
                            <table class="table table-bordered table-striped table-responsive-lg" >
                                <thead>
                                    <tr class="text-center">
                                        <th><input type="checkbox" id="checkAll"></th>
                                        <th>ID</th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.username'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.phone'); ?></th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.email'); ?></th>
                                        <th>Статус оплаты</th>
                                        <th><?php echo app('translator')->get('cruds.registration.fields.created_at'); ?></th>
                                        <th style="width: 10px"><?php echo app('translator')->get('global.actions'); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $count = 0; ?>
                                    <?php $__currentLoopData = $registration; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr id="user_id<?php echo e($user->id); ?>">
                                        <td class="text-center"><input type="checkbox" name="ids" class="checkBoxClass" value="<?php echo e($user->id); ?>"></td>
                                        <td class="text-center"><?php echo e($count += 1); ?></td>
                                        <td class="text-center"><?php echo e($user->first_name.' '.$user->last_name); ?></td>
                                        <td class="text-center"><a href="<?php echo e(route('orderDetails', $user->id)); ?>"><?php echo e("+998".$user->phone); ?></a></td>
                                        <td class="text-center"><?php echo e($user->email); ?></td>
                                        <td class="text-center">
                                            <button id="" class="w-100 btn btn-<?php echo e($user->payment_status == "0" ? "warning" : "success"); ?>  btn-sm" type="button">
                                                <?php echo e($user->payment_status == '0' ? "To'lanmadi" : "To'landi"); ?>

                                            </button>
                                        </td>
                                        <td class="text-center"><?php echo e($user->created_at); ?></td>
                                        <td class="text-center">
                                            <form action="<?php echo e(route('orderDestroy',$user->id)); ?>" method="post">
                                                <?php echo csrf_field(); ?>
                                                <div class="btn-group">
                                                    <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('orders.delete')): ?>
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="button" class="btn btn-danger btn-sm" onclick="if (confirm('Вы уверены?')) {this.form.submit()}"><i class="fa fa-trash"></i></button>
                                                    <?php endif; ?>
                                                </div>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <?php echo e($registration->withQueryString()->links()); ?>

                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
        <!-- /.content -->
<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
    <script>
        $(function (e) {
            $("#checkAll").click(function () {
                $("#checkBoxClass").prop('checked',$(this).prop('checked'))
            });
            
            $("#deleteAllRecords").click(function (e) {
                e.preventDefault();
                var allIds = [];
                $("input:checkbox[name=ids]:checked").each(function () {
                    allIds.push($(this).val());
                    console.log(allIds);
                })
                
                $.ajax({
                    url: "<?php echo e(route('candidats-delete')); ?>",
                    type: "DELETE",
                    data: {
                        _token: $("input[name=_token]").val(),
                        ids: allIds,
                    },
                    success:function(response){
                        $.each(allIds, function (key,val) {
                            $("#user_id"+val).remove();
                        })
                        alert("o'chirishni hohlaysizmi!");
                    }
                });
            })
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/orders/index.blade.php ENDPATH**/ ?>