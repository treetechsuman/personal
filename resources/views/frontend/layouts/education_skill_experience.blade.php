<div class="education" id="education">
	<div class="col-md-6 education-w3l">
		<h3 class="w3l_head three">My Education</h3>
		<div class="education-agile-grids">
			@foreach($educations as $education)
			<div class="education-agile-w3l">
				<div class="education-agile-w3l-year">
					<h4>{{$education['start']}}-{{$education['end']}}</h4>
					<h6>{{$education['programm']}}</h6>
				</div>
				<div class="education-agile-w3l-info">
					<h4>{{$education['university']}}</h4>
					<p>{{$education['institute']}}</p>
					
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
						
		</div>
	</div>
	<div class="col-md-6 skills">
		<h3 class="w3l_head two">My Skills</h3>
		<div class="skill-agile">
			<div class='bar_group'>
				@foreach($skills as $skill)
				<div class='bar_group__bar thin elastic' label='{{$skill['title']}}' value='{{$skill['value']}}'></div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="clearfix"> </div>
</div>
<!-- //education -->
<!-- /experience -->
<div class="education" id="education two">
	<div class="col-md-6 skills two">
		<h3 class="w3l_head two">More Skills</h3>
		<div class="skill-agile">
			@foreach($moreSkills as $moreSkill)
			<div class="col-sm-4 abt-gd-left text-center">
				<div id="demo-pie-{{$moreSkill['display_order']}}" class="pie-title-center" data-percent="{{$moreSkill['value']}}"> <span class="pie-value"></span> </div>
				<h4>{{$moreSkill['title']}}</h4>
			</div>
			@endforeach
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="col-md-6 education-w3l">
		<h3 class="w3l_head three">My Experience</h3>
		<div class="education-agile-grids">
			@foreach($experiences as $experience)
			<div class="education-agile-w3l">
				<div class="education-agile-w3l-year">
					<h4>{{$experience['from']}}-{{$experience['to']}}</h4>
					<h6>{{$experience['office']}}</h6>
				</div>
				<div class="education-agile-w3l-info">
					<h4>{{$experience['post']}}</h4>
					<p>{{$experience['description']}}</p>					
				</div>
				<div class="clearfix"></div>
			</div>
			@endforeach
			
		</div>
	</div>
	<div class="clearfix"> </div>
</div>