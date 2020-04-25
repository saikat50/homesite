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
            <div><h1>Saved flat/house share ads</h1></div>
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
                    <section class="panel panel-header-closed search_filter panel-bold">
                        <header>
                            <h3>Search</h3>
                        </header>
                        <fieldset data-widget="search">
                            <input name="nmsq_mode" type="hidden" value="normal" />
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
                                    value=""
                                    id="search_by_location_field"
                                    onFocus="if(this.value=='(e.g.Greenwich)'){this.value='';}"
                                    class="textbox"
                                    id="search_field"
                                    pattern=".*"
                                    required=""
                                    data-store-search-text
                                    autocomplete="off"
                                />

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
                                <p>
                                    <a
                                        href="/flatshare/search.pl?searchtype=advanced"
                                        class="advanced_search"
                                    >Advanced search</a
                                    >
                                </p>

                                <input type="submit" class="button" value="Search again" />
                            </div>
                        </fieldset>
                    </section>
                </form>
            </aside>
            <div id="maincontent">
                <div class="above_search_results">
                    <div class="panel-tab">
                        <a
                            class="tab-active"
                            href="/flatshare/?filter=shortlist&amp;flatshare_type=offered"
                            title="rooms offered"
                        >Room to rent ads</a
                        ><a
                            class=""
                            href="/flatshare/rooms_wanted.pl?filter=shortlist&amp;flatshare_type=wanted"
                            title="rooms wanted"
                        >Room wanted ads</a
                        >
                    </div>

                    <div class="searching_options">
                        <p id="results_header">
                            Sorry, no saved adverts found
                            <br style="display: block; margin-top: 10px; content: '';" />

                            <a href="/flatshare/?filter=shortlist&context=unsuitable"
                            >Show all unsuitable ads</a
                            >
                        </p>
                    </div>

                    <!--REMEMBER!!!!

        MOBILE SPAREROOM DOESNT USE THIS LIB FOR THE SAVED SEARCH STUFF BELOE

        -->
                </div>

                <form
                    action="/flatshare/shortlist.pl"
                    class="remove_multiple_saved_items"
                >
                    <input type="hidden" name="flatshare_type" value="offered" />

                    <ul class="listing-results listing-results--no-results">
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
                                    border: 1px solid #13c9f9;
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
                                    color: #ff9500;
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
                                    background: url(/img/spareroom/events/search-event-item.jpg)
                                    no-repeat right top;
                                    background-size: contain;
                                }
                                .event-item--photo .event-item__content {
                                    margin: 0 10px;
                                    max-width: 244px;
                                }
                            </style>
                            <a
                                href="https://www.speedflatmating.co.uk/events/"
                                class="event-item__link event-item__type-offered__link"
                            ><!--
    -->
                                <div class="event-item__content">
                                    <!--
                      --><img
                                        class="event-item__logo"
                                        src="/img/logos/SpeedFlatmating.svg"
                                        onerror="this.src='/img/logos/SpeedFlatmating.png'; this.onerror=null;"
                                    /><!--
      -->
                                    <div class="event-item__title">
                                        The flatmate finding event
                                    </div>
                                    <!--
                      -->
                                    <div class="event-item__sub-title">
                                        Meet people with a room to let
                                    </div>
                                    <!--
                    -->
                                </div>
                            </a>
                        </li>
                    </ul>
                </form>
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
            </aside>
        </div>
    </main>

    @endsection
