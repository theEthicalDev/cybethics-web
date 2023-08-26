<section class="rcm">
    <div class="container">
        <div class="reccommended">
          <!--   <h2><?php echo e(__('services_title')); ?></h2>
            <p><?php echo e(__('services_subtitle')); ?></p> -->
             <!-- <p class="all"><img src="images/arrowleft.png" alt=""> &nbsp;&nbsp; SVE KATEGORIJE &nbsp;&nbsp; <img src="images/arrowright.png" alt=""></p> -->
                 <div class="owl-carousel owl-recc slider-rec">
                     <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                         <a href="<?php echo e(route("service",[$service->getTranslatedAttribute('slug')])); ?>">
                         <div class="item">
                             <img class="img__img mb-5" src="/storage/<?php echo e($service->img1); ?>" alt="">
                             <p class="img__description"><?php echo e($service->getTranslatedAttribute('subtitle')); ?></p>
                         </div>
                         <p><?php echo e($service->getTranslatedAttribute('name')); ?></p>
                         </a>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div>

            </div>
    </div>
   </section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/home/services.blade.php ENDPATH**/ ?>