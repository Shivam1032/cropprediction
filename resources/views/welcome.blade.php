@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-12 col-md-3">
		<div class="w-100" style="height: 50px; background-color:green;">
			<h3 class="p-2 mt-1" style="text-align: center; color: white;">IMPORTANT UPDATES</h3>
		</div>
		<div class="callout callout-danger">
			<p>NOTE 1!</p>
		</div>
		<div class="callout callout-info">
			<p>NOTE 2!</p>
		</div>
		<div class="callout callout-warning">
			<p>NOTE 3!</p>
		</div>
		<div class="callout callout-success">
			<p>NOTE 4!</p>
		</div>
	</div>
	<div class="col-12 col-md-6">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
				<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="/image/farmer1.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="/image/farmer2.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</div>
	<div class="col-12 col-md-3 p-0 m-0">
		<div class="w-100" style="height: 50px; background-color:green;">
			<h3 class="p-2 mt-1" style="text-align: center; color: white;">NEWS AND ALERT</h3>
		</div>

		<div class="w-100" style=" overflow: auto; height: 300px; margin-top: 1px;">

			<ul style="list-style-position: outside; list-style-type: square;">
				<marquee direction="up" scrollamount="5">

					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
					<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				</marquee>
			</ul>

		</div>
	</div>
</div>

<div class="row mt-3" style="background-color: #99ff99;">
	<div class="col-2 pt-2">
		<h5 style="text-align: center;font-weight: 700;">MARKET</h5>
	</div>
	<div class="col-10 pt-2" style="font-size: 1.0rem;">
		<marquee direction="left" scrollamount="10">
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
		</marquee>

	</div>
</div>

<div class="row mt-2" style="background-color: #cccccc;">
	<div class="col-12 pt-2" style="font-size: 1.0rem;">
		<marquee direction="left" scrollamount="10">
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
			<span>If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.<b>&nbsp;&nbsp; | &nbsp;&nbsp;</b></span>
		</marquee>

	</div>
</div>

<div class="row mt-3">
	<div class="col-12 col-md-3">
		<div class="w-100" style="height: 50px; background-color:green;">
			<h3 class="p-2 mt-1" style="text-align: center; color: white;">KBFMS Videos</h3>
		</div>
		<br>
		<div class="container">
			<iframe src="https://www.youtube.com/embed/af6RGTjLIbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
		<div class="container">
			<iframe src="https://www.youtube.com/embed/af6RGTjLIbU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

	</div>
	<div class="col-12 col-md-6">
		<div class="w-100" style="height: 50px; background-color:green;">
			<h3 class="p-2 mt-1" style="text-align: center; color: white;">KBFMS Overview</h3>
		</div>

		<div class="w-100 p-3" style=" overflow: auto; height: 300px; margin-top: 1px; background-color:">

			<ul style="list-style-position: outside; list-style-type: square;padding-left:15px;">
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
				<li style="color:black;font-weight:500;">If a farmer fills his barn with grain, he gets mice. If he leaves it empty, he gets actors.</li><hr>
			</ul>

		</div>
	</div>

<div class="col-12 col-md-3 p-0 m-0">
	<div class="w-100" style="height: 50px; background-color:green;">
		<h3 class="p-2 mt-1" style="text-align: center; color: white;">KBFMS Coverage</h3>
	</div>

	<div class="w-100 p-3" style=" overflow: auto; height: 300px; margin-top: 1px; background-color:">

		<img src="/image/Bihar_map.png" class="img-fluid">

	</div>
</div>
</div>




@endsection