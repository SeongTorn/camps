<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">

		@yield('head')
		{{ HTML::style('assets/web/assets/mobirise-icons-bold/mobirise-icons-bold.css') }}
		{{ HTML::style('assets/web/assets/mobirise-icons/mobirise-icons.css') }}
		{{ HTML::style('assets/tether/tether.min.css') }}
		{{ HTML::style('assets/bootstrap/css/bootstrap.min.css') }}
		{{ HTML::style('assets/bootstrap/css/bootstrap-grid.min.css') }}
		{{ HTML::style('assets/bootstrap/css/bootstrap-reboot.min.css') }}
		{{ HTML::style('assets/dropdown/css/style.css') }}
		{{ HTML::style('assets/socicon/css/styles.css') }}
    {{ HTML::style('assets/theme/css/style.css') }}
    {{ HTML::style('assets/gallery/style.css') }}
    {{ HTML::style('assets/mobirise/css/mbr-additional.css') }}

    {{ HTML::style('https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css') }}

	</head>

  <body>
		<header role="banner">
			<section class="menu cid-qZDAwAEdSQ" once="menu" id="menu1-au">
				<nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
					<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<div class="hamburger">
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>
					</button>
					<div class="menu-logo">
						<div class="navbar-brand">
							<span class="navbar-logo">
								<a href="https://learncode.com.au">
									{{ HTML::image('assets/images/s3.amazonaws.com-upload.uxpin-files-867974-860361-codespace-logo-1525308909395-a043ca-450x120.png', 'Example Image', ['style'=>'height: 3.8rem;']) }}
								</a>
							</span>
						</div>
					</div>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
							<li class="nav-item">
								<a class="nav-link link text-black display-4" href="index.html">
									<span class="mbri-home mbr-iconfont mbr-iconfont-btn"></span>
									Home
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link text-black display-4" href="about.html">
									<span class="mbri-hot-cup mbr-iconfont mbr-iconfont-btn"></span>
									About
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link link text-black display-4" href="contact.html">
									<span class="mbrib-contact-form mbr-iconfont mbr-iconfont-btn"></span>
									Contact
								</a>
							</li>
						</ul>
						<div class="navbar-buttons mbr-section-btn">
							<a class="btn btn-sm btn-primary display-4" href="https://learncode.com.au/camps/">
								<span class="mbrib-rocket mbr-iconfont mbr-iconfont-btn"></span>
								Find a Camp
							</a>
						</div>
					</div>
				</nav>
			</section>
		</header>
		<main role="main">
			@if(session()->has('ok'))
				@include('partials/error', ['type' => 'success', 'message' => session('ok')])
			@endif
			@if(isset($info))
				@include('partials/error', ['type' => 'info', 'message' => $info])
			@endif
			@yield('main')
		</main>
		<footer role="contentinfo">
			<section class="cid-qZDAwCTL4j" id="footer1-az">
				<div class="container">
					<div class="media-container-row content text-white">
						<div class="col-12 col-md-3">
							<div class="media-wrap">
								<a href="https://learncode.com.au">
									{{ HTML::image('assets/images/justlogobig-copy-170x136.png', 'Example Image', ['title'=>'CodeSpace Education']) }}
								</a>
							</div>
						</div>
						<div class="col-12 col-md-3 mbr-fonts-style display-7">
							<h5 class="pb-3">Company Details</h5>
							<p class="mbr-text">CodeSpace Education Services Pty. Ltd.<br>ABN:&nbsp;34 615 494 267<br>Sydney, NSW, Australia </p>
						</div>
						<div class="col-12 col-md-3 mbr-fonts-style display-7">
							<h5 class="pb-3">Contact</h5>
							<p class="mbr-text">Email: info@learncode.com.au &nbsp; &nbsp;<br>Phone: (02) 8806 3750<br></p>
						</div>
						<div class="col-12 col-md-3 mbr-fonts-style display-7">
							<h5 class="pb-3">Links</h5>
							<p class="mbr-text">
								<a href="https://learncode.com.au/blog/careers/">Careers</a><br>
								<a href="https://learncode.com.au/blog/">Blog</a><br>
								<a href="https://learncode.com.au/blog/faq/">FAQ</a><br>
								<a href="https://learncode.com.au/blog/sitemap/">Sitemap</a><br>
								<a href="https://learncode.com.au/camps/workshops/">Workshops</a><br>
								<a href="https://learncode.com.au/camps/">Find a Camp</a><br>
								<a href="https://learncode.com.au/camps/locations/">Locations</a><br>
								<a href="https://staff.learncode.com.au/">Staff Login</a>
							</p>
						</div>
					</div>
					<div class="footer-lower">
						<div class="media-container-row">
							<div class="col-sm-12">
								<hr>
							</div>
						</div>
						<div class="media-container-row mbr-white">
							<div class="col-sm-6 copyright">
								<p class="mbr-text mbr-fonts-style display-7">
									© Copyright 2018 CodeSpace Education - All Rights Reserved
								</p>
							</div>
							<div class="col-md-6"></div>
						</div>
					</div>
				</div>
			</section>
		</footer>

		{!! HTML::script('assets/web/assets/jquery/jquery.min.js') !!}
		{!! HTML::script('assets/popper/popper.min.js') !!}
		{!! HTML::script('assets/tether/tether.min.js') !!}
    {!! HTML::script('assets/bootstrap/js/bootstrap.min.js') !!}
    {!! HTML::script('https://code.jquery.com/ui/1.12.1/jquery-ui.js') !!}

    {!! HTML::script('assets/parallax/jarallax.min.js') !!}
    {!! HTML::script('assets/mbr-tabs/mbr-tabs.js') !!}
    {!! HTML::script('assets/masonry/masonry.pkgd.min.js') !!}
    {!! HTML::script('assets/imagesloaded/imagesloaded.pkgd.min.js') !!}
    {!! HTML::script('assets/smoothscroll/smooth-scroll.js') !!}
    {!! HTML::script('assets/vimeoplayer/jquery.mb.vimeo_player.js') !!}
    {!! HTML::script('assets/touchswipe/jquery.touch-swipe.min.js') !!}
    {!! HTML::script('assets/mbr-switch-arrow/mbr-switch-arrow.js') !!}
    {!! HTML::script('assets/dropdown/js/script.min.js') !!}
    {!! HTML::script('assets/bootstrapcarouselswipe/bootstrap-carousel-swipe.js') !!}
    {!! HTML::script('assets/theme/js/script.js') !!}
    {!! HTML::script('assets/slidervideo/script.js') !!}
    {!! HTML::script('assets/gallery/player.min.js') !!}
    {!! HTML::script('assets/gallery/script.js') !!}

    <script type="text/javascript">
      $(function()
      {
        $("#post_code").autocomplete({
          source: "search/autocomplete",
          minLength: 2,
          select: function(event, ui) {
            $('#post_code').val(ui.item.value);
            $('#post_id').val(ui.item.id);
          }
        });
      });
    </script>
  </body>
</html>