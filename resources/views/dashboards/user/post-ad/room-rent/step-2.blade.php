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
    <div class="grid-12-4 " id="mainheader"><div><h1>

                Advertise your room



            </h1></div><div>&nbsp;</div></div>
    <div class="grid-12-4">
        <div>

            <div class="block block_simple block_offered_listing">
                <div class="block_header">
                    <h3>
                        Step 2 of 6</h3>
                </div>

                <div class="block_content">

                    <div id="deposit_warning_popup"></div>



                    <form action="/flatshare/offered-advert3.pl" method="POST" class="pl_step2"   name="place_room_offered_st_2">


                        <input type="hidden" name="current_step" value="theproperty">



                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1587912045">
                        <input type="hidden" name="csrf_token" value="ac18dd6ba739b7c218568bca8dee4637ffa7910b,082884290e65026af3cda7451a60f9c225b78a21,1587912110">
                        <input type="hidden" name="draft_advert_id" value="Q7WGJR18_oKjvfDggQ7HHg">

                        <input type="hidden" name="postcode_id" value="2276">
                        <input type="hidden" name="full_postcode" value="SE15 8PD">
                        <input type="hidden" name="rooms_in_property" value="2">
                        <input type="hidden" name="property_type" value="Flat">

                        <input type="hidden" name="property_type_more" value="">

                        <input type="hidden" name="advertiser_role" value="former flatmate">
                        <input type="hidden" name="advertiser_role_other" value="">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="city_id" value="9">
                        <input type="hidden" name="M_context" value="28">


                        <fieldset>
                            <legend>More about the property</legend>
                            <div class="form_row form_row_area_drop">
                                <div class="form_label">

                                    Area


                                </div>
                                <div class="form_inputs">
            <span class="form_input form_select">
              <select name="neighbourhood_id" id="neighbourhood_id"><option value="" SELECTED >Select area...</option>
<option value="22345">London SE15
</option>
<option value="22341">Nunhead
</option>
<option value="22343">Peckham
</option>
<option value="22342">Peckham Rye
</option>
<option value="22344">Rye Lane
</option>
</select>
            </span>
                                    <input type="hidden" name="expected_min_price_pw" value="59">
                                    <input type="hidden" name="expected_max_price_pw" value="254">
                                </div>
                            </div>
                            <div class="form_row form_row_street">
                                <div class="form_label">
                                    Street name
                                </div>
                                <div class="form_inputs">
            <span class="form_input form_text">
              <input type="text" name="street_name" value="" maxlength="60">
            </span>

                                </div>
                            </div>        <div class="form_row form_row_postcode">
                                <div class="form_label">
                                    Postcode
                                </div>
                                <div class="form_inputs">
                                    <div class="form_input">
                                        SE15 8PD

                                    </div>
                                </div>
                            </div>

                            <div class="form_row form_row_transport">
                                <div class="form_label">
                                    Transport
                                </div>
                                <div class="form_inputs">
                                    <select name="no_of_mins">
                                        <option value="" SELECTED >Select...</option>
                                        <option value="5">0-5</option>
                                        <option value="10">5-10</option>
                                        <option value="15">10-15</option>
                                        <option value="20">15-20</option>
                                        <option value="25">20-25</option>
                                        <option value="30">25+</option>
                                    </select>              minutes

                                    <select name="no_of_mins_by">
                                        <option value="" SELECTED >Select...</option>
                                        <option value="walk">walk</option>
                                        <option value="by car">by car</option>
                                        <option value="by bus">by bus</option>
                                        <option value="by tram">by tram</option>
                                    </select>

                                    from
                                    <select name="station_id">
                                        <option value="" SELECTED >Select...
                                        <option value="" disabled>------------
                                        <option value="EASTCROYDON">East Croydon
                                        <option value="NUNHEAD">Nunhead
                                        <option value="PECKHAMRYE">Peckham Rye
                                        <option value="QUEENSROADPECKHAM">Queens Road Peckham

                                    </select>
                                </div>
                            </div>









                            <div class="form_row form_row_living_room">
                                <div class="form_label">
                                    Living Room?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="living_room" CHECKED  value="shared"> Yes, there is a shared living room
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="living_room" value="none"> No
                                    </label>
                                </div>
                            </div>






                            <div class="form_row form_row_amenities">
                                <div class="form_label">
                                    Amenities
                                </div>
                                <div class="form_inputs">
                                    <div class="cols cols2">
                                        <div class="col col_first">
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="off_street_parking" value="shared"> Parking
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="garden" value="shared"> Garden/roof terrace
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="garage" value="shared"> Garage
                                            </label>
                                        </div>
                                        <div class="col col_last">
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="balcony" value="shared"> Balcony/patio
                                            </label>
                                            <label class="form_input form_checkbox">
                                                <input type="checkbox" name="disabled_access" value="Y"> Disabled access
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>




                            <div class="form_row ">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <div class="btn-wrapper">

                                        <div><a href="{{route('User.Room-rent-3')}}" class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</a>								</div>


                                    </div>
                                </div>
                            </div>


                        </fieldset>













                        <input type="hidden" name="rooms_for_rent" value="1">
                        <input type="hidden" name="roomcount" value="1">



                        <input type="hidden" name="roomstatus1" value="available">
                        <input type="hidden" name="roomprice1" value="">
                        <input type="hidden" name="roomper1" value="">
                        <input type="hidden" name="roomtype1" value="double">
                        <input type="hidden" name="roomensuite1" value="">


                        <input type="hidden" name="roomfurnishings1" value="">
                        <input type="hidden" name="roomsecurity_deposit1" value="">





                        <input type="hidden" name="day_avail" value="26">
                        <input type="hidden" name="mon_avail" value="04">
                        <input type="hidden" name="year_avail" value="2020">

                        <input type="hidden" name="min_term" value="">
                        <input type="hidden" name="max_term" value="">


                        <input type="hidden" name="short_lets_considered" value="">


                        <input type="hidden" name="days_of_wk_available" value="7 days a week">
                        <input type="hidden" name="references_needed" value="N">
                        <input type="hidden" name="dss" value="none">


                        <input type="hidden" name="bills_inc" value="">


                        <input type="hidden" name="broadband" value="">


















                        <input type="hidden" name="occupants" value="1">

                        <input type="hidden" name="campus_id" value="">
                        <input type="hidden" name="gay_consent" value="N">
                        <input type="hidden" name="gay_lesbian" value="N">
                        <input type="hidden" name="gender" value="">
                        <input type="hidden" name="interests" value="">
                        <input type="hidden" name="lang_id" value="">
                        <input type="hidden" name="max_age" value="NULL">
                        <input type="hidden" name="min_age" value="NULL">
                        <input type="hidden" name="nationality" value="">
                        <input type="hidden" name="pets" value="">
                        <input type="hidden" name="share_type" value="ND">
                        <input type="hidden" name="smoking_current" value="N">


                        <input type="hidden" name="pets_req" value="">
                        <input type="hidden" name="share_type_req" value="">
                        <input type="hidden" name="smoking" value="">


                        <input type="hidden" name="couples" value="">
                        <input type="hidden" name="gay_lesbian_req" value="">
                        <input type="hidden" name="gender_req" value="">
                        <input type="hidden" name="lang_id_req" value="">
                        <input type="hidden" name="max_age_req" value="NULL">
                        <input type="hidden" name="min_age_req" value="NULL">
                        <input type="hidden" name="vegetarians" value="">









                        <input type="hidden" name="ad_title" value="">
                        <input type="hidden" name="ad_text" value="">



                        <input type="hidden" name="first_name" value="Saikat">
                        <input type="hidden" name="last_name" value="Jahan">
                        <input type="hidden" name="display_last_name" value="">
                        <input type="hidden" name="custom_ref" value="">
                        <input type="hidden" name="tel" value="">
                        <input type="hidden" name="display_tel" value="N">




                        <input type="hidden" name="emailnotify" value="Y">
                        <input type="hidden" name="emailnotify_justin" value="N">
                        <input type="hidden" name="emailnotify_justin_max_qty" value="12">
                        <input type="hidden" name="emailnotify_prev" value="Y">
                        <input type="hidden" name="emailnotify_justin_prev" value="N">
                        <input type="hidden" name="emailnotify_justin_max_qty_prev" value="12">







                        <input type="hidden" name="usertype" value="haveashare">
                        <input type="hidden" name="usertype_new" value="haveashare">
                        <input type="hidden" name="ad_type" value="offered">
                        <input type="hidden" name="scp" value="N">
                        <input type="hidden" name="suitableforsharing" value="Y">
                        <input type="hidden" name="sale_or_rent" value="rental">
                        <input type="hidden" name="information" value="full">
                        <input type="hidden" name="theproperty" value="yes">
                        <input type="hidden" name="therooms" value="">
                        <input type="hidden" name="thehousehold" value="">
                        <input type="hidden" name="theadvert" value="">
                        <input type="hidden" name="theaccount" value="">
                        <input type="hidden" name="fees_apply" value="N">


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


</main>


@endsection
