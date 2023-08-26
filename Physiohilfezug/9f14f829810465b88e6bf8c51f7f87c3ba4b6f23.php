

<section class="sliderslide">
        <div class="owl-carousel owl-sld">
            <?php $__currentLoopData = $sliderhome; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $home): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="item">
                <img src="/storage/<?php echo e($home->image); ?>" alt="images not found">
                <div class="cover">
                    <div class="container">
                        <div class="header-content  text-center text-md-left">
                            <a href="https://physiohilfezug.ch/homepage">
                                <div class="line"></div>
                                
                                <h1><?php echo e($home->title); ?></h1>
                                <h4><?php echo e($home->text); ?></h4>
                          <!--       <button><?php echo e($home->button); ?></button> -->
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>    
        </div>
    </section><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/home/baner.blade.php ENDPATH**/ ?>