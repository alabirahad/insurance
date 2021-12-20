@extends('layouts.index')
@section('content')
<div class="content-body">
    <div class="first-slider">
        <!--Slides-->
        <div class="owl-carousel first-carousel owl-theme">
            <div class="card item margin-top-40"> 
                <img src="{{ asset('assets/img/1.jpg') }}" alt="" />
            </div>
            <div class="card item margin-top-40"> 
                <img src="{{ asset('assets/img/2.jpg') }}" alt="" />
            </div>
            <div class="card item margin-top-40"> 
                <img src="{{ asset('assets/img/3.jpg') }}" alt="" />
            </div>
            <div class="card item margin-top-40"> 
                <img src="{{ asset('assets/img/4.jpg') }}" alt="" />
            </div>
            <div class="card item margin-top-40"> 
                <img src="{{ asset('assets/img/5.jpg') }}" alt="" />
            </div>
        </div>
        <!--/.Slides-->
    </div>
    <div class="quote-content contents">
        <h2 class="blue text-center bold">Get quote now</h2>
        <div class="quote-button text-center margin-top-20">
            <button class="qbtn" type="button">Travel</button>
            <button class="qbtn active" type="button">Home</button>
            <button class="qbtn" type="button">Healthcare</button>
            <button class="qbtn" type="button">Personal Accident</button>
            <button class="qbtn" type="button">Sports</button>
        </div>
        <div class="quote2-button text-center margin-top-10">
            <button type="button">Types of Insurance</button>
            <button class="active" type="button">Type of Insured Premises</button>
            <button type="button">Effective Date</button>
        </div>
        <div class="quote2-button text-center margin-top-10">
            <button type="button">Apply on Mobile App</button>
            <button class="redbtn" type="button">Get Quote</button>
        </div>
    </div>
    <div class="insurance-type contents">
        <div class="country-insurance">
            <button class="first-country country active-country">Hong Kong</button>
            <button class="second-country country">Macau</button>
        </div>

        <div class="types-of-insurance margin-top-40">
            <button class="types-ins active-types">Personal Insurance</button>
            <button class="types-ins">Commercial Insurance</button>
        </div>

        <div class="owl-carousel type-carousel owl-theme">
            <div class="card item margin-top-40"> 
                <div class="type-slider-item">
                    <div class="slider-content">
                        <div class="icon"></div>
                        <h3 class="text-center blue">Travel</h3>
                        <div class="gray">Have the holiday on your mind instead of flight delays, baggage loss and falling ill.</div>
                    </div>
                    <div class="text-center slider-action"><div class="white padding-10">View Product</div></div>
                </div>
            </div>
            <div class="card item margin-top-40"> 
                <div class="type-slider-item">
                    <div class="slider-content">
                        <div class="icon"></div>
                        <h3 class="text-center blue">Travel</h3>
                        <div class="gray">Have the holiday on your mind instead of flight delays, baggage loss and falling ill.</div>
                    </div>
                    <div class="text-center slider-action"><div class="white padding-10">View Product</div></div>
                </div>
            </div>
            <div class="card item margin-top-40"> 
                <div class="type-slider-item">
                    <div class="slider-content">
                        <div class="icon"></div>
                        <h3 class="text-center blue">Healthcare</h3>
                        <div class="gray">Ensure your well-being is protected from rising medical costs and financial setbacks.</div>
                    </div>
                    <div class="text-center slider-action"><div class="white padding-10">View Product</div></div>
                </div>
            </div>
            <div class="card item margin-top-40"> 
                <div class="type-slider-item">
                    <div class="slider-content">
                        <div class="icon"></div>
                        <h3 class="text-center blue">Motor</h3>
                        <div class="gray">Get on the road to worry-free driving.</div>
                    </div>
                    <div class="text-center slider-action"><div class="white padding-10">View Product</div></div>
                </div>
            </div>
            <div class="card item margin-top-40"> 
                <div class="type-slider-item">
                    <div class="slider-content">
                        <div class="icon"></div>
                        <h3 class="text-center blue">Personal Accident</h3>
                        <div class="gray">Protect yourself against the unexpected at all stages in life.</div>
                    </div>
                    <div class="text-center slider-action"><div class="white padding-10">View Product</div></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('custom-js')
<script>
   $('.first-carousel').owlCarousel({
            items:1,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            autoplayHoverPause:true
    });
   $('.type-carousel').owlCarousel({
            items:3,
            loop:true,
            autoplay:true,
            autoplayTimeout:1000,
            responsiveClass: true,
            margin: 20,
            autoplayHoverPause:true,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
    });

    $(document).on("click", ".qbtn", function() {
        $('.qbtn').removeClass('active');
        $(this).addClass('active');
    });

    $(document).on("click", ".country", function() {
        $('.country').removeClass('active-country');
        $(this).addClass('active-country');
    });

    $(document).on("click", ".types-ins", function() {
        $('.types-ins').removeClass('active-types');
        $(this).addClass('active-types');
    });
</script>
@endpush
