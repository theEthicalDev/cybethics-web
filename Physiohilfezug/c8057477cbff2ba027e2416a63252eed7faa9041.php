<!-- Products -->

<section class="products">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-6 filter-btn-col extra-small-width show-blog">
                <div class="small-screen katmeni">
                    <a href="#" class="filter-button-rec">Pretraga</a>
                    <aside class="sidebar-nav-rec">
                        <?php echo $__env->make('pages.shop.sidebar-mobile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </aside>
                 </div>
            </div>
                <!-- Sidebar -->

                <div class="col-lg-3 col-md-3 col-sm-12 kategorije">
                    <?php echo $__env->make('pages.shop.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>

                <!-- Sidebar -->

                <div class="col-lg-9 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <p class="product-breadcrumb"><?php echo e(__('shop_breadcrumb_home')); ?> > <a href="<?php echo e(route('shopNew')); ?>" style="color: #FF8800FF;"> Shop</a>
                                <span class="bread">

                                     <?php if($singleCat != ''): ?>
                                        &gt; <span class="selected-product"><?php echo e($singleCat->getTranslatedAttribute('name')); ?></span>
                                    <?php endif; ?>
                                </span>
                            </p>
                            <hr class="product-line">
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="menu-search">
                                <input type="text" class="search_global">
                                <div class="search-button">
                                    <i class="fa fa-search"></i>
                                </div>
                            </div>

                            <div class="search-content">
                                <div class="search-body">

                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-4 pt-3">
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
                        </div> -->
                    </div>
                    

                    <div class="row append-products">
                        <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <div class="col-md-3 col-sm-6 col-6">
                            <div class="product-grid">
                                <div class="product-image">

                                    <a href="<?php echo e(route('product', ['slug' => $product['slug']])); ?>"><img class="pic-1" src="/storage/<?php echo e($product['image']); ?>" alt="product-1"></a>
                                    <h6 class="product-name"><?php echo e($product['name']); ?></h6>
                                    <ul class="social">
                                        <li><a href="<?php echo e(route('getAddToCart', ['id' => $product['id']])); ?>" data-tip="Korpa"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                    <?php if($product['discounted_price'] < $product['price']): ?>
                                    <span class="product-new-label"><?php echo e(__('shop_discount')); ?></span>
                                    <?php endif; ?>
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


</script><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/shop/productsNew.blade.php ENDPATH**/ ?>