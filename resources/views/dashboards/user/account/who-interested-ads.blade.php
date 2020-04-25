@extends('layouts.user.master')

@section('sub-nav')

    @include('layouts.user.sub-nav.account')

@endsection

@section('content')


@section('content')

    <main id="spareroom" class="wrap"><div class="grid-12-4 " id="mainheader"><div><h1>Who's interested in my ad(s)</h1></div><div>&nbsp;</div></div>    <div class="grid-12-4">
            <div id="maincontent">
                <p>Interests will only show for your active ads.</p>





                <div class="msg notice">
                    <p>There are no user interests to show.  Interests are not shown for users that:</p>
                    <ul class="bulletlist">
                        <li>do not have an advert</li>
                        <li>have removed your profile from their saved ads list or removed their interest</li>
                        <li>have found a suitable flatshare/flatmate/tenant and removed their advert</li>
                    </ul>
                </div>



            </div>
            <aside>
                <section>
                    <h4>Help topics</h4>
                    <ul>
                        <li><a href="/content/infowebsitehelp/whos-interested-explained">"Who's interested" list explained</a></li>
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
