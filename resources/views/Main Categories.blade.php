
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

{{--  --}}
<div class="container paddingforall about-tabs">
    <ul class="nav nav-tabs capitalize">
        <li class="active"><a href="#about1" data-toggle="tab">All</a></li>
        <li><a href="#about2" data-toggle="tab">A</a></li>
        <li><a href="#about3" data-toggle="tab">B</a></li>
        <li><a href="#about4" data-toggle="tab">C</a></li>
        <li><a href="#about5" data-toggle="tab">D</a></li>
        <li><a href="#about6" data-toggle="tab">E</a></li>
        <li><a href="#about7" data-toggle="tab">F</a></li>
        <li><a href="#about8" data-toggle="tab">G</a></li>
        <li><a href="#about9" data-toggle="tab">H</a></li>
        <li><a href="#about10" data-toggle="tab">I</a></li>
        <li><a href="#about11" data-toggle="tab">J</a></li>
        <li><a href="#about12" data-toggle="tab">K</a></li>
        <li><a href="#about13" data-toggle="tab">L</a></li>
        <li><a href="#about14" data-toggle="tab">M</a></li>
        <li><a href="#about15" data-toggle="tab">N</a></li>
        <li><a href="#about16" data-toggle="tab">O</a></li>
        <li><a href="#about17" data-toggle="tab">P</a></li>
        <li><a href="#about18" data-toggle="tab">Q</a></li>
        <li><a href="#about19" data-toggle="tab">R</a></li>
        <li><a href="#about20" data-toggle="tab">S</a></li>
        <li><a href="#about21" data-toggle="tab">T</a></li>
        <li><a href="#about22" data-toggle="tab">U</a></li>
        <li><a href="#about23" data-toggle="tab">V</a></li>
        <li><a href="#about24" data-toggle="tab">W</a></li>
        <li><a href="#about25" data-toggle="tab">X</a></li>
        <li><a href="#about26" data-toggle="tab">Y</a></li>
        <li><a href="#about27" data-toggle="tab">Z</a></li>
    </ul>

    <div class="tab-content clearfix">
        {{-- start of about 1 --}}
        <div class="tab-pane paddingforall active" id="about1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <section id="options" class="alpha-pag full background-white">
                        </section>
                        <div class="cat-sec style2">
                            <div class="row" id="masonry_abc">
                                @foreach($getallcategory as $allcategory)
                                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                                    <div class="p-category style2">
                                      <a href="{{url('categorydetail',$allcategory->slug)}}">
                                            <i class="fas fa-female"></i>
                                            <span>{{ $allcategory->title }}</span>
                                            <p>({{ $allcategory->job_opening }} open positions)</p>
                                        </a>
                                    </div>
                                </div>
                                @endforeach

                             </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        {{-- end of about 1 --}}


        {{-- start of about-2 A --}}
        <div class="tab-pane paddingforall" id="about2">
            <div class="container">
                @foreach($getAcategory as $Acategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Acategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Acategory->title }}</span>
                            <p>({{ $Acategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        {{-- end of about-2 A --}}

        <div class="tab-pane paddingforall" id="about3">

            <div class="container">
                @foreach($getBcategory as $Bcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Bcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Bcategory->title }}</span>
                            <p>({{ $Bcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach          
          </div>
        </div>

        <div class="tab-pane paddingforall" id="about4">

            <div class="container">
               @foreach($getCcategory as $Ccategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ccategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ccategory->title }}</span>
                            <p>({{ $Ccategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane paddingforall" id="about5">

            <div class="container">
                @foreach($getDcategory as $Dcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Dcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Dcategory->title }}</span>
                            <p>({{ $Dcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <div class="tab-pane paddingforall" id="about6">
            <div class="container">
                @foreach($getEcategory as $Ecategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ecategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ecategory->title }}</span>
                            <p>({{ $Ecategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about7">
            <div class="container">
                @foreach($getFcategory as $Fcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Fcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Fcategory->title }}</span>
                            <p>({{ $Fcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about8">
            <div class="container">
                @foreach($getGcategory as $Gcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Gcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Gcategory->title }}</span>
                            <p>({{ $Gcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about9">
            <div class="container">
                @foreach($getHcategory as $Hcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Hcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Hcategory->title }}</span>
                            <p>({{ $Hcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about10">
            <div class="container">
                @foreach($getIcategory as $Icategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Icategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Icategory->title }}</span>
                            <p>({{ $Icategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about11">
            <div class="container">
                @foreach($getJcategory as $Jcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Jcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Jcategory->title }}</span>
                            <p>({{ $Jcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about12">
            <div class="container">
                @foreach($getKcategory as $Kcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Kcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Kcategory->title }}</span>
                            <p>({{ $Kcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about13">
            <div class="container">
                @foreach($getLcategory as $Lcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Lcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Lcategory->title }}</span>
                            <p>({{ $Lcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about14">
            <div class="container">
               @foreach($getMcategory as $Mcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Mcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Mcategory->title }}</span>
                            <p>({{ $Mcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach           
            </div>
        </div>
        <div class="tab-pane paddingforall" id="about15">
            <div class="container">
                @foreach($getNcategory as $Ncategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ncategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ncategory->title }}</span>
                            <p>({{ $Ncategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="tab-pane paddingforall" id="about16">
            <div class="container">
                @foreach($getOcategory as $Ocategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ocategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ocategory->title }}</span>
                            <p>({{ $Ocategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
        <div class="tab-pane paddingforall" id="about17">
            <div class="container">
               @foreach($getPcategory as $Pcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Pcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Pcategory->title }}</span>
                            <p>({{ $Pcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
    <div class="tab-pane paddingforall" id="about18">
        <div class="container">
            @foreach($getQcategory as $Qcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Qcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Qcategory->title }}</span>
                            <p>({{ $Qcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about19">
        <div class="container">
            @foreach($getRcategory as $Rcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Rcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Rcategory->title }}</span>
                            <p>({{ $Rcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about20">
        <div class="container">
            @foreach($getScategory as $Scategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Scategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Scategory->title }}</span>
                            <p>({{ $Scategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about21">
        <div class="container">
            @foreach($getTcategory as $Tcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Tcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Tcategory->title }}</span>
                            <p>({{ $Tcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about22">
        <div class="container">
            @foreach($getUcategory as $Ucategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ucategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ucategory->title }}</span>
                            <p>({{ $Ucategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about23">
        <div class="container">
            @foreach($getVcategory as $Vcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Vcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Vcategory->title }}</span>
                            <p>({{ $Vcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about24">
        <div class="container">
            @foreach($getWcategory as $Wcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Wcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Wcategory->title }}</span>
                            <p>({{ $Wcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach

        </div>
    </div>
    <div class="tab-pane paddingforall" id="about25">
        <div class="container">
            @foreach($getXcategory as $Xcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Xcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Xcategory->title }}</span>
                            <p>({{ $Xcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about26">
        <div class="container">
            @foreach($getYcategory as $Ycategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Ycategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Ycategory->title }}</span>
                            <p>({{ $Ycategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
    <div class="tab-pane paddingforall" id="about27">
        <div class="container">
            @foreach($getZcategory as $Zcategory)
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 b">
                    <div class="p-category style2">
                      <a href="{{url('categorydetail',$Zcategory->slug)}}">
                            <i class="fas fa-female"></i>
                            <span>{{ $Zcategory->title }}</span>
                            <p>({{ $Zcategory->job_opening }} open positions)</p>
                        </a>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</div>
</div>

@endsection