
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

                    Your advert is nearly there
                </h1></div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-12-4">
            <div> </div>
        </div>
        <style>
            #spareroom.wrap {
                overflow: hidden;
            }

            .msg {
                width: 100%;
                box-sizing: border-box;
            }

            .msg:last-of-type {
                margin-bottom: 24px;
            }

            hr {
                border-top: 1px solid #dcdcdc;
                margin: 0 0 24px;
            }

            .next-step h3 {
                margin-bottom: 16px;
                position: relative;
            }

            .upgrade h3 {
                color: #5e5e5e;
                margin-bottom: 16px;
            }

            .upgrade img {
                height: 174px;
                margin: auto;
                display: block;
            }

            .video-tip {
                height: 246px;
                margin-bottom: 16px;
            }

            .video-container {
                margin-bottom: 16px;
            }

            .video-container iframe {
                height: 90.4%;
            }

            .next-step > div {
                margin-bottom: 24px;
            }

            .important-info li {
                margin-bottom: 16px;
            }

            .next-step h3:before {
                background: #14c8f6;
                border-radius: 50%;
                color: #fff;
                width: 1.4em;
                height: 1.4em;
                margin-right: 4px;
                text-align: center;
                display: inline-block;
                line-height: 1.4;
            }

            .next-step div:first-of-type h3:before {
                content: "1";
            }

            .next-step div:nth-of-type(2) h3:before {
                content: "2";
            }
        </style>
        <script>
            window.dataLayer.push({
                'event': 'ga.event'
                , 'ga_event_category': 'photo_upload'
                , 'ga_event_action': 'yes'
                , 'photo_upload': 'yes'
            });
        </script>
        <div id="share" class="share" data-share-url="https://www.spareroom.co.uk/14995735" data-social-share-title="2 rooms sought by male and female" data-social-share-utm="advert_share" data-advert-id="14995735">
            <div class="share__container">
                <div class="share__heading">
                    <h3 class="share__heading-header"><i class="far fa-bullhorn share__heading-icon"></i>Share your ad to get more views for free</h3></div>
                <div class="SocialMediaShareButton SocialMediaShareButton--facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.spareroom.co.uk%2F14995735%3Futm_source%3Dfacebook%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="button button--facebook" target="_blank" rel="noopener noreferrer"><span class="button__icon"><i class="fab fa-facebook"></i></span><span class="button__text">Share on Facebook</span></a></div>
                <div class="share__options-container">
                    <div class="share-button__container">
                        <a href="fb-messenger://share?link=https%3A%2F%2Fwww.spareroom.co.uk%2F14995735%3Futm_source%3Dmessenger%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button share-button--messenger">
                            <div class="share-button__icon"><i class="fab fa-facebook-messenger"></i></div>
                            <p class="share-button__text">Via Messenger</p>
                        </a>
                    </div>
                    <div class="share-button__container">
                        <a href="https://wa.me/?text=2 rooms sought by male and femalehttps%3A%2F%2Fwww.spareroom.co.uk%2F14995735%3Futm_source%3DwhatsApp%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button share-button--whatsApp">
                            <div class="share-button__icon"><i class="fab fa-whatsapp"></i></div>
                            <p class="share-button__text">Via WhatsApp</p>
                        </a>
                    </div>
                    <div class="share-button__container">
                        <a href="http://twitter.com/share?text=2 rooms sought by male and female&amp;url=https%3A%2F%2Fwww.spareroom.co.uk%2F14995735%3Futm_source%3Dtwitter%26utm_medium%3Dsocial_share%26utm_campaign%3Dadvert_share" class="share-button share-button--twitter">
                            <div class="share-button__icon"><i class="fab fa-twitter"></i></div>
                            <p class="share-button__text">Tweet</p>
                        </a>
                    </div>
                    <div class="share-button__container">
                        <a href="/flatshare/tellafriend.pl?advert_id=undefined&amp;flatshare_type=undefined" class="share-button share-button--email">
                            <div class="share-button__icon"><i class="fas fa-envelope"></i></div>
                            <p class="share-button__text">Via Email</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid-12-4 important-info">
            <div>
                <h2>Important information about your advert</h2>
                <ul>
                    <li><strong>Your ad will remain on the site for 28 days</strong> and you can renew it any time. Renewing keeps your ad near the top of the listings and encourages others to contact you</li>
                    <li>Find out how to add <a href="#add-photos" title="Add photos">photos and a video to your new advert</a></li>
                    <li>You can <strong>manage your ad</strong> by going to <a href="/flatshare/mylistings.pl" title="My account">My account - My posted ads</a></li>
                    <li>Link to your ad: <a title="Go to your ad" href="https://www.spareroom.co.uk/14995735">https://www.spareroom.co.uk/14995735</a>
                        <br> Please check that your advert is live before providing this link to others.</li>
                </ul>
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
        <hr>
        <div>
            <h2>Next steps...</h2>
            <div class="grid-8 next-step" id="add-photos">
                <div class="grid-8">
                    <div>
                        <h3>Add photos</h3>
                        <p>Your room wanted ad will stand out more – and get more clicks - if you add a photo to it. It's quick and easy to do and you can add up to 9. </p> <a class="button button--secondary" title="Add photos to your ad" href="/flatshare/upload-photos.pl?flatshare_id=14995735&amp;flatshare_type=wanted">Add photos</a> </div>
                    <div class="">
                        <div>
                            <h3>Add a video</h3>
                            <p>A video gives people a real sense of who you are, far more so than anything you'll write in your ad. Uploading a video is quick and easy - you can do it straight from your mobile, tablet or laptop. <a title="Video tips" href="/content/info-advice/video-tips/?flatshare_type=wanted&amp;flatshare_id=14995735">Find out more</a></p> <a class="button button--secondary large-device" title="Add a video to your ad" href="/flatshare/upload-video.pl?advert_id=14995735&amp;flatshare_type=wanted">Add video</a> </div>
                    </div>
                </div>
                <div class="video-tip">
                    <div class="video-container">
                        <iframe width="425" height="319" src="https://www.youtube.com/embed/TbKrb3-CEQ4?wmode=transparent&amp;rel=0&amp;showinfo=0" frameborder="0" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <h2>Upgrade your account</h2>
        <div class="grid-8 upgrade">
            <div>
                <h3>Upgrade and find your room faster</h3>
                <p>Upgrading makes your ad Bold. This gets it higher in the listings and means (on average) twice as many enquiries. It also makes your ad free for everyone to contact.</p>
                <p>Your ad will go out shortly in email alerts to people looking for flatmates in your area so, by upgrading now, you'll make sure everyone can contact you straight away. <a href="/flatshare/get_early_bird.pl?M_context=45">More benefits of upgrading</a></p> <a class="button" title="Upgrade your ad" href="/flatshare/get_early_bird.pl?M_context=45">Upgrade now</a> </div>
            <div> <img src="/img/icons/upgrade.svg?v=1" class="svg upgrade" alt="upgrade your account"> </div>
        </div>
    </main>

    @endsection

