<div class="about" id="about">
		<div class="container my_container">
					<h3 class="w3l_head">About Me</h3>
			<p class="w3ls_head_para">A few words about me</p>
		<div class="w3l-grids-about">
				<div class="col-md-5 w3ls-ab-right">
					<div class="agile-about-right-img">
						<img src="{{asset('front-themes/images/about_profile.jpg')}}" alt="">
					</div>
				</div>
				<div class="col-md-7 w3ls-agile-left">
					<div class="w3ls-agile-left-info">
						<h4>Job Title</h4>
						<p>{{$about['job_title']}}</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Name</h4>
						<p>{{$about['name']}}</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Sex</h4>
						<p>{{ucfirst($about['gender'])}}</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Address</h4>
						<p> {{$about['address']}}</p>
					</div>
					<div class="w3ls-agile-left-info">
						<h4>Email Address</h4>
						<p><a href="mailto:example@email.com">{{$about['email']}}</a></p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			</div>
		</div>