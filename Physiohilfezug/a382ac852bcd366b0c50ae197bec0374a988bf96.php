<section class="navigation-bar">
    <nav class="navbar navbar3 sticky-top navbar-expand-lg">
        <div class="container">

            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('home')); ?>">Naslovna</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item">
                        <img class="nav-logo" src="<?php echo e(asset('/storage/images/' .$setting->glavni_logo)); ?>" alt="logo">
                    </li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('shop')); ?>">Prodavnica</a></li>
                </ul>
                <?php if($setting->pretraga != 0): ?>
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
                <?php endif; ?>
            </div>
        </div>
    </nav>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/header/header_three.blade.php ENDPATH**/ ?>