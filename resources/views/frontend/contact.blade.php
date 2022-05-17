@extends('frontend.layouts.master')
@section('content')
    <section class="section-margin--small">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="map" style="height: 420px;"></div>
                <script>
                    function initMap() {
                        var uluru = {lat: -25.363, lng: 131.044};
                        var grayStyles = [
                            {
                                featureType: "all",
                                stylers: [
                                    {saturation: -90},
                                    {lightness: 50}
                                ]
                            },
                            {elementType: 'labels.text.fill', stylers: [{color: '#A3A3A3'}]}
                        ];
                        var map = new google.maps.Map(document.getElementById('map'), {
                            center: {lat: -31.197, lng: 150.744},
                            zoom: 9,
                            styles: grayStyles,
                            scrollwheel: false
                        });
                    }

                </script>
                <script
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap"></script>

            </div>


            <div class="row">
                <div class="col-md-4 col-lg-3 mb-4 mb-md-0">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>Moldova, Chișinău</h3>
                            <p>Strada Studenților, 7/1</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-headphone"></i></span>
                        <div class="media-body">
                            <h3><a href="tel:37368485279">+373 68485279</a></h3>
                            <p>De L-V, Orele 08:00 - 17:00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3><a href="mailto:support@colorlib.com">support@vend-mark.com</a></h3>
                            <p>Trimite-ne întrebarea ta oricând!</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8 col-lg-9">
                    @if (\Session::has('success'))
                        <div class="alert alert-success">
                            <ul>
                                <li>{!! \Session::get('success') !!}</li>
                            </ul>
                        </div>
                    @endif
                    <form action="{{route('contact.create')}}" class="form-contact contact_form" method="post"
                          id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                           placeholder="Introdu numele tau">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                           placeholder="Introduceți adresa de e-mail">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text"
                                           placeholder="Introduceți subiectul">
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <textarea class="form-control different-control w-100" name="message" id="message"
                                              cols="30" rows="5" placeholder="Introduceți mesajul"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group text-center text-md-right mt-3">
                            <button type="submit" class="button button--active button-contactForm">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(function(){
                $(".alert-success").remove();
            }, 5000);
        });
    </script>
@endsection
