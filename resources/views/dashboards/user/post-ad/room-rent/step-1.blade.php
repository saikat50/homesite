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
        <div class="grid-12-4 " id="mainheader"><div><h1>Advertise your room</h1></div><div>&nbsp;</div></div>
        <div class="grid-12-4" >
            <div>
                <div class="block block_simple block_offered_listing">
                    <div class="block_header">
                        <h3>
                            Step 1

                            of 6


                        </h3>
                    </div>
                    <div class="block_content">

                        <form action="/flatshare/find-postcode3.pl" method="GET" class="pl_step1" name="place_room_offered_st_1">


                            <fieldset>
                                <legend>

                                    Get started with your
                                    free

                                    advert



                                </legend>

                                <div class="form_row form_row_rooms_for_rent">
                                    <div class="form_label">
                                        I have
                                    </div>
                                    <div class="form_inputs">
					<span class="form_input form_select">
						<select name="rooms_for_rent">
							<option value="1">1 room for rent</option>
							<option value="2">2 rooms for rent</option>
							<option value="3">3 rooms for rent</option>
							<option value="4">4 rooms for rent</option>
							<option value="5">5 rooms for rent</option>
							<option value="6">6 rooms for rent</option>
							<option value="7">7 rooms for rent</option>
							<option value="8">8 rooms for rent</option>
							<option value="9">9 rooms for rent</option>
							<option value="10">10 rooms for rent</option>
							<option value="11">11 rooms for rent</option>
							<option value="12">12 rooms for rent</option>
						</select>
					</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_property_type">
                                    <div class="form_label">


                                        Size &amp; type of property

                                    </div>
                                    <div class="form_inputs">
				<span class="form_input form_select">
					<select name="rooms_in_property">

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
				</span>
                                        <span class="form_input form_select">
					<select name="property_type">
						<option value="Flat" SELECTED >Flat/Apartment</option>
						<option>House</option>
						<option>Property</option>
					</select>
				</span>
                                    </div>
                                </div>


                                <div class="form_row form_row_occupants">
                                    <div class="form_label">
                                        There are already
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_text">
							<select name="occupants">
								<option value="0">0</option>
								<option value="1" SELECTED  selected>1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
							</select>
							occupants in the property
						</span>
                                    </div>
                                </div>




                                <div id="postcodeWrapper" class="form_row form_row_postcode">
                                    <div class="form_label">

                                        Postcode of property

                                        <div class="form_hint">
                                            (e.g. SE15 8PD)
                                        </div>
                                    </div>
                                    <div class="form_inputs">
				<span class="form_input form_text">
					<input type="text" name="postcode" value="">				</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_role">
                                    <div class="form_label">
                                        I am a
                                    </div>
                                    <div class="form_inputs">

                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="live in landlord">
                                            Live in landlord
                                            <span class="form_hint">(I own the property and live there)</span>
                                        </label>
                                        <br>

                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="live out landlord">
                                            Live out landlord
                                            <span class="form_hint">(I own the property but don't live there)</span>
                                        </label>
                                        <br>

                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="current flatmate">
                                            Current tenant/flatmate
                                            <span class="form_hint">(I am living in the property)</span>
                                        </label>
                                        <br>

                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="agent">
                                            Agent
                                            <span class="form_hint">(I am advertising on a landlord's behalf)</span>
                                        </label>
                                        <br>

                                        <label class="form_input form_radio">
                                            <input type="radio" name="advertiser_role" value="former flatmate">
                                            Former flatmate
                                            <span class="form_hint">(I am moving out and need someone to replace me)</span>
                                        </label>
                                        <br>


                                        <div id="advertiser_role_other" style="display:none;">
                                            <label class="form_input form_radio">
                                                <input type="radio" name="advertiser_role" value="other">
                                                Other:
                                                <span class="form_hint"><input type="text" name="advertiser_role_other" value=""></span>
                                            </label>
                                            <br>
                                        </div>
                                    </div>
                                </div>





                                <div class="form_row">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <input type="hidden" name="scp" value="N">
                                        <input type="hidden" name="sale_or_rent" value="rental">
                                        <input type="hidden" name="action" value="lookuppostcode">
                                        <input type="hidden" name="amount" value="">
                                        <input type="hidden" name="desc" value="Free Advert">
                                        <input type="hidden" name="M_context" value="28">
                                        <input type="hidden" name="information" value="full">

                                        <input type="hidden" name="current_step" value="theproperty">

                                        <input type="hidden" name="resubmitblock" value="1587911642">
                                        <div class="form_input form_button">
                                            <a href="{{route('User.Room-rent-2')}}" class="button" type="submit" name="submit">Continue</a>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                        </form>

                    </div>
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

        <div id="lookup_modal"></div>

    </main>

    @endsection
