
@extends('layouts.user.master')

@section('sub-nav')

@include('layouts.user.sub-nav.account')

    @endsection

    @section('content')
</div>
</header>
<main id="spareroom" class="wrap">
    <div class="grid-4-8-4" id="mainheader">
        <div>&nbsp;</div>
        <div><h1>My account - welcome md asadullah</h1></div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
        <aside>
            <form
                action="/flatshare/search.pl"
                method="GET"
                name="search-filter"
                class="search-filter_form"
            >
                <section class="panel panel-header-closed search_filter">
                    <header>
                        <h3>Search</h3>
                    </header>
                    <fieldset data-widget="search">
                        <input type="hidden" name="action" value="search" />
                        <input type="hidden" name="max_per_page" value="" />
                        <div>
                            <ul>
                                <li>
                                    <label title="Rooms for Rent in existing flatshares">
                                        <input
                                            type="radio"
                                            name="flatshare_type"
                                            checked
                                            checked
                                            value="offered"
                                        />
                                        Rooms for Rent
                                    </label>
                                </li>

                                <li>
                                    <label
                                        title="Potential flatmates and tenants seeking accommodation"
                                    >
                                        <input
                                            type="radio"
                                            name="flatshare_type"
                                            value="wanted"
                                            class="radiobuttons"
                                        />
                                        Rooms Wanted
                                    </label>
                                </li>
                                <li>
                                    <label
                                        title="Find others seeking accommodation to form a new flatshare"
                                    >
                                        <input
                                            type="radio"
                                            name="flatshare_type"
                                            value="buddyup"
                                            class="radiobuttons"
                                        />
                                        Buddy ups
                                    </label>
                                    <span class="tooltip buddyUp" tabindex="-1"
                                    >&nbsp;<i class="fas fa-info-circle"></i
                                        ><span class="tooltip_box"
                                        ><span class="tooltip_text"
                                            >Find potential buddy ups to share this property
                            with
                            <a
                                href="/content/info-faq/buddyups/"
                                title="Find out more about BuddyUps"
                            >Find out more &raquo;</a
                            ></span
                                            ><span class="tooltip_arrow">&nbsp;</span></span
                                        ><span class="tooltip_background" tabindex="-1"></span
                                        ></span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <label for="search_field">
                                <strong>Where?</strong>
                            </label>
                            <input
                                type="text"
                                name="search"
                                id="search_by_location_field"
                                value=""
                                class="textbox"
                                id="search_field"
                                pattern=".*"
                                required=""
                                data-store-search-text
                                autocomplete="off"
                            />
                        </div>
                        <div class="grid-4">
                            <div>
                                <button
                                    class="button button--secondary"
                                    type="submit"
                                    name="submit"
                                >
                                    Search
                                </button>
                            </div>
                            <div class="center">
                                <a href="/flatshare/search.pl?searchtype=advanced"
                                >Advanced search</a
                                >
                            </div>
                        </div>
                    </fieldset>
                </section>
            </form>
            <article
                class="panel essential_guide"
                itemscope
                itemtype="http://schema.org/Book"
            >
                <a
                    title="Buy Essential Guide"
                    href="http://www.amazon.co.uk/dp/184528366X"
                >
                    <h3 itemprop="name">
                        Our book - The Essential Guide to Flatsharing
                    </h3>
                    <p itemprop="author">by Rupert Hunt</p>
                    <img
                        class="essential_book"
                        src="https://assets.spareroom.co.uk/img/spareroom/v3/essentialguide/essentialguide.jpg"
                        alt="Our book - The Essential Guide to Flatsharing"
                    />
                    <img
                        src="https://assets.spareroom.co.uk/img/spareroom/v3/essentialguide/buy_guide.jpg"
                        alt="Buy from Amazon.co.uk"
                    />
                </a>
            </article>
        </aside>
        <div id="maincontent">
            <div data-JSpopUp="container">
                <div class="account-status panel panel-standard">
                    <header>
                        <div>
                            <h3>Your account is a basic account</h3>
                        </div>
                    </header>
                    <div class="upgrade_to_bold">
                        <p><strong>Benefits of upgrading:</strong></p>
                        <div class="grid-4">
                            <div>
                                <h3 data-JSpopUp="target">A Bold Ad</h3>
                                <ul>
                                    <li>Double your enquiries</li>
                                    <li>Free for ALL to contact you immediately.</li>
                                    <li>Boost your ad up the search results</li>
                                </ul>
                            </div>
                            <div>
                                <h3>
                                    Early Bird Access
                                    <img
                                        src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1"
                                        class="svg early_bird_icon"
                                        alt="Early bird"
                                    />
                                </h3>

                                <ul>
                                    <li>Don't wait 7 days - contact ALL ads immediately.</li>
                                </ul>
                            </div>
                        </div>
                        <a
                            class="button"
                            href="/flatshare/get_early_bird.pl?M_context=71"
                        >Upgrade now</a
                        >
                    </div>
                </div>

                <section
                    data-JSpopUp="exampleListing"
                    id="exampleListing"
                    class="panel listing-results"
                >
                    <h2 class="title-bold">What a bold advert looks like</h2>
                    <div>
                        <p>
                            How your upgraded ad will look in the search results -
                            enhanced for better visibility
                        </p>

                        <article class="panel-listing-result listing-bold">
                            <header class="desktop">
                                <strong class="listingPrice"
                                >&pound;1,000
                                    <abbr title="per calendar month">pcm</abbr></strong
                                >
                                <h1>Looking for a place to call home</h1>
                                <div class="pricingInfo">
                                    <em class="shortDescription"
                                    >Sophie, professional female 25</em
                                    ><em class="listingPriceDetails"></em>
                                </div>
                            </header>
                            <header class="mobile">
                                <h1>Looking for a place to call home</h1>
                            </header>
                            <figure>
                                <img
                                    src="https://assets.spareroom.co.uk/img/spareroom/v4/examples/wantedAd.jpg"
                                    alt="example"
                                />
                                <p class="media-details">
                      <span><i class="fas fa-camera"></i> 3</span
                      ><span><i class="fas fa-video"></i> 1 </span>
                                </p>
                            </figure>
                            <div class="infoLabels">
                                <mark class="new-today"> New today</mark>
                            </div>
                            <div class="pricingInfo mobile">
                                <em class="shortDescription"
                                >Sophie, professional female 25</em
                                >
                                <strong class="listingPrice">
                                    &pound;1,000 <abbr title="per calendar month">pcm</abbr>
                                </strong>
                                <em class="listingPriceDetails"> </em>
                            </div>
                            <div class="listing-results-content desktop">
                                <div class="advertDescription">
                                    <p class="description">
                                        Hi! My name is Sophie, I'm a freelance video editor.
                                        Looking for a double room (1-2 zone). I'm not a smoker,
                                        I love healthy life and nature. I like
                                    </p>
                                    <strong>Moving ASAP</strong>
                                </div>
                            </div>
                            <footer class="status_container">
                    <span class="freeContact status"
                    ><span> Free to Contact </span></span
                    ><span class="tooltip example-save-button" tabindex="-1"
                                ><span class="tooltip_item"
                                    ><span class="anchor_text"
                                        ><i class="far fa-star"></i><span> Save</span></span
                                        ><span class="tooltip_box"
                                        ><span class="tooltip_text"
                                            >Add this to your 'saved ads' list for quick
                            reference in future. You'll find your saved ad lists
                            under the 'search' tab in the main menu</span
                                            ><span class="tooltip_arrow">&nbsp;</span></span
                                        ></span
                                    ><span
                                        class="tooltip_background"
                                        tabindex="-1"
                                    ></span></span
                                ><span class="more desktop">More info</span>
                            </footer>
                        </article>
                    </div>
                    <div class="current-example__container">
                        <p>How your ad currently appears in the search results.</p>

                        <article class="panel-listing-result listing-free">
                            <header class="desktop">
                                <strong class="listingPrice"
                                >&pound;1,000
                                    <abbr title="per calendar month">pcm</abbr></strong
                                >
                                <h1>Looking for a place to call home</h1>
                                <div class="pricingInfo">
                                    <em class="shortDescription"
                                    >Sophie, professional female 25</em
                                    ><em class="listingPriceDetails"></em>
                                </div>
                            </header>
                            <header class="mobile">
                                <h1>Looking for a place to call home</h1>
                            </header>
                            <figure>
                                <img
                                    src="https://assets.spareroom.co.uk/img/spareroom/v4/examples/wantedAd.jpg"
                                    alt="example"
                                />
                                <p class="media-details">
                      <span><i class="fas fa-camera"></i> 3</span
                      ><span><i class="fas fa-video"></i> 1 </span>
                                </p>
                            </figure>
                            <div class="infoLabels">
                                <mark class="new-today"> New today</mark>
                            </div>
                            <div class="pricingInfo mobile">
                                <em class="shortDescription"
                                >Sophie, professional female 25</em
                                >
                                <strong class="listingPrice">
                                    &pound;1,000 <abbr title="per calendar month">pcm</abbr>
                                </strong>
                                <em class="listingPriceDetails"> </em>
                            </div>
                            <div class="listing-results-content desktop">
                                <div class="advertDescription">
                                    <p class="description">
                                        Hi! My name is Sophie, I'm a freelance video editor.
                                        Looking for a double room (1-2 zone). I'm not a smoker,
                                        I love healthy life and nature. I like
                                    </p>
                                    <strong>Moving ASAP</strong>
                                </div>
                            </div>
                            <footer class="status_container">
                    <span class="earlyBird status desktop"
                    ><span class="tooltip earlyBird" tabindex="-1"
                        ><span class="tooltip_item">
                          <img
                              src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1"
                              class="svg early_bird_icon"
                              alt="Early bird"
                          />Early Bird</span
                            >&nbsp;<i class="fas fa-info-circle"></i
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >Early Bird Access is just one benefit of upgrading.
                            With it you can contact all ads on the site as soon
                            as they appear - otherwise you'll have to wait 7
                            days before you can contact any ads with the Early
                            Bird icon.
                            <a
                                href="/content/infowebsitehelp/how-the-site-works"
                                title="About Early Bird Access"
                            >Find out more &raquo;</a
                            ></span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ><span
                                class="tooltip_background"
                                tabindex="-1"
                            ></span></span></span
                    ><span class="earlyBird status mobile">Early Bird</span
                                ><span class="tooltip example-save-button" tabindex="-1"
                                ><span class="tooltip_item"
                                    ><span class="anchor_text"
                                        ><i class="far fa-star"></i><span> Save</span></span
                                        ><span class="tooltip_box"
                                        ><span class="tooltip_text"
                                            >Add this to your 'saved ads' list for quick
                            reference in future. You'll find your saved ad lists
                            under the 'search' tab in the main menu</span
                                            ><span class="tooltip_arrow">&nbsp;</span></span
                                        ></span
                                    ><span
                                        class="tooltip_background"
                                        tabindex="-1"
                                    ></span></span
                                ><span class="more desktop">More info</span>
                            </footer>
                        </article>
                    </div>
                    <a
                        class="button"
                        title="Upgrade now"
                        href="/flatshare/get_early_bird.pl?M_context=71"
                    >Upgrade now</a
                    >
                </section>

                <div class="grid-4 services">
                    <div class="panel panel-standard">
                <span class="counter"
                ><span class="tooltip new-count" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no new messages</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span
                    ><span class="tooltip" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no conversations</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span></span
                ><a href="/flatshare/mythreads.pl" title="See your messages"
                        ><h3>My messages</h3>
                            <div>
                                <p>Check and manage your latest messages</p>
                                <i class="fas fa-envelope"></i></div
                            ></a>
                    </div>
                    <div class="panel panel-standard">
                <span class="counter"
                ><span class="tooltip new-count" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no active adverts</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span
                    ><span class="tooltip" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text">You have no adverts</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span></span
                ><a href="/flatshare/mylistings.pl" title="My posted ads"
                        ><h3>My ads</h3>
                            <div>
                                <p>Manage your ads. Edit, upgrade, deactivate.</p>
                                <i class="fas fa-list-alt"></i></div
                            ></a>
                    </div>
                </div>
                <div class="grid-4 services">
                    <div class="panel panel-standard">
                <span class="counter"
                ><span class="tooltip" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no saved adverts</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span></span
                ><a
                            href="/flatshare/?filter=shortlist&flatshare_type=offered"
                            title="See your saved ads"
                        ><h3>Saved ads</h3>
                            <div>
                                <p>View and manage your saved ads</p>
                                <i class="fas fa-star"></i></div
                            ></a>
                    </div>
                    <div class="panel panel-standard">
                <span class="counter"
                ><span class="tooltip" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no saved searches</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span></span
                ><a
                            href="/flatshare/savesearch.pl?search_type="
                            title="See your saved searches"
                        ><h3>Saved searches</h3>
                            <div>
                                <p>View and edit your saved searches</p>
                                <i class="fas fa-search"></i></div
                            ></a>
                    </div>
                </div>
                <div class="grid-4 services">
                    <div class="panel panel-standard">
                <span class="counter"
                ><span class="tooltip" tabindex="-1"
                    ><span class="tooltip_item"
                        ><span class="anchor_text">0</span
                            ><span class="tooltip_box"
                            ><span class="tooltip_text"
                                >You have no users interested in your adverts</span
                                ><span class="tooltip_arrow">&nbsp;</span></span
                            ></span
                        ><span
                            class="tooltip_background"
                            tabindex="-1"
                        ></span></span></span
                ><a
                            href="/flatshare/interested.pl"
                            title="See who's interested in your ads"
                        ><h3>Who's interested</h3>
                            <div>
                                <p>See who has expressed interest in your adverts</p>
                                <i class="fas fa-thumbs-up"></i></div
                            ></a>
                    </div>
                    <div class="panel panel-standard">
                        <a href="/flatshare/mydetails.pl" title="Edit your details"
                        ><h3>My details</h3>
                            <div>
                                <p>Manage your account information here</p>
                                <i class="fas fa-user"></i></div
                            ></a>
                    </div>
                </div>
                <div class="grid-4 services">
                    <div class="panel panel-standard account-option">
                        <h3>I have a promo code</h3>
                        <div>
                            <input
                                type="text"
                                name="promo_code"
                                class="account-option__promo-code-input"
                            /><button class="button" id="apply-promo-code">Apply</button>
                        </div>
                    </div>
                    <div class="panel panel-standard account-option">
                        <a
                            href="https://blog.spareroom.co.uk/uk-flatmate-deals/"
                            title="New handpicked deals"
                        ><h3>Handpicked deals</h3>
                            <div>
                                <div>
                                    <p>Money saving offers from our partners</p>
                                    <i class="fas fa-tag"></i>
                                </div></div
                            ></a>
                    </div>
                </div>
            </div>
        </div>
        <aside>
            <section class="panel panel-header-closed need_help">
                <header>
                    <h3>Need any help?</h3>
                </header>
                <div>
                    <p class="need_help_contact">
                        @ Contact us by
                        <a href="/contact.pl" rel="nofollow" title="Contact us by email"
                        >email</a
                        >
                        or
                        <br />
                        <i class="fas fa-phone"></i>
                        <a href="tel:+441617681162"> Call us on 0161 768 1162</a>
                    </p>
                    <p class="need_help_hours">
                        Mon to Fri: 9am &ndash; 8.30pm
                        <br />
                        Weekends: 10am &ndash; 7.30pm
                    </p>
                    <div data-livechat></div>
                </div>
            </section>
            <aside class="panel sfm_srm_box">
                <img
                    src="//assets.spareroom.co.uk/img/logos/SpeedFlatmating_blue.svg?v=1"
                    class="svg SpeedFlatmating_blue"
                    alt="SpeedFlatmating logo"
                />
                <p>
                    Meet lots of potential flatmates in one go and see who you click
                    with.
                </p>
                <a
                    class="button button--secondary"
                    title="SpeedFlatmating"
                    href="https://www.speedflatmating.co.uk"
                >Book now</a
                >
            </aside>

            <article class="panel liverentfree_box">
                <img
                    src="//assets.spareroom.co.uk/img/logos/LiveRentFree.svg?v=03"
                    class="svg LiveRentFree"
                    alt="LiveRentFree logo"
                />
                <p>Win a month's free rent, every month. Don't miss out!</p>
                <a
                    class="button button--secondary"
                    title="Live Rent Free"
                    href="/liverentfree"
                >Read more</a
                >
            </article>
        </aside>
    </div>
</main>

@endsection;


