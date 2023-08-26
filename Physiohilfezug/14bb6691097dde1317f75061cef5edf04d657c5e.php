<div class="container" style="margin-top: 4rem;">
    <div class="row">
        <div class="col-sm-12">
            <?php if(session()->has('errorUslov')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session()->get('errorUslov')); ?>

                </div>
            <?php endif; ?>

            <?php if(session()->has('errorUslovPayPal')): ?>
                <div class="alert alert-danger">
                    <?php echo e(session()->get('errorUslovPayPal')); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
<?php if(count(session()->get('shop-cart')) > 0): ?>
<?php
    $totalPrice = 0;
    foreach(session()->get('shop-cart') as $cart) {
        $totalPrice += $cart['price'] * $cart['quantity'];
    }
?>
<?php endif; ?>

	<div class="row">
		<div id="first_checkout" class="col-lg-6 col-md-12 col-sm-12 col-12" style="margin-bottom: 5%;">
			<!--  Kada se ukuca mejl prikazuje se ovaj deo  -->
			<form action="<?php echo e(route('doOrder')); ?>" method="POST">
			<?php echo csrf_field(); ?>
			<div class="wrapper-checkout">
				<h4>Korpa</h4>
                <div class="row">
                    <div class="col-sm-12 col-12">
                        <?php if(session()->has('successDeleteCart')): ?>
                            <div class="alert alert-success">
                                <?php echo e(session()->get('successDeleteCart')); ?>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
				<div class="parent-class mb-3">
                    <?php if(count(session()->get('shop-cart')) > 0): ?>
                        <?php $__currentLoopData = session()->get('shop-cart'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="row cart_product">
                                <div class="col-sm-3 col-3 parent-div">
                                    <img class="cart_product_img" src="/storage/<?php echo e($cart['image']); ?>" class="w-100" style="padding-left: 15px">
                                </div>
                                <div class="col-sm-9 col-9 middle_div">
                                    <p class="cart_product_name first-paragraf mb-0"><?php echo e($cart['name']); ?></p>
                                    <?php if($cart['discount_type'] != 'Bez popusta'): ?>
                                        <p class="real-price cart_product_price"><strike><?php echo e($cart['real_price']); ?> RSD</strike> <span class="blue"><?php echo e($cart['price']); ?> RSD</span></p>
                                    <?php else: ?>
                                        <span class="blue"><?php echo e($cart['price']); ?> RSD</span>
                                    <?php endif; ?>
                                    <div class="quantity">
                                        <button onclick="quantclickminus(<?php echo e($id); ?>)" id="quant_minus_<?php echo e($id); ?>" class="minus-btn" type="button" name="button">
                                            -
                                        </button>
                                        <input type="text" id="qty_<?php echo e($id); ?>" name="qty" value="<?php echo e($cart['quantity']); ?>">
                                        <button onclick="quantclickplus(<?php echo e($id); ?>)" id="quant_plus_<?php echo e($id); ?>" class="plus-btn" type="button" name="button">
                                            +
                                        </button>
                                    </div>
                                </div>
                                <a href="<?php echo e(route('delete-cart', ['id' => $id, app()->getLocale()])); ?>">
                                    <img src="<?php echo e(asset('images/cancel.png')); ?>" class="delete_cart">
                                 </a>
                                <input type="hidden" id="hiddenProduct" value="<?php echo e($id); ?>">
                        </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <h3>Korpa je prazna</h3>
                    <?php endif; ?>
				</div>

				<div class="separate-border"></div>
				<div class="row">
					<div class="col-md-6">Cena dostave: </div>
					<div class="col-md-6" id="dostava">
					<?php
						if ($totalPrice<config('vrednosti.app_dostava_min'))
					    	echo config('vrednosti.app_dostava_iznos');
					   	else
					    	echo 0;
					?> RSD <i> *besplatna preko <?php echo e(config('vrednosti.app_dostava_min')); ?>rsd</i>
					</div>
				</div>

				<div class="separate-border"></div>
				<div class="row cart_total right-column-margin">
					<div class="col-md-6 small-device-width">
						<p class="second-row-paragraf extra-small-paragraf">Ukupno</p>
					</div>
					<div class="col-md-6 margin-paragraf">
                        <?php if(count(session()->get('shop-cart')) > 0): ?>
                            <?php
                                $totalPrice = 0;
                                foreach(session()->get('shop-cart') as $cart) {
                                    $totalPrice += $cart['price'] * $cart['quantity'];
                                }
                            ?>
                            <p id="total_price_cart" class="second-row-paragraf extra-small-paragraf total_price_cart"><?php echo e($totalPrice); ?> RSD</p>
                        <?php endif; ?>
					</div>
				</div>
				<div class="separate-border"></div>
                <div class="row dodaj_kupon mt-2">
                    <div class="col-md-5"><span>Imate kupon za popust?</span></div>
                    <div class="col-md-4">
                        <input type="text" name="kupon" class="form-control" id="inputKupon" placeholder="Unesi kod">
                    </div>
                    <div class="col-md-3">
                        <button id="kuponButton" class="main_button" type="button" onClick="checkKupon()">Unesi</button>
                    </div>
                </div>

                <div class="row">
                	<p id="kuponMessage" class="alert mt-3"></p>
                </div>

                <?php if((Auth::check()) AND (Auth::user()->next_order !== 'No')): ?>
                <div class="loyality alert alert-success mt-4" role="alert">
                    Zbog ranijih kupovina, Vaš dodatni Loyality popust na ovu porudžbinu iznosi <?php echo e(Auth::user()->next_order); ?>

                  </div>
                <?php endif; ?>

                <?php if((Auth::check()) AND (Auth::user()->next_order !== 'No')): ?>
                <div class="loyality_info">
                    <p>Kupovinom preko 7500,00 RSD, ostvarujete popust na narednu kupovinu u procentu od 5%</p>
                </div>
                <?php endif; ?>

			</div>
		</div>

		<div id="second_checkout" class="col-lg-6 col-md-12 col-sm-12 col-12">
            <div id="wrapper-checkout-2" class="wrapper-checkout checkout-active">
				<h4>Podaci za dostavu<br><span class="login_message">
                    <?php if(Auth::check()): ?>
                    Dobro došli, <?php echo e(Auth::user()->name); ?>! Proverite i popunite svoje podatke ispod.
                    <?php else: ?>
                    Već imate profil kod nas? <a href="#" data-toggle="modal" data-target="#loginModal">Ulogujte se</a>.
                    <?php endif; ?></span></h4>


                
                    <div class="form-group ">
                        <input type="text" name="firstname" class="form-control name" id="inputName" placeholder="Ime " value="<?php if(Auth::check()): ?> <?php if( Auth::user()->name ): ?><?php echo e(Auth::user()->name); ?> <?php else: ?><?php echo e(old('firstname')); ?>  <?php endif; ?> <?php else: ?> <?php echo e(old('firstname')); ?> <?php endif; ?>" required>
                    </div>

                <?php if($errors->has('firstname')): ?>
                    <strong style="color: #ae1c17"><?php echo e($errors->first('firstname')); ?></strong>
                <?php endif; ?>





                <div class="form-group ">
                    <input type="text" name="lastname" class="form-control name" id="inputName" placeholder="Prezime" value="<?php if(Auth::check()): ?> <?php if( Auth::user()->last_namee  ): ?><?php echo e(Auth::user()->last_namee); ?>  <?php else: ?> <?php echo e(old('lastname')); ?> <?php endif; ?>    <?php else: ?> <?php echo e(old('lastname')); ?> <?php endif; ?>" required>
                </div>
                <?php if($errors->has('lastname')): ?>
                    <strong style="color: #ae1c17" class="pb-1"><?php echo e($errors->first('lastname')); ?></strong>
                <?php endif; ?>

                <div class="form-row toggle-display">
                    <div class="form-group col-md-6">
                        <input type="text" id="emailText" name="email" placeholder="E-mail adresa" class="form-control emailInputText" value="<?php if(Auth::check()): ?>  <?php if(Auth::user()->email): ?> <?php echo e(Auth::user()->email); ?> <?php else: ?> <?php echo e(old('email')); ?> <?php endif; ?>  <?php else: ?> <?php echo e(old('email')); ?> <?php endif; ?>" required>
                    </div>
                    <?php if($errors->has('email')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('email')); ?></strong>
                    <?php endif; ?>
                    <div class="form-group col-md-6">
                        <input type="text" name="phone" class="form-control" id="inputPhone" placeholder="Kontakt telefon" value="<?php if(Auth::check()): ?> <?php if(Auth::user()->telephone): ?> <?php echo e(Auth::user()->telephone); ?>  <?php else: ?> <?php echo e(old('phone')); ?> <?php endif; ?> <?php else: ?> <?php echo e(old('phone')); ?> <?php endif; ?>" required>
                    </div>
                    <?php if($errors->has('phone')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('phone')); ?></strong>
                    <?php endif; ?>
                </div>
                <div class="form-row toggle-display">
                    <div class="form-group col-md-6">
                        <input type="text" name="city" class="form-control" id="inputKraj" placeholder="Grad" value="<?php if(Auth::check()): ?> <?php if(Auth::user()->city): ?> <?php echo e(Auth::user()->city); ?>   <?php else: ?>  <?php echo e(old('city')); ?> <?php endif; ?> <?php else: ?> <?php echo e(old('city')); ?><?php endif; ?>" required>
                    </div>
                    <?php if($errors->has('city')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('city')); ?></strong>
                    <?php endif; ?>
                    <div class="form-group col-md-6">
                        <input type="text" name="postcode" class="form-control" id="inputPostcode" placeholder="Poštanski broj" value="<?php echo e(old('postcode')); ?>">
                    </div>
                    <?php if($errors->has('postcode')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('postcode')); ?></strong>
                    <?php endif; ?>
                </div>
                    <div class="form-group ">
                        <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Ulica / broj / sprat / stan" required value="<?php echo e(old('address')); ?>">
                    </div>
                    <?php if($errors->has('address')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('address')); ?></strong>
                    <?php endif; ?>
                    <div class="form-group ">
                        <textarea type="textarea" name="message" class="form-control" id="inputMessage" placeholder="Napomena za dostavu" data-value="<?php echo e(old('message')); ?>"></textarea>
                    </div>
                    <?php if($errors->has('message')): ?>
                        <strong style="color: #ae1c17"><?php echo e($errors->first('message')); ?></strong>
                    <?php endif; ?>
                    
            </div>

			<div id="checkout-active-2" class="wrapper-checkout mt-5">
				<h4 style="margin-bottom: 1rem;">Način plaćanja</h4>
				<div class="container specific-container">
                    <i style="font-size: 10px; letter-spacing:">Napomena: TROŠKOVE TRANSPORTA SNOSI KUPAC (Cena transporta zavisi od težine paketa i otkupne vrednosti, može da varira od 250din naviše). Kurirska služba POST EXPRESS</i>
					<div class="payment-method">
						<input type="radio" style="margin-top: 15px;" id="Pouzece" name="pay_method" checked value="Pouzece"/>
						<label for="Pouzece"> Plaćanje pouzećem (kešom prilikom dostave robe) </label>
					</div>
                    
				</div>
			</div>

			<!--  Ovaj deo se takodje prikazuje kada se izabere nacin placanja kako bi se finalizirao checkout i inicajlno je sakriven  -->
			<div class="container pb-5">
                <input type="checkbox" name="uslov" class="uslov" value="1" checked>
                <label for="uslov">Prihvatam uslove koriščenja i politiku provatnosti.</label><br>
                <input type="checkbox" name="uslov1" class="uslov1" value="1" checked>
                <label for="uslov1">Prihvatam da moji podaci mogu da budu korišćeni u svrhu marketinga.</label>
                <button type="submit" class="btn btn-primary submit_order">PORUČI</button>
			</div>
			</form>
		</div>
	</div>
</div>


<script>
    $('.none_registred_user').hide();
    $('.none_registred_user_first').click(function(e) {
        e.preventDefault();

        $('.none_registred_user').show();
        $('.none_registred_user_first').css('display', 'none');
    })

    function quantclickplus(id) {
        let quantity = $('#qty_' + id).val();

        let newVal = parseInt(quantity) + 1;
        $('#qty_' + id).attr('value', newVal);

        ajaxUpdatePrice(id);
    }

    function quantclickminus(id) {
        let quantity = $('#qty_' + id).val();

        let newVal = parseInt(quantity) - 1;

        if(newVal >= 1) {
            $('#qty_' + id).attr('value', newVal);

            ajaxUpdatePrice(id);
        }

    }

    let data = {}

    function ajaxUpdatePrice(id) {
        data.quantity = $('#qty_' + id).val();
        data.productID = id;

        $.ajax({
			url: '/ajax-update-cart',
			method: 'get',
			data: data,
			success: function(response){
                //$('.total_price_cart').html(response + ' RSD');
				//console.log(response);
                //refreshItems(cart, path);

	            if (response<<?=config('vrednosti.app_dostava_min');?>){

	            	document.getElementById('dostava').innerHTML=<?=config('vrednosti.app_dostava_iznos');?> + ' RSD' + ' *besplatna preko <?php echo e(config('vrednosti.app_dostava_min')); ?>rsd';
	                dostava=<?=config('vrednosti.app_dostava_iznos');?>;
	                totCena = parseInt(response) + parseInt(dostava);
	                //console.log("tot:" + totCena);
	                $('.total_price_cart').html(totCena + ' RSD');
	            } else {
	                document.getElementById('dostava').innerHTML=0 + ' RSD' + '*besplatna preko <?php echo e(config('vrednosti.app_dostava_min')); ?>rsd';
	                $('.total_price_cart').html(response + ' RSD');
	            }

			},
			error: function(xhr){
				console.log(xhr);
			}
		})

    }

    function checkKupon(){
		data.kupon = document.getElementById('inputKupon').value;

		if (data.kupon != ''){
			$.ajax({
				url: '/ajax-checkKupon',
				method: 'get',
				data: data,
				success: function(response){
	                // valeksa, 12.5.2021 - provera unetog kupona
	                document.getElementById('kuponMessage').innerHTML=response;
	                if (response != "Ne postoji kupon za uneti kod."){
	                	document.getElementById('inputKupon').readOnly = true;
	                 	//document.getElementById("kuponButton").readOnly = true;
	                	document.getElementById("kuponButton").style.visibility = 'hidden';
                        document.getElementById('kuponMessage').classList.add("alert-success");
	                } else {
						//console.log("bad kupon....");
		            }
				},
				error: function(xhr){
					console.log(xhr);
				}
			})
		}
	}
</script>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/pages/cart/checkout.blade.php ENDPATH**/ ?>