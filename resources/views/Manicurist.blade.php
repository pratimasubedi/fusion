 
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
<section>
<div class="container Manicurist-section">
    <div class="row">
        <div class="col-lg-12">
            <div class="job-grid-sec" style="margin-bottom: 50px;">
                <div class="row" id="append-data">
                    @foreach($getcategorythird as $thirdpage)
                    <div class="mani-row">
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="job-grid border">
                            <div class="job-title-sec">
                                <div class="Manicurist-image">
                                    
                                    <img class="img-fluid" src="{{url('uploads/'.$thirdpage->image)}}">
                                    
                                </div>
                                <h3>
                                
                                {{ $thirdpage->title }}
                                
                                </h3>
                                <div>
                                    <span>{{ $thirdpage->salary }}
                                    </span>
                                </div>
                                
                                <span class="fav-job">{{ $thirdpage->job_vacancy }} Vacancies</span>
                            </div>
                            <span class="job-lctn">
                                {{ $thirdpage->location }}
                                
                            </span>
                            <div class="Manicurist-button">
                                <a href="{{url('categoryfourthpage',$thirdpage->slug)}}">
                                    <button type="button" class="Manicurist-btn">Apply Now</button>
                                </a>
                            </div>
                        </div><!-- JOB Grid -->
                        </div>
                    </div>
                        @endforeach
                    
                    
                </div>
            </div>
                
        </div>
    </div>
</div>
</section>

@endsection