<!-- login form section -->
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form wire:submit.prevent="login" action="#" method="POST">
                <!-- Email input -->
                <div class="form-outline mb-4 @error('email')border border-danger rounded-3 @enderror">
                    <input type="email" wire:model="email" id="form1Example13" class="form-control form-control-lg" />
                    <label class="form-label" for="email">{{ __('Email') }}</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4 @error('email')border border-danger rounded-3 @enderror">
                    <input type="password" wire:model="password" id="form1Example23" class="form-control form-control-lg" />
                    <label class="form-label" for="password">{{ __('Mot De Passe') }}</label>
                </div>
                @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                <div class="d-flex justify-content-around align-items-center mb-4">
                    
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" wire:model="remember_me" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> {{ __('Se rappeler de moi') }} </label>
                    </div>
                    <a href="#!">mot de passe oublier?</a>
                </div>

                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-lg btn-block">{{ __('Connexion') }}</button>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                </div>

                <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                    role="button">
                    <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                </a>

                </form>
            </div>
            </div>
        </div>
    </section>
<!-- end login form section -->
