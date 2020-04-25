@extends('layouts.user.master')

@section('page-css')

    <link rel="stylesheet" href="{{asset('assets/css/messages.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/messages1.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/messages2.css')}}" />

    @endsection

@section('sub-nav')

    @include('layouts.user.sub-nav.account')

@endsection


@section('content')

    </div>
    </header>
    <main id="spareroom" class="wrap">
        <h1>My messages</h1>


        <div class="grid-12-4" id="mainheader"><div class="panel-tab"><a class="tab-active" title="Inbox" href="/flatshare/mythreads_beta.pl">Inbox&nbsp;&#40;0&#41;</a><a class="" title="Sent" href="/flatshare/mythreads_beta.pl?folder=sent">Sent</a><a class="" title="Unreplied" href="/flatshare/mythreads_beta.pl?folder=unreplied">Unreplied</a><a class="" title="Deleted" href="/flatshare/mythreads_beta.pl?folder=deleted">Deleted</a></div></div>      <div class="grid-12-4">
            <div class="mythreads" id="maincontent">

                <form action="/flatshare/mythreads_beta.pl" method="GET" class="message_filter message_filter-yes">

                    <div class="message_filter-labels">
                        <label for="label_aid">Filter by label:</label>
                        <select name="label_id" id="label_aid" class="message_filter-select">
                            <option value="" SELECTED >Show all</option>

                            <option value="1">
                                Viewing arranged

                            </option>

                            <option value="2">
                                Viewing completed

                            </option>

                            <option value="3">
                                Suitable

                            </option>

                            <option value="4">
                                Maybe

                            </option>

                            <option value="5">
                                Rejected

                            </option>

                            <option value="6">
                                Waiting for paperwork

                            </option>

                        </select>
                        <button type="submit" class="">Go</button>
                        <a href="/flatshare/labels.pl" class="message_filter-manage_labels"><i class="fas fa-tag" aria-hidden="true"></i>&nbsp;Manage my labels</a>
                    </div>


                    <div class="message_filter-advert">
                        <label for="listing_restrict" class="message-filter-label">Filter by advert:</label>
                        <select name="listing_restrict" id="listing_restrict" class="message_filter-select">
                            <option value="" SELECTED >Show all</option>
                            <option value="wanted_ads_ive_contacted">Just wanted ads I have contacted</option>
                            <optgroup label="My adverts">

                            </optgroup>
                        </select>
                        <button type="submit" class="">Go</button>
                    </div>

                    <input type="hidden" name="folder" value="inbox">
                    <input type="hidden" name="sort" value="">
                    <input type="hidden" name="threads_options" value="yes">
                </form>

                <div class="count_and_sort">
                    <div class="count_and_sort-count">
                        <div>Displaying <strong>0 conversations</strong></div>
                        <a href="/flatshare/mythreads.pl?" class="count_and_sort-clear_filter">Clear filters&nbsp;<i class="fas fa-times" aria-hidden="true"></i></a>
                    </div>
                    <div class="message-sort default count_and_sort-sort">Sort by:
                        <a href="/flatshare/mythreads_beta.pl?folder=inbox&offset=0&listing_restrict=&show_deleted_too=&label_id=&only_unreplied=" class="count_and_sort-sort_link default">Newest first</a> |
                        <a href="/flatshare/mythreads_beta.pl?folder=inbox&offset=0&listing_restrict=&show_deleted_too=&label_id=&only_unreplied=&sort=default_asc" class="count_and_sort-sort_link default_asc">Oldest first</a> |
                        <a href="/flatshare/mythreads_beta.pl?folder=inbox&offset=0&listing_restrict=&show_deleted_too=&label_id=&only_unreplied=&sort=full_name_asc" class="count_and_sort-sort_link full_name_asc">By name</a>
                    </div>
                </div>
                <p class="msg notice">
                    No messages found

                </p>






                <script>

                    var conversationNoteSaveTimer,
                        conversationNote          = jQuery('.conversation_note');
                    conversationNoteTextarea  = conversationNote.find('textarea'),
                        conversationNoteStatus    = conversationNote.find('.status'),
                        conversationNoteText      = conversationNoteTextarea.val();

                    conversationNoteTextarea.on('keyup keydown change', function () {

                        conversationNoteTextarea.val( conversationNoteTextarea.val().substr(0,1024) );

                        if (conversationNoteText == conversationNoteTextarea.val()) {
                            return;
                        }

                        conversationNoteText = conversationNoteTextarea.val();

                        conversationNoteStatus.hide();
                        conversationNote.find('.status.unsaved').show();

                        if (typeof conversationNoteSaveTimer !== 'undefined') {
                            clearTimeout(conversationNoteSaveTimer);
                        }

                        conversationNoteSaveTimer = setTimeout(function () {
                            jQuery.post(
                                '/flatshare/mythreads_beta.pl',
                                {
                                    action:            'save_note',
                                    format:            'json',
                                    thread_id:         '',
                                    label_id:          '',
                                    conversation_note: conversationNoteText
                                }
                            ).done(function (jsonResponse) {
                                if (jsonResponse.success) {
                                    conversationNoteStatus.hide();
                                    conversationNote.find('.status.saved').show();
                                } else {
                                    conversationNoteStatus.hide();
                                    conversationNote.find('.status.save_error').show();
                                }
                            }).fail(function () {
                                conversationNoteStatus.hide();
                                conversationNote.find('.status.save_error').show();
                            });
                        }, 1000);
                    });

                    jQuery(document).ready(function () {
                        conversationNote.find('.autosave_info').show();
                        conversationNote.find('.save_btn').hide();

                        jQuery('.edit_note_link').hover(
                            function () {
                                var positionData = jQuery(this).position();
                                var dd_top = Math.round(positionData.top + 20) + 'px';
                                var dd_left = Math.round(positionData.left) + 'px';
                                conversationNote.css({ top: dd_top, left: dd_left }).show();
                                conversationNoteTextarea.focus();
                            },
                            function () {
                                conversationNote.hide();
                            }
                        );
                        conversationNote.hover(
                            function () {
                                jQuery(this).show();
                            },
                            function () {
                                jQuery(this).hide();
                            }
                        );
                    });

                </script>

            </div>
            <aside>
                <section>
                    <h4>Help topics</h4>
                    <ul>
                        <li><a href="/content/infowebsitehelp/why-have-i-received-no-response/">Why have I not received a reply?</a></li>
                    </ul>
                </section>

                <section class='tip-box tip-box--desktop'>
                    <header class="tip-box__header">
                        <h3 class="tip-box__heading"><i class='fas fa-shield-alt tip-box__icon'></i>Stay safe</h3>
                    </header>
                    <div class="tip-box__div">
                        <p class='tip-box__tips tip-box__tips--first'>
                            <strong>TIP: </strong>Stay within the SpareRoom messaging system for at least a couple of emails before revealing your contact details to the other user.
                        </p>
                        <p class='tip-box__tips'>
                            <strong>TIP: </strong>Always view before you pay any money.<br />


                            <a href='/content/info-landlords/safety-tips-for-landlords/'>See more</a>

                        </p>
                    </div>
                </section><section class="panel panel-header-closed need_help">
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
                </section>        </aside>
        </div>

    </main>

    @endsection
