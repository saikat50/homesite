<!DOCTYPE html>
<html class="desktop uk logged_in no-js" lang="en-GB">
<!-- <![endif]-->
<head>
    <style>
        .hidden-overlay {
            display: none;
        }
    </style>
    <meta charset="iso-8859-1" />
    <meta name="language" content="en-GB" />

    <script src="https://cdn.polyfill.io/v2/polyfill.min.js"></script>
    <script>
        if (typeof NodeList.prototype.forEach !== "function") {
            NodeList.prototype.forEach = Array.prototype.forEach;
        }
    </script>
    <script>
        "use strict";

        var _sr = {};
        _sr.session = {
            loggedin: true,
            user_known: true,
            session_id: "442704775",
            session_key: "2561887918160391040",
            language: navigator.language.split("-")[0],
        };

        _sr.commerce = {
            purchased: {},
            products: {
                personal: [
                    {
                        id: "454",
                        name: "4 week saver",
                        duration: "4 weeks",
                        price: "24.99",
                        original_price: "29.99",
                        selling_points: {
                            bold: [
                                "89p per day",
                                "Pause your upgrade (once per 4 week saver)",
                                "The stress-free option – give yourself plenty of time",
                            ],
                            early_bird: [
                                "89p per day",
                                "Pause your upgrade (once per 4 week saver)",
                                "The stress-free option – give yourself plenty of time",
                            ],
                        },
                    },

                ],
                pro: [],
            },
            payment_providers: [

            ],
            miscellaneous: {
                context: "",
                instId: "137527",
            },
            discounts: {},
            checkout_cart: {
                cart_id: "",
                product_description: "Upgrade (inc Early Bird Access)",
                items: [],
            },
            context: {
                context: "global",
                discounts_available: false,
                platform: "desktop",
                product_type: "bold",
                departments: [
                    "Pro Monthly",
                    "Pro Annual",
                    "Multi Ads Annual",
                    "Personal",
                ],
            },
        };

        _sr.page = {
            loginReturnPath: "\x2Fcontent\x2Fmyaccount\x2Fmyaccount\x2Dindex\x2F",
        };
        function getSegments() {
            var segments = [, , , , , ,];
            var filtered = segments.filter(function (item) {
                return item != undefined;
            });
            return filtered.join();
        }
        _sr.customer = {

        };

        _sr.affiliate = {
            id: "",
            category: "",
        };

        _sr.site = {

        };

        _sr.third_party = {};

        _sr.third_party.visual_dna = {
            email: "88b01775daecc804c270f78a9610b841",
        };

        _sr.config = {
            facebook: {
                app_locale: "en_GB",
                app_id: "5097577709",
            },
            worldpay: {
                api_url: "",
                use_sandbox: "0",
            },
            paypal: {
                api_url: "",
                use_sandbox: "0",
            },

            stripe: {
                publishable_key: "pk_live_ULPe0T07QEa1nYw9b9i6QFCs",
            },

            features: {
                apple_maps_desktop_detail: true,
                apple_maps_mobile_detail: true,
                apple_maps_desktop_search: true,
                apple_maps_mobile_search: true,
            },
        };

        _sr.action = {};
        _sr.ecommerce = {};
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script>
        window.jQuery ||
        document.write(
            "<script src='\/\/assets.spareroom.co.uk\/js\/common\/jquery\/jquery-1.12.0.min.js'><\/script>"
        );
    </script>

    <!-- End Google Tag Manager -->
    <link rel="stylesheet" href="{{asset('assets/css/accounts1.css')}}" />
    <link href="{{asset('assets/fonts/css/all.css')}}" rel="stylesheet" />

    @yield('page-css')

    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}">

    <script src="{{asset('assets/js/e0c43c978ea516935f9ded8af409ac54.js')}}"></script>

    <title>My account</title>

    <style>
        #spareroom.wrap {
            overflow: hidden;
        }
        .expired,
        .featured_ads_status .empty_balance {
            color: red;
        }
        .featured_ads_status .empty_balance {
            font-weight: 500;
        }
        .panel h3 {
            margin-bottom: 8px;
        }
        .panel header h3 {
            margin-bottom: 0;
        }
        .panel-bold.upgraded:after,
        .panel-group .panel-bold:after,
        .account-status header:after,
        .account-status header + div:after,
        .featured_ads_status:after {
            content: "";
            display: table;
            clear: both;
        }
        .account-status header > div,
        .panel-bold.upgraded div,
        .panel-group .panel-bold div,
        .featured_ads_status div {
            float: left;
        }
        .upgrade_to_featured {
            width: 100%;
        }
        .account-status h3 {
            display: inline-block;
            padding-top: 0;
        }
        .account-status.panel-bold header h3 {
            display: block;
        }
        .account-status header + div a {
            display: inline-block;
        }
        .account-status header + div a .fas {
            vertical-align: bottom;
            margin: 0 4px 0 8px;
        }
        .account-status.upgraded h3,
        .account-status.upgraded p,
        .featured_ads_status div h3,
        .featured_ads_status div p {
            margin-bottom: 0;
        }
        .account-status .button,
        .featured_ads_status .button {
            float: right;
        }
        .account-status.panel .fas,
        .services .panel .fas {
            font-size: 24px;
            color: #999;
        }
        .services .panel {
            position: relative;
            display: block;
        }
        .services .panel a {
            color: #5e5e5e;
            display: block;
        }
        .services .panel a:hover,
        .services .panel a:hover p {
            text-decoration: underline;
        }
        .services .panel a:hover .fas {
            color: #14c8f6;
        }
        .services .panel div {
            display: inline-block;
            vertical-align: middle;
        }
        .services .panel div p {
            margin-bottom: 0;
            width: 80%;
            float: left;
        }
        .services .panel div .fas {
            float: right;
            margin-top: 8px;
        }
        /* small blocks */
        .services .panel {
            position: relative;
        }
        .services .panel .counter {
            position: absolute;
            top: -1px;
            right: -1px;
        }
        .services .panel .counter > span {
            display: inline-block;
        }
        .counter .tooltip_box {
            left: -15px;
        }
        .counter .tooltip_text {
            max-width: 150px;
        }
        .counter .anchor_text {
            border-radius: 4px;
            background-color: #5e5e5e;
            color: #fff;
            cursor: default;
            line-height: 1;
            padding: 4px 6px;
            display: inline-block;
        }
        .counter .new-count .anchor_text {
            background-color: #14c8f6;
            border-radius: 4px 0 0 4px;
        }
        .counter .new-count + span .anchor_text {
            border-radius: 0 4px 4px 0;
        }
        .account-option {
            height: 104px;
        }
        .account-option__promo-code-input {
            width: 73px;
            height: 25px;
            margin-right: 4px;
        }
        /* JS */
        /* IE is using position aboslute, this resets the position relative from the main tag */
        .ie8 #spareroom,
        .ie8 #spareroom.wrap {
            position: static;
        }
        section[data-JSpopUp="exampleListing"] {
            display: none;
        }
        .box-active span[data-JSpopUp="closingArea"],
        .box-active span[data-JSpopUp="box-overlay"] {
            position: fixed;
            top: 0px;
            left: 0px;
            display: block;
            z-index: 10;
            height: 100%;
            width: 100%;
            cursor: pointer;
        }
        .box-active span[data-JSpopUp="box-overlay"] {
            z-index: 600;
            opacity: 0.5;
            background: #000;
        }
        .box-active section[data-JSpopUp="exampleListing"] {
            height: auto;
            opacity: 1;
            display: block;
            position: fixed;
            z-index: 800;
            top: 0;
            width: 438px;
            margin: 16px 0 0 -17px;
        }
        .ie8 .box-active section[data-JSpopUp="exampleListing"] {
            position: absolute;
        }
        section[data-JSpopUp="exampleListing"] article,
        section[data-JSpopUp="exampleListing"] .button {
            z-index: 22;
            position: relative;
            cursor: pointer;
            float: right;
        }
        section[data-JSpopUp="exampleListing"] .listing-bold {
            z-index: 12;
        }

        @media only screen and (max-height: 680px) and (min-width: 924px) {
            /* JS */
            .box-active section[data-JSpopUp="exampleListing"] {
                min-width: 892px;
                margin: 32px 0 0 -462px;
                left: 50%;
            }
            .box-active section[data-JSpopUp="exampleListing"] > div {
                display: inline-block;
                max-width: 438px;
                vertical-align: top;
            }
            .box-active section[data-JSpopUp="exampleListing"] > div:first-of-type {
                margin-right: 16px;
            }
            .box-active section[data-JSpopUp="exampleListing"] > div > p {
                min-height: 40px;
            }
            .box-active
            section[data-JSpopUp="exampleListing"]
            .listing-bold:last-of-type,
            .box-active
            section[data-JSpopUp="exampleListing"]
            .listing-free:last-of-type {
                margin-top: 22px;
            }
        }
        /* Video tip section */
        .videoTipImproveAd {
            margin-top: 32px;
        }
        .videoTipImproveAd h3 {
            font-size: 18px;
            font-size: 1.2em;
            margin-bottom: 16px;
        }
        .video-container {
            padding-bottom: 50.25%;
        }
        /* end Video tip section */
    </style>
</head>
