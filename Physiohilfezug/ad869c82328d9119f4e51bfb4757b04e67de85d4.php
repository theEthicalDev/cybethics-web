<section class="header-menu">
    <div class="logo1">
        <img src="<?php echo e(asset('/storage/images/' .$setting->glavni_logo)); ?>" alt="logo">
    </div>
    <nav class="navbar navbar1 sticky-top navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('home')); ?>">Naslovna</a></li>
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
<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/header/header_two.blade.php ENDPATH**/ ?>