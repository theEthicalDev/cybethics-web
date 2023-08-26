<!-- Products -->

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-6 filter-btn-col extra-small-width show-blog">
                <div class="small-screen katmeni">
                    <a href="#" class="filter-button-rec">Kategorije</a>
                    <aside class="sidebar-nav-rec">
                        <div class="product-sidebar">
                        <h5 class="product-sidebar-title">Kategorije</h5>
                        <ul class="product-sidebar-categories">
                            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li>
                                <a href="#" class="category" data-id="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></a>
                            </li>
                            <?php if(count($category->childrenCategories) > 0): ?>

                            <ul>
                                <?php $__currentLoopData = $category->childrenCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php echo $__env->make('pages.child_category', ['child_category' => $childCategory], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                            <?php endif; ?>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h5 class="product-sidebar-title">Sortiraj po</h5>
                        <ul class="product-sidebar-categories">
                            <li><a href="#" data-id="1" class="sort">Popularnosti</a></li>
                            <li><a href="#" data-id="2" class="sort">Ceni</a></li>
                            <li><a href="#" data-id="3" class="sort">Nazivu</a></li>
                        </ul>
                        <!-- <h5 class="product-sidebar-title">Ceni</h5>
                        <input type="text" class="js-range-slider" name="my_range" /> -->
                        </div>
                    </aside>
                 </div>
            </div>
                <!-- Sidebar -->

                <div class="col-lg-3 col-md-3 col-sm-12 kategorije">
                    <div class="product-sidebar">
                        <h5 class="product-sidebar-title">Kategorije</h5>



























                        <div class="accordion" id="accordion2">
                            <?php $__currentLoopData = $subcategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <div class="accordion-group">
                                    <div class="accordion-heading">
                                        <a href="#" class="category" data-id="<?php echo e($category->id); ?>">
                                            <?php echo e($category->name); ?>

                                            <span class="badge badge-danger ml-2 pr-2" style="background: #FF8800">&nbsp;
                                            <?php $__currentLoopData = $countCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <?php if($key==$category->id): ?>
                                                        <?php echo e($value); ?>

                                                    <?php endif; ?>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </span>
                                        </a>
                                        <a class="accordion-toggle" style="float: right; margin-right: 15px;" data-toggle="collapse" data-parent="#accordion2" href="#<?php echo e($category->id); ?>">
                                            <span class="badge badge-pill badge-primary plusminus">+</span>
                                        </a>
                                    </div>

                                    <div id="<?php echo e($category->id); ?>" class="accordion-body collapse">
                                        <div class="accordion-inner">
                                            <?php if(count($category->childrenCategories) > 0): ?>

                                                <?php $__currentLoopData = $category->childrenCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                    <?php if(!count($childCategory->categories)): ?>
                                                        <a  href="#" class="category" data-id="<?php echo e($childCategory->id); ?>">
                                                           &nbsp; <?php echo e($childCategory['name']); ?>


                                                            <span class="badge badge-danger ml-2 px-2" style="background: #FF8800">

                                                                <?php $__currentLoopData = $countCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <?php if($key==$childCategory->id): ?>
                                                                        <?php echo e($value); ?>

                                                                    <?php endif; ?>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                            </span>
                                                        </a>

                                                    <?php endif; ?>

                                                    <?php if($childCategory->categories): ?>

                                                        <?php $__currentLoopData = $childCategory->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $childCategory1): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                            <div class="accordion" id="accordion1">

                                                                <div class="accordion-group">
                                                                    <div class="accordion-heading">
                                                                        <a href="#" class="category" data-id="<?php echo e($childCategory->id); ?>">
                                                                            &nbsp;  <?php echo e($childCategory['name']); ?>


                                                                            <span class="badge badge-danger ml-2 px-2" style="background: var(--primary-color);">

                                                                                <?php $__currentLoopData = $countCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                    <?php if($key==$childCategory->id): ?>
                                                                                        <?php echo e($value); ?>

                                                                                    <?php endif; ?>
                                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                            </span>
                                                                        </a>

                                                                        <a class="accordion-toggle" style="float: right; margin-right: 15px;" data-toggle="collapse" data-parent="#accordion1" href="#<?php echo e($childCategory->id); ?>">
                                                                            <span class="badge badge-pill badge-primary plusminus">+</span>
                                                                        </a>
                                                                    </div>
                                                                    <div id="<?php echo e($childCategory->id); ?>" class="accordion-body collapse">
                                                                        <div class="accordion-inner">
                                                                            <a href="#" class="category" data-id="<?php echo e($childCategory1->id); ?>">
                                                                                &nbsp; &nbsp;   <?php echo e($childCategory1->name); ?>

                                                                                <span class="badge badge-danger ml-2 px-2" style="background:var(--primary-color);">

                                                                                <?php $__currentLoopData = $countCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                                        <?php if($key==$childCategory1->id): ?>
                                                                                            <?php echo e($value); ?>

                                                                                        <?php endif; ?>
                                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                                            </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    <?php endif; ?>


                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>


                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>



                        <h5 class="product-sidebar-title1">Tagovi</h5>
                        <ul class="product-sidebar-categories">
                            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li>
                                        <a href="#" class="tags" data-id="<?php echo e($tag->id); ?>"><?php echo e($tag->name); ?></a>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>


                        <h5 class="product-sidebar-title1 mb-4">Top proizvod</h5>

                        <div class="owl-carousel owl-test">
                            <div class="item">
                                <img src="<?php echo e(asset('/images/prd.png')); ?>" alt="shop slider">
                                <p class="shop-slider-text">Test 1 <br> <span class="slider-shop-price">970 RSD</span></p>
                            </div>
                            <div class="item">
                                <img src="<?php echo e(asset('/images/prd.png')); ?>" alt="shop slider">
                                <p class="shop-slider-text">Test 2 <br> <span class="slider-shop-price">970 RSD</span></p>
                            </div>
                        </div>

                        <h5 class="product-sidebar-title1 mb-4">Zapratite nas</h5>

                       <div class="follow-us">
                         <i class="fa fa-facebook"></i>
                         <i class="fa fa-pinterest"></i>
                         <i class="fa fa-instagram"></i>
                         <i class="fa fa-linkedin"></i>
                       </div>


























                        <!-- <button type="button" class="price_range_button"><?php echo e(__('text.pricerangedugme')); ?></button> -->
                        <!-- <button class="button-product-search">Pretraži</button> -->
                    </div>
                </div>

                <!-- Sidebar -->

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-8">
                            <p class="product-bread-cramp">Pocetna > <a href="<?php echo e(route('shop')); ?>" style="color: #FF8800FF;"> Prodavnica</a>
                                <span class="bread">

                                     <?php if($singleCat != ''): ?>
                                        &gt; <span class="selected-product"><?php echo e($singleCat['name']); ?></span>
                                    <?php endif; ?>
                                </span>
                            </p>
                            <hr class="product-line">
                        </div>
                        <div class="col-4 pt-3">
                            <div class="dropdown show"  style="width: 100%; text-align: left; background: #FF8800;">
                                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background:#FF8800; width: 100%; text-align: left; border: none;">
                                    Sortiraj po
                                </a>

                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <a class="dropdown-item sort" href="#" data-id="1">Popularnosti</a>
                                    <a class="dropdown-item sort" href="#" data-id="2">Ceni</a>
                                    <a class="dropdown-item sort" href="#" data-id="3">Nazivu</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row append-products">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-4 col-sm-6">
                            <div class="product-grid">
                                <div class="product-image">

                                    <a href="<?php echo e(route('product', ['slug' => $product['slug']])); ?>"><img class="pic-1" src="/storage/<?php echo e($product['image']); ?>" alt="product-1"></a>
                                    <h6 class="product-name"><?php echo e($product['name']); ?></h6>
                                    <ul class="social">
                                        <li><a href="<?php echo e(route('getAddToCart', ['id' => $product['id']])); ?>" data-tip="Korpa"><i class="fa fa-shopping-cart"></i></a></li>
                                        <?php if(Auth::check()): ?>
                                        <li><a href="<?php echo e(route('wishlist', ['id' => $product['id']])); ?>" data-tip="Lista želja"><i class="fa fa-heart"></i></a></li>
                                        <?php endif; ?>
                                    </ul>
                                    <?php if(!is_string($product['discounted_price'])): ?>
                                    <span class="product-new-label">Sniženje</span>
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
                                </div>

                            </div>
                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <div class="col-sm-12 col-12">
                            <h4>Nema proizvoda</h4>
                        </div>

                        <?php endif; ?>



                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<script>
           var isClicked=document.querySelectorAll('.plusminus');

            for (let i of isClicked) {
                i.addEventListener('click', function() {

                      if(this.innerHTML==="+"){
                            this.innerHTML="-";
                        }else{
                            this.innerHTML="+";
                        }

                    })
            }


</script>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/shop/products.blade.php ENDPATH**/ ?>