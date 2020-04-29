
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
                            Step 3 of 5</h3> </div>
                    <div class="block_content">
                        <div id="deposit_warning_popup"></div>
                        <form action="/flatshare/offered-advert3.pl" method="POST" class="pl_step2" name="place_whole_property_offered_st_2">
                            <input type="hidden" name="current_step" value="thehousehold">
                            <input type="hidden" name="advert_id" value="">
                            <input type="hidden" name="M_step" value="2">
                            <input type="hidden" name="resubmitblock" value="1587931228">
                            <input type="hidden" name="csrf_token" value="9f4013f3f8593d3ba4ccc7ddb300048726a5d8be,fb85e88b6b6d15b1bd71d466c468b45ca230d69e,1587931228">
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
                            <input type="hidden" name="neighbourhood_id" value="22345">
                            <input type="hidden" name="street_name" value="">
                            <input type="hidden" name="no_of_mins" value="">
                            <input type="hidden" name="no_of_mins_by" value="">
                            <input type="hidden" name="station_id" value="">
                            <input type="hidden" name="scp_price" value="70">
                            <input type="hidden" name="scp_per" value="pcm">
                            <input type="hidden" name="security_deposit" value="">
                            <input type="hidden" name="furnishings" value="furnished">
                            <input type="hidden" name="day_avail" value="26">
                            <input type="hidden" name="mon_avail" value="04">
                            <input type="hidden" name="year_avail" value="2020">
                            <input type="hidden" name="min_term" value="">
                            <input type="hidden" name="max_term" value="">
                            <input type="hidden" name="short_lets_considered" value="">
                            <input type="hidden" name="references_needed" value="N">
                            <input type="hidden" name="dss" value="Y">
                            <input type="hidden" name="off_street_parking" value="none">
                            <input type="hidden" name="garden" value="none">
                            <input type="hidden" name="garage" value="none">
                            <input type="hidden" name="balcony" value="none">
                            <input type="hidden" name="disabled_access" value="N">
                            <input type="hidden" name="roomprice1" value="70">
                            <input type="hidden" name="roomper1" value="pcm">
                            <input type="hidden" name="roomstatus1" value="available">
                            <input type="hidden" name="roomtype1" value="double">
                            <input type="hidden" name="rooms_for_rent" value="1">
                            <input type="hidden" name="prev_rooms_for_rent" value="1">
                            <input type="hidden" name="occupants" value="0">
                            <fieldset>
                                <legend> Preferences For New Tenant </legend>
                                <div class="form_row form_row_smoking">
                                    <div class="form_label"> Smoking </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                <select name="smoking">
                  <option value="Y">No preference</option>
                  <option value="N">No</option>
                </select>
              </span> </div>
                                </div>
                                <div class="form_row form_row_occupation">
                                    <div class="form_label"> Occupation </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                <select name="share_type_req">
                  <option value="M">No preference</option>
                  <option value="S">Student</option>
                  <option value="P">Professional</option>
                </select>
              </span> </div>
                                </div>
                                <div class="form_row form_row_pets">
                                    <div class="form_label"> Pets considered </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                  <select name="pets_req">
                    <option value="N">No</option>
                    <option value="Y">Yes</option>
                  </select>
                </span> </div>
                                </div>
                                <div class="form_row ">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <div class="btn-wrapper">
                                            <div>
                                                <a href="{{route('User.Property-Step4')}}" class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</a>
                                            </div>
                                            <div class="btn-wrapper__back-btn">
                                                <input class="button button--secondary" type="submit" name="prev_step" value="Back"> </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
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
                            <input type="hidden" name="theproperty" value="">
                            <input type="hidden" name="therooms" value="">
                            <input type="hidden" name="thehousehold" value="yes">
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
