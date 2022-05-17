@extends('frontend.layouts.master')
@section('content')
<section class="login_box_area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Ai deja un cont?</h4>
                        <p>Intră în contul tău chiar acum</p>
                        <a class="button button-account" href="{{route('login')}}">Conectați-vă acum</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner register_form_inner">
                    <h3>Creează un cont</h3>
                    <form class="row login_form" method="POST" action="{{ route('register') }}" id="register_form" >
                        @csrf
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="text" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </div>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="text" placeholder="Numele, Prenumele" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="password" placeholder="Parolă" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        </div>


                        <div class="col-md-12 form-group">
                            <input type="password" placeholder="Confirmă parola" class="form-control" id="confirmPassword" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="f-option2">Ţine-mă logat.</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-register w-100">Register</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection


