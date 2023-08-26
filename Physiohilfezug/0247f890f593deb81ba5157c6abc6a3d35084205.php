<section class="contact-us2">
    <h1><?php echo e(__('contact_title')); ?></h1>

    <div class="container">
        <div class="row contact2">
            <div class="col-lg-6 col-md-6 col-sm-12 contact-left2">
                <?php if(!is_null($setting->google_mapa)): ?>
                    <iframe src="<?php echo e($setting->google_mapa); ?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <?php else: ?>
                    <img src="<?php echo e(asset('images/contact2.jpg')); ?>" alt="">
                <?php endif; ?>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="contact-form2">
                    <div class="container">
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
                </div>
            </div>
        </div>

        <div class="row contact-infos2">
            <div class="col-lg-4 col-md-4 col-sm-12 contact-fields-info2">
                <h5><strong><?php echo e(__('contact_other_email')); ?></strong></h5>
                <ul class="contact_list">
                    <?php if(!is_null($setting->email1)): ?>
                    <li class="mt-2">
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email1)); ?>" class="text-light">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email1); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email2)): ?>
                    <li>
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email2)); ?>" class="text-light">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email2); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email3)): ?>
                    <li>
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email3)); ?>" class="text-light">
                            <i class="fa fa-envelope"></i> <?php echo e($setting->email3); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 contact-fields-info22">
                <h5><strong><?php echo e(__('contact_other_phone')); ?></strong></h5>
                <ul class="contact_list">
                    <?php if(!is_null($setting->telefon1)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon1)); ?>" class="text-light">
                            <i class="fa fa-phone text-light"></i> <?php echo e($setting->telefon1); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->telefon2)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon2)); ?>" class="text-light">
                            <i class="fa fa-phone text-light"></i> <?php echo e($setting->telefon2); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->telefon3)): ?>
                    <li>
                        <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon3)); ?>" class="text-light">
                            <i class="fa fa-phone text-light"></i> <?php echo e($setting->telefon3); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 contact-fields-info32">
                <h5><strong><?php echo e(__('contact_other_address')); ?></strong></h5>
                <ul class="contact_list">
                    <?php if(!is_null($setting->sediste)): ?>
                    <li class="mt-2">
                        <i class="fa fa-map-marker"></i> <?php echo e($setting->sediste); ?>

                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/contact/contact_two.blade.php ENDPATH**/ ?>