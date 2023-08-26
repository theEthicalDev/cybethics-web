 <!-- Top banner -->
 <?php if(session()->has('successAddToCart')): ?>
    <div class="notification">
        <?php echo e(session()->get('successAddToCart')); ?>

    </div>
<?php endif; ?>
<?php if(session()->has('successCart')): ?>
<div class="notification">
        <?php echo e(session()->get('successCart')); ?>

    </div>
<?php endif; ?>
<?php if(session()->has('successWish')): ?>
    <div class="notification">
        <?php echo e(session()->get('successWish')); ?>

    </div>
<?php endif; ?>
<?php if(session()->has('successLogin')): ?>
    <div class="notification">
        <?php echo e(session()->get('successLogin')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('badLogin')): ?>
    <div class="notification">
        <?php echo e(session()->get('badLogin')); ?>

    </div>
    <?php
    session()->forget('badLogin');
    ?>
<?php endif; ?>

<?php if(session()->has('errorUslov')): ?>
    <div class="notification">
        <?php echo e(session()->get('errorUslov')); ?>

    </div>
<?php endif; ?>

<?php if(session()->has('errorUslovPayPal')): ?>
    <div class="notification">
        <?php echo e(session()->get('errorUslovPayPal')); ?>

    </div>
<?php endif; ?>

 <?php if(($setting->top_bar != 0) AND ($setting->tip_headera != '4')): ?>
     <?php echo $__env->make("fixed.header.topbar", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>


        <!-- Navbar-->
    <?php if($setting->tip_headera == 1): ?>
        <?php echo $__env->make("fixed.header.header_one", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($setting->tip_headera == 2): ?>
        <?php echo $__env->make("fixed.header.header_two", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($setting->tip_headera == 3): ?>
        <?php echo $__env->make("fixed.header.header_three", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>

    <?php if($setting->tip_headera == 4): ?>
        <?php echo $__env->make("fixed.header.header_four", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>



<script>
    $("#registerBtn").on("click", function() {

        let data = {}
        let arrayError = [];
        data.email = $("#email").val();

        $.ajax({
            url: '<?php echo e(route("checkRegister")); ?>',
            method: 'get',
            async: false,
            data: data,
            success: function(response) {
        		if (response != 0){
        			arrayError.push("Uneta Email adresa već postoji!");
        		}
            },
            error: function(xhr) {
                console.log(xhr);
            }
        })

        let name = $("#name").val();
        let email = $("#email").val();
        let password = $("#password").val();
        let telephone = $("#telephone").val();
        let confpassword = $("#password_confirmation").val();

        let regexemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        let regexpass = /([\w\W\D\d]){8,}/;

        if(!regexemail.test(email) || email == ""){
            arrayError.push("Neispravno uneta E-mail adresa!");
        }
        if(!regexpass.test(password) || password == ""){
            arrayError.push("Lozinka mora sadržati najmanje 8 karaktera!");
        }
        if(password != confpassword){
            arrayError.push("Vaše lozinke nisu iste!");
        }
//        if(telephone == ""){
//            arrayError.push("Broj telefona je obavezan!");
//        }

        $(".alert").hide();
        if(arrayError.length > 0){
            $(".alert").show();
            let html = "";
            for(let i = 0; i < arrayError.length; i++) {
                html += "<li>" + arrayError[i] + "</li>";
            }
            $(".alert").html(html);
            return false;
        }else{
            $("#registerBtn").on("submit", function(e) {
                e.preventDefault();
            });
            return true;
        }
    })
</script>



<script>
    $("#loginBtn").on("click", function() {
    	let data = {}
        let arrayError = [];

        let email = $("#loginEmail").val();
        let password = $("#loginPassword").val();

        let regexemail = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?(?:\.[a-zA-Z0-9](?:[a-zA-Z0-9-]{0,61}[a-zA-Z0-9])?)*$/;
        let regexpass = /([\w\W\D\d]){8,}/;

        if(!regexemail.test(email) || email == ""){
            arrayError.push("Neispravna E-mail adresa!");
        }
        if(!regexpass.test(password) || password == ""){
            arrayError.push("Neispravna Lozinka!");
        }

		// check if emil exist in DB
		data.email = email;
		data.pass = password;

        $.ajax({
            url: '<?php echo e(route("checkLogin")); ?>',
            method: 'get',
            async: false,
            data: data,
            success: function(response) {
        		if (response == 0){
        			arrayError.push("Ne postoji korisnik sa unetim kredencijalima !");
        		}
            },
            error: function(xhr) {
                console.log(xhr);
            }
        })

        $(".alert").hide();
        if(arrayError.length > 0){
            $(".alert").show();
            let html = "";
            for(let i = 0; i < arrayError.length; i++) {
                html += "<li>" + arrayError[i] + "</li>";
            }
            $(".alert").html(html);
            return false;
        }else{
            $("#loginBtn").on("submit", function(e) {
                e.preventDefault();
            });
            return true;
        }
    })
</script>


<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/header.blade.php ENDPATH**/ ?>