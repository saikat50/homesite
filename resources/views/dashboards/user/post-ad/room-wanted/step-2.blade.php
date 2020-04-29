
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



                    Post new room wanted advert




                </h1></div><div>&nbsp;</div></div>
        <div class="grid-12-4">
            <div>

                <div class="block block_simple block_wanted_listing">
                    <div class="block_header">
                        <h3>Step 2 of 2</h3>
                    </div>
                    <div class="block_content">






                        <form action="/flatshare/wanted_listing_step2.pl" method="POST" class="pl_step2" data-cookie-check="self" name="place_room_wanted_st_2">
                            <input type="hidden" name="action" value="newadvert">
                            <input type="hidden" name="advert_id" value="">
                            <input type="hidden" name="M_step" value="2">
                            <input type="hidden" name="fromwatchlist" value="">
                            <input type="hidden" name="referring_listing" value="">
                            <input type="hidden" name="show_interest_in" value="">
                            <input type="hidden" name="show_interest_in_type" value="">
                            <input type="hidden" name="original_search_string" value="">
                            <input type="hidden" name="scp" value="N">


                            <fieldset>
                                <legend>Your search</legend>
                                <div class="form_row form_row_watchlist ">

                                    <div class="form_label">

                                        Where do you want to live?

                                    </div>
                                    <div class="form_inputs">
								<span class="form_input form_select">
									<select name="watch_gl_id">
										<option value="" selected="">Select an area...</option>

											<option value="1">London and surrounds</option>
											<option value="2">East Anglia</option>
											<option value="3">East Midlands</option>
											<option value="4">North East England</option>
											<option value="5">North West England</option>
											<option value="6">South East England</option>
											<option value="7">South West England</option>
											<option value="8">West Midlands</option>
											<option value="9">Yorkshire and Humberside</option>
											<option value="10">Northern Ireland</option>
											<option value="11">Scotland</option>
											<option value="12">Wales</option>
											<option value="13">Channel Islands</option>
											<option value="14">Isle of Man</option>


									</select>
								</span>
                                        <span class="form_input form_button"><button class="button button--secondary" type="submit" name="watch_select" value="Select">Select</button>								</span>
                                    </div>


                                </div>
                                <input type="hidden" name="first_run" value="1">
                                <input type="hidden" name="template" value="wantedadnew">
                                <input type="hidden" name="watch" value="" required="">
                                <input type="hidden" name="gl_id_selected" value="" required="">
                                <input type="hidden" name="refresh" value="">
                                <div class="form_row form_row_budget  ">
                                    <div class="form_label">

                                        Your budget


                                        <div class="form_hint">


                                            (total rental amount you can afford)



                                        </div>
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_text">
							£
							<input type="number" name="combined_budget" value="" step="any">
						</span>
                                        <span class="form_input form_select" style="margin-right: 0;">
							<select name="per">
								<option value="" selected="">per week or month</option>
								<option value="pcm">per month</option>
								<option value="pw">per week</option>
							</select>
						</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_avail_from">
                                    <div class="form_label">
                                        I am

                                        available to move in from
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
<option value="2020" selected="">2020
</option><option value="2021">2021
</option><option value="2022">2022
</option></select>

						</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_period ">
                                    <div class="form_label">

                                        Period accommodation needed for

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
							</select>

						</span>
                                        <span class="form_text_separator">to</span>
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

                                <div class="form_row form_row_days_avail">
                                    <div class="form_label">
                                        I

                                        want to stay in the accommodation
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="days_of_wk_available">
									<option value="7 days a week">7 days a week</option>
									<option value="Mon to Fri only">Mon to Fri only</option>
									<option value="Weekends only">Weekends only</option>
								</select>
							</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_amenities">
                                    <div class="form_label">
                                        I

                                        would prefer these amenities
                                    </div>
                                    <div class="form_inputs">
                                        <div class="cols cols2">
                                            <div class="col col_first">
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="roomfurnishings" value="furnished"> Furnished
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="living_room" value="Y"> Shared living room
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="washing_machine" value="Y"> Washing machine
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="garden" value="Y"> Garden/roof terrace
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="balcony" value="Y"> Balcony/patio
                                                </label>

                                            </div>
                                            <div class="col col_last">
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="off_street_parking" value="Y"> Parking
                                                </label>

                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="garage" value="Y"> Garage
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="disabled_access" value="Y"> Disabled access
                                                </label>

                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="broadband" value="Y"> Broadband
                                                </label>
                                                <label class="form_input form_checkbox">
                                                    <input type="checkbox" name="ensuite" value="Y"> En suite
                                                </label>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <input type="hidden" name="no_of_rooms" value="1">
                                <input type="hidden" name="no_of_seekers" value="1">
                                <input type="hidden" name="twin_ok" value="N">
                                <input type="hidden" name="room_type" value="single">
                                <input type="hidden" name="NumberAndSexOfSeekers" value="M">
                                <input type="hidden" name="gender" value="M">
                                <input type="hidden" name="RoomReq" value="a single or double room">
                                <input type="hidden" name="interested_meeting_other_seekers" value="N">
                                <input type="hidden" name="couples" value="N">
                                <legend>
                                    About you
                                </legend>
                                <div class="form_row form_row_age ">
                                    <div class="form_label">


                                        Age



                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_select">


<select name="min_age">
    <option value="">Select...</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25" selected="">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
    <option value="61">61</option>
    <option value="62">62</option>
    <option value="63">63</option>
    <option value="64">64</option>
    <option value="65">65</option>
    <option value="66">66</option>
    <option value="67">67</option>
    <option value="68">68</option>
    <option value="69">69</option>
    <option value="70">70</option>
    <option value="71">71</option>
    <option value="72">72</option>
    <option value="73">73</option>
    <option value="74">74</option>
    <option value="75">75</option>
    <option value="76">76</option>
    <option value="77">77</option>
    <option value="78">78</option>
    <option value="79">79</option>
    <option value="80">80</option>
    <option value="81">81</option>
    <option value="82">82</option>
    <option value="83">83</option>
    <option value="84">84</option>
    <option value="85">85</option>
    <option value="86">86</option>
    <option value="87">87</option>
    <option value="88">88</option>
    <option value="89">89</option>
    <option value="90">90</option>
    <option value="91">91</option>
    <option value="92">92</option>
    <option value="93">93</option>
    <option value="94">94</option>
    <option value="95">95</option>
    <option value="96">96</option>
    <option value="97">97</option>
    <option value="98">98</option>
    <option value="99">99</option>
</select>
						</span>

                                        years old
                                    </div>
                                </div>
                                <div class="form_row form_row_occupation">
                                    <div class="form_label">
                                        Occupation
                                    </div>
                                    <div class="form_inputs">

							<span class="form_input form_select">
								<select name="share_type">
									<option value="ND" selected="">Not disclosed</option>
									<option value="S">Student</option>
									<option value="P">Professional</option>
									<option value="O">Other</option>
								</select>
							</span>


                                    </div>
                                </div>

                                <div class="form_row form_row_campus" style="display: none;">
                                    <div class="form_label">
                                        Uni/College
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="campus_id">
									<option value="" selected="">Not applicable/not disclosed</option>

										<option value="1">Anglia Polytechnic University (Cambridge Campus)</option>

										<option value="2">Anglia Polytechnic University (Essex Campus)</option>

										<option value="3">Aston University</option>

										<option value="113">Bath Spa University College</option>

										<option value="133">Bishop Grosseteste College</option>

										<option value="4">Bournemouth University</option>

										<option value="123">British College of Osteopathic Medicine</option>

										<option value="146">British School of Osteopathy</option>

										<option value="5">Brunel University</option>

										<option value="114">Buckinghamshire Chilterns University College</option>

										<option value="115">Camborne School of Mines</option>

										<option value="55">Cardiff University</option>

										<option value="125">Central School of and Drama</option>

										<option value="6">City University</option>

										<option value="7">Coventry University</option>

										<option value="8">Cranfield University</option>

										<option value="126">Dartington College of Arts</option>

										<option value="9">De Montfort University (Bedford Campus)</option>

										<option value="10">De Montfort University (Caythorpe Campus)</option>

										<option value="11">De Montfort University (Leicester Campus)</option>

										<option value="12">De Montfort University (Lincoln Campus)</option>

										<option value="128">Edge Hill University College</option>

										<option value="127">Edinburgh College of Art</option>

										<option value="13">Glasgow Caledonian University</option>

										<option value="130">Glasgow School of Art</option>

										<option value="136">Glyndwr University</option>

										<option value="174">GSM London (Greenford Campus)</option>

										<option value="171">GSM London (Greenwich Campus)</option>

										<option value="131">Guildford College</option>

										<option value="132">Harper Adams University College</option>

										<option value="14">Heriot-Watt University (Edinburgh Campus)</option>

										<option value="15">Heriot-Watt University (Scottish Borders Campus)</option>

										<option value="169">Imperial College London</option>

										<option value="16">Keele University</option>

										<option value="172">King's College London</option>

										<option value="17">Kingston University</option>

										<option value="18">Lancaster University</option>

										<option value="19">Leeds Metropolitan University</option>

										<option value="20">Leicester University</option>

										<option value="22">Liverpool John Moores University</option>

										<option value="135">London College of Communication</option>

										<option value="134">London College of Fashion</option>

										<option value="23">London Guildhall University</option>

										<option value="170">London School of Beauty and Make-up</option>

										<option value="166">London School of Economics (LSE)</option>

										<option value="24">Loughborough University</option>

										<option value="25">Manchester Metropolitan University (Crewe Campus)</option>

										<option value="26">Manchester Metropolitan University (Manchester Campus)</option>

										<option value="27">Middlesex University</option>

										<option value="28">Napier University</option>

										<option value="137">Newman University, Birmingham</option>

										<option value="124">Northern School of Contemporary Dance</option>

										<option value="138">Norwich University of the Arts</option>

										<option value="29">Nottingham Trent University</option>

										<option value="37">Open University</option>

										<option value="30">Oxford Brookes University</option>

										<option value="140">Queen Margaret University College</option>

										<option value="175">Queen Mary University of London</option>

										<option value="141">Ravensbourne College of Design and Communication</option>

										<option value="38">Robert Gordon University</option>

										<option value="31">Roehampton University</option>

										<option value="150">Rose Bruford College</option>

										<option value="142">Royal Academy of Music</option>

										<option value="122">Royal Agricultural College</option>

										<option value="143">Royal College of Art</option>

										<option value="187">Royal College of Music</option>

										<option value="144">Royal Northern College of Music</option>

										<option value="145">Royal Scottish Academy of Music and Drama</option>

										<option value="116">Royal Welsh College of Music and Drama</option>

										<option value="148">Scottish Agricultural College (Aberdeen campus)</option>

										<option value="149">Scottish Agricultural College (Ayr campus)</option>

										<option value="147">Scottish Agricultural College (Edinburgh Campus)</option>

										<option value="32">Sheffield Hallam University</option>

										<option value="33">South Bank University</option>

										<option value="156">St.Mary's College</option>

										<option value="151">St.Mary's University College</option>

										<option value="34">Staffordshire University</option>

										<option value="152">Stranmillis University College</option>

										<option value="153">Swansea Institute of Higher Education</option>

										<option value="35">Thames Valley University (Ealing Campus)</option>

										<option value="36">Thames Valley University (Slough Campus)</option>

										<option value="154">Trinity and All Saints University College</option>

										<option value="117">Trinity College Carmarthen</option>

										<option value="155">Trinity Laban Conservatoire</option>

										<option value="121">University College Chichester</option>

										<option value="129">University College Falmouth</option>

										<option value="157">University College for the Creative Arts - Canterbury</option>

										<option value="158">University College for the Creative Arts - Epsom</option>

										<option value="159">University College for the Creative Arts - Farnham</option>

										<option value="160">University College for the Creative Arts - Maidstone</option>

										<option value="161">University College for the Creative Arts - Rochester</option>

										<option value="167">University College London (UCL)</option>

										<option value="139">University College of St.Mark and St.John</option>

										<option value="51">University College of Wales Aberystwyth</option>

										<option value="50">University College of Wales Bangor</option>

										<option value="52">University College of Wales Lampeter</option>

										<option value="54">University College of Wales Newport</option>

										<option value="53">University College of Wales Swansea</option>

										<option value="56">University of Aberdeen</option>

										<option value="57">University of Abertay Dundee</option>

										<option value="58">University of Bath</option>

										<option value="39">University of Birmingham</option>

										<option value="181">University of Bolton</option>

										<option value="59">University of Bradford</option>

										<option value="60">University of Brighton</option>

										<option value="61">University of Bristol</option>

										<option value="40">University of Buckingham</option>

										<option value="62">University of Cambridge</option>

										<option value="63">University of Central England in Birmingham</option>

										<option value="64">University of Central Lancashire</option>

										<option value="184">University of Chester</option>

										<option value="120">University of Cumbria, Ambleside (St Martin's College)</option>

										<option value="118">University of Cumbria, Carlisle</option>

										<option value="119">University of Cumbria, Lancaster (St Martin's College)</option>

										<option value="65">University of Derby</option>

										<option value="66">University of Dundee</option>

										<option value="67">University of Durham</option>

										<option value="68">University of East Anglia</option>

										<option value="69">University of East London (Docklands Campus)</option>

										<option value="70">University of East London (Stratford Campus)</option>

										<option value="41">University of Edinburgh</option>

										<option value="71">University of Essex</option>

										<option value="72">University of Exeter</option>

										<option value="173">University of Exeter (St. Luke's Campus)</option>

										<option value="73">University of Glamorgan</option>

										<option value="74">University of Glasgow</option>

										<option value="75">University of Gloucestershire</option>

										<option value="76">University of Greenwich (Avery Hill Campus)</option>

										<option value="77">University of Greenwich (Dartford Campus)</option>

										<option value="78">University of Greenwich (King's Mill Institute)</option>

										<option value="79">University of Greenwich (Maritime Greenwich)</option>

										<option value="80">University of Greenwich (Medway Campus)</option>

										<option value="81">University of Greenwich (Woolwich Campus)</option>

										<option value="82">University of Hertfordshire</option>

										<option value="42">University of Huddersfield</option>

										<option value="83">University of Hull</option>

										<option value="84">University of Kent at Canterbury</option>

										<option value="85">University of Leeds</option>

										<option value="21">University of Lincoln</option>

										<option value="86">University of Lincoln (The University in Hull)</option>

										<option value="43">University of Liverpool</option>

										<option value="87">University of London</option>

										<option value="88">University of London (Wye Campus)</option>

										<option value="89">University of Luton</option>

										<option value="90">University of Manchester</option>

										<option value="91">University of Newcastle upon Tyne</option>

										<option value="92">University of North London</option>

										<option value="93">University of Northumbria (Newcastle Campus)</option>

										<option value="44">University of Nottingham</option>

										<option value="94">University of Oxford</option>

										<option value="95">University of Paisley</option>

										<option value="96">University of Plymouth (Exeter Campus)</option>

										<option value="97">University of Plymouth (Exmouth Campus)</option>

										<option value="98">University of Plymouth (Plymouth Campus)</option>

										<option value="99">University of Plymouth (Seale-Hayne Campus)</option>

										<option value="100">University of Portsmouth</option>

										<option value="45">University of Reading</option>

										<option value="46">University of Salford</option>

										<option value="47">University of Sheffield</option>

										<option value="101">University of Southampton</option>

										<option value="102">University of St. Andrews</option>

										<option value="103">University of Stirling</option>

										<option value="48">University of Strathclyde in Glasgow</option>

										<option value="104">University of Sunderland</option>

										<option value="105">University of Surrey</option>

										<option value="106">University of Sussex</option>

										<option value="107">University of Teesside</option>

										<option value="178">University of the Arts London</option>

										<option value="108">University of the West of England</option>

										<option value="109">University of Warwick</option>

										<option value="110">University of Westminster</option>

										<option value="111">University of Wolverhampton</option>

										<option value="168">University of Worcester</option>

										<option value="49">University of York</option>

										<option value="162">Warrington Collegiate</option>

										<option value="163">Wimbledon School of Art</option>

										<option value="164">Writtle College</option>

										<option value="165">York St.John University</option>

									<option value="9999">Other</option>
								</select>
							</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_smoking">
                                    <div class="form_label">
                                        Do  you smoke?
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_select">
							<select name="smoking_current">
								<option value="N" selected="">No</option>
								<option value="Y">Yes</option>
							</select>
						</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_pets">
                                    <div class="form_label">
                                        Do you have any pets?
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_select">
							<select name="pets">
								<option value="N">No</option>
								<option value="Y">Yes</option>
							</select>
						</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_orientation">
                                    <div class="form_label">
                                        Your sexual orientation
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="gay_lesbian">
									<option value="ND" selected="">Undisclosed</option>
									<option value="S">Straight</option>

									<option value="G">Gay/Lesbian</option>
									<option value="B">Bi-sexual</option>
								</select>
							</span>
                                        <br>
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="gay_consent" value="Y">
                                            Yes, I would like my orientation to form part of my advert's search criteria
                                            and allow others to search on this field.
                                        </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_language">
                                    <div class="form_label">
                                        Your preferred language
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="lang_id"><option value="26">English
</option><option value="27">Mixed
</option><option value="4">Arabic
</option><option value="11">Bengali
</option><option value="17">Cantonese
</option><option value="37">French
</option><option value="39">German
</option><option value="44">Hindi
</option><option value="48">Indonesian
</option><option value="50">Japanese
</option><option value="62">Malay
</option><option value="63">Mandarin
</option><option value="73">Portuguese
</option><option value="74">Punjabi
</option><option value="79">Russian
</option><option value="88">Spanish
</option><option value="1">Afrikaans
</option><option value="2">Albanian
</option><option value="3">Amharic
</option><option value="5">Armenian
</option><option value="6">Aymara
</option><option value="7">Baluchi
</option><option value="8">Bambara
</option><option value="9">Basque
</option><option value="10">Belarussian
</option><option value="12">Berber
</option><option value="13">Bislama
</option><option value="14">Bosnian
</option><option value="15">Bulgarian
</option><option value="16">Burmese
</option><option value="18">Catalan
</option><option value="19">Ciluba
</option><option value="20">Creole
</option><option value="21">Croatian
</option><option value="22">Czech
</option><option value="23">Danish
</option><option value="24">Dari
</option><option value="25">Dutch
</option><option value="28">Eskimo
</option><option value="29">Estonian
</option><option value="30">Ewe
</option><option value="31">Fang
</option><option value="32">Faroese
</option><option value="33">Farsi (Persian)
</option><option value="34">Filipino
</option><option value="35">Finnish
</option><option value="36">Flemish
</option><option value="38">Galician
</option><option value="40">Greek
</option><option value="41">Gujarati
</option><option value="42">Hausa
</option><option value="43">Hebrew
</option><option value="45">Hungarian
</option><option value="46">Ibo
</option><option value="47">Icelandic
</option><option value="49">Italian
</option><option value="51">Kabié
</option><option value="52">Kashmiri
</option><option value="53">Kirundi
</option><option value="54">Kiswahili
</option><option value="55">Korean
</option><option value="56">Latvian
</option><option value="57">Lingala
</option><option value="58">Lithuanian
</option><option value="59">Luxembourgish
</option><option value="60">Macedonian
</option><option value="61">Malagasy
</option><option value="64">Mayan
</option><option value="65">Motu
</option><option value="66">Nepali
</option><option value="67">Norwegian
</option><option value="68">Noub
</option><option value="69">Pashto
</option><option value="70">Peul
</option><option value="71">Pidgin
</option><option value="72">Polish
</option><option value="75">Pushtu
</option><option value="76">Quechua
</option><option value="77">Romanian
</option><option value="78">Romansch
</option><option value="80">Sango
</option><option value="81">Serbian
</option><option value="82">Setswana
</option><option value="83">Sindhi
</option><option value="84">Sinhala
</option><option value="85">Slovak
</option><option value="86">Slovene
</option><option value="87">Somali
</option><option value="89">Swahili
</option><option value="90">Swedish
</option><option value="91">Tamil
</option><option value="92">Thai
</option><option value="93">Turkish
</option><option value="94">Urdu
</option><option value="95">Vietnamese
</option><option value="99">Welsh
</option><option value="96">Xhosa
</option><option value="97">Yoruba
</option><option value="98">Zulu
</option></select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_nationality">
                                    <div class="form_label">
                                        Your nationality
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="nationality">
									<option value="" selected="">Not disclosed</option>
									<option>Afghan</option>
									<option>Albanian</option>
									<option>Algerian</option>
									<option>American</option>
									<option>Andorran</option>
									<option>Angolan</option>
									<option>Antiguans</option>
									<option>Argentinean</option>
									<option>Armenian</option>
									<option>Australian</option>
									<option>Austrian</option>
									<option>Azerbaijani</option>
									<option>Bahamian</option>
									<option>Bahraini</option>
									<option>Bangladeshi</option>
									<option>Barbadian</option>
									<option>Barbudans</option>
									<option>Batswana</option>
									<option>Belarusian</option>
									<option>Belgian</option>
									<option>Belizean</option>
									<option>Beninese</option>
									<option>Bhutanese</option>
									<option>Bolivian</option>
									<option>Bosnian</option>
									<option>Brazilian</option>
									<option>British</option>
									<option>Bruneian</option>
									<option>Bulgarian</option>
									<option>Burkinabe</option>
									<option>Burmese</option>
									<option>Burundian</option>
									<option>Cambodian</option>
									<option>Cameroonian</option>
									<option>Canadian</option>
									<option>Cape Verdean</option>
									<option>Central African</option>
									<option>Chadian</option>
									<option>Chilean</option>
									<option>Chinese</option>
									<option>Colombian</option>
									<option>Comoran</option>
									<option>Congolese</option>
									<option>Costa Rican</option>
									<option>Croatian</option>
									<option>Cuban</option>
									<option>Cypriot</option>
									<option>Czech</option>
									<option>Danish</option>
									<option>Djibouti</option>
									<option>Dominican</option>
									<option>Dutch</option>
									<option>Dutchman</option>
									<option>Dutchwoman</option>
									<option>East Timorese</option>
									<option>Ecuadorean</option>
									<option>Egyptian</option>
									<option>Emirian</option>
									<option>English</option>
									<option>Equatorial Guinean</option>
									<option>Eritrean</option>
									<option>Estonian</option>
									<option>Ethiopian</option>
									<option>Fijian</option>
									<option>Filipino</option>
									<option>Finnish</option>
									<option>French</option>
									<option>Gabonese</option>
									<option>Gambian</option>
									<option>Georgian</option>
									<option>German</option>
									<option>Ghanaian</option>
									<option>Greek</option>
									<option>Grenadian</option>
									<option>Guatemalan</option>
									<option>Guinea-Bissauan</option>
									<option>Guinean</option>
									<option>Guyanese</option>
									<option>Haitian</option>
									<option>Herzegovinian</option>
									<option>Honduran</option>
									<option>Hungarian</option>
									<option>I-Kiribati</option>
									<option>Icelander</option>
									<option>Indian</option>
									<option>Indonesian</option>
									<option>Iranian</option>
									<option>Iraqi</option>
									<option>Irish</option>
									<option>Irish</option>
									<option>Israeli</option>
									<option>Italian</option>
									<option>Ivorian</option>
									<option>Jamaican</option>
									<option>Japanese</option>
									<option>Jordanian</option>
									<option>Kazakhstani</option>
									<option>Kenyan</option>
									<option>Kittian and Nevisian</option>
									<option>Kuwaiti</option>
									<option>Kyrgyz</option>
									<option>Laotian</option>
									<option>Latvian</option>
									<option>Lebanese</option>
									<option>Liberian</option>
									<option>Libyan</option>
									<option>Liechtensteiner</option>
									<option>Lithuanian</option>
									<option>Luxembourger</option>
									<option>Macedonian</option>
									<option>Malagasy</option>
									<option>Malawian</option>
									<option>Malaysian</option>
									<option>Maldivan</option>
									<option>Malian</option>
									<option>Maltese</option>
									<option>Marshallese</option>
									<option>Mauritanian</option>
									<option>Mauritian</option>
									<option>Mexican</option>
									<option>Micronesian</option>
									<option>Moldovan</option>
									<option>Monacan</option>
									<option>Mongolian</option>
									<option>Moroccan</option>
									<option>Mosotho</option>
									<option>Motswana</option>
									<option>Mozambican</option>
									<option>Namibian</option>
									<option>Nauruan</option>
									<option>Nepalese</option>
									<option>Netherlander</option>
									<option>New Zealander</option>
									<option>Ni-Vanuatu</option>
									<option>Nicaraguan</option>
									<option>Nigerian</option>
									<option>Nigerien</option>
									<option>North Korean</option>
									<option>Northern Irish</option>
									<option>Norwegian</option>
									<option>Omani</option>
									<option>Pakistani</option>
									<option>Palauan</option>
									<option>Panamanian</option>
									<option>Papua New Guinean</option>
									<option>Paraguayan</option>
									<option>Peruvian</option>
									<option>Polish</option>
									<option>Portuguese</option>
									<option>Qatari</option>
									<option>Romanian</option>
									<option>Russian</option>
									<option>Rwandan</option>
									<option>Saint Lucian</option>
									<option>Salvadoran</option>
									<option>Samoan</option>
									<option>San Marinese</option>
									<option>Sao Tomean</option>
									<option>Saudi</option>
									<option>Scottish</option>
									<option>Senegalese</option>
									<option>Serbian</option>
									<option>Seychellois</option>
									<option>Sierra Leonean</option>
									<option>Singaporean</option>
									<option>Slovakian</option>
									<option>Slovenian</option>
									<option>Solomon Islander</option>
									<option>Somali</option>
									<option>South African</option>
									<option>South Korean</option>
									<option>Spanish</option>
									<option>Sri Lankan</option>
									<option>Sudanese</option>
									<option>Surinamer</option>
									<option>Swazi</option>
									<option>Swedish</option>
									<option>Swiss</option>
									<option>Syrian</option>
									<option>Taiwanese</option>
									<option>Tajik</option>
									<option>Tanzanian</option>
									<option>Thai</option>
									<option>Togolese</option>
									<option>Tongan</option>
									<option>Trinidadian or Tobagonian</option>
									<option>Tunisian</option>
									<option>Turkish</option>
									<option>Tuvaluan</option>
									<option>Ugandan</option>
									<option>Ukrainian</option>
									<option>Uruguayan</option>
									<option>Uzbekistani</option>
									<option>Venezuelan</option>
									<option>Vietnamese</option>
									<option>Welsh</option>
									<option>Yemenite</option>
									<option>Zambian</option>
									<option>Zimbabwean</option>
								</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_interests">
                                    <div class="form_label">
                                        Your interests
                                    </div>
                                    <div class="form_inputs">
                                        <div id="sharedInterests"></div>
                                        <span class="form_input form_text">
								<input type="text" name="interests" value="" maxlength="255">
							</span>
                                    </div>
                                </div>

                                <div class="form_row form_row_name  ">
                                    <div class="form_label">


                                        Your name


                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_text">
							<input type="text" name="first_name" value="Saikat" placeholder="First name">
						</span>
                                        <span class="form_input form_text">
							<input type="text" name="last_name" value="Jahan" placeholder="Last name">
						</span>
                                        <br>
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="display_last_name" checked="" value="Y">
                                            Display last name on advert?
                                        </label>
                                    </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend>Your preferred flatmate</legend>

                                <div class="form_row form_row_gender">
                                    <div class="form_label">
                                        Gender
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="gender_req">
									<option value="N">Males or Females</option>
									<option value="M">Males</option>
									<option value="F">Females</option>
								</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_age">
                                    <div class="form_label">
                                        Age range
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">


<select name="min_age_req">
    <option value="" selected="">Select...</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
    <option value="61">61</option>
    <option value="62">62</option>
    <option value="63">63</option>
    <option value="64">64</option>
    <option value="65">65</option>
    <option value="66">66</option>
    <option value="67">67</option>
    <option value="68">68</option>
    <option value="69">69</option>
    <option value="70">70</option>
    <option value="71">71</option>
    <option value="72">72</option>
    <option value="73">73</option>
    <option value="74">74</option>
    <option value="75">75</option>
    <option value="76">76</option>
    <option value="77">77</option>
    <option value="78">78</option>
    <option value="79">79</option>
    <option value="80">80</option>
    <option value="81">81</option>
    <option value="82">82</option>
    <option value="83">83</option>
    <option value="84">84</option>
    <option value="85">85</option>
    <option value="86">86</option>
    <option value="87">87</option>
    <option value="88">88</option>
    <option value="89">89</option>
    <option value="90">90</option>
    <option value="91">91</option>
    <option value="92">92</option>
    <option value="93">93</option>
    <option value="94">94</option>
    <option value="95">95</option>
    <option value="96">96</option>
    <option value="97">97</option>
    <option value="98">98</option>
    <option value="99">99</option>
</select>
							</span>
                                        <span class="form_text_separator">to</span>
                                        <span class="form_input form_select">


<select name="max_age_req">
    <option value="" selected="">Select...</option>
    <option value="18">18</option>
    <option value="19">19</option>
    <option value="20">20</option>
    <option value="21">21</option>
    <option value="22">22</option>
    <option value="23">23</option>
    <option value="24">24</option>
    <option value="25">25</option>
    <option value="26">26</option>
    <option value="27">27</option>
    <option value="28">28</option>
    <option value="29">29</option>
    <option value="30">30</option>
    <option value="31">31</option>
    <option value="32">32</option>
    <option value="33">33</option>
    <option value="34">34</option>
    <option value="35">35</option>
    <option value="36">36</option>
    <option value="37">37</option>
    <option value="38">38</option>
    <option value="39">39</option>
    <option value="40">40</option>
    <option value="41">41</option>
    <option value="42">42</option>
    <option value="43">43</option>
    <option value="44">44</option>
    <option value="45">45</option>
    <option value="46">46</option>
    <option value="47">47</option>
    <option value="48">48</option>
    <option value="49">49</option>
    <option value="50">50</option>
    <option value="51">51</option>
    <option value="52">52</option>
    <option value="53">53</option>
    <option value="54">54</option>
    <option value="55">55</option>
    <option value="56">56</option>
    <option value="57">57</option>
    <option value="58">58</option>
    <option value="59">59</option>
    <option value="60">60</option>
    <option value="61">61</option>
    <option value="62">62</option>
    <option value="63">63</option>
    <option value="64">64</option>
    <option value="65">65</option>
    <option value="66">66</option>
    <option value="67">67</option>
    <option value="68">68</option>
    <option value="69">69</option>
    <option value="70">70</option>
    <option value="71">71</option>
    <option value="72">72</option>
    <option value="73">73</option>
    <option value="74">74</option>
    <option value="75">75</option>
    <option value="76">76</option>
    <option value="77">77</option>
    <option value="78">78</option>
    <option value="79">79</option>
    <option value="80">80</option>
    <option value="81">81</option>
    <option value="82">82</option>
    <option value="83">83</option>
    <option value="84">84</option>
    <option value="85">85</option>
    <option value="86">86</option>
    <option value="87">87</option>
    <option value="88">88</option>
    <option value="89">89</option>
    <option value="90">90</option>
    <option value="91">91</option>
    <option value="92">92</option>
    <option value="93">93</option>
    <option value="94">94</option>
    <option value="95">95</option>
    <option value="96">96</option>
    <option value="97">97</option>
    <option value="98">98</option>
    <option value="99">99</option>
</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_occupation">
                                    <div class="form_label">
                                        Occupation
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="share_type_req">
									<option value="M">Don't mind</option>
									<option value="S">Students</option>
									<option value="P">Professionals</option>
								</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_smoking">
                                    <div class="form_label">
                                        Smoking
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="smoking">
									<option value="Y">Don't mind</option>
									<option value="N">No thanks</option>
								</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_pets">
                                    <div class="form_label">
                                        Pets
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="pets_req">
									<option value="Y">Don't mind</option>
									<option value="N">No thanks</option>
								</select>
							</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_orientation">
                                    <div class="form_label">
                                        Orientation
                                    </div>
                                    <div class="form_inputs">
							<span class="form_input form_select">
								<select name="gay_lesbian_req">
									<option value="ND" selected="">Not important</option>
									<option value="S">Straight</option>
									<option value="G">Gay/Lesbian</option>
									<option value="B">Bi-sexual</option>
								</select>
							</span>
                                    </div>
                                </div>

                            </fieldset>


                            <fieldset>
                                <legend>
                                    Advert details (optional)
                                </legend>
                                <div class="form_row form_row_title ">
                                    <div class="form_label">

                                        Advert title

                                        <div class="form_hint">
                                            (Short description)
                                        </div>
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_text">
							<input type="text" name="ad_title" value="" size="48" maxlength="50">
						</span>
                                    </div>
                                </div>
                                <div class="form_row form_row_description ">
                                    <div class="form_label">

                                        Description

                                        <div class="form_hint">
                                            (No contact details permitted within description)
                                        </div>
                                    </div>
                                    <div class="form_inputs">
						<span class="form_input form_text">
							<textarea name="ad_text" rows="10" cols="36" wrap="virtual"></textarea>
						</span>
                                        <div class="form_hint">
                                            Include details about the accommodation you are looking for,
                                            who you'd like to live with and what a potential flatmate
                                            should expect living with you.
                                        </div>
                                    </div>
                                </div>


                                <div class="form_row form_row_photos post-ad__photo-upload">
                                    <div class="post-ad__photo-upload-label">Upload photos</div>
                                    <div class="form_inputs">
                                        <div id="photoUploader" data-upload-url="/flatshare/upload-photos.pl" data-advert-id="g_WCnHEKjl7zxcf-dvzmlg" data-draft-advert-id="g_WCnHEKjl7zxcf-dvzmlg" data-session-id="09EBDE66-87FC-11EA-BE05-AF89E42E62DA" data-flatshare-type="wanted" data-email="saikatjahan50@gmail.com" data-max-file-size="16777216" data-slots-remaining="8" data-profile-photo-id="71632933"><div data-testid="uploader"><div class="uploader__hint">Photos must not contain any web urls or contact details. Only branded advertisers may include a company name or logo.</div><div class="photo-upload"><span class="photo-upload__item"><a class="photo-upload__delete"><i class="far fa-times"></i></a><div class="photo-upload__image-wrapper"><img class="photo-upload__image" src="https://photos2.spareroom.co.uk/images/flatshare/listings/large/74/66/74662945.jpg" draggable="false"></div><form id="captionForm" class="photo-upload__caption "><label class="photo-upload__caption-label" for="74662945"><i class="far fa-plus"></i><i class="far fa-pen"></i></label><input id="74662945" type="text" class="photo-upload__caption-input" name="caption-value" placeholder="Add caption" aria-label="Image caption" value=""><button type="button" class="photo-upload__caption-save" aria-label="Save caption"><i class="far fa-check"></i></button></form></span></div><div class="dropzone-wrapper"><p class="dropzone__file-hint">.jpg or .png only. Up to 16mb</p><div class="dropzone-button"><button class="button button--wide dz-clickable" id="dzClickable" type="button"><div class="button__content"><span class="button__icon"><i class="fas fa-images"></i></span><span class="button__text">Add up to 8 more images</span></div></button></div><div class="filepicker dropzone">   <div class="dz-default dz-message"><span>Drop files here to upload</span></div></div></div></div></div>
                                    </div>
                                </div>


                                <div class="form_row form_row_tel">
                                    <div class="form_label">
                                        Telephone
                                    </div>
                                    <div class="form_inputs">
    <span class="form_input form_text">
      <input type="tel" name="tel" value="" autocomplete="tel" id="form_input--tel-n">
    </span>
                                        <br>
                                        <span class="form_hint">
        (We won't display your number on SpareRoom or pass it onto any third parties. We need your number in case we need to contact you about your account or to help verify your details)
      </span>
                                        <input type="hidden" name="display_tel" value="N">
                                    </div>
                                </div>


                                <input type="hidden" name="email" value="saikatjahan50@gmail.com">


                                <input type="hidden" name="draft_advert_id" value="g_WCnHEKjl7zxcf-dvzmlg">


                            </fieldset>


                            <fieldset>
                                <input type="hidden" name="is_loggedin" value="1">
                                <legend>Email Alerts</legend>
                                <div class="form_row form_row_emails">
                                    <div class="form_label">
                                        Daily Email Alerts
                                    </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="emailnotify" checked="" value="Y">
                                            <input type="hidden" name="emailnotify_prev" value="Y">
                                            Yes, please send me daily summary emails of new
                                            Room

                                            Offered adverts matching my requirements
                                        </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_emails">
                                    <div class="form_label">
                                        Instant Email Alerts
                                    </div>
                                    <div class="form_inputs">
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="emailnotify_justin" value="Y">
                                            <input type="hidden" name="emailnotify_justin_prev" value="N">
                                            Yes, please send me emails of new
                                            Room

                                            Offered adverts matching my requirements as soon as they are posted on the website
                                        </label>
                                        (up to a maximum of
                                        <span class="form_input form_select">
							<select name="emailnotify_justin_max_qty">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
								<option>6</option>
								<option>7</option>
								<option>8</option>
								<option>9</option>
								<option>10</option>
								<option>11</option>
								<option selected="">12</option>
								<option>13</option>
								<option>14</option>
								<option>15</option>
								<option>20</option>
								<option>25</option>
								<option>30</option>
								<option>35</option>
								<option>40</option>
								<option>45</option>
								<option>50</option>
							</select>
						</span>
                                        <input type="hidden" name="emailnotify_justin_max_qty_prev" value="12"> per day)
                                    </div>
                                </div>
                            </fieldset>


                            <div class="form_row form_row_buttons">
                                <div class="form_label"></div>
                                <div class="form_inputs">
                                    <input type="hidden" name="usertype" value="lookingforashare">
                                    <input type="hidden" name="usertype_new" value="lookingforashare">

                                    <input type="hidden" name="ad_type" value="wanted">
                                    <input type="hidden" name="information" value="full">
                                    <input type="hidden" name="searchprofile" value="yes">
                                    <input type="hidden" name="thehousehold" value="yes">
                                    <input type="hidden" name="theadvert" value="yes">
                                    <div class="form_input form_button pl_save_bottom">
                                        <a href="{{route('User.Post-Room-Wanted-Final-Step')}}" class="button" id="postWantedAd" type="submit" name="submit"> Post ad
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </form>




                    </div>
                    <div class="grecaptcha-container"></div>
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
