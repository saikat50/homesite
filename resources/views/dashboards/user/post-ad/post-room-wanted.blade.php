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

                Post a room wanted advert
            </h1></div><div>&nbsp;</div></div>
    <div class="grid-12-4">
        <div>
            <div class="block block_simple block_wanted_listing">
                <div class="block_header">
                    <h3>Step 1 of 2</h3>
                </div>
                <div class="block_content">

                    <form action="/flatshare/wanted_listing_step1.pl" method="GET" class="pl_step1" name="place_room_wanted_st_1">
                        <fieldset>


                            <legend>
                                Get started with your
                                room
                                wanted advert
                            </legend>

                            <div class="form_row form_row_seekers ">
                                <div class="form_label">I am / we are</div>
                                <div class="form_inputs">
				<span class="form_input form_select">
					<select id="NumberAndSexOfSeekers" name="NumberAndSexOfSeekers">
						<option value="nothing">Select your gender(s)...</option>
						<option value="M">1 male</option>
						<option value="F">1 female</option>
						<option value="FM">1 male 1 female</option>
						<option value="MM">2 males</option>
						<option value="FF">2 females</option>

					</select>
				</span>
                                </div>
                            </div>
                            <div class="form_row form_row_looking_for ">
                                <div class="form_label">Looking for</div>
                                <div class="form_inputs">

					<span class="form_input form_select">
						<select id="RoomReq" name="RoomReq">
							<option value="nothing" SELECTED ></option>
							<option value="a single or double room">
								a single or double room
							</option>
							<option value="a double room">
								a double room
							</option>
							<option value="a double room (we are partners)">
								a double room (we are partners)
							</option>
							<option value="a twin room or 2 rooms">
								a twin room or 2 rooms
							</option>
							<option value="2 rooms">
								2 rooms
							</option>
						</select>
						to rent in a flat or house share
					</span>


                                </div>
                            </div>
                            <div class="form_row form_row_buddyups">
                                <div class="form_label">'Buddy ups'</div>
                                <div class="form_inputs">
                                    <label class="form_input form_checkbox">
                                        <input type="checkbox" name="interested_meeting_other_seekers" value="Y">
                                        I/we are also interested in <em>Buddying up</em>
                                    </label>
                                    <div class="form_hint">

                                        Tick this if you might like to <em>Buddy Up</em> with other room seekers to find a whole flat or house together and start a brand new flat/house share.


                                    </div>
                                </div>
                            </div>

                            <div class="form_row form_row_buttons">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <input type="hidden" name="action" value="wantedstep2">
                                    <input type="hidden" name="gs_id" value="">
                                    <input type="hidden" name="watch" value="">
                                    <input type="hidden" name="search_id" value="">

                                    <input type="hidden" name="scp" value="N">
                                    <input type="hidden" name="referring_listing" value="">
                                    <input type="hidden" name="show_interest_in" value="">
                                    <input type="hidden" name="show_interest_in_type" value="">
                                    <input type="hidden" name="fromwatchlist" value="">
                                    <input type="hidden" name="original_search_string" value=""><a href="{{route('User.Post-Room-Wanted_Step2')}}" class="button wanted-step-1__continue-button" type="submit" name="submit">Next</a>			</div>
                            </div>

                        </fieldset>
                    </form>
                </div>
            </div>
            <br><br>
        </div>
        <aside>
            <section>
                <h4>Help topics</h4>
                <ul>
                    <li><a href="/content/info-faq/buddyups/">What's a buddy up?</a></li>
                    <li><a href="/content/info-faq/single-vs-doubleroom/">What's the difference between a single and double room?</a></li>
                </ul>
            </section>
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
