 <!DOCTYPE html>
<html lang="en">

<head>
    @include('backend.layouts.head')
</head>
<body>
<div id="auth">

    <div class="row h-100">
        <div class="col-lg-5 col-12">
            <div id="auth-left">
                <div class="auth-logo">
                    <a href="index.html"><img src="{{asset('backend/assets/images/logo/logo.png')}}" alt="Logo"></a>
                </div>
                <h1 class="auth-title">{{ __('Register') }}</h1>
                <p class="auth-subtitle mb-5">Input your data to register to our website.</p>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="email" placeholder="Email" type="email" class="form-control form-control-xl @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <div class="form-control-icon">
                            <i class="bi bi-envelope"></i>
                        </div>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="name"  placeholder="Name" type="text" class="form-control form-control-xl @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        <div class="form-control-icon">
                            <i class="bi bi-person"></i>
                        </div>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password" type="password" placeholder="Password" class="form-control form-control-xl @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <input id="password-confirm" type="password" placeholder="Confirm password" class="form-control form-control-xl" name="password_confirmation" required autocomplete="new-password">
                        <div class="form-control-icon">
                            <i class="bi bi-shield-lock"></i>
                        </div>
                    </div>
                    <div class="form-group position-relative has-icon-left mb-4">
                        <select  class="form-control form-control-xl @error('email') is-invalid @enderror"
                                 name="city" value="{{ old('city') }}" autocomplete="city" autofocus
                                 placeholder="City">
                            <option value="" disabled selected hidden>

                                <i class="bi bi-envelope"></i>

                                Alege localitatea ta
                            </option>
                            @foreach($cities as $item)
                                <option value="{{$item->id}}">{{$item->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5">Sign Up</button>
                </form>
                <div class="text-center mt-5 text-lg fs-4">
                    <p class='text-gray-600'>Already have an account? <a href="{{route('login')}}" class="font-bold">Log
                            in</a>.</p>
                </div>
            </div>
        </div>
        <div class="col-lg-7 d-none d-lg-block">
            <div id="auth-right">

            </div>
        </div>
    </div>

</div>
</body>

</html>

