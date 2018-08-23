@extends('template')

@section('main')
<section class="mbr-section content4 cid-qRjMf7pfgj">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-2"><br>Your Children</h2>
        <h3 class="mbr-section-subtitle align-center mbr-light mbr-fonts-style display-5">
          Review the list of children you wish to register. You can choose which camps to register them for in the next step
        </h3>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section article content1 cid-qRjMyVUXxD" id="content1-55">
  <div class="container">
    <div class="media-container-row">
      <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-5">
        @foreach($children as $child)
          <p><strong>{{ $child->first_name }}</strong> <small><a href="">(remove)</a></small></p>
        @endforeach
      </div>
    </div>
  </div>
</section>

<section class="mbr-section content8 cid-qRjM9jLcC8" id="content8-52">
  <div class="container">
    <div class="media-container-row title">
      <div class="col-12 col-md-8">
        <div class="mbr-section-btn align-center">
          {!! HTML::decode(link_to('camps/child-details/'.$parent_id, '<span class="mbri-user mbr-iconfont mbr-iconfont-btn"></span>ADD ANOTHER CHILD', ['class'=>'btn btn-md btn-black-outline display-4'])) !!}
          {!! HTML::decode(link_to('camps/select/'.$parent_id,'<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span></span>NEXT: SELECT CAMPS', ['class'=>'btn btn-md btn-primary display-4'])) !!}
        </div>
      </div>
    </div>
  </div>
</section>

@include('bottomspace')
@endsection