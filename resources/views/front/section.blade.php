@extends('front.layouts.home')

@section('title')
   Section
@endsection

@section('content')
<!-- Start Page Banner -->
<div class="page-banner-area">
    <div class="container">
        <div class="page-banner-content">
            <h2>Rule</h2>
            <ul>
                <li>
                    <a href="{{url('/')}}">Home</a>
                </li>
                <li>Section</li>
            </ul>
        </div>
    </div>
</div>
<!-- End Page Banner -->
    @include('front.layouts.section')
@endsection
