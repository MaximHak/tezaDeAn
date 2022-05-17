
@if(count($products) != 0)
    @foreach($products as $product)
        <div class="col-md-6 col-lg-4">
            <div class="card text-center card-product">
                <div class="card-product__img">
                    <img class="card-img" src="{{ $product->photo }}" alt="">
                    <ul class="card-product__imgOverlay">
                        <li>
                            <button><i class="ti-search"></i></button>
                        </li>
                        <li>
                            <button><i class="ti-shopping-cart"></i></button>
                        </li>
                        <li>
                            <button><i class="ti-heart"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-body">
                    <p>{{\App\Models\User::where('id',$product->vendor_id)->pluck('username')->first()}}</p>
                    <h4 style="height: 60px;" class="card-product__title"><a
                            href="{{route('product.getProductByID',$product->id)}}">{{ $product->title }}</a>
                    </h4>
                    @if($product->offer_price === NULL)
                        <p class="card-product__price">{{ $product->price }} MDL</p>
                    @else
                        <p style="text-decoration: line-through;"
                           class="card-product__price">{{ $product->price }} MDL</p>
                        <p style="color: red;"
                           class="card-product__price">{{ $product->offer_price }}
                            MDL</p>
                    @endif
                </div>
            </div>
        </div>

    @endforeach
    <div style="width: 100%;
    margin-left: 41%;" class="text-center">
        {{ $products->links() }}
    </div>
@else
    <div class="col-md-6 col-lg-4">
        Nu am gasit produse!
    </div>
@endif
