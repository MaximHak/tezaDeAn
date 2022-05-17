@extends('frontend.layouts.master')
@section('content')
<!--================Order Details Area =================-->
<section class="order_details section-margin--small">
    <div class="container">
        <p class="text-center billing-alert">Mulțumesc. Comanda dvs. a fost primită.</p>
        <div class="row mb-5">
            @php $total = 0 @endphp
            @foreach($orders as $order)
            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Informații despre comandă</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Numărul comenzii</td>
                            <td>: {{$randomId = rand(1000,10000)}}</td>
                        </tr>
                        <tr>
                            <td style="width: 50px;">Data</td>
                            <td>: {{$order->created_at}}</td>
                        </tr>
                        @foreach($order->products as $item)
                            @php $total += $item->price * $item->pivot->quantity @endphp
                        @endforeach
                        <tr>
                            <td>Total</td>
                            <td>: {{$total + 10}} MDL</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Adresa de facturare</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Stradă</td>
                            <td>: {{$order->address}}</td>
                        </tr>
                        <tr>
                            <td>Oraș</td>
                            <td>: {{\App\Models\City::where('id', $order->city_id)->pluck('title')->first()}}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="col-md-6 col-xl-4 mb-4 mb-xl-0">
                <div class="confirmation-card">
                    <h3 class="billing-title">Adresa livrarii</h3>
                    <table class="order-rable">
                        <tr>
                            <td>Stradă</td>
                            <td>: {{$order->address}}</td>
                        </tr>
                        <tr>
                            <td>Oraș</td>
                            <td>: {{\App\Models\City::where('id', $order->city_id)->pluck('title')->first()}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="order_details_table">
            <h2>Detalii comandă</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Cantitate</th>
                        <th scope="col">Total</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($order->products as $item)
                    <tr>
                        <td>
                            <p>{{$item->title}}</p>
                        </td>
                        <td>
                            <h5>x {{$item->pivot->quantity}}</h5>
                        </td>
                        <td>
                            <p>{{ $item->price }} MDL</p>
                        </td>
                    </tr>
                    @php $total += $item->price * $item->pivot->quantity @endphp
                    @endforeach
                    @endforeach




                    <tr>
                        <td>
                            <h4>Subtotal</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>{{$total}} MDL</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Livrare</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <p>10 MDL</p>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4>Total</h4>
                        </td>
                        <td>
                            <h5></h5>
                        </td>
                        <td>
                            <h4>{{$total + 10}} MDL</h4>
                        </td>
                    </tr>


                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Order Details Area =================-->
@endsection
