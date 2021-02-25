@extends('front.layouts.home')

@section('title')
    Rules
@endsection

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Rule</h2>
            <ul>
                <li>
                    <a href="#">Home</a>
                </li>
                <li>Rules</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
    @include('front.layouts.rule')
@endsection
