@extends('layouts.app')

@section('content')




<div class="page-title-area">
    <div class="container">
        <div class="page-title-content">
            <h2>About us</h2>
            <ul>
                <li><a href="/">Home</a></li>
                <li>About us</li>
            </ul>
        </div>
    </div>
</div>


<section class="about-area ptb-50">
    <div class="container">
        <div class="about-image">
            <img src="{{asset('public/img/logo/2.png')}}" alt="image">
        </div>
        <div class="about-content sobrenos">
            <h3>Diamond Review Africa</h3>
            <p>Diamond Review Africa is an international news outlet designed to provide
                the latest, most complete and most insightful information about the diamond
                industry in the world in general and in Africa in particular. In the form of
                 a news wall and smart app, Diamond Review Africa is an efficient and fast way to
                  track and keep up with industry news and trends. We present
                   headlines of the latest news, updated daily.
                Powered and owned by Re-call Communications and Events Ltd

            </p>
            <p>The diamond industry is a constantly evolving global business,
                 strongly influenced by international events.
                 Staying informed about top industry developments,
                  trends and dynamics is key for stakeholders in the business,
                   but since we live in an age of information overload,
                   keeping up with the latest diamond news can be tedious and time consuming.
                    Thanks to <b> The Diamond Review Africa </b>, those interested in the diamond industry
                     no longer need to look through numerous websites to find the information they need.
                     <b>The Diamond Review Africa</b> is not simply a repository of news.
                     Opinion pieces and in-depth analyses by both experts active in the global diamond
                     sector and those from outside the industry, feature on a regular basis.</p>
        </div>
    </div>
</section>

@endsection
