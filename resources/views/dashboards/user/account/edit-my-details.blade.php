@extends('layouts.user.master')

@section('page-css')


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

    <link rel="stylesheet" href="{{asset('assets/css/edit-details.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/edit-details1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/edit-details2.css')}}" />

@endsection

@section('sub-nav')

    @include('layouts.user.sub-nav.account')

@endsection


@section('content')

    </div>
    </header>
    <main id="spareroom" class="wrap">
        <div class="grid-12-4" id="mainheader">
            <div><h1>Edit my details - md asadullah al-galib</h1></div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-12-4">
            <div>
                <section class="edit-my-details">
                    <style>
                        #formMessages {
                            display: none;
                        }
                        .panel h3 {
                            white-space: nowrap;
                        }
                        .panel h3.bold-color {
                            margin-bottom: 16px;
                        }
                        .ie9 .panel h3,
                        .ie8 .panel h3 {
                            font-size: 13px;
                        }
                    </style>
                    <div id="formMessages"></div>
                    <div class="grid-4">
                        <form
                            action="/flatshare/mydetails.pl"
                            id="changeName"
                            method="POST"
                            class="panel"
                        >
                            <input type="hidden" name="view" value="edit_details" />
                            <input
                                type="hidden"
                                name="csrf_token"
                                value="b9cc1792047b659c4e0abf2e554873f3f92f6ceb,4867ff7d3bb02dad4c98b124e62b92a51cc38082,1586689375"
                            />
                            <h3 class="bold-color">Change your name</h3>
                            <div class="">
                                <div>
                                    <label for="first_name">
                                        First Name
                                    </label>
                                    <input
                                        type="text"
                                        name="first_name"
                                        id="first_name"
                                        value="md asadullah"
                                        maxlength="50"
                                        class=""
                                    />
                                    <label for="last_name">
                                        Last Name
                                    </label>
                                    <input
                                        type="text"
                                        name="last_name"
                                        value="al-galib"
                                        maxlength="50"
                                        id="last_name"
                                        class=""
                                    />
                                    <label for="password_confirm">
                                        Your password
                                    </label>
                                    <input
                                        type="password"
                                        name="password_confirm"
                                        value=""
                                        id="password_confirm"
                                        class=""
                                    />
                                    <input type="hidden" name="edit" value="name" />
                                </div>
                                <button
                                    class="button button--secondary form_input"
                                    type="submit"
                                    name="submit"
                                >
                                    Save changes
                                </button>
                            </div>
                        </form>
                        <form
                            action="/flatshare/mydetails.pl"
                            id="changeEmail"
                            method="POST"
                            class="panel"
                        >
                            <input type="hidden" name="view" value="edit_details" />
                            <input
                                type="hidden"
                                name="csrf_token"
                                value="b9cc1792047b659c4e0abf2e554873f3f92f6ceb,4867ff7d3bb02dad4c98b124e62b92a51cc38082,1586689375"
                            />
                            <h3 class="bold-color">Change email address</h3>
                            <div class="">
                                <div>
                                    <label>
                                        Email
                                        <span class="form_hint">
                        (used to log in)
                      </span>
                                    </label>
                                    <input
                                        type="email"
                                        name="email"
                                        value="mdgalibhossain4@gmail.com"
                                        maxlength="255"
                                        class=""
                                    />
                                    <label>
                                        Confirm email
                                    </label>
                                    <input
                                        type="email"
                                        name="email_again"
                                        value="mdgalibhossain4@gmail.com"
                                        maxlength="255"
                                        class=""
                                    />
                                    <label>
                                        Your password
                                    </label>
                                    <input
                                        type="password"
                                        name="password_confirm"
                                        value=""
                                        class=""
                                    />
                                    <input type="hidden" name="edit" value="email" />
                                </div>
                                <button
                                    class="button button--secondary form_input"
                                    type="submit"
                                    name="submit"
                                >
                                    Save changes
                                </button>
                            </div>
                        </form>
                        <form
                            action="/flatshare/mydetails.pl"
                            id="changePassword"
                            method="POST"
                            class="panel"
                        >
                            <input type="hidden" name="view" value="edit_details" />
                            <input
                                type="hidden"
                                name="csrf_token"
                                value="b9cc1792047b659c4e0abf2e554873f3f92f6ceb,4867ff7d3bb02dad4c98b124e62b92a51cc38082,1586689375"
                            />
                            <h3 class="bold-color">Change your password</h3>
                            <div class="">
                                <div>
                                    <label>
                                        Your current password
                                    </label>
                                    <input
                                        type="password"
                                        name="password_confirm"
                                        value=""
                                        class=""
                                    />
                                    <label>Choose new password</label>
                                    <input type="password" name="password" value="" class="" />
                                    <label>
                                        Confirm new password
                                    </label>
                                    <input
                                        type="password"
                                        name="password_again"
                                        value=""
                                        class=""
                                    />
                                    <input type="hidden" name="edit" value="password" />
                                </div>
                                <button
                                    class="button button--secondary form_input"
                                    type="submit"
                                    name="submit"
                                >
                                    Save changes
                                </button>
                            </div>
                        </form>


                        <form
                            action="/flatshare/mydetails.pl"
                            id="changeStatus"
                            method="POST"
                            class="panel"
                        >
                            <input type="hidden" name="view" value="edit_details" />
                            <input type="hidden" name="edit" value="usertype_new" />
                            <input
                                type="hidden"
                                name="csrf_token"
                                value="b9cc1792047b659c4e0abf2e554873f3f92f6ceb,4867ff7d3bb02dad4c98b124e62b92a51cc38082,1586689375"
                            />
                            <h3 class="bold-color">Change your status</h3>
                            <div class="">
                                <label>
                                    What do you use SpareRoom for?
                                </label>
                                <div>
                                    <label class="form_checkbox">
                                        <input
                                            type="checkbox"
                                            name="usertype_new"
                                            checked
                                            value="lookingforashare"
                                        />
                                        I am looking for a flat or house share
                                    </label>
                                    <label class="form_checkbox">
                                        <input
                                            type="checkbox"
                                            name="usertype_new"
                                            value="haveashare"
                                        />
                                        I have a flat or house share
                                    </label>
                                    <label class="form_checkbox">
                                        <input
                                            type="checkbox"
                                            name="usertype_new"
                                            value="makeashare"
                                        />
                                        I'd like to find people to form a new share
                                    </label>
                                </div>
                                <button
                                    class="button button--secondary form_input"
                                    type="submit"
                                    name="submit"
                                >
                                    Save changes
                                </button>
                            </div>
                        </form>
                        <form class="panel">
                            <h3 class="bold-color">Profile preferences</h3>

                            <div class="">
                                <p class="profile-preferences__form_label">
                                    Your profile photo
                                </p>
                                <p>
                                    <img
                                        src="/img/spareroom/v4/icons/profilepic_M.gif"
                                        alt="your photo"
                                        class="profile-photo"
                                    /><br />
                                </p>
                                <a
                                    class="button button--secondary form_input"
                                    title="Edit your profile photo"
                                    href="/flatshare/profile-photos.pl?from=mydetails"
                                >Change photo</a
                                >
                            </div>
                        </form>
                        <form action="/flatshare/verify.pl" method="POST" class="panel">
                            <input type="hidden" name="view" value="edit_details" />
                            <h3 class="bold-color">ID Verification</h3>
                            <div class="">
                                <p>
                                    <img
                                        src="https://assets.spareroom.co.uk/images/spareroom/netcred/netcred-icon.png"
                                        class="netcred_symbol"
                                    />

                                    <span>
                      Get Verified and inspire confidence and trust in those who
                      deal with you.
                    </span>
                                </p>
                                <a
                                    class="button button--secondary form_input"
                                    href="/flatshare/verify.pl?from=mydetails"
                                >Get Verified</a
                                >
                            </div>
                        </form>
                        <form
                            action="/flatshare/mydetails.pl"
                            method="POST"
                            id="linkToFacebook"
                            class="panel"
                        >
                            <input type="hidden" name="view" value="edit_details" />
                            <input
                                type="hidden"
                                name="csrf_token"
                                value="b9cc1792047b659c4e0abf2e554873f3f92f6ceb,4867ff7d3bb02dad4c98b124e62b92a51cc38082,1586689375"
                            />
                            <h3 class="bold-color">Connect to Facebook</h3>

                            <div class="">
                                <p>
                                    Click to connect a Facebook account with the email address
                                    <strong>mdgalibhossain4@gmail.com</strong>.
                                </p>
                                <label></label
                                ><a
                                    class="button button--facebook form_input"
                                    id="fb_login"
                                    title="Connect with Facebook"
                                    data-facebook-connect
                                    href="#"
                                >
                                    <div class="button__content">
                      <span class="button__icon">
                        <i class="fab fa-facebook"></i> </span
                      ><span class="button__text">Link account</span>
                                    </div>
                                </a>
                            </div>
                        </form>
                    </div>
                    <script>
                        (function ($) {
                            var formMessages = $("#formMessages"),
                                localStorageMessage = localStorage.getItem("currentMessage"),
                                viewportHeight = $(window).height();

                            localStorage.removeItem("currentMessage");
                            formMessages.hide();

                            if (typeof Storage != "undefined") {
                                $("form button").click(function () {
                                    var targetForm = $(this).closest("form");
                                    localStorage.setItem(
                                        "currentMessage",
                                        targetForm.attr("id")
                                    );
                                });
                                if (localStorageMessage) {
                                    var currentForm = $("#" + localStorageMessage);
                                    formMessages.prependTo(currentForm).show();
                                    if ($(currentForm).offset().top + 200 > viewportHeight) {
                                        $("html,body").animate(
                                            { scrollTop: currentForm.offset().top },
                                            200
                                        );
                                    }
                                }
                            } else {
                                formMessage.show();
                            }
                        })(jQuery);
                    </script>
                </section>
            </div>
            <aside>
                <section class="panel panel-header-closed need_help">
                    <header>
                        <h3>Need any help?</h3>
                    </header>
                    <div>
                        <p class="need_help_contact">
                            @ Contact us by
                            <a href="/contact.pl" rel="nofollow" title="Contact us by email"
                            >email</a
                            >
                            or
                            <br />
                            <i class="fas fa-phone"></i>
                            <a href="tel:+441617681162"> Call us on 0161 768 1162</a>
                        </p>
                        <p class="need_help_hours">
                            Mon to Fri: 9am &ndash; 8.30pm
                            <br />
                            Weekends: 10am &ndash; 7.30pm
                        </p>
                        <div data-livechat></div>
                    </div>
                </section>
            </aside>
        </div>
    </main>

    @endsection()
