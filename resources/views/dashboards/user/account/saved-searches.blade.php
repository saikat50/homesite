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
            <div><h1>Saved searches</h1></div>
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
                <div class="block block_standard" id="findbox">
                    <div class="block_header">
                        <h3>Find an ad</h3>
                    </div>
                    <form
                        action="/flatshare/propertyref.pl"
                        method="GET"
                        class="block_content"
                    >
                        <p>
                            <label for="findid">Advert ref#</label><br />
                            <input
                                type="text"
                                class="textbox"
                                name="advert_id"
                                id="findid"
                            />
                            <input type="Submit" value="Go" />
                        </p>
                    </form>
                </div>
            </aside>
            <div id="maincontent">
                <p class="msg notice">No saved searches found</p>
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
