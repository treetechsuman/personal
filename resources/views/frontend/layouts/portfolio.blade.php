<div class="portfolio" id="portfolio">
	<div class="container my_container">
		<h3 class="w3l_head">My Portfolio</h3>
		<p class="w3ls_head_para">See My Works</p>
		<div class="agileits_portfolio_grids">
			@foreach($portfolios as $portfolio)
			<div class="col-md-4 agileits_portfolio_grid">
				<div class="agileinfo_portfolio_grid hovereffect">
					<a class="cm-overlay" href="{{asset($portfolio['image'])}}">
						<img src="{{asset($portfolio['image'])}}" alt=" " class="thumbnail img-responsive">
						<div class="overlay">
							<h4>{{$portfolio['title']}}</h4>
							<p>{{$portfolio['description']}}</p>
						</div>
					</a>
				</div>
			</div>
			@endforeach
			<div class="clearfix"> </div>
		</div>
		
	</div>
</div>