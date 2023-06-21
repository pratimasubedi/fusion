@extends('home-master')
@section('content')

@include('top-bg-section')
<div class="container">
    <div class="pageTitleContainer">
        <div class="pageTitle">
            <h1>Title of the page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur a</p>
        </div>
    </div>
</div>


{{-- album-section --}}
<div class="container">
    <div class="album-main-section">
        <div class="row">
            @foreach($get_album as $album)
            <div class="col-md-4 col-sm-6">
                <div class="album-section">
                    <div class="album-image">
                        <img class="img-fluid" src="{{url('/uploads/'.$album->image)}}">
                    </div>
                    <div class="album-content">
                        <h3 class="album-title">{{ $album->albumname }}</h3>
                        <div class="album-icon">
                            <a href="{{ url('album-dynamic',$album->id) }}">
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