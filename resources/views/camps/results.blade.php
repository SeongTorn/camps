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
</style>
@section('main')
<section class="header11 cid-qQWMDyug1S mbr-fullscreen" id="header11-s">
  <div class="container align-left">
    <div class="media-container-column mbr-white col-md-12">
      <h3 class="mbr-section-subtitle py-3 mbr-fonts-style display-5">&nbsp;</h3>
      <h1 class="mbr-section-title py-3 mbr-fonts-style display-2">
        We've found the closest&nbsp;<strong>CodeSpace Camps</strong>&nbsp;to Kellyville Ridge NSW.
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

<section class="mbr-section info1 cid-qQWMc4sypE" id="info1-r">
  <div class="container">
    <div class="row justify-content-center content-row">
      <div class="media-container-column title col-12 col-lg-7 col-md-6">
        <h3 class="mbr-section-subtitle align-left mbr-light pb-3 mbr-fonts-style display-5">Only 2km from Kellyville Ridge NSW</h3>
        <h2 class="align-left mbr-bold mbr-fonts-style display-2">CAMPS @ THE PONDS HIGH SCHOOL</h2>
      </div>
      <div class="media-container-column col-12 col-lg-3 col-md-4">
      </div>
    </div>
  </div>
</section>

<section class="features3 cid-qQWAzjWbWN">
  <div class="container">
    {!! Form::open(['url' => 'camps/register', 'method' => 'post', 'role' => 'form']) !!}
    <div class="media-container-row">
      @foreach ($camps as $camp)
        <div class="card p-3 col-12 col-md-6 col-lg-4">
          <div class="card-wrapper">
            <div class="card-img">
              {{ HTML::image('assets/images/file-27-624x465.png') }}
            </div>
            <div class="card-box">
              <h4 class="card-title mbr-fonts-style display-7">{{ $camp->topic }}</h4>
              <p class="mbr-text mbr-fonts-style display-7">{{ $camp->topicDesc }}<br><br></p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-calendar">&nbsp;</span> {{ $camp->startDate }} ({{ $camp->days == 0 ? ($camp->days + 1).' day camp' : ($camp->days + 1).' days camp' }})</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-clock">&nbsp;</span> {{ $camp->startTime }} - {{ $camp->endTime }} with drop off from {{ $camp->arriveTime }} and pickup until {{ $camp->departTime }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-pin">&nbsp;</span>{{ $camp->name }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-user">&nbsp;</span> Ages {{ $camp->ages }}</p>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7"><span class="mbri-sale">&nbsp;</span> $99</p>
            </div>
            <div class="mbr-section-btn text-center">
              {!! Html::decode(link_to('camps/details/'.$camp->id,'&nbsp;&nbsp;&nbsp;&nbsp;<span class="mbrib-star mbr-iconfont mbr-iconfont-btn"></span> Learn More &nbsp;&nbsp;&nbsp;&nbsp;', ['class'=>'btn btn-primary display-4'])) !!}
            </div>
            <div class="mbr-section-btn text-center">
              {!! Html::decode(link_to('camps/register','&nbsp;&nbsp;<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span> Register Now &nbsp;&nbsp;', ['class'=>'btn btn-secondary display-4'])) !!}
            </div>
            <br>
            <br>
            <div class="alert">
              <strong>	&#9888; In High Demand!</strong>
              This camp only has 6 spaces available.
            </div>
          </div>
        </div>
      @endforeach
    </div>
    {!! Form::close() !!}
  </div>
</section>

<section class="mbr-section content4 cid-qQWQllolV7" id="content4-w">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-2">&nbsp;</h2>
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5"></h3>
      </div>
    </div>
  </div>
</section>
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