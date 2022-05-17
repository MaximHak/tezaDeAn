@extends('frontend.layouts.master')
@section('content')
    <!--================Checkout Area =================-->
    <section class="checkout_area section-margin--small">
        <div class="container">
            @auth

            @else
                <div class="returning_customer">
                    <div class="check_title">
                        <h2>Client revenit?</h2>
                    </div>
                    <p>Dacă ați mai făcut cumpărături la noi, vă rugăm să introduceți detaliile în casetele de mai
                        jos.</p>
                    <form class="row contact_form" action="" method="post"
                          novalidate="novalidate">
                        @csrf
                        <div class="col-md-6 form-group p_star">
                            <input type="text" class="form-control" placeholder="Username or Email*"
                                   onfocus="this.placeholder=''" onblur="this.placeholder = 'Username or Email*'"
                                   id="name"
                                   name="name">
                            <!-- <span class="placeholder" data-placeholder="Username or Email"></span> -->
                        </div>
                        <div class="col-md-6 form-group p_star">
                            <input type="password" class="form-control" placeholder="Password*"
                                   onfocus="this.placeholder=''" onblur="this.placeholder = 'Password*'" id="password"
                                   name="password">
                            <!-- <span class="placeholder" data-placeholder="Password"></span> -->
                        </div>
                        <div class="col-md-12 form-group">
                            <button type="submit" value="submit" class="button button-login">Autentificare</button>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option" name="selector">
                                <label for="f-option">Ține-mă minte</label>
                            </div>
                        </div>
                    </form>
                </div>
            @endauth
            <div class="cupon_area">
                <div class="check_title">
                    <h2>Ai un cupon?</h2>
                </div>
                <input type="text" placeholder="Enter coupon code">
                <a class="button button-coupon" href="#">Aplicați cuponul</a>
            </div>
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-8">
                        <h3>Detalii de facturare</h3>
                        <form class="row contact_form" action="{{route('order_confirmation')}}" method="post" novalidate="novalidate">
                            @csrf
                            @foreach(session('cart') as $id => $details)
                                <input type="hidden" name="products[]" value="{{$id}}">
                                <input type="hidden" name="quantity[]" value="{{ $details['quantity']}}">
                            @endforeach
                            <div class="col-md-6 form-group p_star">
                                <input type="text" placeholder="Numele, Prenumele" class="form-control" id="first"
                                       name="customer_name">
                            </div>

                            <div class="col-md-6 form-group p_star">
                                <input type="text" placeholder="Telefon" class="form-control" id="number" name="phone">

                            </div>
                            <div class="col-md-6 form-group p_star">
                                <input type="text" placeholder="Email" class="form-control" id="email" name="customer_email">

                            </div>

                            <div class="col-md-12 form-group p_star">

                                <select name="city_id" class="country_select">
                                    <option value="">Alege orașul</option>
                                    @foreach($cities as $city)
                                        <option value="{{$city->id}}">{{$city->title}}</option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col-md-12 form-group">
                                <input type="text" class="form-control" id="zip" name="address" placeholder="Adresa">
                            </div>
                            <div class="col-md-12 form-group">
                                <div class="creat_account">
                                    <input type="checkbox" id="f-option2" name="create_account">
                                    <label for="f-option2">Creează un cont?</label>
                                </div>
                            </div>
                            <div class="col-md-12 form-group mb-0">
                                <div class="creat_account">
                                    <h3>Detalii de livrare</h3>
                                </div>
                                <textarea class="form-control" name="message" id="message" rows="1"
                                          placeholder="Note de comandă"></textarea>
                            </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="order_box">
                            <h2>Comanda dumneavoastră</h2>

                            <ul class="list">
                                <li><a href="#"><h4>Product <span>Total</span></h4></a></li>
                                @foreach(session('cart') as $id => $details)
                                    <li><a style="display: flex;" href="#"><p
                                                style="    width: 82px;">{{ $details['title'] }}</p> <span
                                                class="middle">x {{ $details['quantity'] }}</span> <span
                                                style="margin-left: auto;" class="last">{{ $details['price'] * $details['quantity'] }} MDL</span></a>
                                    </li>

                                @endforeach
                            </ul>

                            <ul class="list list_2">
                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['price'] * $details['quantity'] @endphp
                                @endforeach
                                <li><a href="#">Subtotal <span>{{$total}} MDL</span></a></li>
                                <li><a href="#">Livrare <span>10 MDL</span></a></li>

                                <li><a href="#">Total <span>{{$total + 10}} MDL</span></a></li>
                            </ul>


                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="terms">
                                <label for="f-option4">Am citit și accept</label>
                                <a href="#">termeni si conditii*</a>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="button button-paypal" href="#">Finalizați comanda</button>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->
@endsection
