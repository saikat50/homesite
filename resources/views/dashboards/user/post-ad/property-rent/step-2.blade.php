
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
                <h1>

                    Advertise your flat or house for rent



                </h1></div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-12-4">
            <div>
                <div class="block block_simple block_offered_listing">
                    <div class="block_header">
                        <h3>
                            Step 2 of 5</h3> </div>
                    <div class="block_content">
                        <div id="deposit_warning_popup"></div>
                        <form action="/flatshare/offered-advert3.pl" method="POST" class="pl_step2" name="place_whole_property_offered_st_2">
                            <input type="hidden" name="current_step" value="theproperty">
                            <input type="hidden" name="advert_id" value="">
                            <input type="hidden" name="M_step" value="2">
                            <input type="hidden" name="resubmitblock" value="1587930519">
                            <input type="hidden" name="csrf_token" value="64dc1349c8fafa19f8c7b7616b1c5bea87035929,804159beaab6e9afcc9f79e8501188a89e7364fe,1587930519">
                            <input type="hidden" name="draft_advert_id" value="9ec3rYK7pztkIc0rAaLC6A">
                            <input type="hidden" name="postcode_id" value="2276">
                            <input type="hidden" name="full_postcode" value="SE15 8PD">
                            <input type="hidden" name="rooms_in_property" value="1">
                            <input type="hidden" name="property_type" value="Flat">
                            <input type="hidden" name="property_type_more" value="">
                            <input type="hidden" name="advertiser_role" value="live out landlord">
                            <input type="hidden" name="advertiser_role_other" value="">
                            <input type="hidden" name="amount" value="">
                            <input type="hidden" name="desc" value="Free Advert">
                            <input type="hidden" name="city_id" value="9">
                            <input type="hidden" name="M_context" value="28">
                            <fieldset>
                                <legend>More about the property</legend>
                                <div class="form_row form_row_area_drop">
                                    <div class="form_label"> Area </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
              <select name="neighbourhood_id" id="neighbourhood_id"><option value="" selected="">Select area...</option>
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
                                        <input type="hidden" name="expected_max_price_pw" value="254"> </div>
                                </div>
                                <div class="form_row form_row_street">
                                    <div class="form_label"> Street name </div>
                                    <div class="form_inputs"> <span class="form_input form_text">
              <input type="text" name="street_name" value="" maxlength="60">
            </span> </div>
                                </div>
                                <div class="form_row form_row_postcode">
                                    <div class="form_label"> Postcode </div>
                                    <div class="form_inputs">
                                        <div class="form_input"> SE15 8PD </div>
                                    </div>
                                </div>
                                <div class="form_row form_row_transport">
                                    <div class="form_label"> Transport </div>
                                    <div class="form_inputs">
                                        <select name="no_of_mins">
                                            <option value="" selected="">Select...</option>
                                            <option value="5">0-5</option>
                                            <option value="10">5-10</option>
                                            <option value="15">10-15</option>
                                            <option value="20">15-20</option>
                                            <option value="25">20-25</option>
                                            <option value="30">25+</option>
                                        </select> minutes
                                        <select name="no_of_mins_by">
                                            <option value="" selected="">Select...</option>
                                            <option value="walk">walk</option>
                                            <option value="by car">by car</option>
                                            <option value="by bus">by bus</option>
                                            <option value="by tram">by tram</option>
                                        </select> from
                                        <select name="station_id">
                                            <option value="" selected="">Select... </option>
                                            <option value="" disabled="">------------ </option>
                                            <option value="EASTCROYDON">East Croydon </option>
                                            <option value="NUNHEAD">Nunhead </option>
                                            <option value="PECKHAMRYE">Peckham Rye </option>
                                            <option value="QUEENSROADPECKHAM">Queens Road Peckham </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form_row form_row_rent">
                                    <div class="form_label"> Rent </div>
                                    <div class="form_inputs"> <span class="form_input form_text">
                  £ <input type="number" name="scp_price" value="70" step="any">
                </span> <span class="form_input form_select">
                  <select name="scp_per">
                    <option value="">Per week or month?...</option>
                    <option value="pw">per week</option>
                    <option value="pcm" selected="">per calendar month</option>
                  </select>
                </span> </div>
                                </div>
                                <div class="form_row form_row_deposit">
                                    <div class="form_label"> Security deposit </div>
                                    <div class="form_inputs"> <span class="form_input form_text">
                  £ <input type="number" name="security_deposit" value="" step="any" min="0" onkeypress="return event.key >= 0 &amp;&amp; event.key <= 9 || event.which >= 48 &amp;&amp; event.which <= 57">
                    <a class="offered-ad__deposit-limit-link">Check deposit limits</a>
                </span> </div>
                                </div>
                                <div class="form_row form_row_furnishings ">
                                    <div class="form_label"> Furnishings </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_radio">
                                            <input type="radio" name="furnishings" value="furnished"> Furnished </label>
                                        <label class="form_input form_radio">
                                            <input type="radio" name="furnishings" value="partfurnished"> Part furnished </label>
                                        <label class="form_input form_radio">
                                            <input type="radio" name="furnishings" value="unfurnished"> Unfurnished </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_avail_from ">
                                    <div class="form_label"> Available from </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
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
                </span> <span class="form_input form_select">
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
                </span> <span class="form_input form_select">
                  <select name="year_avail">
<option value="2019">2019
</option><option value="2020" selected="">2020
</option><option value="2021">2021
</option><option value="2022">2022
</option></select>

                </span> </div>
                                </div>
                                <div class="form_row form_row_min_term">
                                    <div class="form_label"> Minimum stay </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
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
                  </select>
                </span> </div>
                                </div>
                                <div class="form_row form_row_max_term">
                                    <div class="form_label"> Maximum stay </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
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
                </span> </div>
                                </div>
                                <div class="form_row form_row_short_term">
                                    <div class="form_label"> Short Term Lets Considered?
                                        <div class="form_hint"> (i.e. 1 week to 3 months) </div>
                                    </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="short_lets_considered" value="Y"> Tick for Yes </label> *Please specify any rent adjustments in your advert description (step 5). </div>
                                </div>
                                <div class="form_row form_row_ref_req">
                                    <div class="form_label"> References required? </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_radio">
                                            <input type="radio" name="references_needed" value="Y"> Yes </label>
                                        <label class="form_input form_radio">
                                            <input type="radio" name="references_needed" checked="" value="N"> No </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_dss ">
                                    <div class="form_label"> Housing Benefit considered? </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_radio">
                                            <input type="radio" name="dss" value="Y"> Yes </label>
                                        <label class="form_input form_radio">
                                            <input type="radio" name="dss" value="N"> No </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_amenities">
                                    <div class="form_label"> Amenities </div>
                                    <div class="form_inputs">
                                        <div class="cols cols2">
                                            <div class="col col_first">
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="off_street_parking" value="shared"> Parking </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="garden" value="shared"> Garden/roof terrace </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="garage" value="shared"> Garage </label>
                                            </div>
                                            <div class="col col_last">
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="balcony" value="shared"> Balcony/patio </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="disabled_access" value="Y"> Disabled access </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form_row ">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <div class="btn-wrapper">
                                            <div>
                                                <a href="{{route('User.Property-Step3')}}" class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <input type="hidden" name="roomprice1" value="70">
                            <input type="hidden" name="roomper1" value="pcm">
                            <input type="hidden" name="roomstatus1" value="available">
                            <input type="hidden" name="roomtype1" value="double">
                            <input type="hidden" name="rooms_for_rent" value="1">
                            <input type="hidden" name="prev_rooms_for_rent" value="1">
                            <input type="hidden" name="occupants" value="0">
                            <input type="hidden" name="pets_req" value="">
                            <input type="hidden" name="share_type_req" value="">
                            <input type="hidden" name="smoking" value="">
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
                            <input type="hidden" name="scp" value="Y">
                            <input type="hidden" name="suitableforsharing" value="Y">
                            <input type="hidden" name="sale_or_rent" value="rental">
                            <input type="hidden" name="information" value="full">
                            <input type="hidden" name="theproperty" value="yes">
                            <input type="hidden" name="therooms" value="">
                            <input type="hidden" name="thehousehold" value="">
                            <input type="hidden" name="theadvert" value="">
                            <input type="hidden" name="theaccount" value="">
                            <input type="hidden" name="fees_apply" value="N"> </form>
                    </div>
                </div>
            </div>
            <aside>
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
    </main>


    @endsection
