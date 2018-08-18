@extends('template')
<style>
::-webkit-input-placeholder {
   text-align: center;
}

:-moz-placeholder { /* Firefox 18- */
   text-align: center;
}

::-moz-placeholder {  /* Firefox 19+ */
   text-align: center;
}

:-ms-input-placeholder {
   text-align: center;
}
.mbr-section {
	width: 100%;
}
form {
	width: 100%;
}
.btn-submit, .btn-default {
	background-color: transparent !important;
	margin: 0 !important;
	padding: 0 !important;
	color: #fff !important;
}
.alert-danger {
	background-color: #f2dede !important;
	border-color: #ebccd1 !important;
	color: #a94442 !important;
	width: 100%;
	margin: 0.5rem 0;
	top: 80px !important;
	z-index: 99;
	position: absolute !important;
}
.alert-dismissable, .alert-dismissible {
	padding-right: 35px !important;
}
.alert {
	padding: 15px !important;
	margin-bottom: 20px !important;
	border: 1px solid transparent !important;
	border-radius: 4px !important;
}
</style>
@section('main')
	<div class="row">
		<div class="col-md-8 mbr-text" style="margin: auto">
			@if(session()->has('error'))
				@include('partials/error', ['type' => 'danger', 'message' => session('error')])
			@endif
		</div>
		<section class="mbr-section content4 cid-qZDAwBu00e" id="content4-av">
			<div class="container">
				<div class="media-container-row">
					<div class="title col-12 col-md-8">
						<h2 class="align-center pb-3 mbr-fonts-style display-2">
								<br><br>Log In</h2>
						<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">Enrol Faster &amp; Easier</h3>
					</div>
				</div>
			</div>
		</section>
		{!! Form::open(['url' => 'auth/login', 'method' => 'post', 'role' => 'form']) !!}	
		<section class="mbr-section article content1 cid-qZDAwC1GdG" id="content1-aw">
			<div>
				<div class="media-container-row">
					<div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
						<div class="col-md-12" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-7" for="name-form1-9a">Email*</label>
								{!! Form::email('log', null, ['class'=>'form-control', 'placeholder'=>'example@example.com', 'data-form-field'=>'Name'] ) !!}
								<!--<input type="email" class="form-control" name="name" data-form-field="Name" required="" placeholder="example@example.com" id="name-form1-9a-1"> -->
							</div>
						</div>
						<div class="col-md-12" data-for="name">
							<div class="form-group">
								<label class="form-control-label mbr-fonts-style display-7" for="name-form1-9a">Password*</label>
								{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password', 'data-form-field'=>'Password'] ) !!}
								<!--<input type="password" class="form-control" name="name" data-form-field="Name" required="" placeholder="Password" id="name-form1-9a-2"> -->
							</div>
						</div>
						<div class="col-md-12">					
							{!! link_to('password/email', 'I have forgotten my password !') !!}
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="mbr-section content8 cid-qZDAwCi9Op" id="content8-ax">
			<div class="container">
				<div class="media-container-row title">
					<div class="col-12 col-md-8">
						<div class="mbr-section-btn align-center">
							<a class="btn btn-secondary display-4" href="#">
								<span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>
								{!! Form::submit('Login', ['btn-submit']) !!}
							</a>
						</div>
					</div>					
				</div>
			</div>
		</section>
		{!! Form::close() !!}
		<section class="mbr-section content4 cid-qZDAwCxZg1" id="content4-ay">
			<div class="container">
				<div class="media-container-row">
					<div class="title col-12 col-md-8">
						<h2 class="align-center pb-3 mbr-fonts-style display-2">&nbsp;</h2>
						<h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
					</div>
				</div>
			</div>
		</section>
	</div>
@stop

