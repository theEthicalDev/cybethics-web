<section class="all_posts_one mt-4">
	<div class="container">
		<div class="row">
			<div class="col-md-9 posts">
				<?php if($category1 != 'All'): ?>
					<h2><?php echo e($category1); ?> (<?php echo e($blogs_number); ?>)</h2>
				<?php endif; ?>
				<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                <div class="post mb-3">
		                <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><img class="home-blog-img" src="<?php echo e(url('storage/'.$blog->image)); ?>" alt="blog-1"></a>
		                <a class="blog-name" href="<?php echo e(route("single-blog",[$blog->slug])); ?>"> <h3 class="home-blog-name mt-2"><?php echo e($blog->getTranslatedAttribute('title')); ?></h3></a>
		                    <p class="home-blog-description"><?php echo e(\Illuminate\Support\Str::limit($blog->excerpt, 200)); ?></p>

		                    <a href="<?php echo e(route("single-blog",[$blog->slug])); ?>"><button class="home-blog-button"><?php echo e(__('blog_read_more')); ?></button></a>
	                </div>
            	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</div>
			<?php echo $__env->make('pages.blog.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
		</row>
	</div>
</section><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/blog/all_posts_one.blade.php ENDPATH**/ ?>