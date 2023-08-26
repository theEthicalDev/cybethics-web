
























 <!--Home blog -->

<section class="home-blog">
    <div class="container">
        <h5 class="home-blog-short-title"><?php echo e(__('home_blog_title')); ?></h5>
        <h2 class="home-blog-title"><?php echo e(__('home_blog_subtitle')); ?></h2>
        <div class="row blog-info">

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-12 home-blog-field">
                <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><img class="home-blog-img" src="/storage/<?php echo e($blog->image); ?>" alt="blog-1"></a>
                <a class="blog-name" href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><h3 class="home-blog-name mt-2"><?php echo e($blog->getTranslatedAttribute('title')); ?></h3></a>
                    <p class="home-blog-description"><?php echo e(\Illuminate\Support\Str::limit($blog->getTranslatedAttribute('excerpt'), 120)); ?></p>

                    <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><button class="home-blog-button"><?php echo e(__('home_blog_cta')); ?></button></a>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


        </div>
    </div>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/home/blog.blade.php ENDPATH**/ ?>