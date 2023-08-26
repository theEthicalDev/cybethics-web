<div class="parallax">
       <div class="container">
        <!-- <div class="parallax_content">
            <h1><?php echo e(__('content_parallax_title')); ?></h1>
            <p class="about-sec"><?php echo e(__('content_parallax_description')); ?></p>
        </div> -->
       </div>
    </div>

    <div class="container about-page">
        <div class="row">
            <div class="col-lg-2 col-md-2 col-sm-12"></div>

            <div class="col-lg-8 col-md-8 col-sm-12 about-info">
                <h2><?php echo e(__('content_parallax_subtitle')); ?></h2>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                        <h5><?php echo e(__('content_parallax_h5')); ?></h5>
                        <p>
                            <?php echo e(__('content_parallax_p')); ?>

                            <br><br>
                            <?php echo e(__('content_parallax_p_1')); ?>

                            </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-5">
                        <h5> <?php echo e(__('content_parallax_h5_quality')); ?></h5>
                        <p>
                            <?php echo e(__('content_parallax_p_quality')); ?>

                        </p>
                        <img class="parallax_image" src="images/aleksandar_new.jpeg">
                        <p>Dipl. Physiotherapeut SRK, FH. Nikitović Aleksandar - Praxisinhaber</p>
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <h5> <?php echo e(__('content_parallax_h5_focus')); ?></h5>
                        <p>
                            <?php echo e(__('content_parallax_p_focus')); ?>

                            <br><br>
                            <?php echo e(__('content_parallax_p_focus_1')); ?>


                            </p>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 mt-3">
                        <h5><?php echo e(__('content_parallax_h5_mission')); ?></h5>
                        <p>
                          <?php echo e(__('content_parallax_p_mission')); ?>  
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-12"></div>

        </div>
    </div>



  <!--   <section class="counter-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 count-simbols">
                    <div id="counter-stats" class="wow fadeInRight" data-wow-duration="1.4s">
                        <div class="container">
                            <div class="row">
                    
                                <div class="col-lg-6 col-md-6 col-sm-12 stats mb-3">
                                    <i class="fa fa-code" aria-hidden="true"></i>
                                    <div class="counting" data-count="100">0</div>
                                    <p>Glückliche Kunden</p>
                                </div>
                    
                                <div class="col-lg-6 col-md-6 col-sm-12 stats mb-3">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                    <div class="counting" data-count="50">0</div>
                                    <p>Glückliche Kunden</p>
                                </div>
                    
                                <div class="col-lg-6 col-md-6 col-sm-12 stats">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                    <div class="counting" data-count="75">0</div>
                                    <p>Glückliche Kunden</p>
                                </div>
                    
                                <div class="col-lg-6 col-md-6 col-sm-12 stats">
                                    <i class="fa fa-coffee" aria-hidden="true"></i>
                                    <div class="counting" data-count="5">0</div>
                                    <p>Glückliche Kunden</p>
                                </div>
                    
                    
                            </div>
                
                        </div>
                     
                    
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <h3>Wir konvertieren Ihr normales Foto</h3>
                    <br>
                    <p>Wir wissen nicht immer, was wir unseren Lieben schenken sollen, aber mit etwas Persönlichem können wir nichts falsch machen! Das wird auf jeden Fall Eindruck machen und alle glücklich machen.
                        <br><br>
                        Werfen Sie einen Blick auf die Angebote in unserem Art SHOP und verleihen Sie Ihrem Kinderzimmer, Wohnzimmer, Büro oder jedem anderen Raum, den Sie mit kreativen und künstlerischen Arbeiten bereichern möchten, eine persönliche Note. Bestellen Sie Ihr Fotokunstwerk, das wir aus einem Foto erstellen, das Sie uns zusenden, oder wählen Sie aus den vorgefertigten smARTworks-Bildern und Postern, die wir für Sie vorbereitet haben. Unser Künstler ist bereit, mit und für Sie zu arbeiten.</p>
                </div>
            </div>
        </div>
    </section>
 -->

    <script>
       

$('.counting').each(function() {
  var $this = $(this),
      countTo = $this.attr('data-count');
  
  $({ countNum: $this.text()}).animate({
    countNum: countTo
  },

  {

    duration: 3000,
    easing:'linear',
    step: function() {
      $this.text(Math.floor(this.countNum));
    },
    complete: function() {
      $this.text(this.countNum);
      //alert('finished');
    }

  });  
  

});
    </script><?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/about/content.blade.php ENDPATH**/ ?>