<?php echo $setting->ga_kod ?? ''; ?>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!-- Tell the browser to be responsive to screen width -->
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<!-- CSRF Token -->
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<title><?php if(isset($product_name)): ?><?php echo e($product_name); ?> - <?php echo e($setting->naslov_vebsajta); ?><?php elseif(isset($service_name)): ?><?php echo e($service_name); ?> | <?php echo e($setting->naslov_vebsajta); ?><?php elseif(isset($post_name)): ?><?php echo e($post_name); ?> - Blog <?php elseif(!empty($seo->title_tag)): ?><?php echo e($seo->title_tag); ?><?php else: ?><?php echo e($setting->naslov_vebsajta); ?><?php endif; ?></title>
<meta name="description" content="<?php if(isset($product_description)): ?><?php echo e($product_description); ?><?php elseif(isset($service_description)): ?><?php echo e($service_description); ?><?php elseif(isset($post_description)): ?><?php echo e($post_description); ?><?php elseif(!empty($seo->meta_description)): ?> <?php echo e($seo->meta_description); ?> <?php else: ?> <?php echo e($setting->opis_vebsajta); ?> <?php endif; ?>"/>
<?php echo $setting->gsv_kod ?? ''; ?>

<?php echo $seo->canonical_tag ?? ''; ?>



<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="apple-mobile-web-app-title" content="Nesto">

<!-- Tagovi za Open Graph -->
<?php if(!empty($seo->open_graph_type)): ?> <meta property='og:type' content='<?php echo e($seo->open_graph_type); ?>' /><?php endif; ?>
<?php if(!empty($seo->open_graph_title)): ?> <meta property='og:type' content='<?php echo e($seo->open_graph_title); ?>' /><?php endif; ?>
<?php if(!empty($seo->open_graph_desc)): ?> <meta property='og:type' content='<?php echo e($seo->open_graph_desc); ?>' /><?php endif; ?>
<?php if(!empty($seo->open_graph_url)): ?> <meta property='og:type' content='<?php echo e($seo->open_graph_url); ?>' /><?php endif; ?>
<?php if(!empty($seo->open_graph_site_name)): ?> <meta property='og:type' content='<?php echo e($seo->open_graph_site_name); ?>' /><?php endif; ?>

<!-- Styles -->
<link rel="shortcut icon" href="<?php echo e(asset('/storage/brand/' .$setting->favicon)); ?>" type="image/x-icon">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.1.0/css/flag-icon.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<link rel="dns-prefetch" href="//fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('web/css/cookieconsent.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('web/css/style.css')); ?>">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css">
<link href="<?php echo e(asset('web/css/ion.rangeSlider.min.css')); ?>" rel="stylesheet">
<!-- Scripts -->


<script src="<?php echo e(asset('web/js/cookieconsent.js')); ?>"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.js"></script>
<script src="<?php echo e(asset('web/js/ion.rangeSlider.min.js')); ?>"></script>

<link href="<?php echo e(asset('/manifest.json')); ?>" rel="manifest" />

<?php echo $setting->fb_kod ?? ''; ?>

<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/head.blade.php ENDPATH**/ ?>