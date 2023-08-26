<div class="products_sidebar mb-5">
    <?php if($nivo === 'prvi'): ?>
    <h4><?php echo e(__('shop_sidebar_categories')); ?></h4>
    <ul class="category_list">
        <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="/shop/<?php echo e($category->getTranslatedAttribute('slug')); ?>" class="category">
                    <?php echo e($category->getTranslatedAttribute('name')); ?>

                 </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>
    <?php if(($nivo === 'drugi') OR ($nivo === 'treci') OR ($nivo === 'cetvrti')): ?>
        <a class="show_top_categories" data-toggle="collapse" href="#top_categories1" role="button" aria-expanded="false" aria-controls="top_categories1">
            <span class="text-light"><?php echo e(__('shop_sidebar_top_categories')); ?> <i class="fa fa-angle-right"></i></span>
        </a>
        <div class="collapse" id="top_categories1">
          <ul class="category_list">
            <?php $__currentLoopData = $topcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($topcategory->getTranslatedAttribute('slug')); ?>" class="category">
                        <?php echo e($topcategory->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        </div>
    <?php endif; ?>
    <?php if($nivo === 'drugi'): ?>
        <h4 class="current_category"><?php echo e($singleCat->getTranslatedAttribute('name')); ?> (<?php echo e(count($products)); ?>)</h4>
        <ul class="category_list">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($singleCat->getTranslatedAttribute('slug')); ?>/<?php echo e($category->getTranslatedAttribute('slug')); ?>" class="category">
                        <?php echo e($category->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php if($nivo === 'treci'): ?>
        <ul class="category_list mb-0">
            <li class="parent_category">
                <a href="/shop/<?php echo e($parentCategory->getTranslatedAttribute('slug')); ?>" class="category">
                    - <?php echo e($parentCategory->getTranslatedAttribute('name')); ?>

                </a>
            </li>
            <?php $__currentLoopData = $levelcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $levelcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($parentCategory->getTranslatedAttribute('slug')); ?>/<?php echo e($levelcategory->getTranslatedAttribute('slug')); ?>" class="category">
                        - <?php echo e($levelcategory->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="current_category"> - <?php echo e($singleCat->getTranslatedAttribute('name')); ?> (<?php echo e(count($products)); ?>)</li>
        </ul>
        <ul class="category_list">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($parentCategory->getTranslatedAttribute('slug')); ?>/<?php echo e($singleCat->getTranslatedAttribute('slug')); ?>/<?php echo e($category->getTranslatedAttribute('slug')); ?>" class="category">
                        -- <?php echo e($category->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
    <?php if($nivo === 'cetvrti'): ?>
        <ul class="category_list mb-0">
            <li class="parent_category">
                <a href="/shop/<?php echo e($parentcategory1->getTranslatedAttribute('slug')); ?>" class="category">
                    <?php echo e($parentcategory1->getTranslatedAttribute('name')); ?>

                </a>
            </li>
            <?php $__currentLoopData = $parentcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $parentcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($parentcategory1->getTranslatedAttribute('slug')); ?>/<?php echo e($parentcategory->slug); ?>" class="category">
                       - <?php echo e($parentcategory->name); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="middle_category">
                <a href="/shop/<?php echo e($parentcategory1->getTranslatedAttribute('slug')); ?>/<?php echo e($parentCategory->getTranslatedAttribute('slug')); ?>" class="category">
                    - <?php echo e($parentCategory->getTranslatedAttribute('name')); ?>

                </a>
            </li>
        </ul>
        <ul class="category_list mb-0">
            <?php $__currentLoopData = $levelcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $levelcategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($parentcategory1->getTranslatedAttribute('slug')); ?>/<?php echo e($parentCategory->getTranslatedAttribute('slug')); ?>/<?php echo e($levelcategory->getTranslatedAttribute('slug')); ?>" class="category">
                        -- <?php echo e($levelcategory->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="current_category">-- <?php echo e($singleCat->getTranslatedAttribute('name')); ?> (<?php echo e(count($products)); ?>)</li>
        </ul>
        <ul class="category_list subcategory_list">
            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <a href="/shop/<?php echo e($parentcategory->getTranslatedAttribute('slug')); ?>/<?php echo e($singleCat->getTranslatedAttribute('slug')); ?>/<?php echo e($category->getTranslatedAttribute('slug')); ?>" class="category">
                        <?php echo e($category->getTranslatedAttribute('name')); ?>

                     </a>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

    <h4 class="mt-4"><?php echo e(__('shop_sidebar_tags')); ?></h4>
    <ul class="category_list">
        <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php if($order_initial != ''): ?>?tag=<?php echo e($tag->getTranslatedAttribute('slug')); ?>&amp;order=<?php echo e($order_initial); ?> <?php else: ?> ?tag=<?php echo e($tag->getTranslatedAttribute('slug')); ?> <?php endif; ?>" class="tags" data-id="<?php echo e($tag->id); ?>"><?php echo e($tag->getTranslatedAttribute('name')); ?></a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <a id="order_title" class="show_top_categories" data-toggle="collapse" href="#order1" role="button" aria-expanded="false" aria-controls="order1">
        <h4><?php echo e(__('shop_sidebar_order_title')); ?> <i class="fa fa-angle-right"></i></h4>
    </a>
    <div class="collapse" id="order1">
      <ul class="category_list">
        <li class="<?php if($order_initial == 'date-asc'): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=date-asc <?php else: ?> ?order=date-asc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_date')); ?> &#x2191;</a></li>
        <li class="<?php if(($order_initial == 'date-desc') OR ($order_initial == '')): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=date-desc <?php else: ?> ?order=date-desc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_date')); ?> &#x2193;</a></li>
        <li class="<?php if($order_initial == 'name-asc'): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=name-asc <?php else: ?> ?order=name-asc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_name')); ?> &#x2191;</a></li>
        <li class="<?php if($order_initial == 'name-desc'): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=name-desc <?php else: ?> ?order=name-desc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_name')); ?> &#x2193;</a></li>
        <li class="<?php if($order_initial == 'price-asc'): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=price-asc <?php else: ?> ?order=price-asc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_price')); ?> &#x2191;</a></li>
        <li class="<?php if($order_initial == 'price-desc'): ?> current_order <?php endif; ?>"><a href="<?php if($tag_initial != ''): ?>?tag=<?php echo e($tag_initial); ?>&amp;order=price-desc <?php else: ?> ?order=price-desc <?php endif; ?>"><?php echo e(__('shop_sidebar_order_price')); ?> &#x2193;</a></li>
      </ul>
    </div>


    <h5 class="product-sidebar-title1 mb-4"><?php echo e(__('shop_sidebar_topproducts_title')); ?></h5>

    <div class="owl-carousel owl-test sidebar_top_product">
        <?php $__empty_1 = true; $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="item">
        <div class="product-image">
            <a href="<?php echo e(route('product', ['slug' => $product['slug']])); ?>"><img class="pic-1" src="/storage/<?php echo e($product['image']); ?>" alt="product-1"></a>
            <h6 class="product-name"><?php echo e($product['name']); ?></h6>
            <!-- <?php if(!is_string($product['discounted_price'])): ?>
            <span class="product-new-label">Sniženje</span>
            <?php endif; ?> -->
        </div>
        <div class="product-content">
            <p class="product-price">
                <?php if($product['discounted_price'] < $product['price']): ?>
                   <strike><?php echo e($product['price']); ?> </strike><span class="blue"><strong><?php echo e($product['discounted_price']); ?> RSD</strong></span>
                <?php else: ?>
                   <span class="blue"><?php echo e($product['price']); ?> RSD</span>
                <?php endif; ?>
            </p>
        </div>
    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <div class="col-sm-12 col-12">
        <h4><?php echo e(__('shop_sidebar_toproducts_noproducts')); ?></h4>
    </div>

    <?php endif; ?>
    </div>

    <h4 class="mt-4"><?php echo e(__('shop_sidebar_follow_title')); ?></h4>

    <?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="contact_social">
          <?php if($setting->facebook != null): ?>
          <a href="<?php echo e($setting->facebook); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/facebook-logo.png')); ?>" alt="facebook nalog" title="facebook nalog">
          </a>
          <?php endif; ?>
          <?php if($setting->instagram != null): ?>
          <a href="<?php echo e($setting->instagram); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/instagram-logo.png')); ?>" alt="instagram nalog" title="instagram nalog">
          </a>
          <?php endif; ?>
          <?php if($setting->linkedin != null): ?>
          <a href="<?php echo e($setting->linkedin); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/linkedin-logo.png')); ?>" alt="linkedin nalog" title="linkedin nalog">
          </a>
          <?php endif; ?>
          <?php if($setting->twitter != null): ?>
          <a href="<?php echo e($setting->twitter); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/twitter-logo.png')); ?>" alt="twitter nalog" title="twitter nalog">
          </a>
          <?php endif; ?>
          <?php if($setting->youtube != null): ?>
          <a href="<?php echo e($setting->youtube); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/youtube-logo.png')); ?>" alt="youtube nalog" title="youtube nalog">
          </a>
          <?php endif; ?>
          <?php if($setting->pinterest != null): ?>
          <a href="<?php echo e($setting->pinterest); ?>" target="_blank">
              <img class="social" src="<?php echo e(asset('/storage/socials/pinterest-logo.png')); ?>" alt="pinterest nalog" title="pinterest nalog">
          </a>
          <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/shop/sidebar-mobile.blade.php ENDPATH**/ ?>