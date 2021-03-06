@extends('layouts.user.master')

@section('sub-nav')

@include('layouts.user.sub-nav.account')

@endsection

@section('content')

</div>
</header>
<main id="spareroom" class="wrap">
    <div class="grid-4-8-4 " id="mainheader">
        <div>&nbsp;</div>
        <div>
            <h1>Saved flat/house share ads</h1></div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-4-8-4">
        <aside>
            <form action="/flatshare/search.pl" method="GET" name="search-filter" class="search-filter_form">
                <section class="panel panel-header-closed search_filter panel-bold">
                    <header>
                        <h3>Search</h3> </header>
                    <fieldset data-widget="search">
                        <input name="nmsq_mode" TYPE="hidden" VALUE="normal">
                        <input type="hidden" name="action" value="search">
                        <input type="hidden" name="max_per_page" value="">
                        <div>
                            <ul>
                                <li>
                                    <label title="Rooms for Rent in existing flatshares">
                                        <input type="radio" name="flatshare_type" CHECKED value="offered"> Rooms for Rent </label>
                                </li>
                                <li>
                                    <label title="Potential flatmates and tenants seeking accommodation">
                                        <input type="radio" name="flatshare_type" value="wanted" class="radiobuttons"> Rooms Wanted </label>
                                </li>
                                <li>
                                    <label title="Find others seeking accommodation to form a new flatshare">
                                        <input type="radio" name="flatshare_type" value="buddyup" class="radiobuttons"> Buddy ups </label> <span class="tooltip buddyUp" tabindex="-1">&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Find potential buddy ups to share this property with <a href="/content/info-faq/buddyups/" title="Find out more about BuddyUps">Find out more &raquo;</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <label for="search_field"> <strong>Where?</strong> </label>
                            <input type="text" name="search" value="" id="search_by_location_field" onFocus="if(this.value=='(e.g.Greenwich)'){this.value='';}" class="textbox" id="search_field" pattern=".*" required="" data-store-search-text autocomplete="off">
                            <p>
                                <select name="miles_from_max" id="radius">
                                    <option value="0">This area only</option>
                                    <option value="1">1 mile radius</option>
                                    <option value="2">2 mile radius</option>
                                    <option value="3">3 mile radius</option>
                                    <option value="4">4 mile radius</option>
                                    <option value="5">5 mile radius</option>
                                    <option value="10">10 mile radius</option>
                                    <option value="15">15 mile radius</option>
                                    <option value="20">20 mile radius</option>
                                    <option value="30">30 mile radius</option>
                                    <option value="40">40 mile radius</option>
                                </select>
                            </p>
                        </div>
                        <div class="foot">
                            <p> <a href="/flatshare/search.pl?searchtype=advanced" class="advanced_search">Advanced search</a> </p>
                            <input type="submit" class="button" value="Search again"> </div>
                    </fieldset>
                </section>
            </form>
        </aside>
        <div id="maincontent">
            <div class="above_search_results">
                <div class="panel-tab"> <a class="tab-active" href="{{route('User.Account-Saved-Ads')}}" title="rooms offered">Room to rent ads</a><a class="" href="{{route('User.Account-Saved-Ads-Room')}}" title="rooms wanted">Room wanted ads</a> </div>
                <div class="searching_options">
                    <p id="results_header"> </p>
                    <p class="sort_by">
                        <label for="context">Show :
                            <select name="context" id="context" style="margin-right: 15px">
                                <option value="" SELECTED>All (except unsuitable)</option>
                                <option value="shortlist">Saved ads</option>
                                <option value="interest">Interested ads</option>
                                <option value="contacted">Contacted ads</option>
                                <option value="unsuitable">Unsuitable ads</option>
                            </select>
                        </label>
                        <label for="sort_by">Sort by :
                            <select name="sort_by" id="sort_by">
                                <option value="">Default sort order</option>
                                <option value="days_since_placed">Newest Ads</option>
                                <option value="last_updated">Last updated</option>
                                <option value="price_low_to_high">Price (lowest first)</option>
                                <option value="price_high_to_low">Price (highest first)</option>
                            </select>
                        </label>
                        <script type="text/javascript">
                            //adds value of given select on query params
                            //or substitutes it if already there, then
                            //load the new URL
                            function changeParam(curParam) {
                                var current = document.location.href;
                                var mySelect = document.getElementById(curParam);
                                var o = mySelect.options[mySelect.selectedIndex].value;
                                // attempt to substitute GET param first
                                var newurl = current.replace(new RegExp("([?&]" + curParam + ")=([^#&]*)"), '$1=' + o);
                                // if GET param is not there, add it to URL
                                if (current === newurl) {
                                    newurl = current + (current.indexOf('?') != -1 ? "&" : "?") + curParam + "=" + o;
                                }
                                // finally, go there
                                document.location.href = newurl;
                            }
                            //apply to fields context and sort_by
                            if (document.getElementById('context')) {
                                document.getElementById('context').onchange = function () {
                                    changeParam('context');
                                }
                            }
                            if (document.getElementById('sort_by')) {
                                document.getElementById('sort_by').onchange = function () {
                                    changeParam('sort_by');
                                }
                            }
                        </script>
                    </p>
                </div>
                <div class="searching_options_btn">
                    <p class="serching_opt"> <span class="total-ads">Showing <strong> 1-1 </strong> of <strong>1</strong> results</span> <a class="studentHIDE" data-ga-event-category="Google Maps (09 -11-16)" data-ga-event-action="map clicked" data-ga-event-label="saved advert list" href="/flatshare/?filter=shortlist&flatshare_type=offered&show_results=as+a+map"> Show results on a map <i class="fas fa-map-marker-alt"></i></a> </p>
                </div>
                <label class='select-all'>
                    <input type='checkbox' /> select all</label>
                <!--REMEMBER!!!!

MOBILE SPAREROOM DOESNT USE THIS LIB FOR THE SAVED SEARCH STUFF BELOE

-->
            </div>
            <form action="/flatshare/shortlist.pl" class="remove_multiple_saved_items">
                <input type="hidden" name="flatshare_type" value="offered">
                <ul class="listing-results ">
                    <li class="listing-result" data-listing-id="12831421" data-listing-title="Edgbaston&#45;Superb&#32;Double&#32;En&#45;Suites&#45;All&#32;Inclusive&#32;" data-listing-brand="bold" data-listing-type="offered" data-listing-days-old="0" data-listing-available="Available Now" data-listing-status="new" data-listing-early-bird="" data-listing-neighbourhood="Edgbaston" data-listing-postcode="B17" data-listing-scp="" data-listing-property-type="house" data-listing-property-type-more="" data-listing-rooms-in-property="6" data-listing-advertiser-role="live out landlord">
                        <label class="selected-listing listing-bold-delete ">
                            <input class="remove-listing listing_remove_checkbox " type="checkbox" name="remove_12831421" value="1"> select</label>
                        <article class="panel-listing-result listing-bold  ">
                            <header class="desktop"><a href="/flatshare/flatshare_detail.pl?flatshare_id=12831421&search_id=&city_id=&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered&" data-detail-url title="Edgbaston-Superb Double En-Suites-All Inclusive "><strong class="listingPrice">&pound;450- &pound;510<abbr title="">pcm</abbr><!-- each --><!-- 510 --></strong><h1>Edgbaston-Superb Double En-Suites-All Inclusive </h1><div class="pricingInfo"><em class="shortDescription">2 doubles<span class="listingLocation">Edgbaston (B17)</span></em><em class="listingPriceDetails">Bills inc.</em></div></a></header>
                            <header class="mobile">
                                <a href="{{route('User.Add-Details')}}" data-detail-url title="Edgbaston-Superb Double En-Suites-All Inclusive ">
                                    <h1> Edgbaston-Superb Double En-Suites-All Inclusive </h1> </a>
                            </header>
                            <figure>
                                <a href="/flatshare/flatshare_detail.pl?flatshare_id=12831421&search_id=&city_id=&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered&" data-detail-url><img src="//photos2.spareroom.co.uk/images/flatshare/listings/cw100h100/61/81/61812271.jpg" srcset="//photos2.spareroom.co.uk/images/flatshare/listings/cw100h100/61/81/61812271.jpg 1x, //photos2.spareroom.co.uk/images/flatshare/listings/cw200h200/61/81/61812271.jpg 2x" class="swiper-lazy" alt="Edgbaston-Superb Double En-Suites-All Inclusive  Main Photo">
                                    <p class="media-details"><span><i class="fas fa-camera"></i> 9 </span><span><i class="fas fa-video"></i> 0 </span></p>
                                </a>
                            </figure>
                            <div class="infoLabels">
                                <mark class="new">New</mark>
                            </div>
                            <div class="pricingInfo mobile">
                                <a href="/flatshare/flatshare_detail.pl?flatshare_id=12831421&search_id=&city_id=&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered&" data-detail-url title="Edgbaston-Superb Double En-Suites-All Inclusive "> <em class="shortDescription">2 doubles<span class="listingLocation">Edgbaston (B17)</span></em> <strong class="listingPrice">
                                        &pound;450- &pound;510<abbr title="">pcm</abbr><!-- each --><!-- 510 -->      </strong> <em class="listingPriceDetails">
                                        Bills inc.      </em> </a>
                            </div>
                            <div class="listing-results-content desktop">
                                <a href="/flatshare/flatshare_detail.pl?flatshare_id=12831421&search_id=&city_id=&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered&" data-detail-url class="advertDescription">
                                    <p class="description"> Located in Edgbaston this property has been refurbished to an exceptional standard. The rooms are furnished, double en-suites, off road parking...</p><strong>Available Now</strong></a>
                            </div>
                            <footer class="status_container"><span class="freeContact status"><span> Free to Contact </span></span><span class="tooltip savedAd"><a  class="tooltip savedAd" href="/flatshare/shortlist.pl?mode=edit&flatshare_id=12831421&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered"><i class="fas fa-star"></i><span> Saved</span></a><span class="tooltip_item"><span class="tooltip_box"><span class="tooltip_text">You have Saved this ad. Click the link to change its status. Check the box to remove multiple saved ads.</span><span class="tooltip_arrow">&nbsp;</span></span>
                                </span>
                                </span><a href="/flatshare/flatshare_detail.pl?flatshare_id=12831421&search_id=&city_id=&flatshare_type=offered&search_results=%2Fflatshare%2F%3Ffilter%3Dshortlist%26flatshare_type%3Doffered&" data-detail-url title="Advert details" class="more desktop"> More info </a></footer>
                        </article>
                    </li>
                    <li id="eventSearchItem" class="hidden event-item__type-offered">
                        <style>
                            .event-item {
                                margin-bottom: 24px;
                            }

                            .event-item__link {
                                display: block;
                            }

                            .event_item__hidden {
                                display: none;
                            }

                            .event-item__link,
                            .event-item__link:hover,
                            .event-item__link:visited,
                            .event-item__link:active {
                                text-decoration: none;
                                height: 108px;
                                width: 100%;
                                border: 1px solid #13C9F9;
                                border-radius: 8px;
                            }

                            .event-item__link *:hover {
                                text-decoration: none;
                            }

                            .event-item__content {
                                text-align: center;
                                margin: 0 auto;
                                padding: 10px 0;
                                line-height: 0;
                            }

                            .event-item__logo {
                                max-height: 32px;
                                line-height: 1em;
                                margin-bottom: 10px;
                            }

                            .event-item__title,
                            .event-item__title:hover,
                            .event-item__title:visited,
                            .event-item__title:active {
                                text-decoration: none;
                                color: #FF9500;
                                font-size: 17px;
                                font-weight: 500;
                                line-height: 1em;
                                margin-bottom: 10px;
                            }

                            .event-item__sub-title,
                            .event-item__sub-title:hover,
                            .event-item__sub-title:visited,
                            .event-item__sub-title:active {
                                text-decoration: none;
                                color: #005480;
                                font-size: 13px;
                                line-height: 1em;
                                margin-bottom: 0;
                            }

                            .event-item--photo .event-item__link {
                                background: url(/img/spareroom/events/search-event-item.jpg) no-repeat right top;
                                background-size: contain;
                            }

                            .event-item--photo .event-item__content {
                                margin: 0 10px;
                                max-width: 244px;
                            }
                        </style>
                        <a href="https://www.speedflatmating.co.uk/events/" class="event-item__link event-item__type-offered__link">
                            <!--
    -->
                            <div class="event-item__content">
                                <!--
      --><img class="event-item__logo" src="/img/logos/SpeedFlatmating.svg" onerror="this.src='/img/logos/SpeedFlatmating.png'; this.onerror=null;">
                                <!--
      -->
                                <div class="event-item__title">The flatmate finding event</div>
                                <!--
      -->
                                <div class="event-item__sub-title">Meet people with a room to let</div>
                                <!--
    -->
                            </div>
                        </a>
                    </li>
                </ul>
                <input type="hidden" name="auto_return" value="1">
                <input class="button" type="submit" name="remove_selected" value="Delete selected ads"> </form>
            <div>
                <ul class="navprev"> </ul>
                <ul class="navnext"> </ul>
                <p class="navcurrent"> Showing <strong> 1-1 </strong> of <strong>1</strong> results </p>
            </div>
        </div>
        <aside>
            <section class="panel panel-header-closed need_help">
                <header>
                    <h3>Need any help?</h3> </header>
                <div>
                    <p class="need_help_contact"> @ Contact us by <a href="/contact.pl" rel="nofollow" title="Contact us by email">email</a> or
                        <br> <i class="fas fa-phone"></i> <a href="tel:+441617681162"> Call us on 0161 768 1162</a> </p>
                    <p class="need_help_hours"> Mon to Fri: 9am &ndash; 8.30pm
                        <br> Weekends: 10am &ndash; 7.30pm </p>
                    <div data-livechat></div>
                </div>
            </section>
        </aside>
    </div>
</main>
    @endsection
