<!DOCTYPE html>
<html lang="sr-RS">
<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<head>
<?php echo $__env->make('fixed.head', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>
    <body>
        <?php echo $setting->mt_kod ?? ''; ?>

        <div id="app">
            <?php echo $__env->make('fixed.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


            <main>
                <?php echo $__env->yieldContent('content'); ?>
            </main>

            <?php echo $__env->make('fixed.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </body>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</html>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/layouts/app.blade.php ENDPATH**/ ?>