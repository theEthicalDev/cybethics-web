<div class="service">
	<div class="service_hero">
		<img class="img__img" src="/storage/<?php echo e($services->hero_img); ?>" alt="<?php echo e($services->getTranslatedAttribute('name')); ?>" title="<?php echo e($services->getTranslatedAttribute('name')); ?>">
	</div>
<div class="container">
	<div class="row">
		<h1><?php echo e($services->getTranslatedAttribute('name')); ?></h1>
		<div class="row">
			<div class="col-md-8">
				<p><?php echo e($services->getTranslatedAttribute('description1')); ?></p>
				<p><?php echo e($services->getTranslatedAttribute('description2')); ?></p>
			</div>
			<div class="col-md-4">
				<div class="service_sidebar">
					<h3><?php echo e(__('services_sidebar_title1')); ?></h3>
					<ul class="sidebar_all_services">
						<?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $all_service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<li>
								<a href="<?php echo e(route("service",[$all_service->getTranslatedAttribute('slug')])); ?>"><?php echo e($all_service->getTranslatedAttribute('name')); ?></a>
							</li>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</ul>
					<h3><?php echo e(__('services_sidebar_title2')); ?></h3>
					<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<ul class="contact_list">
                    <?php if(!is_null($setting->telefon1)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon1)); ?>">
                            <i class="fa fa-phone"></i> <?php echo e($setting->telefon1); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->telefon2)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon2)); ?>">
                            <i class="fa fa-phone"></i> <?php echo e($setting->telefon2); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->telefon3)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon3)); ?>">
                            <i class="fa fa-phone"></i> <?php echo e($setting->telefon3); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email1)): ?>
                    <li class="mt-2">
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email1)); ?>">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email1); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email2)): ?>
                    <li>
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email2)); ?>">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email2); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email3)): ?>
                    <li>
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email3)); ?>">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email3); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->sediste)): ?>
                    <li class="mt-2">
                        <i class="fa fa-map-marker"></i> <?php echo e($setting->sediste); ?>

                    </li>
                    <?php endif; ?>
                 </ul>

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

				</div>
			</div>
		</div>
	</div>
</div>
<div class="service_gallery mt-3 mb-3">
	<div class="gal">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-4 col-12 mb-4 mb-md-0">
                    <a class="example-image-link" href="/storage/<?php echo e($services->img1); ?>" data-lightbox="example-1"><img class="example-image" src="/storage/<?php echo e($services->img1); ?>" alt="<?php echo e($services->getTranslatedAttribute('name')); ?>" title="<?php echo e($services->getTranslatedAttribute('name')); ?>" /></a>
                </div>
                <div class="col-md-4 col-12 mb-4 mb-md-0">
                    <a class="example-image-link" href="/storage/<?php echo e($services->img2); ?>" data-lightbox="example-1"><img class="example-image" src="/storage/<?php echo e($services->img2); ?>" alt="<?php echo e($services->getTranslatedAttribute('name')); ?>" title="<?php echo e($services->getTranslatedAttribute('name')); ?>" /></a>
                </div>
                <div class="col-md-4 col-12 mb-4 mb-md-0">
                    <a class="example-image-link" href="/storage/<?php echo e($services->img3); ?>" data-lightbox="example-1"><img class="example-image" src="/storage/<?php echo e($services->img3); ?>" alt="<?php echo e($services->getTranslatedAttribute('name')); ?>" title="<?php echo e($services->getTranslatedAttribute('name')); ?>" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<p><?php echo e($services->getTranslatedAttribute('description3')); ?></p>
		<p><?php echo e($services->getTranslatedAttribute('description4')); ?></p>
	</div>
</div>
<div class="service_cta">
    <div class="container">
        <div class="hero_cta">
            <a class="cta" href="<?php echo e(route('contact')); ?>"><i class="fa fa-envelope"></i> <?php echo e(__('home_hero_cta1')); ?></a>
            <a class="cta2" href="tel:<?php echo e($setting->telefon1); ?>"><i class="fa fa-phone"></i><?php echo e(__('home_hero_cta2')); ?></a>
        </div>
    </div>
</div>

<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/services/service.blade.php ENDPATH**/ ?>