@extends('layouts.user.master')

    @section('page-css')


        <link rel="stylesheet" href="{{asset('assets/css/upgrade1.css')}}">
        <link rel="stylesheet" href="{{asset('assets/css/upgrade2.css')}}">

    @endsection

@section('sub-nav')

    @include('layouts.user.sub-nav.account')

@endsection

@section('content')

    </div>
    </header>

<main id="spareroom" class="wrap"><div class="grid-4-8-4 " id="mainheader"><div>&nbsp;</div><div><h1>Upgrade </h1></div><div>&nbsp;</div></div>    <div class="grid-4-8-4" id="maincontent">
        <aside>
            <div class="block block_panel" id="promo_code">
                <div class="block_header">
                    <h3>Promo code</h3>
                </div>
                <form action="/flatshare/get_personal_products.pl" method="GET" class="block_content block_areas">
                    <div class="block_area block_area_last">
                        <p>
                            <strong>Got a Promotional Code?</strong>
                        </p>
                        <p class="promo_code">
                            <input type="hidden" name="M_context" value="44">
                            <label for="enter_it_here">Enter it here:</label><br>
                            <input type="text" name="promo_code" size="20" id="enter_it_here">
                        </p>
                        <p>

                            <input type="submit" value="Redeem" class="button button--secondary">
                        </p>
                    </div>
                </form>
            </div>


            <p style="text-align:center;"><img src="https://assets.spareroom.co.uk/img/spareroom/success_badge.svg" alt="success guarantee badge" ><br>(with the 4 week saver)<br>
                <a href="#" data-overlay-target="success-guarantee-popup" data-overlay-type="popUp">Find out more</a>
            </p>
        </aside>
        <div id="maincontent">

            <section class="upgrade-container">
                <h2>Upgrading gets you the following...</h2>
                <div class="upgrade-usp">
                    <div class="upgrade-usp__early-bird">
                        <h3>
                            <span class="upgrade-usp__number">1</span>
                            Early Bird Access

                            <img src="//assets.spareroom.co.uk/img/spareroom/v4/icons/early_bird.svg?v=1" class="svg early_bird_icon " alt="Early bird">    </h3>
                        <p class="upgrade-usp__text">
                            12,513 more new ads currently available to contact with Early Bird Access
                        </p>
                    </div>
                    <div class="upgrade-usp__bold">
                        <h3>
                            <span class="upgrade-usp__number">2</span>
                            A bold ad</h3>
                        <p class="upgrade-usp__text">On average Bold Ads get double the enquiries - find your room or flatmate faster</p>
                    </div>
                </div>  <div id="commerce_app"><section class="commerce" data-testid="commerce"><ul class="commerce__upgrade-info"><li class="commerce__upgrade-info-item"><a class="commerce__upgrade-info-toggle" id="upgradingBenefits">Benefits of Upgrading</a></li><li class="commerce__upgrade-info-item"><a class="commerce__upgrade-info-toggle" id="adsExplained">Early Bird Access and Bold Ads Explained</a></li><li class="commerce__upgrade-info-item"><a class="commerce__upgrade-info-toggle" id="compareProducts">Compare Products</a></li><li class="commerce__upgrade-info-item"><a class="commerce__upgrade-info-toggle" id="faq">Frequently Asked Questions</a></li></ul><section class="products"><menu class="products__options"><form class="product-selector"><ul class="product-selector__rows"><li class="product-selector__row product-selector__row--selected"><label class="product-selector__label" for="id454"><div class="product-selector__name"><input class="product-selector__option" type="radio" name="product" id="id454" checked="">4 week saver</div><div class="product-selector__pricing"><span class="product-selector__original-price">£29.99</span><span class="product-selector__price">£24.99</span><p class="product-selector__promise">This is not a subscription</p></div><ul class="product-selector__selling-points"><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> 89p per day</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> <span class="product-selector__pause-any-time">Pause your upgrade</span>  (once per 4 week saver)</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> The stress-free option – give yourself plenty of time</li></ul></label></li><li class="product-selector__row"><label class="product-selector__label" for="id457"><div class="product-selector__name"><input class="product-selector__option" type="radio" name="product" id="id457">2 weeks</div><div class="product-selector__pricing"><span class="product-selector__price">£21.99</span><p class="product-selector__promise">This is not a subscription</p></div><ul class="product-selector__selling-points"><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> £1.57 per day</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> 74% of people fill their room within 2 weeks</li></ul></label></li><li class="product-selector__row"><label class="product-selector__label" for="id460"><div class="product-selector__name"><input class="product-selector__option" type="radio" name="product" id="id460">1 week</div><div class="product-selector__pricing"><span class="product-selector__price">£10.99</span><p class="product-selector__promise">This is not a subscription</p></div><ul class="product-selector__selling-points"><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> £1.57 per day</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> 40% of people fill their room within 7 days</li></ul></label></li><li class="product-selector__row"><label class="product-selector__label" for="id463"><div class="product-selector__name"><input class="product-selector__option" type="radio" name="product" id="id463">6 months</div><div class="product-selector__pricing"><span class="product-selector__price">£99</span><p class="product-selector__promise">This is not a subscription</p></div><ul class="product-selector__selling-points"><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> 54p per day</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> Great value</li></ul></label></li><li class="product-selector__row"><label class="product-selector__label" for="id466"><div class="product-selector__name"><input class="product-selector__option" type="radio" name="product" id="id466">1 year</div><div class="product-selector__pricing"><span class="product-selector__price">£139</span><p class="product-selector__promise">This is not a subscription</p></div><ul class="product-selector__selling-points"><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> 38p per day</li><li class="product-selector__selling-point"><i class="fas fa-check product-selector__check"></i> Best value</li></ul></label></li></ul></form></menu></section><div class="commerce__pro-packages-wrapper"><p class="commerce__pro-packages-link">Need more than 1 live ad? View our <a id="mulitAdLink" href="/my-account/pro-products/annual/"><strong>Multi Ad packages</strong></a></p></div><section class="checkout"><div class="checkout__stripe-form-container"><form class="stripe-form stripe-form--desktop" id="stripeForm" data-testid="stripe-provider"><div class="stripe-icons"><div class="stripe-icons__cards"><img class="stripe-icons__payment-icon" src="https://assets.spareroom.co.uk/images/spareroom/cards/visa/visa_icon.png" srcset="https://assets.spareroom.co.uk/images/spareroom/cards/visa/visa_icon.png 1x, https://assets.spareroom.co.uk/images/spareroom/cards/visa/visa_icon@2x.png 2x" alt="visa icon"><img class="stripe-icons__payment-icon" src="https://assets.spareroom.co.uk/images/spareroom/cards/mastercard/mastercard_icon.png" srcset="https://assets.spareroom.co.uk/images/spareroom/cards/mastercard/mastercard_icon.png 1x, https://assets.spareroom.co.uk/images/spareroom/cards/mastercard/mastercard_icon@2x.png 2x" alt="mastercard icon"><img class="stripe-icons__payment-icon" src="https://assets.spareroom.co.uk/images/spareroom/cards/maestro/maestro_icon.png" srcset="https://assets.spareroom.co.uk/images/spareroom/cards/maestro/maestro_icon.png 1x, https://assets.spareroom.co.uk/images/spareroom/cards/maestro/maestro_icon@2x.png 2x" alt="maestro icon"></div></div><div class="form-row"><label class="stripe-form__card-label" for="card-element">Enter your card details</label><div id="stripeFormCardElement"><div class="stripe-form__card-element stripe-form__card-element--empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe frameborder="0" allowtransparency="true" scrolling="no" name="__privateStripeFrame5" allowpaymentrequest="true" src="https://js.stripe.com/v3/elements-inner-card-7f922aa3a322c853bac1c46f959276e5.html#style[base][color]=%235D5D5D&amp;style[base][fontFamily]=Arial%2C+%22Helvetica+Neue%22%2C+Helvetica%2C+sans-serif&amp;style[base][fontSmoothing]=antialiased&amp;style[base][fontSize]=16px&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[invalid][color]=%23EA321B&amp;style[invalid][iconColor]=%23EA321B&amp;componentName=card&amp;wait=false&amp;rtl=false&amp;keyMode=live&amp;apiKey=pk_live_ULPe0T07QEa1nYw9b9i6QFCs&amp;origin=https%3A%2F%2Fwww.spareroom.co.uk&amp;referrer=https%3A%2F%2Fwww.spareroom.co.uk%2Fmy-account%2Fpersonal-products%3FM_context%3D44&amp;controllerId=__privateStripeController1" title="Secure payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; height: 19.2px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: 0px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div></div><div class="stripe-form__card-errors" id="stripeFormCardErrors" role="alert"></div></div><button id="stripeSubmitButton" class="button button--wide">Pay £24.99</button></form></div><div data-testid="paypal-rest-wrapper" class="paypal-button" style="height: 45px; background-color: rgb(238, 238, 238); border-radius: 4px;"><div><div id="zoid-paypal-buttons-143c9f8131_mja6mti6nta" class="paypal-buttons paypal-buttons-context-iframe paypal-buttons-label-undefined paypal-buttons-layout-vertical" style="height: 45px;"><style>
                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta {
                                                position: relative;
                                                display: inline-block;
                                                width: 100%;
                                                min-height: 25px;
                                                min-width: 150px;
                                                max-width: 750px;
                                                font-size: 0;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > iframe {
                                                position: absolute;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                                height: 100%;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > iframe.component-frame {
                                                z-index: 100;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > iframe.prerender-frame {
                                                transition: opacity .2s linear;
                                                z-index: 200;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > iframe.visible {
                                                opacity: 1;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > iframe.invisible {
                                                opacity: 0;
                                                pointer-events: none;
                                            }

                                            #zoid-paypal-buttons-143c9f8131_mja6mti6nta > .smart-menu {
                                                position: absolute;
                                                z-index: 300;
                                                top: 0;
                                                left: 0;
                                                width: 100%;
                                            }
                                        </style><iframe allowtransparency="true" name="__zoid__paypal_buttons__eyJ1aWQiOiJ6b2lkLXBheXBhbC1idXR0b25zLTE0M2M5ZjgxMzFfbWphNm10aTZudGEiLCJjb250ZXh0IjoiaWZyYW1lIiwidGFnIjoicGF5cGFsLWJ1dHRvbnMiLCJ2ZXJzaW9uIjoiOV8wXzQyIiwiY2hpbGREb21haW4iOiJodHRwczovL3d3dy5wYXlwYWwuY29tIiwicGFyZW50RG9tYWluIjoiaHR0cHM6Ly93d3cuc3BhcmVyb29tLmNvLnVrIiwicGFyZW50Ijp7InR5cGUiOiJwYXJlbnQiLCJkaXN0YW5jZSI6MH0sInByb3BzIjp7InR5cGUiOiJyYXciLCJ2YWx1ZSI6IntcImNyZWF0ZU9yZGVyXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCI4MjYyODFiYWVjX21qYTZtdGk2bnRhXCIsXCJuYW1lXCI6XCJjcmVhdGVPcmRlclwifX0sXCJvbkFwcHJvdmVcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcIjJmZTNiMGYxOGFfbWphNm10aTZudGFcIixcIm5hbWVcIjpcIm9uQXBwcm92ZVwifX0sXCJzdHlsZVwiOntcImxheW91dFwiOlwidmVydGljYWxcIixcImNvbG9yXCI6XCJzaWx2ZXJcIixcInNoYXBlXCI6XCJyZWN0XCIsXCJ0YWdsaW5lXCI6ZmFsc2UsXCJoZWlnaHRcIjo0NX0sXCJjb21wb25lbnRzXCI6W1wiYnV0dG9uc1wiXSxcImxvY2FsZVwiOntcImNvdW50cnlcIjpcIlVTXCIsXCJsYW5nXCI6XCJlblwifSxcImdldFByZXJlbmRlckRldGFpbHNcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcIjI0NGNiMTcxZTRfbWphNm10aTZudGFcIixcIm5hbWVcIjpcImdldFByZXJlbmRlckRldGFpbHNcIn19LFwiZ2V0UG9wdXBCcmlkZ2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcIjY4YzlkYTlhNDlfbWphNm10aTZudGFcIixcIm5hbWVcIjpcImdldFBvcHVwQnJpZGdlXCJ9fSxcImNsaWVudElEXCI6XCJBVTFLU19BMjMyZFRvamxuSW51WWRsZVBpTGpCYm84SF8xenFKTmRRcWotTjMzYXoxTW42a094NlI0cU1fN2U0cHJscnFfck9HLWp6aG1kRlwiLFwiZW5hYmxlVGhyZWVEb21haW5TZWN1cmVcIjpmYWxzZSxcImNvcnJlbGF0aW9uSURcIjpcIjliM2Y4MDY5ZWIxNjlcIixcInNlc3Npb25JRFwiOlwiMDAwZTVlNmM5OV9tamE2bXRpNm50YVwiLFwiYnV0dG9uU2Vzc2lvbklEXCI6XCI1N2IyMzRlNjkxX21qYTZtdGk2bnRhXCIsXCJlbnZcIjpcInByb2R1Y3Rpb25cIixcInN0YWdlSG9zdFwiOm51bGwsXCJhcGlTdGFnZUhvc3RcIjpudWxsLFwiZnVuZGluZ0VsaWdpYmlsaXR5XCI6e1wicGF5cGFsXCI6e1wiZWxpZ2libGVcIjp0cnVlfSxcImNhcmRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlLFwiYnJhbmRlZFwiOnRydWUsXCJ2ZW5kb3JzXCI6e1widmlzYVwiOntcImVsaWdpYmxlXCI6dHJ1ZX0sXCJtYXN0ZXJjYXJkXCI6e1wiZWxpZ2libGVcIjp0cnVlfSxcImFtZXhcIjp7XCJlbGlnaWJsZVwiOnRydWV9LFwiZGlzY292ZXJcIjp7XCJlbGlnaWJsZVwiOnRydWV9LFwiaGlwZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImVsb1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiamNiXCI6e1wiZWxpZ2libGVcIjpmYWxzZX19fSxcInZlbm1vXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJpdGF1XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJjcmVkaXRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNlcGFcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcImlkZWFsXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJiYW5jb250YWN0XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJnaXJvcGF5XCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJlcHNcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInNvZm9ydFwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibXliYW5rXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJwMjRcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcInppbXBsZXJcIjp7XCJlbGlnaWJsZVwiOmZhbHNlfSxcIndlY2hhdHBheVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwicGF5dVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwiYmxpa1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwidHJ1c3RseVwiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwib3h4b1wiOntcImVsaWdpYmxlXCI6ZmFsc2V9LFwibWF4aW1hXCI6e1wiZWxpZ2libGVcIjpmYWxzZX0sXCJib2xldG9cIjp7XCJlbGlnaWJsZVwiOmZhbHNlfX0sXCJwbGF0Zm9ybVwiOlwiZGVza3RvcFwiLFwicmVtZW1iZXJlZFwiOltdLFwicmVtZW1iZXJcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcImQ2ZmZlNzdmNTRfbWphNm10aTZudGFcIixcIm5hbWVcIjpcInJlbWVtYmVyXCJ9fSxcImN1cnJlbmN5XCI6XCJHQlBcIixcImludGVudFwiOlwiY2FwdHVyZVwiLFwiY29tbWl0XCI6dHJ1ZSxcInZhdWx0XCI6ZmFsc2UsXCJkaXNhYmxlRnVuZGluZ1wiOltcImNyZWRpdFwiLFwiY2FyZFwiXSxcImRpc2FibGVDYXJkXCI6W10sXCJtZXJjaGFudElEXCI6W10sXCJjc3BcIjp7fSxcImdldFBhZ2VVcmxcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcIjU4ZjVkYWZmYTJfbWphNm10aTZudGFcIixcIm5hbWVcIjpcImdldFBhZ2VVcmxcIn19LFwiZGVidWdcIjpmYWxzZSxcInRlc3RcIjp7XCJhY3Rpb25cIjpcImNoZWNrb3V0XCJ9fSJ9LCJleHBvcnRzIjoie1wiaW5pdFwiOntcIl9fdHlwZV9fXCI6XCJjcm9zc19kb21haW5fZnVuY3Rpb25cIixcIl9fdmFsX19cIjp7XCJpZFwiOlwiYzZhZmUyMGViMF9tamE2bXRpNm50YVwiLFwibmFtZVwiOlwicG5cIn19LFwiY2xvc2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcImM0MzE2ZjI0MjdfbWphNm10aTZudGFcIixcIm5hbWVcIjpcIkNuXCJ9fSxcImNoZWNrQ2xvc2VcIjp7XCJfX3R5cGVfX1wiOlwiY3Jvc3NfZG9tYWluX2Z1bmN0aW9uXCIsXCJfX3ZhbF9fXCI6e1wiaWRcIjpcIjY4YmRhN2JiOWFfbWphNm10aTZudGFcIixcIm5hbWVcIjpcImNoZWNrQ2xvc2VcIn19LFwicmVzaXplXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCI1YzdmMTI1YjA5X21qYTZtdGk2bnRhXCIsXCJuYW1lXCI6XCJnblwifX0sXCJvbkVycm9yXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJhZDJhMGUyNDBhX21qYTZtdGk2bnRhXCIsXCJuYW1lXCI6XCJPblwifX0sXCJzaG93XCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCJhY2IyYmFhZThkX21qYTZtdGk2bnRhXCIsXCJuYW1lXCI6XCJublwifX0sXCJoaWRlXCI6e1wiX190eXBlX19cIjpcImNyb3NzX2RvbWFpbl9mdW5jdGlvblwiLFwiX192YWxfX1wiOntcImlkXCI6XCI3ODZmYWNjOGE4X21qYTZtdGk2bnRhXCIsXCJuYW1lXCI6XCJlblwifX19In0=__" title="paypal_buttons" allowpaymentrequest="allowpaymentrequest" scrolling="no" id="jsx-iframe-de95ee5a57" class="component-frame invisible" style="background-color: transparent; border: none;"></iframe><iframe allowtransparency="true" name="__zoid_prerender_frame__paypal_buttons_85c0d9668c_mja6mti6nta__" title="prerender__paypal_buttons" allowpaymentrequest="allowpaymentrequest" scrolling="no" id="jsx-iframe-1e8431337b" class="prerender-frame visible" style="background-color: transparent; border: none;"></iframe><div id="smart-menu" class="smart-menu"></div></div></div></div></section></section></div>
            </section>

        </div>
        <aside>

            <section class="payment-reassurance">
                <div id="payment_trust_messaging">
                    <div style="display: flex; justify-content: center; margin: 16px 0 0;">
                        <i class="fas fa-spinner fa-pulse fa-4x fa-fw"></i>
                    </div>
                    <h3 style="text-align: center; margin-top: 16px;">Loading...</h3>
                </div>  </section>
            <section class="payment-help-topics__container">
                <h4 class="payment-help-topics__heading">Help topics</h4>
                <ul class="payment-help-topics__list">
                    <li><a href="/content/secure/satisfaction-guaranteed/?flatshare_id=">Our Guarantee</a></li>
                    <li><a href="/content/infowebsitehelp/faq/#whatisAboldad/">Your questions</a> </li>
                </ul>
            </section>
        </aside>
    </div>
</main>

    @endsection
