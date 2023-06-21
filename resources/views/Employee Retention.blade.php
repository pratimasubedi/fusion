
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

{{-- next-1 --}}
<div class="container-fluid employee-retention-part">
	<div class="row">
		<div class="col-md-8 employee-retention-column-1">
			<div class="employee-retention-image">
				<a href="{{url('home')}}"><img class="img-fluid" src="{{url('public/images/2.jpg')}}"></a>
			</div>
		</div>
		<div class="col-md-4 employee-retention-column-2">
			<h1>Categories</h1>
			<ul style="list-style-type:none"> 
				<li>
					<a class="employee-retention-categories" href="{{url('Fair hiring')}}" > <i class="fas fa-angle-right"></i>Fair hiring</a>
				</li>
				<li>
					<a class="employee-retention-categories" href="{{url('Fair hiring')}}" ><i class="fas fa-angle-right"></i>Tips</a>
				</li>
			</ul>
			<h1>More Posts</h1>
			<div class="row more-post-section">
				<div class="col-md-4 ">
					<div class="more-post-images">
						<a href="{{url('home')}}"><img class="img-fluid" src="{{url('public/images/fa.jpg')}}"></a>

					</div>
				</div>
				<div class="col-md-8">
					<a class="employee-retention-more-post" href="{{url('Fair hiring')}}" >
						<h6>5 Proactive Ways to Boost Employee Retention</h6></a>
						<span>18th Jun, 2018</span>

					</div>
				</div>
				<div class="row more-post-section">
					<div class="col-md-4">
						<div class="more-post-images">
							<a href="{{url('home')}}"><img class="img-fluid" src="{{url('public/images/f2.jpg')}}"></a>

						</div>
					</div>
					<div class="col-md-8">
						<a class="employee-retention-more-post" href="{{url('Fair hiring')}}">
							<h6>Preparations before a Job Interview</h6></a>
							<span>18th Jun, 2018</span>

						</div>
					</div>
					<div class="row more-post-section">
						<div class="col-md-4">
							<div class="more-post-images">
								<a href="{{url('home')}}"><img class="img-fluid" src="{{url('public/images/2.jpg')}}"></a>

							</div>
						</div>
						<div class="col-md-8">
							<a class="employee-retention-more-post" href="{{url('Ethical Recruitmen')}}" >
								<h6>Ethical Recruitment</h6></a>
								<span>10th Jun, 2018</span>

							</div>
						</div>
					</div>
				</div>
			 </div>
			 <div class="container"> 
				<div class="row employee-retention-lastpart">
					<div class="col-md-8">
						<a class="employee-retention-Ethical-Recruitment" href="{{url('Ethical Recruitment')}}" ></a>
						<h1>5 Proactive Ways to Boost Employee Retention</h1>
						<p>As an employer, it is very important to retain your hard-working employees, especially those who exhibit remarkable skills and perseverance. The whole company is only as strong as the employees make it to be, meaning that it stands the same way that a pyramid does, take away the corner stone and the whole organization tumbles. In such case, one should proactively&nbsp;practice ways to boost employee retention</a>. Here are just a few examples to follow:</p>

						<p><strong>1.&nbsp;</strong><strong>Training the employees to further enable skill development.</strong></p>

						<p>In one way or the other, your employees may feel like they had reached the bottom of the barrel, that there may be nothing else to achieve in the company other than to finish their daily tasks. This should not be the case, most especially if the employer can still see more potential out of their employees. Sending them to training and seminars would not only allow them to hone their skills further, they would also be able to learn something new, a very good advantage that may lend the organization ingenuity and reinvention.</p>

						<p><strong>2.&nbsp;</strong><strong>Analyze and change up systems that no longer work.</strong></p>

						<p>Some internal procedures may have worked in the past, but times are changing and things aren&rsquo;t always the same as before. If you feel that your employees are getting frustrated of the old system and procedure, then it may be time to shuffle things up and introduce new concepts. Such may accomplish a more efficient and faster way to finish the job within the day, or even lighten up the load for everyone in the office, the possibilities are endless.</p>

						<p><strong>3.&nbsp;</strong><strong>You may also offer additional benefits to your employees.</strong></p>

						<p>Healthcare and the usual insurances are just the tip of the iceberg. You may offer unique rewards such as free parking, reimbursable fare, free lunch, free dinner (for those doing their overtime), etc. Not only would it raise the morale of your employees, it would also let them know that unlike any other companies, they are well-taken care of in their current work.</p>

						<p><strong>4.&nbsp;</strong><strong>Encourage a referral system.</strong></p>

						<p>Let your employees feel that they are not alone. Yes, some may treat their co-workers as friends, but they may also have a close-knit friendship outside of work, not only that, but that particular outsider may have skills beneficial to your company. If an employee were to refer someone they know, you may also reward them along the way, it&rsquo;s like hitting two birds with one stone: retaining your employee and gaining a new one.</p>

						<p><strong>5. An increase in compensation.</strong></p>


						<p>Well, this may very well be one of the main reasons why an employee leaves a company, not enough income. Due to the high-cost of living, many would prefer to find greener pastures and try out their luck in other organizations, rather than stay in their current office, where a raise would seem impossible. Make your employees feel appreciated when they feel that they deserve more, especially if they happen to go through rigorous schedules and overtimes.</p>

					</div>

				</div>
			</div>

			

			@endsection 