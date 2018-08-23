@extends('template')

@section('main')
<section class="header3 cid-qYXVEyyfMO" id="header3-7x">
  <div class="container">
    <div class="media-container-row">
      <div class="mbr-figure" style="width: 100%;">
        {!! HTML::image('assets/images/minecraftdude-1-640x360.png') !!}
      </div>
      <div class="media-content">
        <h1 class="mbr-section-title mbr-white pb-3 mbr-fonts-style display-2">
          A Diamond Lightsaber?
        </h1>
        <div class="mbr-section-text mbr-white pb-3 ">
          <p class="mbr-text mbr-fonts-style display-5">
            Build and create Minecraft Mods to play and share with friends!
          </p>
        </div>
        <div class="mbr-section-btn">
          {!! HTML::decode(link_to('camps/register','<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span>Register Now', ['class'=>'btn btn-md btn-secondary display-4'])) !!}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section content5 cid-qYYgGguANY mbr-parallax-background" id="content5-8e">
  <div class="mbr-overlay" style="opacity: 0.6; background-color: rgb(35, 35, 35);">
  </div>
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
          Minecraft Modding Mayhem Part 1
        </h2>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section content4 cid-qQXiMjeCX2" id="content4-1i">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 col-md-8">
        <h2 class="align-center pb-3 mbr-fonts-style display-5">
            {!! $camp->short_desc !!}
        </h2>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section article content1 cid-qQXgVX2gKQ" id="content1-1f">
  <div class="container">
    <div class="media-container-row">
      <div class="mbr-text col-12 col-md-8 mbr-fonts-style display-7">
        <p> {!! $camp->long_desc !!} </p>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section info2 cid-qQXiaz0Goe" id="info2-1h">
  <div class="container">
    <div class="row main justify-content-center">
      <div class="media-container-column col-12 col-lg-3 col-md-4">
        <div class="mbr-section-btn align-left py-4">
          {!! HTML::decode(link_to('camps/register','<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span>&nbsp;Register Now', ['class'=>'btn btn-secondary display-4'])) !!}
        </div>
      </div>
      <div class="media-container-column title col-12 col-lg-7 col-md-6">
        <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">
          {{ $camp->class_capacity - $camp->sold > 0 ? $camp->class_capacity - $camp->sold : 0 }} PLACES AVAILABLE
        </h2>
        <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">
          Get in quick to avoid missing out on all the fun!
        </h3>
      </div>
    </div>
  </div>
</section>

<section class="tabs3 cid-qQXkIE6IRH" id="tabs3-1k">
  <div class="container">
    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
      Workshop &amp; Course Details
    </h2>
  </div>

  <div class="container-fluid">
    <div class="row tabcont">
      <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
        <li class="nav-item mbr-fonts-style">
          <a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-1k_tab0" aria-selected="true">
            Workshop Details
          </a>
        </li>
        <li class="nav-item mbr-fonts-style">
          <a class="nav-link  active show display-7" role="tab" data-toggle="tab" href="#tabs3-1k_tab1" aria-selected="true">
            Course Content
          </a>
        </li>
        <li class="nav-item mbr-fonts-style">
          <a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-1k_tab2" aria-selected="true">
            Why Attend?
          </a>
        </li>
      </ul>
    </div>
  </div>

  <div class="container">
    <div class="row px-1">
      <div class="tab-content">
        <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbr-iconfont mbrib-map-pin"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                Details
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                {!! $camp->start_date !!}<br>Times: {!! $camp->startTime !!} - {!! $camp->endTime !!}
              </p>
            </div>
          </div>
        </div>
        <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbr-iconfont mbrib-contact-form"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                Course Content
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                {{ htmlentities($camp->content) }}
              </p>
            </div>
          </div>
        </div>
        <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbr-iconfont mbri-protect"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                Why should your child attend?
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                {{ $camp->why_attend }}
              </p>
            </div>
          </div>
        </div>
        <div id="tab4" class="tab-pane  mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbri-responsive mbr-iconfont"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                MOBILE FRIENDLY
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                No special actions required, all sites you make with Mobirise are mobile-friendly. You don't have to create a special mobile version of your site, it will adapt automagically.
              </p>
            </div>
          </div>
        </div>
        <div id="tab5" class="tab-pane  mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbri-bootstrap mbr-iconfont"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                IT'S EASY AND SIMPLE
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                Cut down the development time with drag-and-drop website builder. Drop the blocks into the page, edit content inline and publish - no technical skills required.
              </p>
            </div>
          </div>
        </div>
        <div id="tab6" class="tab-pane  mbr-table" role="tabpanel">
          <div class="row tab-content-row">
            <div class="col-xs-12 col-md-6">
              <div class="card-img ">
                <span class="mbri-extension mbr-iconfont"></span>
              </div>
              <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                TRENDY WEBSITE BLOCKS
              </h4>
              <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                Choose from the large selection  pre-made blocks - full-screen intro, bootstrap carousel, slider, responsive image gallery with, parallax scrolling, sticky header and more.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mbr-gallery mbr-slider-carousel cid-qQXc8bauFd" id="gallery3-1a">
  <div>
    <div><!-- Filter --><!-- Gallery -->
      <div class="mbr-gallery-row">
        <div class="mbr-gallery-layout-default">
          <div>
            <div>
              @php
                $gallery_tags = array('Awesome', 'Responsive', 'Creative', 'Animated', 'Awesome', 'Awesome', 'Responsive', 'Animated')
              @endphp
              @for($i = 0; $i < 8; $i++)
                <div class="mbr-gallery-item mbr-gallery-item--pNaN" data-video-url="false" data-tags={!! $gallery_tags[$i] !!}>
                  <div href="#lb-gallery3-1a" data-slide-to="{!! $i !!}" data-toggle="modal">
                    {!! HTML::image('assets/images/gallery0'.$i.'.jpg') !!}
                    <span class="icon-focus"></span>
                  </div>
                </div>
              @endfor
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <!-- Lightbox -->
      <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery3-1a">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <div class="carousel-inner">
                @for($i = 0; $i < 8; $i++)
                  @if($i == 0)
                    <div class="carousel-item active">
                  @else
                    <div class="carousel-item">
                  @endif
                    {!! HTML::image('assets/images/gallery0'.$i.'.jpg') !!}
                  </div>
                @endfor
              </div>
              <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery3-1a">
                <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery3-1a">
                <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
              <a class="close" href="#" role="button" data-dismiss="modal">
                <span class="sr-only">Close</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="timeline1 cid-qQX71j4ofJ" id="timeline1-17">
  <div class="container align-center">
    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">Your child's day</h2>
    <h3 class="mbr-section-subtitle pb-5 mbr-fonts-style display-5">Daily Workshop Schedule</h3>
    <div class="container timelines-container" mbri-timelines="">
      <div class="row timeline-element reverse separline">
        <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">
              8:30am - 9am
            </p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-right">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Check In</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              When you get to the venue, check in with our teachers and we'll get you set up!
            </p>
          </div>
        </div>
      </div>
      <div class="row timeline-element  separline">
        <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">9am</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-left ">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Lift off!</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">We start our workshop with fun games, activities and lessons.&nbsp;</p>
          </div>
        </div>
      </div>
      <div class="row timeline-element reverse separline">
        <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">10:40am</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-right">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Recess Break</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              Time to get some fresh air and sunlight while we refresh our brains, ready to get back into coding!
            </p>
          </div>
        </div>
      </div>
      <div class="row timeline-element  separline">
        <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">11:10am</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-left ">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Middle Session</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              We get back to work creating even more cool stuff with our awesome teachers!
            </p>
          </div>
        </div>
      </div>
      <div class="row timeline-element reverse separline">
        <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">12:50pm</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-right">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Lunch Break</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              Play some games, have some fun and get some exercise. &nbsp;
            </p>
          </div>
        </div>
      </div>
      <div class="row timeline-element separline">
        <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">1:20pm</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-left ">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Afternoon Session</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">Time to get back into it for the last session of the day!<br><br>We keep working and finishing off our projects.</p>
          </div>
        </div>
      </div>
      <div class="row timeline-element reverse separline">
        <div class="timeline-date-panel col-xs-12 col-md-6  align-left">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">3pm</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-right">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Presentation</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              All the parents come back to pick up their children and we hand out certificates. Parents can check out what we've been working on!
            </p>
          </div>
        </div>
      </div>
      <div class="row timeline-element">
        <div class="timeline-date-panel col-xs-12 col-md-6 align-right">
          <div class="time-line-date-content">
            <p class="mbr-timeline-date mbr-fonts-style display-5">3pm - 3:30pm</p>
          </div>
        </div>
        <span class="iconBackground"></span>
        <div class="col-xs-12 col-md-6 align-left ">
          <div class="timeline-text-content">
            <h4 class="mbr-timeline-title pb-3 mbr-fonts-style display-5">Pick Up</h4>
            <p class="mbr-timeline-text mbr-fonts-style display-7">
              Time to go home. Good luck dragging your kids away from all the fun!
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials1 cid-qQXaDP67c3" id="testimonials1-18">
  <div class="container">
    <div class="media-container-row">
      <div class="title col-12 align-center">
        <h2 class="pb-3 mbr-fonts-style display-2">5 STAR HOLIDAY CAMPS</h2>
        <h3 class="mbr-section-subtitle mbr-light pb-3 mbr-fonts-style display-5">
          See what happy parents and kids say about CodeSpace Camps!
        </h3>
      </div>
    </div>
  </div>

  <div class="container pt-3 mt-2">
    <div class="media-container-row">
      <div class="mbr-testimonial p-3 align-center col-12 col-md-6">
        <div class="panel-item p-3">
          <div class="card-block">
            <div class="testimonial-photo">
              <img src="http://localhost:8000/assets/images/gallery06-2-240x160.jpg" alt="" title="">
            </div>
            <p class="mbr-text mbr-fonts-style display-7">
              "Lucas had a fantastic time at the Minecraft Modding Workshop! He loved building a jetpack, coloured TNT, nunchucks of lightening and the sword of fire! He would definitely come back to another workshop."
            </p>
          </div>
          <div class="card-footer">
            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">Elissa</div>
            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">Sydney Mum</small>
          </div>
        </div>
      </div>
      <div class="mbr-testimonial p-3 align-center col-12 col-md-6">
        <div class="panel-item p-3">
          <div class="card-block">
            <div class="testimonial-photo">
              <img src="http://localhost:8000/assets/images/gallery02-1-240x160.jpg" alt="" title="">
            </div>
            <p class="mbr-text mbr-fonts-style display-7">
              "Reece’s feedback was he had an awesome time, he has now done two day courses, one robotics and one game making, he can’t wait to do another one!"
            </p>
          </div>
          <div class="card-footer">
            <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">Dovester</div>
            <small class="mbr-author-desc mbr-italic mbr-light mbr-fonts-style display-7">Sydney Mum</small>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="accordion1 cid-qQX4RFI4PY" id="accordion1-16">
  <div class="container">
    <div class="media-container-row">
      <div class="col-12 col-md-8">
        <div class="section-head text-center space30">
          <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">FAQ</h2>
        </div>
        <div class="clearfix"></div>
        <div id="bootstrap-accordion_108" class="panel-group accordionStyles accordion" role="tablist" aria-multiselectable="true">
          <div class="card">
            <div class="card-header" role="tab" id="headingOne">
              <a role="button" class="panel-title collapsed text-black" data-toggle="collapse" data-core="" href="#collapse1_108" aria-expanded="false" aria-controls="collapse1">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                  &nbsp;Does my child bring their creation home?
                </h4>
              </a>
            </div>
            <div id="collapse1_108" class="panel-collapse noScroll collapse " role="tabpanel" aria-labelledby="headingOne" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">For all workshops except robotics workshops, children will be able to take home their creations (sorry you can't take the robots home!)<br></p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingTwo">
              <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse2_108" aria-expanded="false" aria-controls="collapse2">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                  &nbsp;Will food be provided?
                </h4>
              </a>
            </div>
            <div id="collapse2_108" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">
                  For safety and allergy reasons, we ask that you pack your child’s recess or lunch each day.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingThree">
              <a role="button" class="collapsed text-black panel-title" data-toggle="collapse" data-core="" href="#collapse3_108" aria-expanded="false" aria-controls="collapse3">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                  What ages do you cater for?
                </h4>
              </a>
            </div>
            <div id="collapse3_108" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">We cater for a wide range of ages of kids and teens, depending on the exact workshop and subject of that workshop. Please find a workshop near you and find the ages under “Workshop Details”.</p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingFour">
              <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse4_108" aria-expanded="false" aria-controls="collapse4">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                  &nbsp;How many kids in a class?
                </h4>
              </a>
            </div>
            <div id="collapse4_108" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">
                  Class sizes depend on the enrolment numbers at the venue, but typically range from 8-25.&nbsp;
                  <br><br>
                  In each class, there is between 1-3 teachers/assistants depending on the number of students in the class.&nbsp;
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingFive">
              <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse5_108" aria-expanded="false" aria-controls="collapse5">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>&nbsp;
                  Do I have to bring my laptop/devices
                </h4>
              </a>
            </div>
            <div id="collapse5_108" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingFive" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">
                  No, we will provide all required laptops/devices for you to use. At the end of the workshop, we will email you a link to download the files to use at home.
                </p>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" role="tab" id="headingSix">
              <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-core="" href="#collapse6_108" aria-expanded="false" aria-controls="collapse6">
                <h4 class="mbr-fonts-style display-5">
                  <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                  &nbsp;Are we registered?
                </h4>
              </a>
            </div>
            <div id="collapse6_108" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingSix" data-parent="#bootstrap-accordion_108">
              <div class="panel-body p-4">
                <p class="mbr-fonts-style panel-text display-7">
                  Yes - all of our staff over the age of 18 have the working with children’s check, we have $20 million public liability insurance and all of our staff are trained in risk management procedures &amp; child safety and protection.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="mbr-section info2 cid-qQXjYVX9nI" id="info2-1j">
  <div class="container">
    <div class="row main justify-content-center">
      <div class="media-container-column col-12 col-lg-3 col-md-4">
        <div class="mbr-section-btn align-left py-4">
          {!! HTML::decode(link_to('camps/register','<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span>Enrol Now', ['class'=>'btn btn-md btn-secondary display-4'])) !!}
        </div>
      </div>
      <div class="media-container-column title col-12 col-lg-7 col-md-6">
        <h2 class="align-right mbr-bold mbr-white pb-3 mbr-fonts-style display-2">FUN + EDUCATION</h2>
        <h3 class="mbr-section-subtitle align-right mbr-light mbr-white mbr-fonts-style display-5">Enrol Now - Only 7 Places Remaining</h3>
      </div>
    </div>
  </div>
</section>
@endsection