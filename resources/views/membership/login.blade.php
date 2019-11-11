<div id="content" class="with-separator-left sbl">
    
    <div class="container">
        
        <div class="row">

            <!-- Sidebar-->
            <aside id="sidebar" class="col-md-4">
                
                <!-- page-section -->
                <div class="page-section">

                    <!-- widget -->
                    <div class="widget">

                        <h5 class="widget-title">{{__('Login')}}</h5>
                        <form class="form-style1 with-icon" method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-column-full">
                                <div class="relative">
                                    <input type="text" name="email" value="{{ old('email') }}" aria-describedby="emailHelp"  required autocomplete="email" autofocus  placeholder="{{__('layouts.email_address')}}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    @if (session()->has('previous-route') && session('previous-route') == 'register')
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror
                                  @endif

                                </div>
                            </div>


                            <div class="form-column-full">
                                <div class="relative">
                                    <input type="password" name="password" required autocomplete="current-password"  placeholder="{{__('layouts.password')}}">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style="color:red">{{ $message }}</strong>
                                    </span>
                                    @enderror

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
                

                </div>

            </aside>
            
            @include('membership.create')

        </div>

    </div>

</div>