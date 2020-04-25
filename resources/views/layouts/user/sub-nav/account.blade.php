<nav class="sub-nav">
    <ul class="sub-nav__menu">
        <li class="sub-nav__menu-item">
            <a
                class="saved"
                title="My saved ads"
                href="{{route('User.Account-Saved-Ads')}}"
            >Saved ads (0)</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="savedSearches"
                title="My saved Searches"
                href="{{route('User.Account-Saved-Searches')}}"
            >Saved searches (0)</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="subNav-myListings"
                title="My posted Ads"
                href="{{route('User.Account-Saved-My-Ads')}}"
            >My ads (0)</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="whoIsInterested"
                title="Who's interested in my ad(s)"
                href="{{route('User.Account-who-inter-ads')}}"
            >Who's interested (0)</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="messages"
                title="My messages page"
                href="{{route('User.Account-Messages')}}"
            >Messages (0)</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="editMyDetails"
                title="Edit my details"
                href="{{route('User.Account-Edit-My-Details')}}"
            >Edit my details</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="emailsAlert"
                title="Email alerts settings"
                href="{{route('User.Account-Email-Alert')}}"
            >Email alerts</a
            >
        </li>
        <li class="sub-nav__menu-item">
            <a
                class="upgrade"
                href="{{route('User.Account-Show-Upgrade')}}"
            >Upgrade</a
            >
        </li>
    </ul>
</nav>
</div>
</header>
<nav
    id="menuAllTest"
    class="nav-menu trans-all-05s"
    role="navigation"
    data-overlay-name="nav-menu"
>
    <article class="account-card">
        <header class="account-card__header">
            <img
                class="account-card__image"
                src="https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif"
                onerror="this.src='https://assets.spareroom.co.uk/img/spareroom/v4/icons/profilepic_unisex.gif'; this.onerror=null;"
                alt="User profile"
            />
            <div class="account-card__details">
                <h3 class="account-card__name">md asadullah al-galib</h3>
                <a class="account-card__edit-link" href="/flatshare/mydetails.pl"
                >Edit profile</a
                >
            </div>
        </header>
        <div class="account-card__body">
            <p class="account-card__account-status">
                Your account is a basic account
            </p>
            <a
                class="button account-card__upgrade-button"
                href="/flatshare/get_early_bird.pl?M_context=76"
            >Upgrade</a
            >
        </div>
    </article>
    <a
        href="/"
        class="nav-menu__close"
        data-overlay-close="nav-menu"
        title="Show full navigation menu"
    ><i class="nav-menu__close-icon fas fa-times" aria-hidden="true"></i
        ><span class="nav-menu__close-text">Close</span></a
    >
    <ul class="nav-menu__ul">
        <li id="account">
            <a
                href="#"
                title="Your SpareRoom account area"
                class="nav-menu__link nav-menu__link--myAccount nav-menu__link--selected"
            ><i class="nav-menu__link-icon far fa-user" aria-hidden="true"></i
                ><span class="nav-menu__link-text">Account</span>
                <i class="far fa-angle-up nav-account-toggle-arrow"></i>
            </a>
            <nav
                class="account-mini-nav nav-menu__account-mini-nav nav-menu__account-mini-nav--open"
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
                            ><span class="account-mini-nav__menu-item-text">My ads</span
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
                            href="/flatshare/get_early_bird.pl?M_context=75"
                        ><!--
    --><i
                                class="far fa-arrow-up account-mini-nav__menu-item-icon"
                                aria-hidden="true"
                            ></i
                            ><span class="account-mini-nav__menu-item-text">Upgrade</span
                            ><!--
    --></a
                        >
                    </li>
                </ul>
            </nav>
        </li>

        <li>
            <a
                href="/content/placeditadvert/choose-section-new/"
                title="Place your wanted or need property advert for free"
                class="nav-menu__link nav-menu__link--placeAd"
            ><i
                    class="nav-menu__link-icon far fa-thumbtack"
                    aria-hidden="true"
                ></i
                ><span class="nav-menu__link-text">Post ad</span>
            </a>
        </li>
        <li>
            <a
                href="/flatshare-house-share/uk/"
                title="Rooms for rent in your area"
                class="nav-menu__link nav-menu__link--browse"
            ><i
                    class="nav-menu__link-icon far fa-list-alt"
                    aria-hidden="true"
                ></i
                ><span class="nav-menu__link-text">Browse</span>
            </a>
        </li>
        <li>
            <a
                href="/content/about-us/about-spareroom/"
                title="About us"
                class="nav-menu__link nav-menu__link--aboutUs"
            ><i class="nav-menu__link-icon far fa-users" aria-hidden="true"></i
                ><span class="nav-menu__link-text">About us</span>
            </a>
        </li>
        <li>
            <a
                href="/content/info-advice/info-and-advice/"
                title="Info and advice overview"
                class="nav-menu__link nav-menu__link--info"
            ><i class="nav-menu__link-icon far fa-book" aria-hidden="true"></i
                ><span class="nav-menu__link-text">Info &amp; advice</span>
            </a>
        </li>

        <li>
            <a
                href="/flatshare/logout.pl"
                title="Log out"
                class="nav-menu__link nav-menu__link--signOut"
            ><i
                    class="nav-menu__link-icon far fa-power-off"
                    aria-hidden="true"
                ></i
                ><span class="nav-menu__link-text">Log out</span>
            </a>
        </li>
    </ul>
</nav>

