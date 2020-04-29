@extends('layouts.user.master')

@section('page-css')
    <link rel="stylesheet" href="{{asset('assets/css/post-ad1.css')}}" />
@endsection

@section('sub-nav')

    @include('layouts.user.sub-nav.post-ad')

@endsection


@section('content')

    <main id="spareroom" class="wrap">
        <div class="grid-16" id="mainheader">
            <div>
                <h1>
                    Advertise on SpareRoom for free
                </h1>
            </div>
        </div>

        <div class="">
            <div id="maincontent">

                <head>
                    <!-- TrustBox script -->
                    <script
                        type="text/javascript"
                        src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js"
                        async
                    ></script>
                    <!-- End Trustbox script -->
                </head>
                <div class="experiment-mask">
                    <section id="advertExperiment" style="display: none;">
                        <div class="advert-benefits">
                            <h1 class="advert-benefits__heading">Advertise on SpareRoom</h1>
                            <ul class="advert-benefits__options">
                                <li>
                                    <i class="fas fa-check-circle advert-benefits__check"></i>
                                    Reach <strong>2.5 million</strong> people monthly
                                </li>
                                <li>
                                    <i class="fas fa-check-circle advert-benefits__check"></i>
                                    Get results <strong>fast</strong>
                                </li>
                                <li>
                                    <i class="fas fa-check-circle advert-benefits__check"></i>
                                    <strong>Free</strong> to advertise!
                                </li>
                            </ul>
                        </div>
                        <div class="experiment-options">
                            <a
                                href=""
                                class="experiment-options__link"
                            >
                                <div class="experiment-options__wrapper">
                                    <div class="experiment-options__icon-wrapper">
                                        <i class="experiment-options__icon fas fa-bed"></i>
                                    </div>
                                    <div class="experiment-options__text-wrapper">
                                        <h3 class="experiment-options__title">Room for rent?</h3>
                                        <p class="experiment-options__sub-text">
                                            Advertise one or more rooms
                                        </p>
                                    </div>
                                    <i
                                        class="experiment-options__arrow fas fa-chevron-right"
                                    ></i>
                                </div>
                            </a>
                            <a
                                href="/flatshare/find-postcode3.pl?desc=Free+Advert&amount=0&scp=Y"
                                class="experiment-options__link"
                            >
                                <div
                                    class="experiment-options__wrapper experiment-options__wrapper--last"
                                >
                                    <div
                                        class="experiment-options__icon-wrapper experiment-options__icon-wrapper--two-lines"
                                    >
                                        <i class="experiment-options__icon fas fa-building"></i>
                                    </div>
                                    <div class="experiment-options__text-wrapper">
                                        <h3 class="experiment-options__title">
                                            Whole property to let?
                                        </h3>
                                        <p class="experiment-options__sub-text">
                                            Advertise an entire flat/house (single contract) inc 1
                                            beds
                                        </p>
                                    </div>
                                    <i
                                        class="experiment-options__arrow experiment-options__arrow--two-lines fas fa-chevron-right"
                                    ></i>
                                </div>
                            </a>
                            <a
                                href="/flatshare/wanted_listing_step1.pl"
                                class="experiment-options__link"
                            >
                                <div class="experiment-options__wrapper">
                                    <div class="experiment-options__icon-wrapper">
                                        <i class="experiment-options__icon fas fa-binoculars"></i>
                                    </div>
                                    <div class="experiment-options__text-wrapper">
                                        <h3 class="experiment-options__title">Room wanted?</h3>
                                        <p>I’m looking for a room</p>
                                    </div>
                                    <i
                                        class="experiment-options__arrow fas fa-chevron-right"
                                    ></i>
                                </div>
                            </a>
                        </div>
                        <div
                            class="trustpilot-widget options__trustpilot"
                            data-locale="en-GB"
                            data-template-id="539ad60defb9600b94d7df2c"
                            data-businessunit-id="48e90eea000064000503c7fe"
                            data-style-height="500px"
                            data-style-width="100%"
                            data-theme="light"
                            data-stars="4,5"
                        >
                            <a
                                href="https://uk.trustpilot.com/review/www.spareroom.co.uk"
                                target="_blank"
                            >Trustpilot</a
                            >
                        </div>
                    </section>
                    <section id="standardOptionsContainer">
                        <h2 class="">What do you want to advertise?</h2>
                        <section class="options__container">
                            <div class="options__wrapper">
                                <a
                                    id="optionsWrapperRoom"
                                    href="{{route('User.Post-Room-Rent')}}"
                                    class="options__item"
                                >
                                    <p class="options__image">
                                        <img
                                            src="https://assets.spareroom.co.uk/img/spareroom/v4/other_items/room_only.png"
                                            alt="Rooms to Rent"
                                        />
                                    </p>
                                    <div class="options__description">
                                        <h3 class="options__description-title">
                                            Rooms to Rent ad
                                        </h3>
                                        Advertise one or more rooms in a property
                                    </div>
                                    <p class="options__button-container">
                                        <button
                                            class="button button--wide"
                                            id="postAdRoomForRentButton"
                                            type="submit"
                                            name="submit"
                                        >
                                            Post a free ad
                                        </button>
                                    </p>
                                </a>
                                <a
                                    id="optionsWrapperWholeProperty"
                                    href="{{route('User.Post-Whole-Property')}}"
                                    class="options__item"
                                >
                                    <p class="options__image">
                                        <img
                                            src="https://assets.spareroom.co.uk/img/spareroom/v4/other_items/whole_property.png"
                                            alt="Whole Property to Rent"
                                        />
                                    </p>
                                    <div class="options__description">
                                        <h3 class="options__description-title">
                                            Whole Property to Let ad
                                        </h3>
                                        Advertise a self-contained property (with no existing
                                        flatmates) on a single contract. Includes studios and 1
                                        bed flats
                                    </div>
                                    <p class="options__button-container">
                                        <button
                                            class="button button--wide"
                                            id="postAdWholePropertyButton"
                                            type="submit"
                                            name="submit"
                                        >
                                            Post a free ad
                                        </button>
                                    </p>
                                </a>
                                <a
                                    id="optionsWrapperRoomWanted"
                                    href="{{route('User.Post-Room-Wanted')}}"
                                    class="options__item remove-border"
                                >
                                    <p class="options__image">
                                        <img
                                            src="https://assets.spareroom.co.uk/img/spareroom/v4/other_items/room_wanted.png"
                                            alt="Rooms wanted"
                                        />
                                    </p>
                                    <div class="options__description">
                                        <h3 class="options__description-title">Room Wanted ad</h3>
                                        Create a room wanted ad so people offering rooms can find
                                        out more about you and get in touch
                                    </div>
                                    <p class="options__button-container">
                                        <button
                                            class="button button--wide"
                                            id="postAdRoomWantedButton"
                                            type="submit"
                                            name="submit"
                                        >
                                            Post a free ad
                                        </button>
                                    </p>
                                </a>
                            </div>
                            <div
                                class="trustpilot-widget options__trustpilot"
                                data-locale="en-GB"
                                data-template-id="539ad60defb9600b94d7df2c"
                                data-businessunit-id="48e90eea000064000503c7fe"
                                data-style-height="500px"
                                data-style-width="100%"
                                data-theme="light"
                                data-stars="4,5"
                            >
                                <a
                                    href="https://uk.trustpilot.com/review/www.spareroom.co.uk"
                                    target="_blank"
                                >Trustpilot</a
                                >
                            </div>
                        </section>
                    </section>
                </div>



                <div>
                    <h2 style="margin: 0 0 0; color: #5e5e5e;">
                        How to edit an existing advert
                    </h2>
                    <p>
                        View your <a href="/flatshare/mylistings.pl">account page</a> to
                        see, edit, upgrade or delete your existing adverts
                    </p>

                    <h4 style="color: #5e5e5e;">Help topics</h4>
                    <a href="/content/info-landlords/scp-rooms-difference/"
                    >What's the difference between "whole property to let" and
                        "room(s) for rent"?</a
                    >
                </div>
            </div>
        </div>
    </main>


    @endsection


@section('page-script')

    <script src="{{asset('assets/js/32105c834410c6f626d0def95fe4451c.js')}}"></script>

    @endsection
