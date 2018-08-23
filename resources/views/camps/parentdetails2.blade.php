@extends('template')

@section('main')
<section class="mbr-section info1 cid-qZCLOV2j2S" style="margin-top:145px !important">
  {!! Form::open(['url' => 'camps/saveregister', 'method' => 'post', 'role' => 'form']) !!}
    {!! Form::hidden('first_name', $pDetail->first_name) !!}
    {!! Form::hidden('last_name', $pDetail->last_name) !!}
    {!! Form::hidden('email', $pDetail->email) !!}
    {!! Form::hidden('phone', $pDetail->phone) !!}

    <div class="container">
      <div class="row justify-content-center content-row">
        <div class="media-container-column title col-12 col-lg-7 col-md-6">
          <h2 class="align-left mbr-bold mbr-fonts-style display-2">Parent Details</h2>
        </div>
        <div class="media-container-column col-12 col-lg-3 col-md-4">
          <div class="mbr-section-btn align-right py-4"><a class="btn btn-primary display-4" href="https://learncode.com.au/camps/login/"><span class="mbrib-login mbr-iconfont mbr-iconfont-btn"></span>Log In</a></div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::label('Postcode*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::text('postcode', '', ['class' => 'form-control', 'placeholder'=>'2000', 'data-form-field'=>'postcode', 'required']) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::label('Backup Emergency Contact*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::text('emergency_contact', $pDetail->email, ['class' => 'form-control', 'placeholder'=>'E.g. John Smith 0400 000 000', 'data-form-field'=>'contact', 'required']) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::label('How did you find out about us?*', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!}
            {!! Form::select('heard_about', ['1' => 'Saab', '2' => 'Mercedes', '3' => 'Audi'], 0, ['class'=>'form-control', 'placeholder' => '-- Please Select --', 'required']) !!}
          </div>
        </div>
        <div class="col-md-10" data-for="name">
          <div class="form-group">
            {!! Form::checkbox('photos_permitted', '1', true) !!}
            I consent to have photos and/or videos taken of my children in accordance with our
            {!! link_to('https://learncode.com.au/blog/media-policy/', 'media policy.') !!}
            (optional)<br>

            {!! Form::checkbox('agree', 'Car', true, ['required']) !!}
            I agree with our
            {!! link_to('https://learncode.com.au/blog/terms-and-conditions/', 'terms and conditions') !!}
            .<br><br>

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
            <h4 class="card-title py-3 mbr-fonts-style display-7">Safe &amp; Secure</h4>
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
            <h4 class="card-title py-3 mbr-fonts-style display-7">Effortless Registration</h4>
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