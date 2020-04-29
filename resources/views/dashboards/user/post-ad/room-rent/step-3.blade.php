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
    <div class="grid-12-4 " id="mainheader"><div><h1>

                Advertise your room



            </h1></div><div>&nbsp;</div></div>
    <div class="grid-12-4">
        <div>

            <div class="block block_simple block_offered_listing">
                <div class="block_header">
                    <h3>
                        Step 3 of 6</h3>
                </div>

                <div class="block_content">

                    <div id="deposit_warning_popup"></div>



                    <form action="/flatshare/offered-advert3.pl" method="POST" class="pl_step2" name="place_room_offered_st_2">


                        <input type="hidden" name="current_step" value="therooms">



                        <input type="hidden" name="advert_id" value="">
                        <input type="hidden" name="M_step" value="2">
                        <input type="hidden" name="resubmitblock" value="1587912531">
                        <input type="hidden" name="csrf_token" value="3438774a74027ba6a2e6e929467d6c46995b7783,324a60932cb7c19fe091118f4a9a7e69db8cac36,1587912653">
                        <input type="hidden" name="draft_advert_id" value="Q7WGJR18_oKjvfDggQ7HHg">

                        <input type="hidden" name="postcode_id" value="2467">
                        <input type="hidden" name="full_postcode" value="SW2 4QE">
                        <input type="hidden" name="rooms_in_property" value="2">
                        <input type="hidden" name="property_type" value="Flat">

                        <input type="hidden" name="property_type_more" value="">

                        <input type="hidden" name="advertiser_role" value="current flatmate">
                        <input type="hidden" name="advertiser_role_other" value="">
                        <input type="hidden" name="amount" value="">
                        <input type="hidden" name="desc" value="Free Advert">
                        <input type="hidden" name="city_id" value="9">
                        <input type="hidden" name="M_context" value="28">



                        <input type="hidden" name="neighbourhood_id" value="24095">
                        <input type="hidden" name="street_name" value="mmm">


                        <input type="hidden" name="no_of_mins" value="10">
                        <input type="hidden" name="no_of_mins_by" value="walk">
                        <input type="hidden" name="station_id" value="BRIXTONSTATION">






                        <input type="hidden" name="living_room" value="shared">










                        <input type="hidden" name="off_street_parking" value="shared">
                        <input type="hidden" name="garden" value="none">
                        <input type="hidden" name="garage" value="none">
                        <input type="hidden" name="balcony" value="none">
                        <input type="hidden" name="disabled_access" value="N">












                        <fieldset>


                            <legend>The room</legend>


                            <input type="hidden" name="rooms_for_rent" value="1">


                            <input type="hidden" name="roomcount" value="1">



                            <input type="hidden" name="roomstatus1" value="available">


                            <div class="form_row form_row_cost ">
                                <div class="form_label">

                                    Cost of room

                                </div>
                                <div class="form_inputs">
                  <span class="form_input form_text">
                    £
                    <input type="number" name="roomprice1" value="" size="6" step="any">
                  </span>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomper1" value="pw"> per week
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomper1" value="pcm"> per calendar month
                                    </label>

                                </div>
                            </div>
                            <div class="form_row form_row_room_size">
                                <div class="form_label">
                                    Size of room
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomtype1" value="single"> Single                  </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomtype1" checked="" value="double"> Double                  </label>
                                </div>
                            </div>
                            <div class="form_row form_row_amenities">
                                <div class="form_label">
                                    Amenities
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="roomensuite1" value="Y"> En suite
                                        <span class="form_hint">(tick if room has own toilet and/or bath/shower)</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form_row form_row_amenities ">
                                <div class="form_label">
                                    Furnishings
                                </div>
                                <div class="form_inputs">

                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomfurnishings1" value="furnished"> Furnished
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="roomfurnishings1" value="unfurnished"> Unfurnished
                                    </label>

                                </div>
                            </div>

                            <div class="form_row form_row_deposit">
                                <div class="form_label">
                                    Security deposit
                                </div>
                                <div class="form_inputs">
                    <span class="form_input form_text">
                      £ <input type="number" name="roomsecurity_deposit1" value="" step="any" min="0" onkeypress="return event.key >= 0 &amp;&amp; event.key <= 9 || event.which >= 48 &amp;&amp; event.which <= 57">
                        <a class="offered-ad__deposit-limit-link">Check deposit limits</a>
                    </span>
                                </div>
                            </div>




                            <div class="form_row form_row_avail_from ">
                                <div class="form_label">

                                    Available from

                                </div>
                                <div class="form_inputs">
                  <span class="form_input form_select">
                    <select name="day_avail">
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26" selected="">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                  </span>
                                    <span class="form_input form_select">
                    <select name="mon_avail">
                      <option value="01">Jan</option>
                      <option value="02">Feb</option>
                      <option value="03">Mar</option>
                      <option value="04" selected="">Apr</option>
                      <option value="05">May</option>
                      <option value="06">Jun</option>
                      <option value="07">Jul</option>
                      <option value="08">Aug</option>
                      <option value="09">Sep</option>
                      <option value="10">Oct</option>
                      <option value="11">Nov</option>
                      <option value="12">Dec</option>
                    </select>
                  </span>
                                    <span class="form_input form_select">
                    <select name="year_avail">
<option value="2019">2019
</option><option value="2020" selected="">2020
</option><option value="2021">2021
</option><option value="2022">2022
</option></select>

                  </span>
                                </div>
                            </div>
                            <div class="form_row form_row_min_term">
                                <div class="form_label">


                                    Minimum stay


                                </div>
                                <div class="form_inputs">
                  <span class="form_input form_select">
                    <select name="min_term">
                      <option value="0">No minimum</option>
                      <option value="1">1 Month</option>
                      <option value="2">2 Months</option>
                      <option value="3">3 Months</option>
                      <option value="4">4 Months</option>
                      <option value="5">5 Months</option>
                      <option value="6">6 Months</option>
                      <option value="7">7 Months</option>
                      <option value="8">8 Months</option>
                      <option value="9">9 Months</option>
                      <option value="10">10 Months</option>
                      <option value="11">11 Months</option>
                      <option value="12">1 Year</option>
                      <option value="15">1 Year 3 Months</option>
                      <option value="18">1 Year 6 Months</option>
                      <option value="21">1 Year 9 Months</option>
                      <option value="24">2 Years</option>
                      <option value="36">3 Years</option>
                    </select>
                  </span>
                                </div>
                            </div>
                            <div class="form_row form_row_max_term">
                                <div class="form_label">


                                    Maximum stay


                                </div>
                                <div class="form_inputs">
                  <span class="form_input form_select">
                    <select name="max_term">
                      <option value="0">No maximum</option>
                      <option value="1">1 Month</option>
                      <option value="2">2 Months</option>
                      <option value="3">3 Months</option>
                      <option value="4">4 Months</option>
                      <option value="5">5 Months</option>
                      <option value="6">6 Months</option>
                      <option value="7">7 Months</option>
                      <option value="8">8 Months</option>
                      <option value="9">9 Months</option>
                      <option value="10">10 Months</option>
                      <option value="11">11 Months</option>
                      <option value="12">1 Year</option>
                      <option value="15">1 Year 3 Months</option>
                      <option value="18">1 Year 6 Months</option>
                      <option value="21">1 Year 9 Months</option>
                      <option value="24">2 Years</option>
                      <option value="36">3 Years</option>
                    </select>
                  </span>
                                </div>
                            </div>


                            <div class="form_row form_row_short_term">
                                <div class="form_label">
                                    Short Term Lets Considered?
                                    <div class="form_hint">
                                        (i.e. 1 week to 3 months)
                                    </div>
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="short_lets_considered" value="Y">
                                        Tick for Yes
                                    </label>
                                    <span class="form_hint">
                      *Please specify any rent adjustments in your advert description (step 5).
                    </span>
                                </div>
                            </div>


                            <div class="form_row form_row_days_avail">
                                <div class="form_label">
                                    Days available
                                </div>
                                <div class="form_inputs">
                  <span class="form_input form_select">
                    <select name="days_of_wk_available" id="days_of_wk_available">
                      <option value="7 days a week" selected="">7 days a week</option>
                      <option value="Mon to Fri only">Mon to Fri only</option>
                      <option value="Weekends only">Weekends only</option>
                    </select>
                  </span>
                                </div>
                            </div>

                            <div class="form_row form_row_ref_req">
                                <div class="form_label">
                                    References required?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="references_needed" value="Y"> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="references_needed" checked="" value="N"> No
                                    </label>
                                </div>
                            </div>
                            <div class="form_row form_row_dss ">
                                <div class="form_label">
                                    Housing Benefit considered?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="dss" value="Y"> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="dss" value="N"> No
                                    </label>
                                </div>
                            </div>






                            <div class="form_row form_row_bills_inc">
                                <div class="form_label">
                                    Bills included
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="Yes"> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="No"> No
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="bills_inc" value="Some"> Some
                                    </label>
                                </div>
                            </div>
                            <div class="form_row form_row_broadband">
                                <div class="form_label">
                                    Broadband included?
                                </div>
                                <div class="form_inputs">
                                    <label class="form_input form_radio">
                                        <input type="radio" name="broadband" value="Y"> Yes
                                    </label>
                                    <label class="form_input form_radio">
                                        <input type="radio" name="broadband" value="N"> No
                                    </label>
                                </div>
                            </div>






                            <div class="form_row ">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <div class="btn-wrapper">


                                        <div><a href="{{route('User.Room-rent-4')}}" class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</a>								</div>
                                        <div class="btn-wrapper__back-btn">
                                            <input class="button button--secondary" type="submit" name="prev_step" value="Back">								</div>

                                    </div>
                                </div>
                            </div>


                        </fieldset>













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
                        <input type="hidden" name="theproperty" value="">
                        <input type="hidden" name="therooms" value="yes">
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
