 <!-- Top products -->

 <section class="top-products">
        <div class="container">
            <h5 class="top-product-short-title"><?php echo e(__('text.pronadjiidealan')); ?></h5>
            <h2 class="top-product-title"><?php echo e(__('text.najprodavaniji')); ?></h2>
            <div class="row">
                <div class="col-sm-12 col-12">
                    <?php if(session()->has('successWish')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('successWish')); ?>

                        </div>
                    <?php endif; ?>
                    <?php if(session()->has('successAddToCart')): ?>
                        <div class="alert alert-success">
                            <?php echo e(session()->get('successAddToCart')); ?>

                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <?php $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="product-grid">
                            <div class="product-image">
                                <a href="<?php echo e(route('product', ['slug' => $product['slug'], app()->getLocale()])); ?>"><img class="pic-1" src="storage/<?php echo e($product['image']); ?>" alt="product-1"></a>
                                <h6 class="product-name"><?php echo e($product['name']); ?></h6>
                                <?php if($product['status'] == 'option1'): ?>
                                    <ul class="social">
                                        <li><a href="<?php echo e(route('getAddToCart', [app()->getLocale(), 'id' => $product['id']])); ?>" data-tip="<?php echo e(__('text.korpashop')); ?>"><i class="fa fa-shopping-cart"></i></a></li>
                                        <?php if(Auth::check()): ?>
                                        <li><a href="<?php echo e(route('wishlist', [app()->getLocale(), 'id' => $product['id']])); ?>" data-tip="<?php echo e(__('text.zelje')); ?>"><i class="fa fa-heart"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                    <?php else: ?>
                                    <ul class="social">
                                        <li>Coming soon</li>
                                    </ul>
                                    <?php endif; ?>
                                <?php if(!is_string($product['discounted_price'])): ?>
                                    <span class="product-new-label">Sniženje</span>
                                <?php endif; ?>
                                <?php if(!is_string($product['price'])): ?>
                                <span class="product-new-label"><?php echo e(__('text.snizenje')); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="product-content">
                                <p class="product-price">
                                    <?php if($product['discounted_price'] < $product['price']): ?>
                	                       <strike><?php echo e($product['price']); ?> </strike><span class="blue"><strong><?php echo e($product['discounted_price']); ?> RSD</strong></span>
                	                    <?php else: ?>
                	                       <span class="blue"><?php echo e($product['price']); ?> RSD</span>
                	                    <?php endif; ?>
                                </p>
                                <!-- <ul class="star-rating">
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                    <li class="fa fa-star"></li>
                                </ul> -->
                            </div>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/home/top-products.blade.php ENDPATH**/ ?>