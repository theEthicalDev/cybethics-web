<section class="rcm">
        <div class="reccommended">
            <h2>NAŠE KATEGORIJE </h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti, molestias?.</p>
             <p class="all"><img src="images/arrowleft.png" alt=""> &nbsp;&nbsp; SVE KATEGORIJE &nbsp;&nbsp; <img src="images/arrowright.png" alt=""></p>


                 <div class="owl-carousel owl-recc slider-rec">
                     <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                         <a href="<?php echo e(route("shop",[$category->slug])); ?>">
                         <div class="item">
                             <img class="img__img" src="/storage/<?php echo e($category->image); ?>" alt="">
                             <p class="img__description"><?php echo e($category->name); ?></p>
                         </div>
                         </a>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>

            </div>

   </section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/home/categories.blade.php ENDPATH**/ ?>