@extends('templates.common')

@section('content')
    <div class=containerFluidProductTop>
        <div class="productContainer">
            <div class="whatsThisProduct">
                <div class="imgContainer">
                    <img src="{{ $comics[$comicPosition]['thumb'] }}" alt="">
                    <div>COMIC BOOK</div>
                    <div>VIEW GALLERY</div>
                </div>
            </div>
        </div>
    </div>
    <div class="containerFluidProductMid">
        <div class="productContainer">
            <div class="productInfo">
                <h1>{{ $comics[$comicPosition]['title'] }}</h1>

                <div class="priceInfo">
                    <div class="price">
                        <div class="pricePadding">
                            <span>U.S. Price: <span class="lighter">{{$comics[$comicPosition]['price']}}</span></span>
                            <span>AVAILABLE</span>
                        </div>
                    </div>
                    <button class="availableCheck">
                        <span>Check Availability</span>
                    </button>
                </div>

                <div class="productDescription">
                    <p>{{ $comics[$comicPosition]['description'] }}</p>
                </div>

            </div>
            <div class="ad">
                <div>ADVERTISEMENT</div>
                <img src="/images/adv.jpg">
            </div>
        </div>
    </div>
@endsection