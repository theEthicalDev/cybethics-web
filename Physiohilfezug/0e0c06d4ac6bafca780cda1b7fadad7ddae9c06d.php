<div class="col-md-3  col-12 blog_sidebar">
	<div class="sticky-top">
		<h3><?php echo e(__('blog_sidebar_categories')); ?></h3>
		<ul class="blog_sidebar_categories">
			<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a class="" href="/blog/<?php echo e($category->getTranslatedAttribute('slug')); ?>"><?php echo e($category->getTranslatedAttribute('name')); ?></a></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
		<h3 class="mt-5"><?php echo e(__('blog_sidebar_posts')); ?></h3>
		<ul class="blog_sidebar_blogs">
			<?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<li><a class="blog-name" href=""> <?php echo e($blog->getTranslatedAttribute('title')); ?></a></li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
	</div>
</div><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/blog/sidebar.blade.php ENDPATH**/ ?>