<?php $__env->startSection('content'); ?>

    <?php if($layout == "0"): ?>
        <?php echo $__env->make("pages.services.index", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($layout == "1"): ?>
        <?php echo $__env->make("pages.services.service", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/services.blade.php ENDPATH**/ ?>