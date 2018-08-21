@extends('template')
<style>
.alert {
  margin: 10px;
  padding: 20px;
  background-color: #f44336;
  color: white;
  opacity: 1;
  transition: opacity 0.6s;
  margin-bottom: 15px;
}
.alert.success {
  background-color: #4CAF50;
}
.alert.info {
  background-color: #2196F3;
}
.alert.warning {
  background-color: #ff9800;
}
.card-wrapper {
  display: table;
}
.media-container-row {
  flex-wrap: wrap !important;
}
.camp-list {
  justify-content: flex-start !important;
}
form {
  margin: 0 !important;
}
</style>
@section('main')
<section class="header11 cid-qQWMDyug1S mbr-fullscreen" id="header11-s">
  <div class="container align-left">
    <div class="media-container-column mbr-white col-md-12">
      <h3 class="mbr-section-subtitle py-3 mbr-fonts-style display-5">&nbsp;</h3>
      <h1 class="mbr-section-title py-3 mbr-fonts-style display-2">
        We've found the closest&nbsp;<strong>CodeSpace Camps</strong>&nbsp;
        to {{ $camps[0]['location']->from->suburb }} {{ $camps[0]['location']->from->state }}.
      </h1>
      <p class="mbr-text py-3 mbr-fonts-style display-5">
        CodeSpace Education runs a range of School Holiday CodeSpace Camps all over Australia.<br><br>We have curated the closest workshops for you below.
      </p>
    </div>
  </div>
  <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
    <a href="#next">
      <i class="mbri-down mbr-iconfont"></i>
    </a>
  </div>
</section>

{!! Form::open(['url' => 'camps/register', 'method' => 'post', 'role' => 'form']) !!}
@foreach ($camps as $camp_list)
<section class="mbr-section info1 cid-qQWMc4sypE" id="info1-r">
  <div class="container">
    <div class="row justify-content-center content-row">
      <div class="media-container-column title col-12 col-lg-7 col-md-6">
        <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">
          Only {{ $camp_list['location']->dist }}km from {{ $camp_list['location']->from->suburb }} {{ $camp_list['location']->from->state }}
        </h3>
        <h2 class="align-left mbr-bold mbr-fonts-style display-2">CAMPS @ {{ $camp_list['location']->name }}</h2>
      </div>
      <div class="media-container-column col-12 col-lg-3 col-md-4">
      </div>
    </div>
  </div>
</section>

<section class="features3 cid-qQWAzjWbWN">
  <div class="container">
    <div class="media-container-row camp-list">
      @foreach ($camp_list['data'] as $camp)
        <div class="card p-3 col-12 col-md-6 col-lg-4">
          <div class="card-wrapper">
            <div class="card-img">
              {{ HTML::image('assets/images/file-27-624x465.png') }}
            </div>
            <div class="card-box">
              <h4 class="card-title mbr-fonts-style display-7">{{ $camp->topic }}</h4>
              <p class="mbr-text mbr-fonts-style display-7">{{ $camp->topicDesc }}<br><br></p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-calendar">&nbsp;</span> {{ $camp->start_date }} ({{ $camp->length == 1 ? $camp->length.' day camp' : $camp->length.' days camp' }})</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-clock">&nbsp;</span> {{ $camp->startTime }} - {{ $camp->endTime }} with drop off from {{ $camp->arriveTime }} and pickup until {{ $camp->departTime }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-pin">&nbsp;</span>{{ $camp->name }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-user">&nbsp;</span> Ages {{ $camp->ages }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-sale">&nbsp;</span> ${{ $camp->price }}</p>
            </div>
            <div class="mbr-section-btn text-center">
              {!! Html::decode(link_to('camps/details/'.$camp->id,'&nbsp;&nbsp;&nbsp;&nbsp;<span class="mbrib-star mbr-iconfont mbr-iconfont-btn"></span> Learn More &nbsp;&nbsp;&nbsp;&nbsp;', ['class'=>'btn btn-primary display-4'])) !!}
            </div>
            <div class="mbr-section-btn text-center">
              @if($camp->class_capacity - $camp->sold > 0)
                {!! Html::decode(link_to('camps/register/'.$camp->id,'&nbsp;&nbsp;<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span> Register Now &nbsp;&nbsp;', ['class'=>'btn btn-secondary display-4'])) !!}
              @else
                {!! Html::decode(link_to('camps/details/'.$camp->id,'&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="mbri-close mbr-iconfont mbr-iconfont-btn"></span>SOLD OUT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;', ['class'=>'btn btn-danger display-4'])) !!}
              @endif
            </div>
            <br>
            <br>
            <div class="alert">
              <strong>	&#9888; In High Demand!</strong>
              This camp only has {{ $camp->class_capacity - $camp->sold > 9 ? 9 : $camp->class_capacity - $camp->sold }} spaces available.
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>
@endforeach
{!! Form::close() !!}

@include('bottomspace')
<!---End of One Location Section-->

<section class="cid-qRjBWWzK0O mbr-fullscreen mbr-parallax-background" id="header15-4r">
  <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>
    <div class="container align-right">
      <div class="row">
        <div class="mbr-white col-lg-8 col-md-7 content-container">
            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">That's it!</h1>
            <p class="mbr-text pb-3 mbr-fonts-style display-5">We don't have any more camps near you at this time.&nbsp;<br><br>We're releasing even more camps soon. Join our mailing list beside to be the first to know.&nbsp;</p>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="form-container">
            <div class="media-container-column" >
              <form action="https://url.learncode.com.au/end-of-page-mailing-join/" method="get">
                <div data-for="email">
                  <div class="form-group">
                    <input type="email" class="form-control px-3" name="email" placeholder="Email" required="">
                  </div>
                </div>
                <div data-for="phone">
                  <div class="form-group">
                    <input type="text" class="form-control px-3" name="postcode" placeholder="Postcode" required="" >
                  </div>
                </div>
                <span class="input-group-btn">
                  <button type="submit" class="btn btn-secondary btn-form display-4">Next</button>
                </span>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@stop