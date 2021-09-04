@extends('templates.common')

@section('content')
    <div class="mainContainerFluid">
        <div class="mainContainer">
            <div class="whatsThis">Current Series</div>
            @foreach ($comics as $comic)
            <div class="comicItem">
                <a href="{{ route('product', ['id' => $loop->iteration]) }}">
                    <div class="comicItemPic">
                        <img src="{{ $comic['thumb'] }}">
                    </div>
                    <div>@php echo strtoupper($comic['series']) @endphp</div>
                </a>
            </div>
            @endforeach

            <button class="more">LOAD MORE</button>
        </div>
    </div>
    <div class="options">
        <div class="blueContainer">

            <div>
                <img src="/images/buy-comics-digital-comics.png" alt="">
                <span>DIGITAL COMICS</span>
            </div>

            <div>
                <img src="/images/buy-comics-merchandise.png" alt="">
                <span>DC MERCHANDISE</span>
            </div>
            
            <div>
                <img src="/images/buy-comics-subscriptions.png" alt="">
                <span>SUBSCRIPTION</span>
            </div>

            <div>
                <img src="/images/buy-comics-shop-locator.png" alt="">
                <span>COMIC SHOP LOCATION</span>
            </div>

            <div>
                <img src="/images/buy-dc-power-visa.svg" alt="">
                <span>DC POWER VISA</span>
            </div>

        </div>
    </div>
@endsection

