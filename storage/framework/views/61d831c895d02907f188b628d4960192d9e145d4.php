

<?php $__env->startSection('content'); ?>
<section class="question paddingClass-50">
    <div class="container">
        <div class="question__mainBox">
            <h1 class="text-center text-8 mb-5" style="letter-spacing: 1px;"><?php echo app('translator')->get('global.index-lastBox-title'); ?></h1>
            <div class="toggle toggle-primary mb-0" data-plugin-toggle="">
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.green_card_title'); ?></a>
                    <div class="toggle-content" style="display: none;">
                        <p><?php echo app('translator')->get('global.faq-page-ans-1'); ?></p>
                        <p><?php echo app('translator')->get('global.faq-page-ans-1.1'); ?></p>
                        <p><?php echo app('translator')->get('global.faq-page-ans-1.2'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-2'); ?></a>
                    <div class="toggle-content">
                        <ul style="margin-bottom: 0; padding: 15px 35px; background: #eef0f4;">
                            <li><?php echo app('translator')->get('global.faq-page-ans-2'); ?></li>
                            <li><?php echo app('translator')->get('global.faq-page-ans-2.1'); ?></li>
                            <li><?php echo app('translator')->get('global.faq-page-ans-2.2'); ?></li>
                            <li><?php echo app('translator')->get('global.faq-page-ans-2.3'); ?></li>
                            <li><?php echo app('translator')->get('global.faq-page-ans-2.4'); ?></li>
                            <li><?php echo app('translator')->get('global.faq-page-ans-2.5'); ?></li>
                        </ul>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-3'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-3'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-4'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-4'); ?></p>
                    </div>
                </section>

                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-5'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-5'); ?></p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-6'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-6'); ?></p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-7'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-7'); ?></p>
                        <p><?php echo app('translator')->get('global.faq-page-ans-7.1'); ?></p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-8'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-8'); ?></p>
                    </div>
                </section>
                
                <section class="toggle">
                    <a class="toggle-title"><?php echo app('translator')->get('global.faq-page-ques-9'); ?></a>
                    <div class="toggle-content">
                        <p><?php echo app('translator')->get('global.faq-page-ans-9'); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\green-card\resources\views/pages/questions.blade.php ENDPATH**/ ?>