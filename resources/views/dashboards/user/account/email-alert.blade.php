
@extends('layouts.user.master')

@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/css/email-alerts1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/email-alerts2.css')}}">

    <style>
        /* grid adjusts */
        div.grid-4 {
            display: -moz-flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }
        div.grid-4 > form:nth-child(3n + 0) {
            margin-right: 0;
            min-width: 170px;
        }
        /*
        form overrites
        TODO: this file needs to be revised when the new style for the forms are created;
      */
        .edit-my-details legend,
        .email-preferences legend {
            background: transparent;
            padding: 0;
            margin: 0;
            font-weight: 500;
            color: #5e5e5e;
            font-size: 13px;
            font-size: 0.8667rem;
        }
        .edit-my-details legend h4,
        .email-preferences legend h4 {
            display: inline-block;
        }
        .edit-my-details label,
        .email-preferences label {
            font-weight: 500;
            display: block;
            font-size: 13px;
            font-size: 0.86667rem;
            line-height: 1.5385;
            color: #5e5e5e;
        }
        .edit-my-details label.form_checkbox,
        .email-preferences label {
            font-weight: normal;
        }
        .edit-my-details input,
        .email-preferences input {
            box-sizing: border-box;
            margin-bottom: 16px;
            font-size: 13px;
            font-size: 0.8667rem;
        }
        .edit-my-details input[type="checkbox"],
        .email-preferences input[type="checkbox"],
        .email-preferences input[type="radio"] {
            width: 16px;
            margin-bottom: 0;
            display: inline-block;
        }
        .edit-my-details .panel {
            position: relative;
            padding-bottom: 54px;
        }
        .edit-my-details .panel .button button--secondary,
        .edit-my-details .panel .button-facebook {
            position: absolute;
            bottom: 16px;
            left: 16px;
        }
        .edit-my-details .panel .form_checkbox {
            font-weight: normal;
        }
        .edit-my-details .panel .netcred_symbol {
            position: absolute;
            top: 16px;
            right: 16px;
            width: 25px;
        }
        .msg.notice {
            margin: 0 0 24px;
            width: 100%;
            box-sizing: border-box;
        }
        .edit-details-saved-searches li {
            float: left;
            width: 50%;
            font-weight: normal;
        }
        .edit-details-saved-searches li label {
            font-weight: normal;
        }
        .section-separator > fieldset {
            margin-bottom: 16px;
            padding-bottom: 16px;
            border-bottom: 1px solid #d5d5d5;
            overflow: hidden;
        }
        .section-separator > div:last-child {
            margin-bottom: 0;
            border-bottom: 0;
            padding-bottom: 0;
            overflow: visible;
        }
        .email-preferences form h3 {
            line-height: 1.6;
            margin: 0 0 16px 0;
            color: #003d5d;
        }
        .email-preferences .edit_details_saved_searches {
            font-size: 0;
        }
        .email-preferences .edit_details_saved_searches strong {
            display: inline-block;
            font-size: 13px;
            font-size: 0.813em;
            line-height: 1.5385;
        }
        .email-preferences form ul {
            margin: 0;
        }
        .email-preferences form ul li {
            margin-top: 16px;
            display: inline-block;
            width: 50%;
            font-size: initial;
        }
        /* stop the floating after the list */

        br {
            clear: left;
        }
        .grid-12-4 .grid-4 > form:nth-child(3n + 3) {
            margin-right: 5px;
        }
        .ie8 .grid-12-4 .grid-4 > form {
            max-width: 170px;
            min-height: 224px;
        }
        .ie9 .grid-12-4 .grid-4 > form {
            max-width: 204px;
            min-height: 224px;
        }
        .edit-my-details input {
            width: 100%;
        }
        .profile-preference__setting {
            margin-bottom: 16px;
        }
        .profile-preferences__form_label {
            font-weight: 500;
            display: block;
            font-size: 13px;
            font-size: 0.86667rem;
            line-height: 1.5385;
            color: #5e5e5e;
        }
        .profile-photo {
            max-width: 100%;
        }
        #changeStatus .form_checkbox:last-child {
            margin-bottom: 16px;
        }
    </style>

    @endsection

    @section('sub-nav')

    @include('layouts.user.sub-nav.account')

    @endsection

@section('content')

    </div>
    </header>

    <main id="spareroom" class="wrap"><div class="grid-12-4 " id="mainheader"><div><h1>Email alerts - Saikat Jahan</h1></div><div>&nbsp;</div></div>    <div class="grid-12-4">
            <div>



                <section class="email-preferences panel">

                    <form action="/flatshare/mydetails.pl" method="POST" class="section-separator" id="alerts">
                        <input type="hidden" name="view" value="email_preferences">
                        <h3>Change your email preferences</h3>
                        <p class="msg notice">Are you looking for your advert email alerts? Please find them under <a href="/flatshare/mylistings.pl">edit</a> of each advert.</p>

                        <fieldset>
                            <legend class="title-bold">Posted ads <span class="form_hint">(Email alerts of matching ads based on criteria in your posted ads)</span></legend>
                            <div class="">
                                <input type="hidden" name="edit_other" value="alerts_promo_emails_and_autoresponders">
                                <label class="form_checkbox">
                                    <input type="checkbox" name="emailnotify" CHECKED  value="Y">
                                    Receive Daily (summary) alerts?
                                </label>
                                <label class="form_checkbox">
                                    <input type="checkbox" name="emailnotify_justin" value="Y">
                                    Receive Instant alerts?
                                </label>
                            </div>
                        </fieldset>
                        <fieldset  id="autoresp">
                            <legend class="title-bold">Other mailing lists you are subscribed to</legend>
                            <div class=" edit_other_mailing_lists">

                                <label class="form_checkbox">
                                    <input type="checkbox" name="emailnewsletters" CHECKED  value="Y">
                                    Occasional newsletters
                                </label>
                                <label class="form_checkbox">
                                    <input type="checkbox" name="emailtipsandpromotions" CHECKED  value="Y">
                                    Tips, info and advice
                                </label>
                            </div>
                        </fieldset>
                        <fieldset id="email-frequency">
                            <legend class="title-bold">New message received <span class="form_hint"> (When other people contact you about your advert) </span></legend>
                            <div class="">
                                <strong>When should we send you an email ?</strong>
                                <label class="form_checkbox">
                                    <input type="radio"  name="new_message_email" CHECKED  value="IMMEDIATELY">
                                    Immediately
                                </label>
                                <label class="form_checkbox">
                                    <input type="radio"  name="new_message_email" value="EVERY_DAY">
                                    Once per day
                                </label>
                                <label class="form_checkbox">
                                    <input type="radio"  name="new_message_email" value="EVERY_2_DAYS">
                                    Every 2 days
                                </label>
                                <label class="form_checkbox">
                                    <input type="radio"  name="new_message_email" value="NEVER">
                                    Never
                                </label>
                            </div>
                        </fieldset>
                        <fieldset>
                            <legend class="title-bold">New interest shown <span class="form_hint"> (when other people are interested in your advert) </span></legend>
                            <label class="">
                                <input type="checkbox" name="new_interest_email" CHECKED  value="IMMEDIATELY" id="new-interest-email">
                                Receive New interest email alerts ?
                            </label>
                        </fieldset>
                        <div class="edit_renewal_emails">
                            <h4>Renewal Emails etc</h4>
                            <div class="">
                                <p> The vast majority of emails you receive from us are directly related to your advertising on the site. If you
                                    <a href="/flatshare/mylistings.pl">deactivate your advert</a> they will stop.</p>
                            </div>
                        </div><button class="button button--secondary" type="submit" name="submit">Save changes</button></form>            </section>


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
