@extends('frontend.layouts.master')
@section('content')
<!--================Cart Area =================-->
@if(session('cart'))
<section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Product</th>
                        <th scope="col">Preț</th>
                        <th scope="col">Cantitate</th>
                        <th scope="col">Total</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>


                        @foreach(session('cart') as $id => $details)

                    <tr data-id="{{ $id }}">
                        <td>
                            <div class="media">
                                <div class="d-flex">
                                    <img style="width: 100px;" src="{{ $details['image'] }}" alt="">
                                </div>
                                <div class="media-body">
                                    <p>{{ $details['title'] }}</p>
                                </div>
                            </div>
                        </td>
                        <td>
                            <h5>{{ $details['price'] }} MDL</h5>
                        </td>
                        <td>
                            <div class="product_count">
                                <input type="text" name="qty" id="sst" maxlength="12" value="{{ $details['quantity'] }}" title="Quantity:"
                                       class="input-text qty quantity update-cart">
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                            </div>
                        </td>
                        <td>
                            <h5>{{ $details['price'] * $details['quantity'] }} MDL</h5>
                        </td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm remove-from-cart"><i class="lnr lnr-trash"></i></button>
                        </td>
                    </tr>

                        @endforeach


                    <tr class="bottom_button">
                        <td>
                            <a class="button " href="#">Actualizați coșul</a>
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="cupon_text d-flex align-items-center">
                                <input type="text" placeholder="Coupon Code">
                                <a class="primary-btn" href="#">Aplica</a>
                                <a class="button" href="#">Ai un cupon?</a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>

                        </td>
                        <td>

                        </td>
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['price'] * $details['quantity'] @endphp
                        @endforeach
                        <td>
                            <h5>Subtotal</h5>
                        </td>
                        <td>
                            <h5>{{ $total }} MDL</h5>
                        </td>
                    </tr>

                    </tr>
                    <tr class="out_button_area">
                        <td class="d-none-l">

                        </td>
                        <td class="">

                        </td>
                        <td>

                        </td>
                        <td>
                            <div class="checkout_btn_inner d-flex align-items-center">
                                <a style="width: 252px;" class="gray_btn" href="{{route('home')}}">Continua cumparaturile</a>
                                <a style="width: 252px;" class="primary-btn ml-2" href="{{route('checkout')}}">Finalizează cumpărăturile</a>
                            </div>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
@endif
<!--================End Cart Area =================-->
@endsection
@section('scripts')
    <script type="text/javascript">

        $(".update-cart").change(function (e) {
            e.preventDefault();

            var ele = $(this);

            $.ajax({
                url: '{{ route('update.cart') }}',
                method: "patch",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id"),
                    quantity: ele.parents("tr").find(".quantity").val()
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        });

        $(".remove-from-cart").click(function (e) {
            e.preventDefault();

            var ele = $(this);

            if(confirm("Are you sure want to remove?")) {
                $.ajax({
                    url: '{{ route('remove.from.cart') }}',
                    method: "DELETE",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: ele.parents("tr").attr("data-id")
                    },
                    success: function (response) {
                        window.location.reload();
                    }
                });
            }
        });

    </script>
@endsection
