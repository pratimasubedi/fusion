@extends('home-master')
@section('content')

@include('top-bg-section')

<div class="container">
    <div class="pageTitleContainer">
        <div class="pageTitle">
            <h1>Title of the page</h1>
            <p><i>Lorem ipsum dolor sit amet, consectetur a</i></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="training-main-section">
        <div class="row">
            @foreach($get_training as $training)
            <div class="col-md-4 col-sm-6">
                <div class="training-section">
                    <div class="training-image">
                        <img class="img-fluid" src="{{url('/uploads/'.$training->image)}}">
                    </div>
                    <div class="training-content">
                        <h3 class="training-title">{{ $training->title }}</h3>
                        <div class="training-icon">
                            <a href="{{ url('training-dynamic',$training->id) }}">
                                <i class="fas fa-link">
                                </i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection