@extends('layouts.app')

@section('content')





<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>Privacy policy</h2>
           
        </div>
    </div>
</div>



<section class="privacy-policy-area ptb-50">
    <div class="container">


        <div id="accordion">

            <p>Diamond Review values and respects your privacy.
            We stand united with many other responsible websites AGAINST "SPAMMING"
                 and other intrusive mass-marketing tactics.</p>
            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">

                    We collect the following categories of personally identifiable information
                </a><div class="row icones"> <i class='bx bx-plus' data-toggle="collapse" href="#collapseTwo"></i></div>
              </div>

              <div id="collapseTwo" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    1. The IP address of any computer/network you use to access this web site.
                </div>
              </div>
            </div><br>

            <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                    We collect the following categories of personally identifiable information
                    </a><div class="row icones">  <i class='bx bx-plus' data-toggle="collapse" href="#collapseFive"></i></div>
                </div>
                <div id="collapseFive" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    2. If you wish to post messages on the forum, we will collect your email address and username prior
                    to allowing you to post any such messages.
                </div>
                </div>
              </div><br>

            <div class="card">
              <div class="card-header">
                <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    How long do we keep your data?
                </a><div class="row icones">  <i class='bx bx-plus' data-toggle="collapse" href="#collapseThree"></i></div>

              </div>
              <div id="collapseThree" class="collapse" data-parent="#accordion">
                <div class="card-body">
                    Data about your browsing our website will be kept only for the duration of the session.
                    However, cookies may last longer on your device so we can identify you upon your next visit.
                    Registrations for events or newsletters will be kept until after the event or until you unsubscribe
                    from our newsletters.
                    Information about visitors at our premises are kept for 30 days or longer if required for security
                    purposes or to investigate an incident.
                    Other personal data that we have will be retained for the duration that is relevant for the purpose
                    as set out above, in accordance to internal retention periods, taking into account contractual or legal
                    obligations and liability that we may have to keep records of our files.
                 </div>
              </div>
            </div><br>
            <div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                    Governing law and jurisdiction stipulation
                </a><div class="row icones">  <i class='bx bx-plus' data-toggle="collapse" href="#collapseFour"></i></div>
            </div>
                <div id="collapseFour" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    This Data Protection Notice shall be governed, interpreted and enforced in accordance with Belgian law,
                    which applies exclusively for any litigation.
                    Antwerp courts have exclusive jurisdiction to rule on any dispute that may arise from the interpretation
                     or implementation of this Data Protection Notice.
                    </div>
                </div>
              </div><br>
               <!--<div class="card">
                <div class="card-header">
                  <a class="collapsed card-link" data-toggle="collapse" href="#collapseSixteen">
                    Collapsible Group Item #16
                  </a>
                </div>
                <div id="collapseSixteen" class="collapse" data-parent="#accordion">
                  <div class="card-body">
                    Lorem ipsum..16
                  </div>
                </div>
              </div>-->

          </div>


    </div>
</section>


@endsection
