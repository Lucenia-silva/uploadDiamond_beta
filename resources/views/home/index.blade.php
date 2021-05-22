@extends('layouts.app')

@section('content')

@include('home.banner')



<section class="default-news-area">
    <div class="container">
        <div class="row">
            @include('menupage.navbar')

            @include('menupage.sidebar')

        </div>
    </div>
</section>


@endsection

