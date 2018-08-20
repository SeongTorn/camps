@extends('template')

@section('main')
<section class="mbr-section content4 cid-qZDtdrgfzl" id="content4-ag">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-2"><br><br>Please Set a Password</h2>
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">So you can log in quickly next time.</h3>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section article content1 cid-qZDtdryILi" id="content1-ah">
  <div class="container">
    <p> {!! Form::label('Create Password:', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!} </p>
    <p> {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password...', 'required']) !!} </p>
    <p> {!! Form::label('Confirm Password:', '', ['class'=>'form-control-label mbr-fonts-style display-7']) !!} </p>
    <p> {!! Form::password('confirm', ['class'=>'form-control', 'placeholder'=>'Confirm Password...', 'required']) !!} </p>
  </div>
</section>

<section class="mbr-section content8 cid-qZDtBkSJ6o" id="content8-an">
  <div class="container">
    <div class="media-container-row title">
      <div class="col-12 col-md-8">
        <div class="mbr-section-btn align-center">
          {!! Html::decode(link_to('camps/create','<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span>Next', ['class'=>'btn btn-secondary display-4'])) !!}
        </div>
      </div>
    </div>
  </div>
</section>

@include('bottomspace')
@endsection