
@extends('layouts.home.master')


@section('content')


    <main id="spareroom" class="wrap">
        <section class="hero" style="background-image: url(https://assets.spareroom.co.uk/img/spareroom/landingpages/heroes/smiling_people_hero_low_res.jpg?v=1)">
            <form class="landing-search__form" method="GET" action="/flatshare/search.pl" id="searchForm" data-store-search>
                <header> <img src="https://assets.spareroom.co.uk/img/spareroom/home/search_hero_heading.svg?v=1" class="svg landing-search__heading" alt="Find Home Together">
                    <h1 class="landing-search__sub-heading">74,501 rooms and flatmates available now across the UK</h1> </header>
                <div class="landing-search__search-function-wrapper">
                    <div class="landing-search__input-wrapper">
                        <label for="search_by_location_field" class="magnifierIcon" aria-label="Search location"> <i class="far fa-search" aria-hidden="true"></i> </label>
                        <input type="text" id="search_by_location_field" class="search landing-search__text-input" name="search" size="100" maxlength="255" value="" placeholder="Area or postcode" pattern=".*" required data-store-search-text>
                        <div class="landing-search__action-buttons">
                            <button type="reset" name="reset" class="reset" tabindex="-1" aria-label="search reset button">
                                <label for="search_by_location_field" aria-hidden="true" class="far fa-times-circle"></label>
                            </button>
                            <a class="markerIcon" id="getLocation"> <i class="far fa-crosshairs"></i> </a>
                        </div>
                    </div>
                    <div class="landing-search__options">
                        <div class="landing-search__options-checkbox">
                            <input type="radio" name="flatshare_type" CHECKED value="offered" id="offeredRadio" checked>
                            <label for="offeredRadio">Rooms</label>
                        </div>
                        <div class="landing-search__options-checkbox">
                            <input type="radio" name="flatshare_type" value="wanted" id="wantedRadio">
                            <label for="wantedRadio">Flatmates</label>
                        </div>
                        <div class="landing-search__options-checkbox">
                            <input type="radio" name="flatshare_type" value="buddyup" id="buddyupRadio">
                            <label for="buddyupRadio">Buddy ups</label>
                        </div>
                    </div>
                    <div class="landing-search__search-button">
                        <input type="hidden" name="location_type" value="area">
                        <input type="hidden" name="action" value="search">
                        <button class="button button--large landing-search__submit-button" id="search_by_location_submit_button" type="submit" name="submit">Search</button>
                    </div>
                </div>
                <div class="landing-search__advanced-search-wrapper"> <a class="landing-search__advanced-search" href="/flatshare/search.pl?searchtype=advanced">Advanced search</a> </div>
            </form>
        </section>
        <div class="home-sections">

            <head>
                <script type="text/javascript" src="//widget.trustpilot.com/bootstrap/v5/tp.widget.bootstrap.min.js" async></script>
            </head>
            <section class="trustpilot" id="cityLandingTrustPilotContainer">
                <div class="trustpilot-widget" data-locale="en-GB" data-template-id="5406e65db0d04a09e042d5fc" data-businessunit-id="48e90eea000064000503c7fe" data-style-height="28px" data-style-width="100%" data-theme="light" data-stars="4,5">
                    <a href="https://www.trustpilot.com/review/spareroom.com" target="_blank"></a>
                </div>
            </section>
            <section class="search-locations">
                <h2 class="search-locations__heading heading">Looking in London?</h2>
                <div class="search-locations__options">
                    <div class="search-locations__option"> <b>Search by: </b>
                        <div class="search-locations__link-wrap"> <a href="/london/search-by-commute-time" title="Search London by commute time" class="search-locations__link">Commute time</a> <a href="/london/search-by-travel-zone" title="Search London by travel zone" class="search-locations__link">Travel zone</a> <a href="/london/search-by-tube-line" title="Search London by tube line">Tube line</a> </div>
                    </div>
                    <div class="search-locations__option"> <b>Or try our: </b>
                        <div class="search-locations__link-wrap"> <a href="/flatshare/where_to_live_wizard.pl" title="Find the right place to live based on criteria that is important to you">Where to Live Wizard</a> </div>
                    </div>
                </div>
            </section>
            <section class="features">
                <h2 class="heading">Why use SpareRoom&quest;</h2>
                <div class="features__container">
                    <div class="features__feature"> <img src="https://assets.spareroom.co.uk/img/brand_icons/EveryThreeMins.svg?v=1" class="features__image" alt="We're the busiest">
                        <h3 class="features__title">We're the busiest</h3>
                        <p class="features__body">Every 3 minutes someone finds a flatmate on SpareRoom. With the biggest selection of ads, you'll find yours.</p>
                    </div>
                    <div class="features__feature"> <img src="https://assets.spareroom.co.uk/img/brand_icons/Keys.svg?v=1" class="features__image" alt="We're safe">
                        <h3 class="features__title">We're safe</h3>
                        <p class="features__body">We've got a team of real people checking every ad on SpareRoom, so you can be sure your safety is our top priority.</p>
                    </div>
                    <div class="features__feature"> <img src="https://assets.spareroom.co.uk/img/brand_icons/Welcome.svg?v=1" class="features__image" alt="We're all about people">
                        <h3 class="features__title">We're all about people</h3>
                        <p class="features__body">Everyone's idea of the perfect housemate is different, so search based on what's important to you.</p>
                    </div>
                </div>
            </section>
            <section class="place-ad">
                <div class="place-ad__option">
                    <h2 class="heading place-ad__heading">Need a room?</h2>
                    <p class="place-ad__text">Post a free Room Wanted ad and make sure people with rooms can find you.</p>
                    <div> <a class="button button--large" href="/flatshare/wanted_listing_step1.pl">Advertise for free</a> </div>
                </div>
                <div class="place-ad__option">
                    <h2 class="heading place-ad__heading">Got a room to let?</h2>
                    <p class="place-ad__text">Post a free ad and rent your room in days.
                        <br> <a href="/content/placeditadvert/listing-options/">Find out more</a> </p>
                    <div> <a class="button button--large" href="/flatshare/find-postcode3.pl?desc=Free+Advert&amount=0&scp=N">Post a free ad</a> </div>
                </div>
            </section>
            <section class="as-featured-by" data-id="asFeaturedBy">
                <h3 class="as-featured-by__heading heading">As featured by</h3>
                <div class="as-featured-by__logos">
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/theGuardian.svg?v=1" class="svg theGuardian" alt="The Guardian Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/buzzfeed.svg?v=1" class="svg buzzfeed" alt="Buzzfeed Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/BBC.svg?v=1" class="svg BBC" alt="BBC Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/metro.svg?v=1" class="svg metro" alt="Metro Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/channel4.svg?v=1" class="svg channel4" alt="Channel 4 Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/timeOut.svg?v=1" class="svg timeOut" alt="Time Out Logo"> </div>
                    <div class="as-featured-by__logo-container"> <img src="/img/logos/externalLogos/uk/refinery29.svg?v=1" class="svg refinery29" alt="Refinery 29 Logo"> </div>
                </div>
            </section>
            <section class="promos">
                <div class="promos__promo">
                    <a class="promos__heading promos__heading--with-logo" href="https://www.speedflatmating.co.uk/" title="The original flatmate finding event"> <img src="https://assets.spareroom.co.uk/img/logos/SpeedFlatmating_blue.svg?v=1" class="svg SpeedFlatmating_blue" alt="SpeedFlatmating_blue"> </a>
                    <p class="promos__body"> Find a room or meet potential flatmates face to face. Events held every week in London and Manchester. <a class="promos__link" href="https://www.speedflatmating.co.uk" title="The original flatmate finding event">Find out more</a> </p>
                </div>
                <div class="promos__promo">
                    <a class="promos__heading" href="https://blog.spareroom.co.uk/spareroom-crisis-a-year-on/"> <img src="https://assets.spareroom.co.uk/img/logos/crisis.png?v=2" class="promos__heading-logo-crisis"> </a>
                    <p class="promos__body">We’re proud to partner with Crisis and support their work to end homelessness. <a class="promos__link" href="https://blog.spareroom.co.uk/spareroom-crisis-a-year-on/" title="Our partnership with Crisis">Find out more</a> </p>
                </div>
                <div class="promos__promo">
                    <a class="promos__heading promos__heading--with-logo" href="/liverentfree/" title="A chance to live rent free for a month"> <img src="//assets.spareroom.co.uk/img/logos/LiveRentFree.svg?v=03" class="svg LiveRentFree" alt="LiveRentFree"> </a>
                    <p class="promos__body">Enter our free competition to win a month's rent. Held every month. <a class="promos__link" href="/liverentfree/" title="A chance to live rent free for a month">Find out more</a> </p>
                </div>
            </section>
        </div>
        <div id="androidAppBanner"></div>
    </main>


@endsection
