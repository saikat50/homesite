<body class="PAGEmyaccount" id="SUBPAGEmyaccountoptions">


<style>
    .statusMessage {
        box-sizing: border-box;
        border-bottom: 1px solid #ffdf00;
        background-color: #fcfce2;
        height: auto;
        width: 100%;
    }
    .statusMessage__container {
        box-sizing: border-box;
        display: flex;
        max-width: 966px;
        padding: 10px 15px;
        margin: auto;
    }
    .statusMessage__message {
        margin: 0;
    }
    .statusMessage__icon {
        margin-right: 10px;
        font-size: 20px;
        line-height: 1.2;
        color: #14c8f6;
    }
    @media (min-width: 675px) {
        .statusMessage__container {
            padding: 10px 20px;
        }
    }
    @media (min-width: 966px) {
        .statusMessage__container {
            padding: 10px 25px;
        }
    }
</style>


<header class="wrap base-header" data-overlay-name="search-box">
    <div id="flash-messaging"></div>
    <div class="base-header__wrap">
        <a id="top" href="#top" class="trans-all-1s hidden" hidden>top</a>
        <div class="brand-header" id="header">
            <div class="brand-header__content">
                <div class="brand-header__logo-wrapper">
                    <a
                        href="https://www.spareroom.co.uk"
                        class="brand-header__logo-link"
                        data-ga-event-category="Home Links"
                        data-ga-event-action="clicked"
                        data-ga-event-label="header-SR-logo"
                    ><img
                            src="{{asset('assets/img/brandmark-design.png')}}"
                            class="svg brand-header__logo"
                            alt="SpareRoom Logo"
                        /></a>
                </div>
                <div class="brand-header__middle-modals">
                    <div class="locale-choice" data-overlay-close-exempt="true">
                        <div
                            class="locale-choice__click"
                            data-overlay-target="country-code"
                            data-overlay-type="dropDown"
                        >
                            <img
                                src="https://assets.spareroom.co.uk/img/icons/flags/en-GB.svg?v=1"
                                class="svg locale-choice__flag"
                                alt="en-GB"
                            /><span class="locale-choice__code">UK</span
                            ><i class="fas fa-angle-down locale-choice__caret-down"></i>
                        </div>
                        <aside
                            class="locale-choice__modal hidden-overlay"
                            data-overlay-name="country-code"
                        >
                            <form
                                class="locale-choice__form"
                                method="post"
                                action="/"
                                id="country_id_form"
                            >
                                <p class="locale-choice__para">
                                    In which country are you looking?
                                </p>
                                <!--
                    --><label class="locale-choice__label"
                                ><input
                                        type="radio"
                                        name="country_id"
                                        value="1"
                                        data-website="https://www.spareroom.co.uk/"
                                        class="locale-choice__radio"
                                        checked
                                    />UK</label
                                ><!--
        --><label class="locale-choice__label"
                                ><input
                                        type="radio"
                                        name="country_id"
                                        value="2"
                                        data-website="https://www.spareroom.com/roommates"
                                        class="locale-choice__radio"
                                    />US</label
                                ><!--
        --><button type="submit" class="button button--wide">Save</button>
                            </form>
                        </aside>
                    </div>
                    <div
                        class="brand-header__support"
                        data-overlay-close-exempt="true"
                    >
                        <div
                            class="brand-header__support-button"
                            data-overlay-target="support"
                            data-overlay-type="dropDown"
                        >
                            Support
                            <i
                                class="fas fa-angle-down brand-header__support-button-caret"
                            ></i>
                        </div>
                        <nav
                            class="brand-header__support-nav hidden-overlay"
                            data-overlay-name="support"
                        >
                            <!--
              --><a class="brand-header__support-link" href="/contact.pl"
                            >Contact us online</a
                            ><!--
    -->
                            <p class="brand-header__support-text">
                                or call
                                <a
                                    class="brand-header__support-phone-number"
                                    href="tel:+441617681162"
                                >0161 768 1162</a
                                ><br />Mon to Fri: 9am &ndash; 8.30pm<br />Weekends: 10am
                                &ndash; 7.30pm
                            </p>
                        </nav>
                    </div>
                </div>
                <div class="brand-header__user-utils">
                    <p class="brand-header__welcome">Hi md asadullah</p>
                    <div class="brand-header__user-utils-wrapper">
                        <div
                            class="profile-photo__wrap profile-photo__show-viewer brand-header__profile-photo-wrap"
                            id="profile_viewer_header"
                            data-overlay-target="user-profile"
                            data-overlay-type="popUp"
                            data-uuid="F7lm9K6_CWZzNYHEdIwzuA"
                            data-tracking-profile-is="mine"
                            data-overlay-settings='{"fullscreen":"android"}'
                        >
                            <img
                                class="profile-photo brand-header__profile-photo"
                                alt="Photograph of "
                                src="https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif"
                                onerror="this.src='https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif'; this.onerror=null;"
                            />
                        </div>
                        <div class="brand-header__messages">
                            <a href="/flatshare/mythreads.pl">
                                <i class="far fa-envelope"></i>
                                <div class="new-email"></div>
                            </a>
                        </div>
                        <div
                            class="brand-header__account"
                            data-overlay-close-exempt="true"
                        >
                            <div
                                class="brand-header__account-button"
                                data-overlay-target="account-mini-nav"
                                data-overlay-type="dropDown"
                                data-overlay-settings='{"dropDownLink":"/content/myaccount/myaccount-index/"}'
                            >
                                Account
                                <i
                                    class="fas fa-angle-down brand-header__account-button-caret"
                                ></i>
                            </div>
                            <nav
                                class="account-mini-nav brand-header__account-mini-nav hidden-overlay"
                                data-overlay-name="account-mini-nav"
                            >
                                <ul class="account-mini-nav__menu">
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item menu-parent-item"
                                            href="/flatshare/mythreads.pl"
                                        ><!--
      --><i
                                                class="far fa-envelope account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Messages</span
                                            >
                                            <div class="new-email"></div>
                                            <!--
                        --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/mylistings.pl"
                                        ><!--
      --><i
                                                class="far fa-newspaper account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >My ads</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/?filter=shortlist"
                                        ><!--
        --><i
                                                class="far fa-heart account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Saved ads</span
                                            ><!--
        --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/savesearch.pl"
                                        ><!--
      --><i
                                                class="far fa-bookmark account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Saved searches</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/interested.pl"
                                        ><!--
      --><i
                                                class="far fa-thumbs-up account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Who's interested?</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/mydetails.pl"
                                        ><!--
      --><i
                                                class="far fa-pen account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Edit my details</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/mydetails.pl?view=email_preferences"
                                        ><!--
      --><i
                                                class="far fa-bell account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Email alerts</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/get_early_bird.pl?M_context=75"
                                        ><!--
    --><i
                                                class="far fa-arrow-up account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Upgrade</span
                                            ><!--
    --></a
                                        >
                                    </li>
                                    <li>
                                        <a
                                            class="account-mini-nav__menu-item"
                                            href="/flatshare/logout.pl"
                                        ><!--
      --><i
                                                class="far fa-power-off account-mini-nav__menu-item-icon"
                                                aria-hidden="true"
                                            ></i
                                            ><span class="account-mini-nav__menu-item-text"
                                            >Log out</span
                                            ><!--
      --></a
                                        >
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

