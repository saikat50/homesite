@extends('layouts.user.master')

@section('page-css')


@endsection

@section('sub-nav')

    <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="breadcrumb"><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><a itemprop="item" href="https://www.spareroom.co.uk" title="home"><meta itemprop="name" content="Home"><meta itemprop="position" content="1"><i class="fas fa-home" title="You are here"></i></a><span class="separator">&nbsp;›&nbsp;</span></span><span itemscope="" itemprop="itemListElement" itemtype="http://schema.org/ListItem"><span itemprop="item"><meta itemprop="position" content="2"><span itemprop="name">UK flat &amp; house share </span></span>
    </span>
    </div>

@endsection

@section('content')

    <main id="spareroom" class="wrap">
        <div class="grid-4-8-4 " id="mainheader">
            <div>&nbsp;</div>
            <div>
                <h1>Rooms for rent in the UK</h1></div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-4-8-4">
            <aside>
                <form action="/flatshare/search.pl" method="GET" name="search-filter" class="search-filter_form">
                    <section class="panel panel-header-closed search_filter panel-bold">
                        <header>
                            <h3>Search</h3> </header>
                        <fieldset data-widget="search">
                            <input type="hidden" name="action" value="search">
                            <input type="hidden" name="max_per_page" value="">
                            <div>
                                <ul>
                                    <li>
                                        <label title="Rooms for Rent in existing flatshares">
                                            <input type="radio" name="flatshare_type" value="offered"> Rooms for Rent </label>
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
                                <input type="text" name="search" id="search_by_location_field" value="" class="textbox" id="search_field" pattern=".*" required="" data-store-search-text autocomplete="off"> </div>
                            <div class="grid-4">
                                <div>
                                    <button class="button button--secondary" type="submit" name="submit">Search</button>
                                </div>
                                <div class="center"> <a href="/flatshare/search.pl?searchtype=advanced">Advanced search</a> </div>
                            </div>
                        </fieldset>
                    </section>
                </form>
                <div class="block block_standard" id="findbox">
                    <div class="block_header">
                        <h3>Find an ad</h3> </div>
                    <form action="/flatshare/propertyref.pl" method="GET" class="block_content">
                        <p>
                            <label for="findid">Advert ref#</label>
                            <br>
                            <input type="text" class="textbox" name="advert_id" id="findid">
                            <input type="Submit" value="Go"> </p>
                    </form>
                </div>
            </aside>
            <div id="maincontent" class="grid-4">
                <div>
                    <h2 class="countryheader">England</h2>
                    <h3><a href="/flatshare/birmingham">Birmingham flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_midlands/birmingham">
                                1,733
                                rooms to rent in
                                1,002
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_midlands/birmingham">
                                255
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h3><a href="/flatshare/bristol">Bristol flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/avon/bristol">
                                1,148
                                rooms to rent in
                                830
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/avon/bristol">
                                497
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h3><a href="/flatshare/leeds">Leeds flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_yorkshire/leeds">
                                1,129
                                rooms to rent in
                                662
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_yorkshire/leeds">
                                307
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h3><a href="/london">London flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/london">
                                26,810
                                rooms to rent in
                                20,250
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/london">
                                5,504
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <ul class="bulletlist">
                        <li><a href="/flatshare/central_london">Central London</a>
                            <ul>
                                <li> <a href="/flatshare/central_london">
                                        16,964
                                        rooms to rent in
                                        12,586
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/central_london">
                                        5,131
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/east_london">East London</a>
                            <ul>
                                <li> <a href="/flatshare/east_london">
                                        6,945
                                        rooms to rent in
                                        5,079
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/east_london">
                                        2,967
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/north_london">North London</a>
                            <ul>
                                <li> <a href="/flatshare/north_london">
                                        3,691
                                        rooms to rent in
                                        2,823
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/north_london">
                                        2,990
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/north_west_london">North West London</a>
                            <ul>
                                <li> <a href="/flatshare/north_west_london">
                                        3,158
                                        rooms to rent in
                                        2,326
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/north_west_london">
                                        3,004
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/south_east_london">South East London</a>
                            <ul>
                                <li> <a href="/flatshare/south_east_london">
                                        3,446
                                        rooms to rent in
                                        2,696
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/south_east_london">
                                        3,660
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/south_west_london">South West London</a>
                            <ul>
                                <li> <a href="/flatshare/south_west_london">
                                        5,342
                                        rooms to rent in
                                        4,142
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/south_west_london">
                                        3,617
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/west_london">West London</a>
                            <ul>
                                <li> <a href="/flatshare/west_london">
                                        3,600
                                        rooms to rent in
                                        2,726
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/west_london">
                                        3,001
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                    </ul>
                    <h3><a href="/flatshare/manchester">Manchester flatshare</a></h3>
                    <ul class="bulletlist">
                        <li><a href="/flatshare/bolton">Bolton</a>
                            <ul>
                                <li> <a href="/flatshare/lancashire/bolton">
                                        116
                                        rooms to rent in
                                        65
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/lancashire/bolton">
                                        65
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/manchester">Manchester</a>
                            <ul>
                                <li> <a href="/flatshare/greater_manchester/manchester">
                                        1,050
                                        rooms to rent in
                                        621
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/greater_manchester/manchester">
                                        684
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/oldham">Oldham</a>
                            <ul>
                                <li> <a href="/flatshare/lancashire/oldham">
                                        83
                                        rooms to rent in
                                        49
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/lancashire/oldham">
                                        74
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/stockport">Stockport</a>
                            <ul>
                                <li> <a href="/flatshare/cheshire/stockport">
                                        111
                                        rooms to rent in
                                        75
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/cheshire/stockport">
                                        107
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/warrington">Warrington</a>
                            <ul>
                                <li> <a href="/flatshare/cheshire/warrington">
                                        190
                                        rooms to rent in
                                        102
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/cheshire/warrington">
                                        58
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                        <li><a href="/flatshare/wigan">Wigan</a>
                            <ul>
                                <li> <a href="/flatshare/lancashire/wigan">
                                        69
                                        rooms to rent in
                                        43
                                        flatshares &amp; house shares
                                    </a> </li>
                                <li> <a href="/flatmate/lancashire/wigan">
                                        53
                                        flatmates / roommates
                                    </a> </li>
                            </ul>
                        </li>
                    </ul>
                    <h4><a href="/flatshare/bath">Bath</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/avon/bath">
                                194
                                rooms to rent in
                                141
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/avon/bath">
                                90
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/blackburn">Blackburn</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lancashire/blackburn">
                                35
                                rooms to rent in
                                16
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lancashire/blackburn">
                                25
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/blackpool">Blackpool</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lancashire/blackpool">
                                98
                                rooms to rent in
                                65
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lancashire/blackpool">
                                38
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/bournemouth">Bournemouth</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/dorset/bournemouth">
                                308
                                rooms to rent in
                                217
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/dorset/bournemouth">
                                114
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/bradford">Bradford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_yorkshire/bradford">
                                70
                                rooms to rent in
                                44
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_yorkshire/bradford">
                                29
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/brighton">Brighton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/east_sussex/brighton">
                                521
                                rooms to rent in
                                373
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/east_sussex/brighton">
                                240
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/bromley">Bromley</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/kent/bromley">
                                105
                                rooms to rent in
                                77
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/kent/bromley">
                                197
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/cambridge">Cambridge</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cambridgeshire/cambridge">
                                881
                                rooms to rent in
                                549
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cambridgeshire/cambridge">
                                178
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/canterbury">Canterbury</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/kent/canterbury">
                                347
                                rooms to rent in
                                172
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/kent/canterbury">
                                86
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/carlisle">Carlisle</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cumbria/carlisle">
                                71
                                rooms to rent in
                                43
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cumbria/carlisle">
                                15
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/chelmsford">Chelmsford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/essex/chelmsford">
                                129
                                rooms to rent in
                                93
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/essex/chelmsford">
                                59
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/chester">Chester</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cheshire/chester">
                                305
                                rooms to rent in
                                154
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cheshire/chester">
                                70
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/cleveland">Cleveland</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cleveland">
                                250
                                rooms to rent in
                                121
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cleveland">
                                36
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/colchester">Colchester</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/essex/colchester">
                                213
                                rooms to rent in
                                149
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/essex/colchester">
                                74
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/coventry">Coventry</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_midlands/coventry">
                                1,272
                                rooms to rent in
                                636
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_midlands/coventry">
                                110
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/crewe">Crewe</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cheshire/crewe">
                                164
                                rooms to rent in
                                78
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cheshire/crewe">
                                20
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/croydon">Croydon</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/surrey/croydon">
                                231
                                rooms to rent in
                                174
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/surrey/croydon">
                                221
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/darlington">Darlington</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/county_durham/darlington">
                                55
                                rooms to rent in
                                39
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/county_durham/darlington">
                                24
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/dartford">Dartford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/kent/dartford">
                                61
                                rooms to rent in
                                37
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/kent/dartford">
                                141
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/derby">Derby</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/derbyshire/derby">
                                521
                                rooms to rent in
                                271
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/derbyshire/derby">
                                68
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/doncaster">Doncaster</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/south_yorkshire/doncaster">
                                287
                                rooms to rent in
                                136
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/south_yorkshire/doncaster">
                                32
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/dorchester">Dorchester</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/dorset/dorchester">
                                12
                                rooms to rent in
                                11
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/dorset/dorchester">
                                21
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/dudley">Dudley</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_midlands/dudley">
                                79
                                rooms to rent in
                                37
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_midlands/dudley">
                                41
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/durham">Durham</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/county_durham/durham">
                                93
                                rooms to rent in
                                58
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/county_durham/durham">
                                19
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/enfield">Enfield</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/middlesex/enfield">
                                81
                                rooms to rent in
                                68
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/middlesex/enfield">
                                159
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/exeter">Exeter</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/devon/exeter">
                                182
                                rooms to rent in
                                146
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/devon/exeter">
                                82
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/gloucester">Gloucester</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/gloucestershire/gloucester">
                                122
                                rooms to rent in
                                84
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/gloucestershire/gloucester">
                                37
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/guernsey">Guernsey</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/channel_isles/guernsey">
                                9
                                rooms to rent in
                                6
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/channel_isles/guernsey">
                                6
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/guildford">Guildford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/surrey/guildford">
                                289
                                rooms to rent in
                                199
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/surrey/guildford">
                                68
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/halifax">Halifax</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_yorkshire/halifax">
                                37
                                rooms to rent in
                                22
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_yorkshire/halifax">
                                26
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/harrogate">Harrogate</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/north_yorkshire/harrogate">
                                62
                                rooms to rent in
                                35
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/north_yorkshire/harrogate">
                                27
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/harrow">Harrow</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/middlesex/harrow">
                                261
                                rooms to rent in
                                197
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/middlesex/harrow">
                                198
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/hemel_hempstead">Hemel Hempstead</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hertfordshire/hemel_hempstead">
                                85
                                rooms to rent in
                                72
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hertfordshire/hemel_hempstead">
                                63
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/hereford">Hereford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/herefordshire/hereford">
                                84
                                rooms to rent in
                                55
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/herefordshire/hereford">
                                17
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/huddersfield">Huddersfield</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_yorkshire/huddersfield">
                                160
                                rooms to rent in
                                73
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_yorkshire/huddersfield">
                                32
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/hull">Hull</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/north_humberside/hull">
                                316
                                rooms to rent in
                                179
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/north_humberside/hull">
                                36
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/ilford">Ilford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/london/ilford">
                                268
                                rooms to rent in
                                206
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/london/ilford">
                                163
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/ipswich">Ipswich</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/suffolk/ipswich">
                                121
                                rooms to rent in
                                92
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/suffolk/ipswich">
                                31
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/isle_of_man">Isle Of Man</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/isle_of_man">
                                7
                                rooms to rent in
                                6
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/isle_of_man">
                                9
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/jersey">Jersey</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/channel_isles/jersey">
                                1
                                rooms to rent in
                                1
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/channel_isles/jersey">
                                6
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/kingston_upon_thames">Kingston Upon Thames</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/surrey/kingston_upon_thames">
                                109
                                rooms to rent in
                                79
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/surrey/kingston_upon_thames">
                                249
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/lancaster">Lancaster</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lancashire/lancaster">
                                149
                                rooms to rent in
                                64
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lancashire/lancaster">
                                30
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/leicester">Leicester</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/leicestershire/leicester">
                                508
                                rooms to rent in
                                284
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/leicestershire/leicester">
                                91
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/lincoln">Lincoln</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lincolnshire/lincoln">
                                280
                                rooms to rent in
                                164
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lincolnshire/lincoln">
                                46
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/liverpool">Liverpool</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/merseyside/liverpool">
                                1,258
                                rooms to rent in
                                606
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/merseyside/liverpool">
                                197
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/luton">Luton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/bedfordshire/luton">
                                346
                                rooms to rent in
                                214
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/bedfordshire/luton">
                                58
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/milton_keynes">Milton Keynes</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/buckinghamshire/milton_keynes">
                                324
                                rooms to rent in
                                239
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/buckinghamshire/milton_keynes">
                                89
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/newcastle_upon_tyne">Newcastle Upon Tyne</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/tyne_and_wear/newcastle_upon_tyne">
                                585
                                rooms to rent in
                                337
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/tyne_and_wear/newcastle_upon_tyne">
                                134
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/northampton">Northampton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/northamptonshire/northampton">
                                247
                                rooms to rent in
                                172
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/northamptonshire/northampton">
                                78
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/norwich">Norwich</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/norfolk/norwich">
                                453
                                rooms to rent in
                                270
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/norfolk/norwich">
                                84
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/nottingham">Nottingham</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/nottinghamshire/nottingham">
                                722
                                rooms to rent in
                                478
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/nottinghamshire/nottingham">
                                194
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/oxford">Oxford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/oxfordshire/oxford">
                                626
                                rooms to rent in
                                465
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/oxfordshire/oxford">
                                143
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/peterborough">Peterborough</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cambridgeshire/peterborough">
                                278
                                rooms to rent in
                                183
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cambridgeshire/peterborough">
                                68
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/plymouth">Plymouth</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/devon/plymouth">
                                468
                                rooms to rent in
                                237
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/devon/plymouth">
                                68
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/portsmouth">Portsmouth</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hampshire/portsmouth">
                                161
                                rooms to rent in
                                115
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hampshire/portsmouth">
                                75
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/preston">Preston</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lancashire/preston">
                                182
                                rooms to rent in
                                105
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lancashire/preston">
                                44
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/reading">Reading</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/berkshire/reading">
                                765
                                rooms to rent in
                                528
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/berkshire/reading">
                                119
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/redhill">Redhill</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/surrey/redhill">
                                39
                                rooms to rent in
                                31
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/surrey/redhill">
                                34
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/romford">Romford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/essex/romford">
                                100
                                rooms to rent in
                                75
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/essex/romford">
                                184
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/salisbury">Salisbury</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/wiltshire/salisbury">
                                53
                                rooms to rent in
                                44
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/wiltshire/salisbury">
                                24
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/sheffield">Sheffield</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/south_yorkshire/sheffield">
                                944
                                rooms to rent in
                                459
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/south_yorkshire/sheffield">
                                132
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/slough">Slough</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/berkshire/slough">
                                194
                                rooms to rent in
                                132
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/berkshire/slough">
                                67
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/southall">Southall</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/middlesex/southall">
                                55
                                rooms to rent in
                                34
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/middlesex/southall">
                                93
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/southampton">Southampton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hampshire/southampton">
                                737
                                rooms to rent in
                                442
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hampshire/southampton">
                                159
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/southend-on-sea">Southend-On-Sea</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/essex/southend-on-sea">
                                101
                                rooms to rent in
                                63
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/essex/southend-on-sea">
                                66
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/st._albans">St. Albans</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hertfordshire/st._albans">
                                79
                                rooms to rent in
                                59
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hertfordshire/st._albans">
                                75
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/stevenage">Stevenage</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hertfordshire/stevenage">
                                124
                                rooms to rent in
                                94
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hertfordshire/stevenage">
                                60
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/stoke-on-trent">Stoke-On-Trent</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/staffordshire/stoke-on-trent">
                                347
                                rooms to rent in
                                157
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/staffordshire/stoke-on-trent">
                                38
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/sunderland">Sunderland</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/tyne_and_wear/sunderland">
                                108
                                rooms to rent in
                                32
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/tyne_and_wear/sunderland">
                                22
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/sutton">Sutton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/surrey/sutton">
                                100
                                rooms to rent in
                                77
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/surrey/sutton">
                                139
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/swindon">Swindon</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/wiltshire/swindon">
                                368
                                rooms to rent in
                                244
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/wiltshire/swindon">
                                42
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/taunton">Taunton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/somerset/taunton">
                                80
                                rooms to rent in
                                61
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/somerset/taunton">
                                31
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/telford">Telford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/shropshire/telford">
                                107
                                rooms to rent in
                                74
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/shropshire/telford">
                                30
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/tonbridge">Tonbridge</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/kent/tonbridge">
                                32
                                rooms to rent in
                                27
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/kent/tonbridge">
                                33
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/torquay">Torquay</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/devon/torquay">
                                48
                                rooms to rent in
                                34
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/devon/torquay">
                                17
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/truro">Truro</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/cornwall/truro">
                                44
                                rooms to rent in
                                31
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/cornwall/truro">
                                47
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/twickenham">Twickenham</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/middlesex/twickenham">
                                72
                                rooms to rent in
                                68
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/middlesex/twickenham">
                                219
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/wakefield">Wakefield</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_yorkshire/wakefield">
                                80
                                rooms to rent in
                                57
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_yorkshire/wakefield">
                                31
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/walsall">Walsall</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_midlands/walsall">
                                92
                                rooms to rent in
                                46
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_midlands/walsall">
                                46
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/watford">Watford</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/hertfordshire/watford">
                                205
                                rooms to rent in
                                149
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/hertfordshire/watford">
                                78
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/wolverhampton">Wolverhampton</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_midlands/wolverhampton">
                                170
                                rooms to rent in
                                108
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_midlands/wolverhampton">
                                52
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/worcester">Worcester</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/worcestershire/worcester">
                                174
                                rooms to rent in
                                100
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/worcestershire/worcester">
                                27
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/york">York</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/north_yorkshire/york">
                                218
                                rooms to rent in
                                167
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/north_yorkshire/york">
                                119
                                flatmates / roommates
                            </a> </li>
                    </ul>
                </div>
                <div>
                    <h2 class="countryheader">Northern Ireland</h2>
                    <h4><a href="/flatshare/belfast">Belfast</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/county_antrim/belfast">
                                276
                                rooms to rent in
                                158
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/county_antrim/belfast">
                                83
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h2 class="countryheader">Scotland</h2>
                    <h3><a href="/flatshare/edinburgh">Edinburgh flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/midlothian/edinburgh">
                                733
                                rooms to rent in
                                582
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/midlothian/edinburgh">
                                279
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h3><a href="/flatshare/glasgow">Glasgow flatshare</a></h3>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lanarkshire/glasgow">
                                466
                                rooms to rent in
                                371
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lanarkshire/glasgow">
                                220
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/aberdeen">Aberdeen</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/aberdeenshire/aberdeen">
                                253
                                rooms to rent in
                                164
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/aberdeenshire/aberdeen">
                                34
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/dumfries">Dumfries</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/dumfriesshire/dumfries">
                                49
                                rooms to rent in
                                20
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/dumfriesshire/dumfries">
                                7
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/dundee">Dundee</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/angus/dundee">
                                115
                                rooms to rent in
                                87
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/angus/dundee">
                                42
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/falkirk">Falkirk</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/stirlingshire/falkirk">
                                20
                                rooms to rent in
                                13
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/stirlingshire/falkirk">
                                7
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/galashiels">Galashiels</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/selkirkshire/galashiels">
                                6
                                rooms to rent in
                                2
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/selkirkshire/galashiels">
                                5
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/inverness">Inverness</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/inverness-shire/inverness">
                                37
                                rooms to rent in
                                29
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/inverness-shire/inverness">
                                16
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/kilmarnock">Kilmarnock</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/ayrshire/kilmarnock">
                                3
                                rooms to rent in
                                3
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/ayrshire/kilmarnock">
                                2
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/kirkcaldy">Kirkcaldy</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/fife/kirkcaldy">
                                18
                                rooms to rent in
                                8
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/fife/kirkcaldy">
                                5
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/motherwell">Motherwell</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/lanarkshire/motherwell">
                                4
                                rooms to rent in
                                4
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/lanarkshire/motherwell">
                                5
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/paisley">Paisley</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/renfrewshire/paisley">
                                22
                                rooms to rent in
                                19
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/renfrewshire/paisley">
                                6
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/perth">Perth</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/perthshire/perth">
                                16
                                rooms to rent in
                                14
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/perthshire/perth">
                                5
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h2 class="countryheader">Wales</h2>
                    <h4><a href="/flatshare/cardiff">Cardiff</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/south_glamorgan/cardiff">
                                475
                                rooms to rent in
                                302
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/south_glamorgan/cardiff">
                                158
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/llandrindod_wells">Llandrindod Wells</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/powys/llandrindod_wells">
                                2
                                rooms to rent in
                                1
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/powys/llandrindod_wells">
                                4
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h5><a href="/flatshare/llandudno">Llandudno</a></h5>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/gwynedd/llandudno">
                                14
                                rooms to rent in
                                7
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/gwynedd/llandudno">
                                19
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/newport">Newport</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/gwent/newport">
                                100
                                rooms to rent in
                                53
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/gwent/newport">
                                30
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/shrewsbury">Shrewsbury</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/shropshire/shrewsbury">
                                50
                                rooms to rent in
                                34
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/shropshire/shrewsbury">
                                32
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h4><a href="/flatshare/swansea">Swansea</a></h4>
                    <ul class="bulletlist">
                        <li> <a href="/flatshare/west_glamorgan/swansea">
                                369
                                rooms to rent in
                                146
                                flatshares &amp; house shares
                            </a> </li>
                        <li> <a href="/flatmate/west_glamorgan/swansea">
                                28
                                flatmates / roommates
                            </a> </li>
                    </ul>
                    <h2 class="countryheader">Counties in the UK</h2>
                    <ul class="bulletlist">
                        <li><a href="https://www.spareroom.co.uk/flatshare/aberdeenshire">Aberdeenshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/angus">Angus</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/argyll">Argyll</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/avon">Avon</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/ayrshire">Ayrshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/banffshire">Banffshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/bedfordshire">Bedfordshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/berkshire">Berkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/berwickshire">Berwickshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/buckinghamshire">Buckinghamshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/caithness">Caithness</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/cambridgeshire">Cambridgeshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/channel_isles">Channel Isles</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/cheshire">Cheshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/clackmannanshire">Clackmannanshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/cleveland">Cleveland</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/clwyd">Clwyd</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/cornwall">Cornwall</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_antrim">County Antrim</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_armagh">County Armagh</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_down">County Down</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_durham">County Durham</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_fermanagh">County Fermanagh</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_londonderry">County Londonderry</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/county_tyrone">County Tyrone</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/cumbria">Cumbria</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/derbyshire">Derbyshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/devon">Devon</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/dorset">Dorset</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/dumfriesshire">Dumfriesshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/dunbartonshire">Dunbartonshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/dyfed">Dyfed</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/east_lothian">East Lothian</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/east_sussex">East Sussex</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/essex">Essex</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/fife">Fife</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/gloucestershire">Gloucestershire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/greater_manchester">Greater Manchester</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/gwent">Gwent</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/gwynedd">Gwynedd</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/hampshire">Hampshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/herefordshire">Herefordshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/hertfordshire">Hertfordshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/inverness-shire">Inverness-Shire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_arran">Isle Of Arran</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_barra">Isle Of Barra</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_benbecula">Isle Of Benbecula</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_bute">Isle Of Bute</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_canna">Isle Of Canna</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_coll">Isle Of Coll</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_colonsay">Isle Of Colonsay</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_cumbrae">Isle Of Cumbrae</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_eigg">Isle Of Eigg</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_gigha">Isle Of Gigha</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_harris">Isle Of Harris</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_iona">Isle Of Iona</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_islay">Isle Of Islay</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_jura">Isle Of Jura</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_lewis">Isle Of Lewis</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_man">Isle Of Man</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_mull">Isle Of Mull</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_north_uist">Isle Of North Uist</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_rum">Isle Of Rum</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_scalpay">Isle Of Scalpay</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_skye">Isle Of Skye</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_south_uist">Isle Of South Uist</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_tiree">Isle Of Tiree</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isle_of_wight">Isle Of Wight</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/isles_of_scilly">Isles Of Scilly</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/kent">Kent</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/kincardineshire">Kincardineshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/kinross-shire">Kinross-Shire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/kirkcudbrightshire">Kirkcudbrightshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/lanarkshire">Lanarkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/lancashire">Lancashire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/leicestershire">Leicestershire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/lincolnshire">Lincolnshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/london">London</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/merseyside">Merseyside</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/mid_glamorgan">Mid Glamorgan</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/middlesex">Middlesex</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/midlothian">Midlothian</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/morayshire">Morayshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/nairnshire">Nairnshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/norfolk">Norfolk</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/north_humberside">North Humberside</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/north_yorkshire">North Yorkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/northamptonshire">Northamptonshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/northumberland">Northumberland</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/nottinghamshire">Nottinghamshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/orkney">Orkney</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/oxfordshire">Oxfordshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/peeblesshire">Peeblesshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/perthshire">Perthshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/powys">Powys</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/renfrewshire">Renfrewshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/ross-shire">Ross-Shire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/roxburghshire">Roxburghshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/selkirkshire">Selkirkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/shetland">SHETLAND</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/shetland_islands">Shetland Islands</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/shropshire">Shropshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/somerset">Somerset</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/south_glamorgan">South Glamorgan</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/south_humberside">South Humberside</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/south_yorkshire">South Yorkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/staffordshire">Staffordshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/stirlingshire">Stirlingshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/suffolk">Suffolk</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/surrey">Surrey</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/sutherland">Sutherland</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/tyne_and_wear">Tyne And Wear</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/warwickshire">Warwickshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/west_glamorgan">West Glamorgan</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/west_lothian">West Lothian</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/west_midlands">West Midlands</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/west_sussex">West Sussex</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/west_yorkshire">West Yorkshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/wigtownshire">Wigtownshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/wiltshire">Wiltshire</a></li>
                        <li><a href="https://www.spareroom.co.uk/flatshare/worcestershire">Worcestershire</a></li>
                    </ul>
                </div>
            </div>
            <aside>
                <section>
                    <h4>New to sharing?</h4>
                    <ul>
                        <li><a href="/content/info-advice/flatsharing-faq/">Why flatshare?</a></li>
                        <li><a href="/content/info-landlords/rent-a-room-scheme/">The <em>rent-a-room</em> scheme</a></li>
                        <li><a href="/content/info-flatsharing/shared-house-contents-insurance/">Shared home insurance</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Help topics</h4>
                    <ul>
                        <li><a href="/content/infowebsitehelp/how-the-site-works">What does

                                <img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird">        mean?</a></li>
                    </ul>
                </section>
                <section>
                    <h4>Top flatsharing cities</h4>
                    <ul>
                        <li><a href="/london" title="London flatshare house share and flatmates">London</A></LI>
                        <li><a href="/flatshare/birmingham/" title="Birmingham flatshare house share and flatmates">Birmingham</a></li>
                        <li><a href="/flatshare/bristol" title="Bristol flatshare house share and flatmates">Bristol</a></li>
                        <li><a href="/flatshare/leeds" title="Leeds flatshare house share and flatmates">Leeds</A></li>
                        <li><a href="/flatshare/manchester" title="Manchester flatshare house share and flatmates">Manchester</a></li>
                        <li><a href="/flatshare/edinburgh" title="Edinburgh flatshare house share and flatmates">Edinburgh</a></li>
                        <li><a href="/flatshare/glasgow" title="Glasgow flatshare house share and flatmates">Glasgow</a></li>
                        <li><a href="/flatshare-house-share/uk/" title="UK flatshare house share and flatmates">Other UK towns &amp; cities</A></LI>
                    </ul>
                </section>
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
