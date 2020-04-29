
@extends('layouts.user.master')

@section('page-css')


    <style>
        #popup_disclaimer {
            position: fixed;
            right: 0;
            left: 0;
            top: 0;
            background: #FFF;
            color: #5E5E5E;
            overflow: auto;
            min-width: initial;
            font-family: normal "Quicksand", sans-serif;
            font-size: 16px;
            padding: 10px;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
            z-index: 1000;
            height: 100vh;
            display: flex;
            flex-direction: column
        }

        .popup_disclaimer__close {
            cursor: pointer;
            display: block;
            text-align: right;
            padding: 10px
        }

        .popup_disclaimer__title {
            font-size: 30px
        }

        .popup_disclaimer__content {
            flex: 1
        }

        .popup_disclaimer__list {
            list-style: none;
            margin: 0;
            padding: 0
        }

        .popup_disclaimer__subtitle {
            margin-bottom: 0;
            padding-bottom: 0;
            padding-top: 20px
        }

        .popup_disclaimer__button-wrapper {
            padding: 15px 0;
            margin-bottom: 10px
        }

        @media (min-width:966px) {
            #popup_disclaimer {
                top: 15%;
                margin-left: auto;
                margin-right: auto;
                padding: 25px 37px;
                height: auto;
                max-width: 600px;
                font-size: 15px
            }
            .popup_disclaimer__close {
                position: absolute;
                right: 20px;
                top: 20px;
                font-size: 20px;
                padding: 0
            }
            .popup_disclaimer__list {
                list-style: none;
                margin-left: 0
            }
            .popup_disclaimer__button-wrapper {
                display: flex;
                width: 50%;
                margin-left: auto;
                margin-right: auto;
                padding-top: 10px;
                margin-bottom: 0
            }
        }

        .btn-wrapper {
            display: flex;
            justify-content: space-between
        }

        .btn-wrapper__back-btn {
            order: -1
        }

        .offered-ad__deposit-limit-link {
            cursor: pointer;
            margin-left: 5px
        }
    </style>

@endsection

@section('sub-nav')

@include('layouts.user.sub-nav.post-ad')

@endsection

@section('content')

</div>
</header>

<main id="spareroom" class="wrap">
    <div class="grid-12-4 " id="mainheader">
        <div>
            <h1>Advertise your flat or house for rent</h1></div>
        <div>&nbsp;</div>
    </div>
    <div class="grid-12-4">
        <div>
            <div class="block block_simple block_offered_listing">
                <div class="block_header">
                    <h3>
                        Step 1



                    </h3> </div>
                <div class="block_content">
                    <form action="/flatshare/find-postcode3.pl" method="GET" class="pl_step1" name="place_whole_property_offered_st_1">
                        <fieldset>
                            <legend> Get started with your free advert </legend>
                            <div class="form_row form_row_property_type">
                                <div class="form_label"> I have </div>
                                <div class="form_inputs"> <span class="form_input form_select">
					<select name="rooms_in_property">

							<option value="0">Studio</option>
							<option value="1" selected="">1 bed</option>

						<option value="2">2 bed</option>
						<option value="3">3 bed</option>
						<option value="4">4 bed</option>
						<option value="5">5 bed</option>
						<option value="6">6 bed</option>
						<option value="7">7 bed</option>
						<option value="8">8 bed</option>
						<option value="9">9 bed</option>
						<option value="10">10 bed</option>
						<option value="11">11 bed</option>
						<option value="12">12 bed</option>
					</select>
				</span> <span class="form_input form_select">
					<select name="property_type">
						<option value="Flat" selected="">Flat/Apartment</option>
						<option>House</option>
						<option>Property</option>
					</select>
				</span> </div>
                            </div>
                            <div class="form_row form_row_rent">
                                <div class="form_label"> Rent </div>
                                <div class="form_inputs"> <span class="form_input form_text">
							£
							<input type="number" name="scp_price" value="" step="any">
						</span> <span class="form_input form_select">
							<select name="scp_per">
								<option value="" selected="">Per week or month?...</option>
								<option value="pcm">per calendar month</option>
								<option value="pw">per week</option>
							</select>
						</span>
                                    <input type="hidden" name="occupants" value="0"> </div>
                            </div>
                            <div id="postcodeWrapper" class="form_row form_row_postcode">
                                <div class="form_label"> Postcode of property
                                    <div class="form_hint"> (e.g. SE15 8PD) </div>
                                </div>
                                <div class="form_inputs"> <span class="form_input form_text">
					<input type="text" name="postcode" value="">				</span> </div>
                            </div>
                            <div class="form_row form_row_role">
                                <div class="form_label"> I am a </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="live out landlord"> Live out landlord <span class="form_hint">(I own the property but don't live there)</span> </label>
                                    <br>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="agent"> Agent <span class="form_hint">(I am advertising on a landlord's behalf)</span> </label>
                                    <br>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="advertiser_role" value="current tenants"> Current tenant(s) <span class="form_hint">(I want to move out but need someone to replace me)</span> </label>
                                    <br>
                                    <div id="advertiser_role_other" style="display:none;">
                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="other"> Other: <span class="form_hint"><input type="text" name="advertiser_role_other" value=""></span> </label>
                                        <br> </div>
                                </div>
                            </div>
                            <div class="form_row">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <input type="hidden" name="scp" value="Y">
                                    <input type="hidden" name="sale_or_rent" value="rental">
                                    <input type="hidden" name="action" value="lookuppostcode">
                                    <input type="hidden" name="amount" value="">
                                    <input type="hidden" name="desc" value="Free Advert">
                                    <input type="hidden" name="M_context" value="28">
                                    <input type="hidden" name="information" value="full">
                                    <input type="hidden" name="current_step" value="theproperty">
                                    <input type="hidden" name="resubmitblock" value="1587924645">
                                    <div class="form_input form_button">
                                        <a href="{{route('User.Property-Step2')}}" class="button" type="submit" name="submit">Continue</a>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <aside>
            <h4>Help topics</h4>
            <ul>
                <li><a href="/content/info-landlords/scp-rooms-difference/">What's the difference between "self contained flat or house for rent" and "room(s) for rent"?</a></li>
            </ul>
            <section class="panel panel-header-closed need_help">
                <header>
                    <h3>Need any help?</h3> </header>
                <div>
                    <p class="need_help_contact"> @ Contact us by <a href="/contact.pl" rel="nofollow" title="Contact us by email">email</a> or
                        <br> <i class="fas fa-phone"></i> <a href="tel:+441617681162"> Call us on 0161 768 1162</a> </p>
                    <p class="need_help_hours"> Mon to Fri: 9am – 8.30pm
                        <br> Weekends: 10am – 7.30pm </p>
                    <div data-livechat=""></div>
                </div>
            </section>
        </aside>
    </div>
    <div id="lookup_modal"></div>

</main>


@endsection
