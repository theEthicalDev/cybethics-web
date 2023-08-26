<?php if(!is_null($setting->google_mapa)): ?>
<iframe src="<?php echo e($setting->google_mapa); ?>" width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
<?php else: ?>
<section class="baner-single-page">
    <div class="baner-all-text">
        <h2 class="baner-about-page-title"><?php echo e(__('text.banerkontakt')); ?></h2>
    </div>
</section>
<?php endif; ?>

<section class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-7">
            <?php if(Session::has('success')): ?>
               <div class="alert-success">
                 <?php echo e(Session::get('success')); ?>

               </div>
            <?php endif; ?>
            <form action="<?php echo e(route('send')); ?>" method="POST" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="row">
                    <div class="col contact-form-field">
                        <input name="name" id="name" type="text" class="form-control" placeholder="<?php echo e(__('contact_name')); ?> *" value="<?php echo e(old('name')); ?>" required>
                        <span class="text-danger"><?php echo e($errors->first('name')); ?></span>
                    </div>
                    <div class="col contact-form-field">
                        <input name="email" id="email" type="email" class="form-control" placeholder="<?php echo e(__('contact_email')); ?> *" value="<?php echo e(old('email')); ?>" required>
                        <span class="text-danger"><?php echo e($errors->first('email')); ?></span>
                    </div>

                </div>
                <div class="row">
                    <div class="col contact-form-field">
                        <input name="phone" id="phone" type="text" class="form-control" placeholder="<?php echo e(__('contact_phone')); ?>" value="<?php echo e(old('phone')); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col contact-form-field">
                        <input name="subject" id="tema" type="text" class="form-control" placeholder="<?php echo e(__('contact_subject')); ?> *" value="<?php echo e(old('subject')); ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col contact-form-field">
                        <textarea name="message" id="poruka" class="form-control" rows="5" aria-label="With textarea" placeholder="<?php echo e(__('contact_message')); ?> *"><?php echo e(old('message')); ?></textarea>
                        <span class="text-danger"><?php echo e($errors->first('message')); ?></span>
                    </div>
                </div>
                <div class="form-check mt-3">
                  <input class="form-check-input" type="checkbox" id="privacy_policy" name="privacy_policy" value="something" required>
                  <label class="form-check-label"><?php echo e(__('contact_privacy1')); ?> <a href="/politika-privatnosti"><?php echo e(__('contact_privacy2')); ?></a> <?php echo e(__('contact_privacy3')); ?> <a href="/uslovi-koriscenja"><?php echo e(__('contact_privacy4')); ?></a> <?php echo e(__('contact_privacy5')); ?>.</label>
                  <span class="text-danger"><?php echo e($errors->first('privacy_policy')); ?></span>
                </div>
                <button type="submit" class="button-contact-form"><?php echo e(__('contact_cta')); ?></button>
            </form>

        </div>
        <div class="col-md-5">
            <h3 class="contact_us_title"><?php echo e(__('contact_style1_title')); ?></h3>
            <div class="vl">
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
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/contact/contact_one.blade.php ENDPATH**/ ?>