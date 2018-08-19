@extends('template')

@section('main')
	<section class="mbr-section info1 cid-qQXqFHEWew" id="info1-2p">
		<div class="container">
			{!! Form::open(['url' => 'camps/search', 'method' => 'post']) !!}
			<div class="row justify-content-center content-row">
				<div class="media-container-column title col-12 col-lg-7 col-md-6">
					<h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">To find a CodeSpace Camp near you</h3>
					<h2 class="align-left mbr-bold mbr-fonts-style display-2">Enter your postcode or suburb<br></h2>
					<br>
					{!! Form::text('post_code', '', ['class'=>'form-control input', 'data-form-field'=>'Name', 'placeholder'=>'Enter Suburb Here...']) !!}
					<br>
					{!! Form::button('Search', array('class' => 'btn btn-form btn-primary display-4', 'type' => 'submit')) !!}
				</div>
				<div class="media-container-column col-12 col-lg-3 col-md-4">
				</div>
			</div>
			{!! Form::close() !!}
		</div>
	</section>

	<section class="mbr-section content4 cid-qQXqFISYyR" id="content4-2r">
		<div class="container">
			<div class="media-container-row">
				<div class="title col-12 col-md-8">
					<h2 class="align-center pb-3 mbr-fonts-style display-2">&nbsp;</h2>
					<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
				</div>
			</div>
		</div>
	</section>
@stop