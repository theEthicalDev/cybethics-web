<?php
$post_name = $blog->seo_title;
$post_description = Str::words($blog->meta_description, 150, '');
$post_description = trim(strip_tags($post_description));
//dd($post_description);
$post_id = $blog->id;
//dd($post_name);
?>





<?php $__env->startSection('content'); ?>

    <?php echo $__env->make('pages.single-blog.content', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/single-blog.blade.php ENDPATH**/ ?>