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
 <div class="container">
   <div class="row">
   	@foreach($eventdynamic as $edynamic)
     <div class="col-lg-12">
       <div class="Events-dynamic-section">
         <div class="Events-dynamic-image">
           <img class="img-fluid" src="{{url('/uploads/'.$edynamic->image)}}">
         </div>
         <div class="post-metas">

           <i class="fas fa-calendar"></i>
         {{ $edynamic->date }}</div>

         <h6>{{ $edynamic->title }}</h6>
         {!! $edynamic->description !!}
         {{-- <h6>Interview as on 28th December 2018</h6>
         <p>Al Othaim Supermarket(Saudi Arabia) needs 200 Merchandiser fluent in english and with relevant work experience. The interview is going to held after pre-screening of the candidates resume by the client. The salary depends on the interview and work experience.</p> --}}
         {{-- <div class="share-bar-new">
           <h3>Share this event</h3>
           <div class="addthis_inline_share_toolbox"></div>
         </div> --}}
       </div>
     </div>
		@endforeach
   </div>

 </div>
</section>
@endsection