@extends('template')

@section('main')

<section class="mbr-section info1 cid-qZCLOV2j2S" style="margin-top: 145px !important;">
  {!! Form::open(['url' => 'camps/register2', 'method' => 'post', 'role' => 'form']) !!}
    <div class="container">
      <div class="row justify-content-center content-row">
        <div class="media-container-column title col-12 col-lg-7 col-md-6">
          <h2 class="align-left mbr-bold mbr-fonts-style display-2">Parent Details</h2>
        </div>
        <div class="media-container-column col-12 col-lg-3 col-md-4">
          <div class="mbr-section-btn align-right py-4">
            {!! link_to('camps/login', 'log In', ['class'=>'btn btn-primary display-4']) !!}
          </div>
        </div>
        <div class="col-md-5" data-for="name">
          <div class="form-group">
            {!! Form::label('First Name*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::text('first_name', '', ['class' => 'form-control', 'placeholder'=>'Samantha', 'data-form-field'=>'firstname', 'required']) !!}
            {!! Form::hidden('camp_id', $id) !!}
          </div>
        </div>
        <div class="col-md-5" data-for="name">
          <div class="form-group">
            {!! Form::label('Last Name*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::text('last_name', '', ['class' => 'form-control', 'placeholder'=>'Sample','data-form-field'=>'lastname', 'required']) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::label('Email Address*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'samantha.sample@gmail.com', 'required', 'data-form-field'=>'Name'] ) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::label('Phone Number*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::text('phone', '', ['class' => 'form-control', 'placeholder'=>'0400 000 000','data-form-field'=>'lastname', 'required']) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            <br>
            <span class="input-group-btn">
              {!! Form::button('Next', ['class' => 'btn btn-primary btn-form display-4', 'type' => 'submit']) !!}
            </span>
            <br>
            <br>
            <br>
          </div>
        </div>
      </div>
    </div>
  {!! Form::close() !!}
</section>

<section class="features9 cid-qZfY4XgWNP" id="features9-91">
  <div class="container">
    <div class="row justify-content-center">
      <div class="card p-3 col-12 col-md-6">
        <div class="media-container-row">
          <div class="card-img pr-2">
            <span class="mbr-iconfont mbrib-lock"></span>
          </div>
        <div class="card-box">
            <h4 class="card-title py-3 mbr-fonts-style display-7">
              Safe &amp; Secure</h4>
            <p class="mbr-text mbr-fonts-style display-7">Your data is safely protected using a secure SSL connection &amp; all credit card payments are processed safely by Stripe, a world leader in secure payments.</p>
          </div>
        </div>
      </div>
      <div class="card p-3 col-12 col-md-6">
        <div class="media-container-row">
          <div class="card-img pr-2">
            <span class="mbri-star mbr-iconfont"></span>
          </div>
          <div class="card-box">
            <h4 class="card-title py-3 mbr-fonts-style display-7">
              Effortless Registration</h4>
            <p class="mbr-text mbr-fonts-style display-7">
              Register all your children at once, and for multiple camps at the same time. Only takes a few minutes.&nbsp;</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@include('bottomspace')
@stop