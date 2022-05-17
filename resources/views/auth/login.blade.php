@extends('frontend.layouts.master')
@section('content')
<section class="login_box_area section-margin">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="login_box_img">
                    <div class="hover">
                        <h4>Nou pe site-ul nostru?</h4>
                        <p>Nu ratați șansa de a vă crea un cont astăzi!</p>
                        <a class="button button-account" href="{{route('register')}}">Creează un cont</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="login_form_inner">
                    <h3>Conectați-vă pentru a intra</h3>
                    <form class="row login_form"  method="POST" action="{{ route('login') }}" id="contactForm" >
                        @csrf
                        @error('email')
                        <span class="invalid-feedback" role="alert" style="display: block;">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="name" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus
                            placeholder="Email">
                        </div>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <div class="col-md-12 form-group">
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" required autocomplete="current-password" placeholder="Password">
                        </div>
                        <div class="col-md-12 form-group">
                            <div class="creat_account">
                                <input type="checkbox" id="f-option2" type="checkbox" name="remember"
                                       id="remember" {{ old('remember') ? 'checked' : '' }}>
                                <label for="f-option2">Ţine-mă logat.</label>
                            </div>
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-login w-100">Autentificare</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

