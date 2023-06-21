@extends('home-master')
@section('content')
@include('top-bg1-section')

<div class="container">
    <div class="pageTitleContainer">
        <div class="pageTitle">
            <h1>Title of the page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur a</p>
        </div>
    </div>
</div>
{{--  --}}
<div class="container">
    <div class="training-dynamic-main-section">
        @foreach($trainingdynamic as $dynamic)
        <div class="row">
            <div class="col-sm-8 first-column">
                <div class="description-heading">
                    <h3>{{ $dynamic->title }}</h3>
                </div>
                <div class="description-paragraph">
                    {!! $dynamic->description !!}
                </div>
            </div>
            <div class="col-sm-4 second-column">
                <div class="eligibility-section">
                    <div class="eligibility-heading">
                        <h6>Eligibility <i class="fas fa-long-arrow-alt-right"></i><span>{{ $dynamic->elligible }}</span>
                        </h6>
                    </div>
                    <div class="address-heading">
                        <h6>Address <i class="fas fa-long-arrow-alt-right"></i><span>{{ $dynamic->address }}</span></h6>
                    </div>
                    <div class="date-heading">
                        <h6>Date:<span>{{ $dynamic->date }}</span></h6>
                    </div>
                    <div class="Time-heading">
                        <h6>Time:<span>{{ $dynamic->time }}</span></h6>
                    </div>
                    <div class="Free-heading">
                        <h6>Payment:<span>{{ $dynamic->charge }}</span></h6>
                    </div>
                    <div class="cash-heading">
                        <h6>Cash:<span>Rs.{{ $dynamic->amount }}</span></h6>
                    </div>
                    <div class="Contact-us">
                        <a href="{{ url('/contact') }}">Contact Us</span></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection