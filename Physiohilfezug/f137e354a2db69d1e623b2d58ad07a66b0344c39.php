<!DOCTYPE html>
<html lang="en">

<head>
  <?php echo $__env->make('fixed.headmaintance', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

<?php $__currentLoopData = $settings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $setting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="logo-back">
		
        <div class="logo">
            <div class="logo-img">
                <img src="<?php echo e(asset('/storage/brand/' .$setting->glavni_logo)); ?>" alt="logo">
            </div>
        </div>

        <div class="info">
        	<h1><?php echo e(__($setting->maintenance_naslov)); ?></h1>
          <h2><?php echo e($setting->maintenance_podnaslov); ?></h2>
          <p><?php echo e($setting->maintenance_tekst); ?></p>
            <?php if($setting->maintenance_timer != null): ?>
              <p id="demo"></p>
            <?php endif; ?>
            <div class="contact-info">
                <div class="contact-email"><a href="mailto:office@it-lion.rs">e: <strong><?php echo e($setting->email1); ?></strong></a></div>
                <div class="contact-phone"><a href="tel:+381638884526">t: <strong><?php echo e($setting->telefon1); ?></strong></a></div>
                <div class="contact-social">
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
       
        <div class="footer-maintance">
            <div class="create">
                IZRADA VEBSAJTOVA IT LION
            </div>
            <div class="site-link text-center">
              <a href="https://it-lion.rs/">www.it-lion.rs</a> | <a href="mailto:office@it-lion.rs">office@it-lion.rs</a> | <a href="tel:+381638884526">063/888-45-26</a>
            </div>
        </div>
        
    </section>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<script>
        // Set the date we're counting down to
        var countDownDate = new Date("<?php echo e($setting->maintenance_timer); ?>").getTime();
        
        // Update the count down every 1 second
        var x = setInterval(function() {
        
          // Get today's date and time
          var now = new Date().getTime();
            
          // Find the distance between now and the count down date
          var distance = countDownDate - now;
            
          // Time calculations for days, hours, minutes and seconds
          var days = Math.floor(distance / (1000 * 60 * 60 * 24));
          var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
          var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            
          // Output the result in an element with id="demo"
          document.getElementById("demo").innerHTML = days + "d " + hours + "h "
          + minutes + "m ";
            
          // If the count down is over, write some text 
          if (distance < 0) {
            clearInterval(x);
            document.getElementById("demo").innerHTML = "EXPIRED";
          }
        }, 1000);
        </script>
</body>

</html><?php /**PATH /home/physiohilfezug/public_html/resources/views/maintenance.blade.php ENDPATH**/ ?>