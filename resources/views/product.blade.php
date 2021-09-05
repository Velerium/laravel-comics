@extends('templates.common')

@section('content')
    <div class=containerFluidProductTop>
        <div class="productContainer">
            <div class="whatsThisProduct">
                <div class="imgContainer">
                    <img src="{{ $comics[$comicPosition]['thumb'] }}" alt="">
                    <div>@php echo strtoupper($comics[$comicPosition]['type'])@endphp</div>
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
    <div class="containerFluidProductBottom">
        <div class="productContainer">
            <div class="talents">
                <h2>Talent</h2>
                <div class="artists">
                    <h4>Art by:</h4>
                    <div>
                        @foreach ($comics[$comicPosition]['artists'] as $artist)
                        <a href="">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="writers">
                    <h4>Written by:</h4>
                    <div>
                        @foreach ($comics[$comicPosition]['writers'] as $writer)
                        <a href="">{{ $writer }}</a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="series">
                    <h4>Series:</h4>
                    <span><a href="">@php echo strtoupper($comics[$comicPosition]['series']) @endphp</a></span>
                </div>
                <div class="specsPrice">
                    <h4>U.S Price:</h4>
                    <span>{{ $comics[$comicPosition]['price'] }}</span>
                </div>
                <div class="firstOnSale">
                    <h4>On Sale Date:</h4>
                    <span>
                        @php
                            $date = date_create_from_format('Y-m-j', $comics[$comicPosition]['sale_date']);
                            echo $date->format('M d Y');
                        @endphp
                    </span>
                </div>
            </div>
        </div>
    </div>
    <div class="containerFluidLinks">
        <div class="productContainer">

            <div class="link borderLeft">
                <span>DIGITAL COMICS</span>
            </div>

            <div class="link">
                <span>SHOP DC</span>
            </div>

            <div class="link">
                <span>COMIC SHOP LOCATOR</span>
            </div>

            <div class="link">
                <span>SUBSCRIPTIONS</span>
            </div>

        </div>
    </div>
@endsection