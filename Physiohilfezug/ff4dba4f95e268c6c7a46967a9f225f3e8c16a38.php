<footer class="page-footer font-small mdb-color">

  
      <div class="container text-center text-md-left">

        
        <div class="row text-center text-md-left mt-3 pb-3">

            
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                <img class="logo_footer" src="<?php echo e(asset('/storage/brand/' .$setting->glavni_logo)); ?>" alt="logo">
                <p><?php echo e($setting->opis_vebsajta); ?></p>
              
            </div>
          

            <hr class="w-100 clearfix d-md-none">

            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                <h6 class="text-uppercase mb-2 font-weight-bold"><?php echo e(__('logo_footer_menu_map')); ?></h6>
                <ul class="footer_map">
                    <li><a href="<?php echo e(route('home')); ?>"><?php echo e(__('logo_footer_menu_home')); ?></a></li>
                    <li><a href="<?php echo e(route('shop')); ?>"><?php echo e(__('logo_footer_menu_about')); ?></a></li>
                    <li><a href="<?php echo e(route('contact')); ?>"><?php echo e(__('logo_footer_menu_contact')); ?></a></li>
                </ul>
            </div>
            
             <hr class="w-100 clearfix d-md-none">

     
             <div class="footer_kontakt  col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                 <h6 class="text-uppercase mb-2 font-weight-bold"><?php echo e(__('footer_services_title')); ?></h6>
              <ul class="footer_map">
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/cyriax-therapie"><?php echo e(__('footer_cyriax')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/elektrotherapie"><?php echo e(__('footer_electro')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/thermotherapie"><?php echo e(__('footer_thermo')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/kryotherapie"><?php echo e(__('footer_cryo')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/rehabilitation"><?php echo e(__('footer_rehabilitation')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/massagetherapie"><?php echo e(__('footer_massage_therapie')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/sportphysiotherapie"><?php echo e(__('footer_sportphysiotherapie')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/ultraschalltherapie"><?php echo e(__('footer_ultraschalltherapie')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/kinesio-taping"><?php echo e(__('footer_kinesio_taping')); ?></a></li>
                    <li><a href="https://physiohilfezug.ch/dienstleistungen/manuelle-therapie"><?php echo e(__('footer_manuelle_therapie')); ?></a></li>

                
                   
                </ul>
             </div>
             

            <hr class="w-100 clearfix d-md-none">

            <div class="col-md-3  mx-auto mt-3">
                <h6 class="text-uppercase mb-1 font-weight-bold"></h6>
                <ul class="contact_list mb-2">
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
                            <i class="fa fa-comment"></i> <?php echo e($setting->email1); ?>

                        </a>
                    </li>
                    <?php endif; ?>
                    <?php if(!is_null($setting->email2)): ?>
                    <li>
                        <a href="mailto:<?php echo e(str_replace('/', '', $setting->email2)); ?>">
                            <i class="fa fa-comment"></i> <?php echo e($setting->email2); ?>

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

                 <div class="contact_social text-center text-md-left">
                    <p class="mb-0" >Address: </p>
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
                </div>



            </div>


        </div>
        

    </div> 


    <!-- Footer Links -->

    <div class="copyright">
        <div class="container">
             <!-- Grid row -->
        <div class="row d-flex align-items-center">

           
            <div class="col-md-7 col-lg-8 text-center mx-auto">

                <!--Copyright-->
                <p class="text-center"><?php echo e($setting->naslov_vebsajta); ?> <?php echo e(now()->year); ?>  <?php echo e(__('copyright')); ?>

                     <?php echo e(__('copyright_p')); ?><a id="linklion" href="https://it-lion.rs/"><strong>IT LION</strong></a>
                </p>
            </div>
           

            
          
        </div>
        

        </div>
    </div>
</footer><?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/footer/footer_one.blade.php ENDPATH**/ ?>