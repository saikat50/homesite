<nav id="navBarTest" class="nav-bar" role="navigation">
    <div class="nav-bar__menus">
        <ul class="nav-bar__menu nav-bar__menu--left">
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="{{route('User.Basic-Search')}}"
                    title="Search SpareRoom for a property or tenant"
                    class="nav-bar__link nav-bar__link--search"
                >
                    <i
                        class="nav-bar__link-icon fas fa-search"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Search</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="{{route('User.Account-Show')}}"
                    title="Your SpareRoom account area"
                    class="nav-bar__link nav-bar__link--myAccount nav-bar__link--selected"
                >
                    <i
                        class="nav-bar__link-icon fas fa-user"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Account</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="{{route('User.Post-Show-ads')}}"
                    title="Place your wanted or need property advert for free"
                    class="nav-bar__link nav-bar__link--placeAd"
                >
                    <i
                        class="nav-bar__link-icon fas fa-thumbtack"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Post ad</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="{{route('User.Browse')}}"
                    title="Rooms for rent in your area"
                    class="nav-bar__link nav-bar__link--browse"
                >
                    <i
                        class="nav-bar__link-icon fas fa-th-list"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Browse</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="{{route('User.Account-Show-Upgrade')}}"
                    title="Upgrade your account"
                    class="nav-bar__link nav-bar__link--upgrade"
                >
                    <i
                        class="nav-bar__link-icon fas fa-th-list"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Upgrade</span>
                </a>
            </li>
            <!--
-->
        </ul>

        <ul class="nav-bar__menu nav-bar__menu--right">
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="#"
                    title="Show full navigation menu"
                    class="nav-bar__link nav-bar__link--more"
                    data-overlay-target="nav-menu"
                    data-overlay-type="slideIn"
                    data-overlay-settings='{"mask":"on"}'
                >
                    <i
                        class="nav-bar__link-icon fas fa-bars"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">More</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="/content/about-us/about-spareroom/"
                    title="About us"
                    class="nav-bar__link nav-bar__link--aboutUs"
                >
                    <i
                        class="nav-bar__link-icon fas fa-users"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">About us</span>
                </a>
            </li>
            <!--
        -->
            <li class="nav-bar__menu-item">
                <a
                    href="/content/info-advice/info-and-advice/"
                    title="Info and advice overview"
                    class="nav-bar__link nav-bar__link--info"
                >
                    <i
                        class="nav-bar__link-icon fas fa-book"
                        aria-hidden="true"
                    ></i>
                    <span class="nav-bar__link-text">Info &amp; advice</span>
                </a>
            </li>
            <!--
-->
        </ul>
    </div>
</nav>

