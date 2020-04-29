@extends('layouts.user.master')

@section('page-css')


@endsection

@section('sub-nav')

    @include('layouts.user.sub-nav.post-ad')

@endsection


@section('content')

    </div>
    </header>
<main id="spareroom" class="wrap">

    <div class="grid-4-8-4 " id="mainheader"><div>&nbsp;</div><div><h1>
                Advertise your Room to
                Let


            </h1></div><div>&nbsp;</div></div>


    <div class="grid-4-8-4">

        <aside>
            <div id="testimonials">
                <blockquote class="testimonial"><p>A totally pain free exercise and it cost us nothing! Many thanks for making my life so much easier financially and in terms of finding a tenant</p><footer><cite>Steve Musgrove</cite></footer></blockquote>              </div>
        </aside>

        <div id="maincontent">

            <div class="listing_options">


                <h2>What are your options?</h2>

                <div class="grid-4">
                    <div class="block block_free">
                        <div class="block_header">
                            <h3>Free Ads</h3>
                        </div>
                        <div class="block_content">
                            <ul class="bulletlist points">
                                <li>
                                    Advertise your room on the UK's busiest flatshare site.
                                </li>
                                <li>Inclusion in daily email alerts to room seekers.</li>
                                <li>Receive email alerts listing room seekers looking in your area.</li>
                                <li>All the benefits of SpareRoom's unique safety and scam protection features.</li>
                                <li>Free access to SpareRoom's market-leading customer service support centre.</li>

                            </ul>

                            <p class="place_an_ad_now">
                                <a class="button" href="{{route('User.Room-rent-1')}}">Post an ad now</a>
                            </p>

                        </div>
                    </div>
                    <div class="block block_bold">
                        <div class="block_header">
                            <h3>Bold Ads</h3>
                        </div>
                        <div class="block_content">
                            <ul class="bulletlist points">
                                <li>
                                    <b class="in_short">Rent your room faster</b>
                                    Bold Ads enjoy all the benefits of a free ad, plus...
                                </li>
                                <li>
                                    <b class="in_short">Double your enquiries</b>
                                    Bold Ads get (on average) twice as many enquiries.
                                </li>
                                <li>
                                    <b class="in_short">Free for ALL to contact you</b>
                                    Bold Ads can be contacted from day one without the user requiring Early Bird access.
                                </li>
                                <li>
                                    <b class="in_short">Keep your ad near the top of the listings</b>
                                    Bold Ads are ranked higher in the search results than Free Ads.
                                </li>
                                <li>
                                    <b class="in_short">Higher visibility</b>
                                    Bold Ads stand out on the search results page.
                                </li>
                                <li>
                                    <b class="in_short">
                                        Includes
                                        <span class="tooltip earlyBird multiline_tooltip" tabindex="-1"><span class="tooltip_item">
<img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird">Early Bird Access</span>&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Early Bird Access is just one benefit of upgrading. With it you can contact all ads on the site as soon as they appear - otherwise you'll have to wait 7 days before you can contact any ads with the Early Bird icon. <a href="/content/infowebsitehelp/how-the-site-works" title="About Early Bird Access">Find out more »</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span>						</b>
                                    so you can contact all Room Wanted advertisers
                                </li>
                            </ul>

                            <p class="place_an_ad_now"><a class="button" href="{{route('User.Room-rent-1')}}">Post an ad now</a>				</p>
                        </div>
                    </div>
                </div>
                <section>
                    <h2>Pricing and further benefits of upgrading to Bold</h2>
                    <p>
                        <strong>Upgrading also gets you Early Bird Access...</strong>

                        <img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird">			</p>

                    <h3>Have a room to fill?</h3>
                    <p>Early Bird Access lets you contact all Room Wanted Ads. Pro-active landlords who contact room seekers fill their rooms faster than those who sit back and wait for enquiries.</p>
                    <h3>Contact all ads</h3>
                    <p>Early Bird Access means there are no restrictions on which ads you can contact.</p>

                    <h3>Need a room?</h3>
                    <p>Competition for good rooms is fierce, particularly in busy areas. Early Bird Access gives you a 7 day head start.</p>

                    <ul class="bulletlist pricelist">
                        <li>1 week: <strong>£10.99</strong></li>
                        <li>2 weeks: <strong>£21.99</strong></li>
                        <li>4 weeks: <strong>£24.99</strong></li>
                        <li>6 months: <strong>£99</strong></li>
                    </ul>

                    <blockquote>
                        <p class="quote">
                            Had a call literally 30 mins after upgrading my listing. Got a great housemate and all very easy.  Will definitely use again!!
                        </p>
                        <p class="author">
                            Jon Price
                        </p>
                    </blockquote>

                </section>

                <section style="display: block!important;" data-jspopup="exampleListing" id="exampleListing" class="listing-results--example listing-results">
                    <h2 class="title-bold">What a bold advert looks like</h2>
                    <div>
                        <p>How your upgraded ad will look in the search results  - enhanced for better visibility</p>

                        <article class="panel-listing-result listing-bold  "><header class="desktop"><strong class="listingPrice">£1,000 <abbr title="per calendar month">pcm</abbr></strong><h1> Beautiful Room to Let </h1><div class="pricingInfo"><em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em><em class="listingPriceDetails"></em></div></header>  <header class="mobile">
                                <h1>  Beautiful Room to Let </h1>

                            </header><figure><img src="https://assets.spareroom.co.uk/img/spareroom/v4/examples/offeredAd.jpg" alt="example"><p class="media-details"><span><i class="fas fa-camera"></i> 3</span><span><i class="fas fa-video"></i> 1 </span></p></figure><div class="infoLabels"><mark class="new-today"> New today</mark></div>  <div class="pricingInfo mobile">
                                <em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em>
                                <strong class="listingPrice">
                                    £1,000 <abbr title="per calendar month">pcm</abbr>      </strong>
                                <em class="listingPriceDetails">
                                </em>
                            </div><div class="listing-results-content desktop"><div class="advertDescription"><p class="description"> A fully furnished room with natural light, you will love the view of the city from the balcony. </p><strong>Available now</strong></div></div>
                            <footer class="status_container"><span class="freeContact status"><span> Free to Contact </span></span><span class="tooltip example-save-button" tabindex="-1"><span class="tooltip_item"><span class="anchor_text"><i class="far fa-star"></i><span> Save</span></span><span class="tooltip_box"><span class="tooltip_text">Add this to your 'saved ads' list for quick reference in future. You'll find your saved ad lists under the 'search' tab in the main menu</span><span class="tooltip_arrow">&nbsp;</span></span></span><span class="tooltip_background" tabindex="-1"></span></span><span class="more desktop">More info</span></footer>
                        </article>
                    </div><div class="current-example__container">
                        <p>How your ad currently appears in the search results.</p>

                        <article class="panel-listing-result listing-free  "><header class="desktop"><strong class="listingPrice">£1,000 <abbr title="per calendar month">pcm</abbr></strong><h1> Beautiful Room to Let </h1><div class="pricingInfo"><em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em><em class="listingPriceDetails"></em></div></header>  <header class="mobile">
                                <h1>  Beautiful Room to Let </h1>

                            </header><figure><img src="https://assets.spareroom.co.uk/img/spareroom/v4/examples/offeredAd.jpg" alt="example"><p class="media-details"><span><i class="fas fa-camera"></i> 3</span><span><i class="fas fa-video"></i> 1 </span></p></figure><div class="infoLabels"><mark class="new-today"> New today</mark></div>  <div class="pricingInfo mobile">
                                <em class="shortDescription">Double room<span class="listingLocation">Greenwich (SE10)</span></em>
                                <strong class="listingPrice">
                                    £1,000 <abbr title="per calendar month">pcm</abbr>      </strong>
                                <em class="listingPriceDetails">
                                </em>
                            </div><div class="listing-results-content desktop"><div class="advertDescription"><p class="description"> A fully furnished room with natural light, you will love the view of the city from the balcony. </p><strong>Available now</strong></div></div>
                            <footer class="status_container"><span class="earlyBird status desktop"><span class="tooltip earlyBird" tabindex="-1"><span class="tooltip_item">
<img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird">Early Bird</span>&nbsp;<i class="fas fa-info-circle"></i><span class="tooltip_box"><span class="tooltip_text">Early Bird Access is just one benefit of upgrading. With it you can contact all ads on the site as soon as they appear - otherwise you'll have to wait 7 days before you can contact any ads with the Early Bird icon. <a href="/content/infowebsitehelp/how-the-site-works" title="About Early Bird Access">Find out more »</a></span><span class="tooltip_arrow">&nbsp;</span></span><span class="tooltip_background" tabindex="-1"></span></span></span><span class="earlyBird status mobile">Early Bird</span><span class="tooltip example-save-button" tabindex="-1"><span class="tooltip_item"><span class="anchor_text"><i class="far fa-star"></i><span> Save</span></span><span class="tooltip_box"><span class="tooltip_text">Add this to your 'saved ads' list for quick reference in future. You'll find your saved ad lists under the 'search' tab in the main menu</span><span class="tooltip_arrow">&nbsp;</span></span></span><span class="tooltip_background" tabindex="-1"></span></span><span class="more desktop">More info</span></footer>
                        </article>
                    </div></section>

                <section>


                    <blockquote style="overflow: inherit!important;">
                        <p class="quote">
                            We advertise on a number of different websites and in other media trying to find and target potential tenants for our rooms and consistently Spareroom provides not only the highest amount of enquiries but also the highest quality as well. It certainly provides the best results for us.
                        </p>
                        <p class="author">
                            Neil Mansell, Franchise Partner &amp; Mentor, Platinum Property Partners LLP
                        </p>
                    </blockquote>

                    <blockquote>
                        <p class="quote">
                            SpareRoom is awesome. I now have a viewing every 15mins from 5.45pm until 9pm tomorrow. If both rooms aren't let I'll eat my deposit receipt!
                        </p>
                        <p class="author">
                            Martin Skinner
                        </p>
                    </blockquote>


                </section>
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
                        Mon to Fri: 9am – 8.30pm
                        <br>
                        Weekends: 10am – 7.30pm
                    </p>
                    <div data-livechat=""></div>

                </div>
            </section>
        </aside>

    </div>
</main>

    @endsection
