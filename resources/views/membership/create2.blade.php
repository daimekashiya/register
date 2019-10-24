
<!-- Main content -->
<main id="main" class="col-md-8">
    
    <!-- page-section -->
    <div class="page-section">
    
    <!-- - - - - - - - - - - - - - Settings View Products - - - - - - - - - - - - - - - - -->
        <header class="settings-view-products">
            <h5 class="widget-title">{{__('Register')}}</h5>
        </header>
    <!-- - - - - - - - - - - - - - End of Settings View Products - - - - - - - - - -- - - -->

    <!-- - - - - - - - - - - - - - Products Holder - - - - - - - - - - - - - - - - -->
    <div class="products-holder with-separators view-grid fx-cols-3" id="product-holder">


        <form class="form-style3 with-icon" style="margin:3%" method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-column-full">
                <div class="relative">
                    <input type="text" name="email" value="{{ old('email') }}" aria-describedby="emailHelp"  required autocomplete="email" autofocus  placeholder="{{__('layouts.email_address')}}">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>


            <div class="form-column-full">
                <div class="relative">
                    <input type="password" name="password" required autocomplete="current-password"  placeholder="{{__('layouts.password')}}">
                </div>
            </div>

            <div class="form-group form-check" style="display:none;">
                <input type="checkbox"  name="remember" {{ old('remember') ? 'checked' : null }}>
                <label class="form-check-label" for="exampleCheck1">Stay Logged In</label>
            </div>
            <input type="hidden" name="form[method]" value="login">


            <div class="form-column-full">
                <button type="submit" class="btn btn-primary float-right">{{__('Login')}}</button>
            </div>

        </form>
    
    </div>
    <!-- - - - - - - - - - - - - - End of Products Holder - - - - - - - - - - - - - -->

    </div>

</main>