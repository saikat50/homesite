@extends('layouts.user.master')

@section('sub-nav')

    @include('layouts.user.sub-nav.account')

@endsection

@section('content')

    </div>
    </header>
    <main id="spareroom" class="wrap"><div class="grid-4-8-4 " id="mainheader"><div>&nbsp;</div><div><h1>My posted ads</h1></div><div>&nbsp;</div></div>    <div class="grid-4-8-4">
            <aside>
                <form action="/flatshare/search.pl" method="GET" name="search-filter" class="search-filter_form">
                    <section class="panel panel-header-closed search_filter ">
                        <header>
                            <h3>Search</h3>
                        </header>
                        <fieldset data-widget="search">
                            <input type="hidden" name="action" value="search">
                            <input type="hidden" name="max_per_page" value="">
                            <div>
                                <ul>

                                    <li>
                                        <label title="Rooms for Rent in existing flatshares">
                                            <input type="radio" name="flatshare_type" value="offered">
                                            Rooms for Rent
                                        </label>
                                    </li>

                                    <li>
                                        <label title="Potential flatmates and tenants seeking accommodation">
                                            <input type="radio" name="flatshare_type" value="wanted" class="radiobuttons">
                                            Rooms Wanted
                                        </label>
                                    </li>
                                    <li>
                                        <label title="Find others seeking accommodation to form a new flatshare">
                                            <input type="radio" name="flatshare_type" value="buddyup" class="radiobuttons">
                                            Buddy ups
                                        </label>
                                        <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Find potential buddy ups to share this property with <a href="/content/info-faq/buddyups/" title="Find out more about BuddyUps">Find out more &raquo;</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span>              </li>
                                </ul>
                            </div>
                            <div>
                                <label for="search_field">
                                    <strong>Where?</strong>
                                </label>
                                <input type="text" name="search" id="search_by_location_field" value="" class="textbox" id="search_field" pattern=".*" required="" data-store-search-text autocomplete="off">
                            </div>
                            <div class="grid-4">
                                <div>
                                    <button class="button button--secondary" type="submit" name="submit">Search</button>          </div>
                                <div class="center">
                                    <a href="/flatshare/search.pl?searchtype=advanced">Advanced search</a>
                                </div>
                            </div>
                        </fieldset>
                    </section>
                </form>      </aside>
            <div id="maincontent">

                <div class="account-status panel panel-standard">
                    <header>
                        <div>
                            <h3>Your account is a basic account</h3>    </div>

                    </header>
                    <div class="content">



                        <p>You can have 1 active "room offered" ad <br>
                            and 1 active "room wanted" ad at a time.</p>
                        <span>In total you have created:</span>

                        <ul>
                            <li>0 "room offered" ads (0 active)</li>
                            <li>0 "room wanted" ads (0 active)</li>
                        </ul>

                        <footer>


                            <div class="account-status__button-wrapper">
                                <a class="button" href="/flatshare/get_bold_advertising.pl?M_context=71">Upgrade now</a>          </div>
                            <p class="account-status__upgrade-text">To gain Early Bird Access and Bold Advertising and to acquire multiple ads, upgrade your account. <a class="" href="/flatshare/get_bold_advertising.pl?M_context=71">Find out more</a>.</p>

                        </footer>
                    </div>
                </div>

                <div class="my-ads__header">
                    <h2>My room offered ads</h2>
                    <a href="/flatshare/find-postcode3.pl"><i class="far fa-thumbtack"></i> Post a new ad</a>
                </div>

                <p class="msg notice">You have not posted any room offered adverts.</p>

                <div class="listing-results" data-function="offered-ads-container">

                    <a class="display-all" data-function="toggle-notLive-offeredAds" style="display:none">
                        <span>See all my previous Room Offered ads <i class="fas fa-caret-right"></i></span>
                        <span style="display:none">Hide all my previous Room Offered ads <i class="fas fa-caret-up"></i></span>
                    </a>
                </div>
                <div class="panel" id="offered-ads-warning">
                    <p>You've reached your ad limit. Either deactivate an ad or <a href="/flatshare/get_extra_listings.pl?M_extralistings=1" title="purchase more ads">purchase more ads</a>.</p>
                    <p class="buttons">
                        <a href="/flatshare/get_extra_listings.pl?M_extralistings=1" class="button purchase-more">Purchase more</a><button class="button" id="deactivate-ad" type="submit" name="submit">Back to my ads</button>            </p>
                </div>
                <div class="my-ads__header">
                    <h2>My room wanted ad</h2>

                    <a href="/flatshare/wanted_listing_step1.pl"><i class="far fa-thumbtack"></i> Post a new ad</a>


                </div>

                <p class="msg notice">You have not posted any room wanted adverts.</p>

                <div class="listing-results">

                </div>

            </div>
            <aside>
                <section class="panel panel-header-closed need_help">
                    <header>
                        <h3>Need any help?</h3>
                    </header>
                    <div>
                        <p class="need_help_contact">
                            @ Contact us by <a href="/contact.pl" rel="nofollow" title="Contact us by email">email</a> or
                            <br>
                            <i class="fas fa-phone"></i>
                            <a href="tel:+441617681162"> Call us on 0161 768 1162</a>
                        </p>
                        <p class="need_help_hours">
                            Mon to Fri: 9am &ndash; 8.30pm
                            <br>
                            Weekends: 10am &ndash; 7.30pm
                        </p>
                        <div data-livechat></div>

                    </div>
                </section>
            </aside>
        </div>
    </main>

    @endsection
