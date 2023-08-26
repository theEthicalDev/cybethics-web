<section class="single_post">
    <div class="post_background"></div>
    <div class="container">

        <div class="post_content">
            <div class="row">
                <div class="col-12">
                        <div class="blog_header">
                            <h1 class="single_post_title"><?php echo e($blog->title); ?></h1>
                            <p class="icons-blog"><i class="fa fa-calendar icons-blog"> <span><?php echo e($blog->created_at->format('d/m/Y')); ?></span></i> &nbsp;</p>
                            <img class="single_post_image" src="/storage/<?php echo e($blog->image); ?>" alt="first-blog-image">
                            <div class="single_post_excerpt">
                                <p><?php echo e($blog->excerpt); ?></p>
                            </div>
                        </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-9 col-12">
                        <div class="single_blog_body">
                            <p><?php echo $blog->body; ?></p>
                        </div>
                </div>
                <?php echo $__env->make('pages.blog.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
        </div>
    </div>
</div>
<!-- <div class="row newsletter_cta">
    <div class="container">
        <h3>PRIJAVITE SE NA NAŠ NEWSLETTER</h3>
        <p>Prijavite se na naš newsletter kako biste dobijale od nas sve najnovije vesti i objave sa našeg bloga.</p>
    </div>
</div> -->
<?php if(!is_null($blogs)): ?>
<div class="row">
    <div class="container">
        <h2 class="home-blog-title mt-5">OSTALI BLOG POSTOVI</h2>
        <div class="row blog-info">

            <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-lg-4 col-md-4 col-sm-12 home-blog-field">
                <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><img style="max-width: 100%;" class="home-blog-img" src="<?php echo e(url('storage/'.$blog->image)); ?>" alt="blog-1"></a>
                <a class="blog-name" href="<?php echo e(route("single-blog",[$blog->slug])); ?>"> <h3 class="home-blog-name mt-2"><?php echo e($blog->getTranslatedAttribute('title')); ?></h3></a>
                    <p class="home-blog-description"><?php echo \Illuminate\Support\Str::limit($blog->excerpt, 100); ?></p>

                    <!-- <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><button class="home-blog-button">Pročitaj više</button></a> -->
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
</div>
<?php endif; ?>
    </div>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/single-blog/content.blade.php ENDPATH**/ ?>