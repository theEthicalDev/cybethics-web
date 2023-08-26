<li class="categories-text"><a href="#" data-id="<?php echo e($child_category->id); ?>" class="category"><?php echo e($child_category->name); ?>

        <span class="badge badge-danger ml-2 px-2" style="background: #FF8800">

            <?php $__currentLoopData = $countCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($key==$child_category->id): ?>
                    <?php echo e($value); ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </span>

    </a></li>
<?php if($child_category->categories): ?>
    <ul style="margin-left: 40px; list-style-type: none;">
        <?php $__currentLoopData = $child_category->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $__env->make('pages.child_category', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php endif; ?>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/child_category.blade.php ENDPATH**/ ?>