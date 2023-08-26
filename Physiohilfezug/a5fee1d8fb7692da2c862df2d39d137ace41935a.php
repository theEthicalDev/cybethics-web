<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a href="<?php echo e(route('home')); ?>" class="navbar-brand text-uppercase font-weight-bold logosize">
                <img class="logo" src="<?php echo e(asset('/storage/brand/' .$setting->glavni_logo)); ?>" alt="logo">
            </a>                                                                                        
            <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
                    class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>

            <div id="navbarSupportedContent" class="collapse navbar-collapse">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="<?php echo e(route('home')); ?>"><?php echo e(__('menu_home')); ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>"><?php echo e(__('menu_about')); ?></a></li>
                        <ul>
                            <li class="nav-item dropdown" style="list-style-type: none">
                                    <a class="nav-link dropdown-toggle text-left" href="<?php echo e(route('service')); ?>" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(__('menu_services')); ?></a>
                                <div class="dropdown-menu" aria-labelledby="dropdown09" style="z-index: 12341">
                                    <?php $__currentLoopData = $all_services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <a class="dropdown-item text-left language" href="<?php echo e(route("service",[$service->getTranslatedAttribute('slug')])); ?>" ><?php echo e($service->getTranslatedAttribute('name')); ?></a>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('contact')); ?>"><?php echo e(__('menu_contact')); ?></a>
                    </li>
                    <li class="nav-item profilesmob mb-3">
                    <?php if($setting->autentikacija != 0): ?>
                    

                    <?php if(auth()->guard()->guest()): ?>
                        <a class="profil" href="#" style="margin-left: 10px;" data-toggle="modal" data-target="#loginModal">Prijava</a>

                        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="loginModalLabel" style="color: #000;">Uloguj se</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?php echo e(route('login')); ?>" method="post">
                                            <?php echo csrf_field(); ?>
                                            <div class="alert alert-danger">
                                                <?php
                                                if(isset($_SESSION['greske'])){

                                                    foreach($_SESSION['greske'] as $errors){

                                                        echo $errors ."<br/>";
                                                    }

                                                    // cim se ispise = brisemo
                                                    unset($_SESSION['greske']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-3">
                                                    <a href="<?php echo e(route('login.facebook')); ?>" class="btn btn-primary btn-block">Loguj se preko Facebook-a</a>
                                                    <a href="<?php echo e(route('login.google')); ?>" class="btn btn-danger btn-block">Loguj se preko Google-a</a>
                                                </div>
                                            </div>
                                            <p style="text-align:center; color:black">OR</p>
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-3">
                                                    <input type="email" id="loginEmail" class="form-control" name="email" placeholder="Email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong><?php echo e($message); ?></strong>
                                                    </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-3">
                                                    <input type="password" id="loginPassword" class="form-control" name="password" placeholder="Password" required autocomplete="current-password">
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>
                                            <input type="hidden" class="form-control" name="url" value="<?php echo e(Request::url()); ?>">
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <button type="submit" id="loginBtn" class="btn btn-primary">
                                                        Uloguj se
                                                    </button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a class="profil" href="#" style="margin-left: 10px;" data-toggle="modal" data-target="#registerModal">Registracija</a>

                        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="registerModalLabel" aria-hidden="true">
                            <form action="<?php echo e(route('register')); ?>" method="post">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="registerModalLabel" style="color: #000;">Registracija</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">

                                            <?php echo csrf_field(); ?>
                                            <div class="alert alert-danger">
                                                <?php
                                                if(isset($_SESSION['greske'])){

                                                    foreach($_SESSION['greske'] as $errors){

                                                        echo $errors ."<br/>";
                                                    }

                                                    // cim se ispise = brisemo
                                                    unset($_SESSION['greske']);
                                                }
                                                ?>
                                            </div>
                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000;">Ime</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>">
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="name" class="col-md-4 col-form-label text-md-right" style="color: #000;">Prezime</label>

                                                <div class="col-md-6">
                                                    <input id="name" type="text" class="form-control" name="last_name" value="<?php echo e(old('last_name')); ?>">
                                                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="email" class="col-md-4 col-form-label text-md-right" style="color: #000;">Email</label>

                                                <div class="col-md-6">
                                                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>">
                                                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="telefon" class="col-md-4 col-form-label text-md-right" style="color: #000;">Telefon</label>

                                                <div class="col-md-6">
                                                    <input type="number" class="form-control" id="telephone" name="telephone" value="<?php echo e(old('telephone')); ?>">
                                                    <?php $__errorArgs = ['telephone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>


                                            <div class="form-group row">
                                                <label for="city" class="col-md-4 col-form-label text-md-right" style="color: #000;">Grad</label>

                                                <div class="col-md-6">
                                                    <input type="text" class="form-control" id="city" name="city" value="<?php echo e(old('city')); ?>">
                                                    <?php $__errorArgs = ['city'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #000;">Password</label>

                                                <div class="col-md-6">
                                                    <input type="password" id="password" class="form-control" name="password">
                                                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                    <span class="invalid-feedback" role="alert">
                                                            <strong><?php echo e($message); ?></strong>
                                                        </span>
                                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: #000;">Potvrdi lozinku</label>

                                                <div class="col-md-6">
                                                    <input type="password" id="password_confirmation" class="form-control" name="password_confirmation">
                                                </div>
                                            </div>

                                            <div class="form-group row mb-0">
                                                <div class="col-md-6 offset-md-4">
                                                    <button type="submit" name="registerBtn" id="registerBtn" class="btn btn-primary">
                                                        Registruj se
                                                    </button>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    <?php else: ?>
                        <a class="profil" href="<?php echo e(route('profile', ['id' => Auth::id()])); ?>">Profil</a>
                        <a class="profil" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Odjavi se
                        </a>

                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                            <?php echo csrf_field(); ?>
                        </form>
                    <?php endif; ?>
                <?php endif; ?>
                    </li>
                </ul>

                <ul>
                    <li class="nav-item dropdown mt-3" style="list-style-type: none">
                        <?php if(\Illuminate\Support\Facades\Session::has('language')): ?>
                            <?php if(\Illuminate\Support\Facades\Session::get('language')=='srp'): ?>
                                <a class="nav-link dropdown-toggle text-left" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-rs"> </span> Srpski</a>

                            <?php elseif(\Illuminate\Support\Facades\Session::get('language')=='en'): ?>
                                <a class="nav-link dropdown-toggle text-left" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-us"> </span> English</a>

                            <?php elseif(\Illuminate\Support\Facades\Session::get('language')=='de'): ?>
                                <a class="nav-link dropdown-toggle text-left" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-de"> </span> German</a>
                            <?php endif; ?>

                        <?php else: ?>
                            <a class="nav-link dropdown-toggle text-left" href="#" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flag-icon flag-icon-de"> </span> German A</a>




                        <?php endif; ?>
                        <div class="dropdown-menu" aria-labelledby="dropdown09" style="z-index: 12341">
                            <a class="dropdown-item text-left language" href="<?php echo e(route('lang',['srp'])); ?>" ><span class="flag-icon flag-icon-rs"> </span> Srpski </a>
                            <a class="dropdown-item text-left language" href="<?php echo e(route('lang',['en'])); ?>" ><span class="flag-icon flag-icon-gb"> </span> English </a>
                            <a class="dropdown-item text-left language" href="<?php echo e(route('lang',['de'])); ?>" ><span class="flag-icon flag-icon-de"> </span>  German</a>
                          



                        </div>
                    </li>
                    </ul>
                <?php if($setting->pretraga != 0): ?>
                    <div class="menu-search">
                        <input type="text" class="search_global">
                        <div class="search-button">
                            <i class="fa fa-search"></i>
                        </div>
                    </div>

                    <div class="search-content">
                        <div class="search-body">

                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>
</header>
<?php /**PATH /home/physiohilfezug/public_html/resources/views/fixed/header/header_one.blade.php ENDPATH**/ ?>