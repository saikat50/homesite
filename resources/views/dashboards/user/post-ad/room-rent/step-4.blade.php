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

                    Advertise your room



                </h1></div>
            <div>&nbsp;</div>
        </div>
        <div class="grid-12-4">
            <div>
                <div class="block block_simple block_offered_listing">
                    <div class="block_header">
                        <h3>
                            Step 4 of 6</h3> </div>
                    <div class="block_content">
                        <div id="deposit_warning_popup"></div>
                        <form action="/flatshare/offered-advert3.pl" method="POST" class="pl_step2" name="place_room_offered_st_2">
                            <input type="hidden" name="current_step" value="thehousehold">
                            <input type="hidden" name="advert_id" value="">
                            <input type="hidden" name="M_step" value="2">
                            <input type="hidden" name="resubmitblock" value="1587914022">
                            <input type="hidden" name="csrf_token" value="ee1b25a1ae0f955edf6a1c572f9681a4b14ea865,271ee31a57d4da6012b5e291a54eaf5a7cbc61d5,1587914022">
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
                            <input type="hidden" name="rooms_for_rent" value="1">
                            <input type="hidden" name="roomcount" value="1">
                            <input type="hidden" name="roomstatus1" value="available">
                            <input type="hidden" name="roomprice1" value="40">
                            <input type="hidden" name="roomper1" value="pw">
                            <input type="hidden" name="roomtype1" value="double">
                            <input type="hidden" name="roomensuite1" value="">
                            <input type="hidden" name="roomfurnishings1" value="furnished">
                            <input type="hidden" name="roomsecurity_deposit1" value="">
                            <input type="hidden" name="day_avail" value="26">
                            <input type="hidden" name="mon_avail" value="04">
                            <input type="hidden" name="year_avail" value="2020">
                            <input type="hidden" name="min_term" value="">
                            <input type="hidden" name="max_term" value="">
                            <input type="hidden" name="short_lets_considered" value="">
                            <input type="hidden" name="days_of_wk_available" value="7 days a week">
                            <input type="hidden" name="references_needed" value="N">
                            <input type="hidden" name="dss" value="Y">
                            <input type="hidden" name="bills_inc" value="">
                            <input type="hidden" name="broadband" value="">
                            <fieldset>
                                <legend>The Existing Flatmate</legend>
                                <input type="hidden" name="occupants" value="1">
                                <div class="form_row form_row_smoking">
                                    <div class="form_label"> Smoking </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                    <select name="smoking_current">
                      <option value="N" selected="">No</option>
                      <option value="Y">Yes</option>
                    </select>
                  </span> </div>
                                </div>
                                <div class="form_row form_row_gender ">
                                    <div class="form_label"> Gender </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                  <select name="gender">
<option value="NULL">Select...
</option><option value="F">Female
</option><option value="M">Male
</option></select>
                </span> </div>
                                </div>
                                <div class="form_row form_row_occupation">
                                    <div class="form_label"> Occupation </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                  <select name="share_type">
                    <option value="ND" selected="">Not disclosed</option>
                    <option value="S">Student</option>
                    <option value="P">Professional</option>
                    <option value="O">Other</option>
                    <option value="M">Mixed</option>
                  </select>
                </span> </div>
                                </div>
                                <div class="form_row form_row_pets">
                                    <div class="form_label"> Pets </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                    <select name="pets">
                      <option value="N">No</option>
                      <option value="Y">Yes</option>
                    </select>
                  </span> </div>
                                </div>
                                <div class="form_row form_row_age">
                                    <div class="form_label"> Age </div>
                                    <div class="form_inputs"> <span class="form_input form_select">


<select name="min_age">
    <option value="null" selected="">-</option>
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
                </span> </div>
                                </div>
                                <div class="form_row form_row_language">
                                    <div class="form_label"> Language </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
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
                  </span> </div>
                                </div>
                                <div class="form_row form_row_nationality">
                                    <div class="form_label"> Nationality </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
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

                  </span> </div>
                                </div>
                                <div class="form_row form_row_orientation">
                                    <div class="form_label"> Sexual orientation </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                    <select name="gay_lesbian">
                      <option value="ND">Not Disclosed</option>
                      <option value="S">Straight</option>
                      <option value="M">Mixed share</option>
                      <option value="G">Gay/Lesbian</option>
                      <option value="B">Bi-sexual</option>
                    </select>
                  </span>
                                        <label class="form_input form_checkbox">
                                            <input type="checkbox" name="gay_consent" value="Y"> Yes, I would like my orientation to form part of my advert, search criteria and allow others to search on this field </label>
                                    </div>
                                </div>
                                <div class="form_row form_row_interests">
                                    <div class="form_label"> Interests </div>
                                    <div class="form_inputs"> <span class="form_input form_text">
                    <input type="text" name="interests" value="" size="48" maxlength="255">
                  </span> </div>
                                </div>
                            </fieldset>
                            <fieldset>
                                <legend> Preferences For New Flatmate </legend>
                                <div class="form_row form_row_smoking">
                                    <div class="form_label"> Smoking </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                <select name="smoking">
                  <option value="Y">No preference</option>
                  <option value="N">No</option>
                </select>
              </span> </div>
                                </div>
                                <div class="form_row form_row_gender">
                                    <div class="form_label"> Gender </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                  <select name="gender_req">
                    <option value="N">No preference</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
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
                                <div class="form_row form_row_min_age">
                                    <div class="form_label"> Minimum age </div>
                                    <div class="form_inputs"> <span class="form_input form_select">


<select name="min_age_req">
    <option value="null" selected="">-</option>
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
                </span> </div>
                                </div>
                                <div class="form_row form_row_max_age">
                                    <div class="form_label"> Maximum age </div>
                                    <div class="form_inputs"> <span class="form_input form_select">


<select name="max_age_req">
    <option value="null" selected="">-</option>
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
                </span> </div>
                                </div>
                                <div class="form_row form_row_language">
                                    <div class="form_label"> Language </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                    <select name="lang_id_req"><option value="26">English
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
                  </span> </div>
                                </div>
                                <div class="form_row form_row_couples">
                                    <div class="form_label"> Couples welcome? </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                  <label><input type="radio" name="couples" value="N"> No </label>
                  <label><input type="radio" name="couples" value="Y"> Yes* </label>
                </span>
                                        <div class="form_hint"> *specify any rent adjustments in your ad description on next step </div>
                                    </div>
                                </div>
                                <div class="form_row form_row_misc">
                                    <div class="form_label"> Vegetarian preferred? </div>
                                    <div class="form_inputs"> <span class="form_input form_select">
                    <select name="vegetarians">
                      <option>No preference</option>
                      <option value="Y">Yes</option>
                    </select>
                  </span> </div>
                                </div>
                                <div class="form_row ">
                                    <div class="form_label"></div>
                                    <div class="form_inputs">
                                        <div class="btn-wrapper">
                                            <div>
                                                <a href="{{route('User.Room-rent-5')}}" class="button" type="submit" name="validate_step" value="Continue to next step">Continue to next step</a>
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
                            <input type="hidden" name="scp" value="N">
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
