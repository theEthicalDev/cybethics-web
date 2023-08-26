 <!--Footer -->
    <?php echo $__env->make("fixed.footer.footer_one", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php if($setting->mobile_call_cta_status == 1): ?>
<div class="call <?php if($setting->mobile_call_cta_stil == 2): ?>call_style_second <?php endif; ?>">
    <a href="tel:<?php echo e(str_replace('/', '', $setting->telefon1)); ?>"><?php if($setting->mobile_call_cta_tekst !== NULL): ?> <?php echo e($setting->mobile_call_cta_tekst); ?> <?php endif; ?><i class="fa fa-phone phoneicons"></i></a>
</div>
<?php endif; ?>

<script>

$('.filter-button-rec').click(function(e){
        e.preventDefault();

        $('.sidebar-nav-rec').css("display", "block");
        $('.overlay-blur').css("display", "block");
        $('.filter-button-rec').hide();

        $('.overlay-blur').click(function(e){
            e.preventDefault();

            $('.overlay-blur').css("display", "none");
            $('.sidebar-nav-rec').css('display', 'none');
            $('.filter-button-rec').show();
        });

        $('.product-sidebar-categories li').click(function(e){
            e.preventDefault();

            $('.overlay-blur').css("display", "none");
            $('.sidebar-nav-rec').css('display', 'none');
            $('.filter-button-rec').show();
        });
    });

    $('.owl-element1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});

$('.owl-element2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        1000:{
            items:5
        }
    }
});

$('.owl-recc').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
});

$('.owl-test').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('.owl-sld').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            nav:true,
            mouseDrag:false,
            autoplay:true,
            animateOut: 'fadeOut',
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });


/*
window.onscroll = function() {myFunction()};

var header = document.getElementById("myHeader");
var sticky = header.offsetTop;

function myFunction() {
  if (window.pageYOffset > sticky) {
    header.classList.add("sticky");
  } else {
    header.classList.remove("sticky");
  }
} */

<?php if($setting->gdpr == 1): ?>

var cookieconsent = initCookieConsent();

<?php endif; ?>
// cookieconsent.run({
//   onAccept: function(cookies){        
//     if(cc.allowedCategory('analytics_cookies')){
//       cc.loadScript('https://www.google-analytics.com/analytics.js', function(){    
//         ga('create', 'UA-XXXXXXXX-Y', 'auto');  //replace UA-XXXXXXXX-Y with your tracking code
//         ga('send', 'pageview');
//       });
//     }
//   },
// });

//cookieconsent.run({
    //...
//    page_scripts: true,
    //...
//});


cookieconsent.run({

	  page_scripts: true,
	
	  // 'opt-in', 'opt-out'
	  mode: 'opt-in',

	  // language
	  current_lang : "<?php echo e(Session::get('language')); ?>",

	  // auto display on page load
	  autorun: true,

	  // cookie name
	  cookie_name: 'cc_cookie',

	  // 6 months
	  cookie_expiration : 182,

	  // cookie domain
	  cookie_domain: location.hostname, 

	  // cookie path
	  cookie_path: "/",

	  // sameSite attribute
	  cookie_same_site: "Lax",

	  // specify if you want to set a different number of days - before the cookie expires - when the user accepts only the necessary categories
	  cookie_necessary_only_expiration: null,

	  // enable if you want the value of the cookie to be rfc compliant (it's base64 encoded)
	  use_rfc_cookie: false,

	  // enable if you don't want the plugin to run when a bot/crawler is detected
	  hide_from_bots: false,

	  // delay in ms
	  delay: 0,

	  // path to theme CSS
//	  theme_css: '',

	  // enable if you want to block page navigation until user action
	  force_consent: false,

	  // enable revisions
	  revision: 0,

	  // Language auto-detection strategy
	  // Null to disable (default), 
	  // "browser" to get user's browser language or "document" to read value from <html lang="..."> of current page.
	  // If language is not defined => use specified current_lang
	  auto_language: null,

	  // automatically delete cookies when user opts-out of a specific category inside cookie settings
	  autoclear_cookies: false,

	  // enable if you want to easily manage existing script tags
	  //page_scripts: false,

	  // remove the html cookie tables
	  remove_cookie_tables: false,

	  languages: {
            'srp': {
                consent_modal: {
                    title: 'Molim Vas prihvatite kolaÄŤiÄ‡e i naĹˇu politiku privatnosti!',
                    description: 'PoĹˇtovani,  ovaj vebsajt koristi osnovne kolaÄŤicĚ�e kako bi osigurala pravilan rad i kolaÄŤicĚ�e za pracĚ�enje kako bi razumeli kako sa njim komunicirate. Ovo poslednje cĚ�e biti postavljeno tek nakon saglasnosti. <button type="button" data-cc="c-settings" class="cc-link">Izaberi</button>',
                    primary_btn: {
                        text: 'Prihvati sve',
                        role: 'accept_all'              // 'accept_selected' or 'accept_all'
                    },
                    secondary_btn: {
                        text: 'Odbij sve',
                        role: 'accept_necessary'        // 'settings' or 'accept_necessary'
                    }
                },
                settings_modal: {
                    title: 'PodeĹˇavanja kolaÄŤiÄ‡a',
                    save_settings_btn: 'SaÄŤuvaj podeĹˇavanja',
                    accept_all_btn: 'Prihvati sve',
                    reject_all_btn: 'Odbij sve',
                    close_btn_label: 'IzaÄ‘i',
                    cookie_table_headers: [
                        {col1: 'Naziv'},
                        {col2: 'Domen'},
                        {col3: 'Isticanje'},
                        {col4: 'Opis'}
                    ],
                    blocks: [
                        {
                            title: 'Upotreba kolaÄŤiÄ‡a đź“˘',
                            description: 'Koristimo kolaÄŤicĚ�e kako bismo obezbedili osnovne funkcionalnosti veb stranice i poboljĹˇali vaĹˇe iskustvo na prilikom upotrebe vebsajta. MoĹľete odabrati da se za svaku kategoriju ukljuÄŤi/odjavi kad god Ĺľelite. Za viĹˇe detalja o kolaÄŤicĚ�ima i drugim osetljivim podacima, proÄŤitajte ceo <a href="/politika-privatnosti" class="cc-link">privacy policy</a>.'
                        }, {
                            title: 'Obavezni kolaÄŤiÄ‡i',
                            description: 'Ovi kolaÄŤicĚ�i su neophodni za pravilno funkcionisanje moje veb stranice. Bez ovih kolaÄŤicĚ�a, veb lokacija ne bi radila ispravno',
                            toggle: {
                                value: 'necessary',
                                enabled: true,
                                readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
                            }
                        }, {
                            title: 'KolaÄŤicĚ�i za poboljĹˇanje performansi i analitiku',
                            description: 'Ovi kolaÄŤicĚ�i omogucĚ�avaju veb lokaciji da zapamti izbore koje ste napravili u proĹˇlosti',
                            toggle: {
                                value: 'analytics',     // your cookie category
                                enabled: false,
                                readonly: false
                            },
                            cookie_table: [             // list of all expected cookies
                                {
                                    col1: '^_ga',       // match all cookies starting with "_ga"
                                    col2: 'google.com',
                                    col3: '2 years',
                                    col4: 'description ...',
                                    is_regex: true
                                },
                                {
                                    col1: '_gid',
                                    col2: 'google.com',
                                    col3: '1 day',
                                    col4: 'description ...',
                                }
                            ]
                        }, {
                            title: 'KolaÄŤicĚ�i za oglaĹˇavanje i ciljanje publike',
                            description: 'Ovi kolaÄŤicĚ�i prikupljaju informacije o tome kako koristite veb lokaciju, koje stranice ste posetili i na koje ste veze kliknuli. Svi podaci su anonimni i ne mogu se koristiti za vaĹˇu identifikaciju',
                            toggle: {
                                value: 'targeting',
                                enabled: false,
                                readonly: false
                            }
                        }, {
                            title: 'ViĹˇe informacija',
                            description: 'Za sva pitanja u vezi sa naĹˇom politikom o kolaÄŤicĚ�ima i vaĹˇim izborima, molimo <a class="cc-link" href="/kontakt">kontaktirajte nas</a>.',
                        }
                    ]
                }
            },
	        'en': {
	            consent_modal: {
	                title: 'Please accept our cookies!',
	                description: 'Hi, this website uses essential cookies to ensure its proper operation and tracking cookies to understand how you interact with it. The latter will be set only after consent. <button type="button" data-cc="c-settings" class="cc-link">Let me choose</button>',
	                primary_btn: {
	                    text: 'Accept all',
	                    role: 'accept_all'              // 'accept_selected' or 'accept_all'
	                },
	                secondary_btn: {
	                    text: 'Reject all',
	                    role: 'accept_necessary'        // 'settings' or 'accept_necessary'
	                }
	            },
	            settings_modal: {
	                title: 'Cookie preferences',
	                save_settings_btn: 'Save settings',
	                accept_all_btn: 'Accept all',
	                reject_all_btn: 'Reject all',
	                close_btn_label: 'Close',
	                cookie_table_headers: [
	                    {col1: 'Name'},
	                    {col2: 'Domain'},
	                    {col3: 'Expiration'},
	                    {col4: 'Description'}
	                ],
	                blocks: [
	                    {
	                        title: 'Cookie usage đź“˘',
	                        description: 'I use cookies to ensure the basic functionalities of the website and to enhance your online experience. You can choose for each category to opt-in/out whenever you want. For more details relative to cookies and other sensitive data, please read the full <a href="#" class="cc-link">privacy policy</a>.'
	                    }, {
	                        title: 'Strictly necessary cookies',
	                        description: 'These cookies are essential for the proper functioning of my website. Without these cookies, the website would not work properly',
	                        toggle: {
	                            value: 'necessary',
	                            enabled: true,
	                            readonly: true          // cookie categories with readonly=true are all treated as "necessary cookies"
	                        }
	                    }, {
	                        title: 'Performance and Analytics cookies',
	                        description: 'These cookies allow the website to remember the choices you have made in the past',
	                        toggle: {
	                            value: 'analytics',     // your cookie category
	                            enabled: false,
	                            readonly: false
	                        },
	                        cookie_table: [             // list of all expected cookies
	                            {
	                                col1: '^_ga',       // match all cookies starting with "_ga"
	                                col2: 'google.com',
	                                col3: '2 years',
	                                col4: 'description ...',
	                                is_regex: true
	                            },
	                            {
	                                col1: '_gid',
	                                col2: 'google.com',
	                                col3: '1 day',
	                                col4: 'description ...',
	                            }
	                        ]
	                    }, {
	                        title: 'Advertisement and Targeting cookies',
	                        description: 'These cookies collect information about how you use the website, which pages you visited and which links you clicked on. All of the data is anonymized and cannot be used to identify you',
	                        toggle: {
	                            value: 'targeting',
	                            enabled: false,
	                            readonly: false
	                        }
	                    }, {
	                        title: 'More information',
	                        description: 'For any queries in relation to our policy on cookies and your choices, please <a class="cc-link" href="#yourcontactpage">contact us</a>.',
	                    }
	                ]
	            }
	        }
	  },

	  gui_options: {
	    consent_modal : {
	      layout : 'cloud',               // box/cloud/bar
	      position : 'bottom center',     // bottom/top + left/right/center
	      transition: 'slide'             // zoom/slide
	    },
	    settings_modal : {
	      layout : 'box',                 // box/bar
	      // position : 'left',           // left/right
	      transition: 'slide'             // zoom/slide
	    }
	  }

//	  onAccept: function(){
	  //onAccept: function(cookies){
// 	     if(cc.allowedCategory('analytics_cookies')){
// 	       cc.loadScript('https://www.google-analytics.com/analytics.js', function(){    
// 	         ga('create', 'UA-XXXXXXXX-Y', 'auto');  //replace UA-XXXXXXXX-Y with your tracking code
// 	         ga('send', 'pageview');
// 	       });
// 	     }
//	  },

// 	  onChange: function(){
// 	    // do something
// 	  },

// 	  onFirstAction: function(){
// 	    // do something
// 	  },
	  
	});

</script>

<script type="text/plain" data-cookiecategory="analytics" src="myscript.js" defer></script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>


<div class="overlay-blur"></div>
<script>
    $('.search_global').keyup(function(e) {
        e.preventDefault();

        let value = $(this).val();

        $.ajax({
            url: '/global-search',
            method: 'get',
            data: {
                value: value
            },
            success: function(response) {
                if(response.length > 0) {
                    $('.search-content').show(300);
                    showProducts(response);
                } else {
                    $('.search-content').hide(300);
                }
                //console.log(response);
            },
            error: function(xhr) {
                console.log(xhr);
            }
        })

        function showProducts(products) {
            let html = '';
            for(let p of products) {
                let oldprice;

                oldprice = p.price + ' RSD';

                html += '<div class="search-item">' +
                        '<a href="/single-page/'+ p.slug +'">' +
                            '<img src="/storage/'+ p.image +'" class="image-search">' +
                        '</a>' +
                        '<div class="search-item-text">' +
                            '<p>'+ p.title +'</p>' +
                            '<p style="font-weight: bold;">' + oldprice + '</p>' +
                        '</div>' +
                    '</div>';
            }

            $('.search-body').html(html);
        }
    })

 $('.cart-content').hide();


 $(document).ready(function(){

	console.log('kliknuto je');

    $.ajax({
            url: '/global-cart',
            method: 'get',
            data: {
            },
            success: function(response) {
                if(response.length > 0) {
                    console.log(response);
                    showProducts(response);

                }
            },
            error: function(xhr) {
                console.log(xhr);
            }
        })

        function showProducts(products) {
            let html = '';
            for(let p of products) {
                let oldprice;

                oldprice = p.price + ' RSD';

                html += '<div class="cart-items">' +
                    '<a href="/single-page/'+ p.slug +'">' +
                    '<img src="/storage/'+ p.image +'" class="image-search">' +
                    '</a>' +
                    '<div class="cart-item-text">' +
                    '<p>'+ p.name +'</p>' +
                    '<p style="font-weight: bold; color: #000;">' + oldprice + '</p>' +
                    '</div>' +
                    '</div>';

            }

            $('.cart-body').html(html);
        }

});


    $('.cart').on({
      mouseenter: function () {
            if($('#cart-value').text()=='0'){
                console.log('Vrijednost je 0');
                $('.cart-content').hide(500);
            }
           else{
             $('.cart-content').show(500);
           }
        },
      mouseleave: function () {  $('.cart-content').hide(500); }
    });
 


</script>

 <script>
    if ('serviceWorker' in navigator) {
      // Register a service worker hosted at the root of the
      // site using the default scope.
      navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
        console.log('Service worker registration succeeded:', registration);
      }, /*catch*/ function(error) {
        console.log('Service worker registration failed:', error);
      });
    } else {
      console.log('Service workers are not supported.');
    }
</script>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/footer.blade.php ENDPATH**/ ?>