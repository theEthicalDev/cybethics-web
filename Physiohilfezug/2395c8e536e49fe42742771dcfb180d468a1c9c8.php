<?php if((Auth::check()) && ((Auth::user()->role_id == '3') or (Auth::user()->role_id == '1'))): ?>
<div class="admin_bar">
    <div class="row">
        <div class="col-md-2 pl-5">
            <a href="/admin"><i class="fa fa-sliders mr-1"></i> Admin panel</a>
        </div>
        <?php if(isset($product_id)): ?> 
        <div class="col-md-10 text-center">
            <a href="/admin/products/<?php echo e($product_id); ?>/edit" class="edit_link"><i class="fas fa-phone mr-1"></i> Izmeni proizvod</a>
        </div>
        <?php endif; ?>
        <?php if(isset($post_id)): ?> 
        <div class="col-md-10 text-center">
            <a href="/admin/posts/<?php echo e($post_id); ?>/edit" class="edit_link"><i class="fas fa-phone mr-1"></i> Izmeni post</a>
        </div>
        <?php endif; ?>
    </div> 
</div>
<?php endif; ?>



<section class="top-ribbon">
    <div class="container">
        <div class="row">


            <div class="col-lg-6 col-md-6 col-sm-12 shop-cart">

                <!-- Tvoja korpa -->
    
        </div>

            <div class="col-lg-6 col-md-6 col-sm-12 info-contact justify-content-end">
                <div class="contact_icons">
                     <div><i class="fa fa-comment top-banner-icon comment-mail"></i> <a class="connected" href="mailto:<?php echo e($setting->email1); ?>"><?php echo e($setting->email1); ?></a></div>
                    <div><i class="fa fa-phone top-banner-icon"></i> <a class="connected" href="tel:<?php echo e($setting->telefon1); ?>"><?php echo e($setting->telefon1); ?></a></div>
                </div>
            </div>

    </div>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/header/topbar.blade.php ENDPATH**/ ?>