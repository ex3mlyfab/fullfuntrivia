@extends('front.layouts.home')

@section('title')
    Levels
@endsection

@section('content')
    <div class="page-banner-area">
        <div class="container">
            <div class="page-banner-content">
                <h2>Levels</h2>
                <ul>
                    <li>
                        <a href="{{url('/')}}">Home</a>
                    </li>
                    <li>Rules</li>
                </ul>
            </div>
        </div>
    </div>
    @include('front.layouts.levels')
@endsection
