<!DOCTYPE html>
<html lang="en">
<head>

    <!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content=""/>
	<meta name="author" content=""/>
	<meta name="robots" content=""/>
	<meta name="description" content="Mobhil Car Dealer HTML Template"/>
	<meta property="og:title" content="Mobhil Car Dealer HTML Template"/>
	<meta property="og:description" content="Mobhil Car Dealer HTML Template"/>
	<meta property="og:image" content="https://mobhil.dexignlab.com/xhtml/social-image.png"/>
	<meta name="format-detection" content="telephone=no">
	
	<!-- Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Title -->
	<title>Mobhil Car Dealer HTML Template</title>
    
	<!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="images/favicon.png">
	
	<!-- Stylesheet -->
	<link href="vendor/lightgallery/css/lightgallery.min.css" rel="stylesheet">
    <link href="vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
	<link href="vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">
	<link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="vendor/splitting/dist/splitting.css" rel="stylesheet">
	<link href="vendor/aos/aos.css" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="vendor/rangeslider/rangeslider.css">
	<link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">
    
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" class="skin" href="css/skin/skin-1.css">
	
</head>
<body id="bg" class="theme-rounded">
<div id="loading-area" class="loading-page-1">
	<div class="spinner">
		<div class="ball"></div>
		<p>LOADING</p>
	</div>
</div>
<div class="page-wraper">
	<?php require 'header.php'; ?>
	
	
	<div class="page-content bg-white">
		<!-- Banner  -->
		<div class="dlab-bnr-inr style-1 overlay-black-middle" style="background-image: url(images/banner/bnr4.jpg);">
			<div class="container">
				<div class="dlab-bnr-inr-entry">
					<h1 class="text-white">Car Collections</h1>
					<div class="dlab-separator"></div>
				</div>
			</div>
		</div>
		<!-- Banner End -->
		
		<section class="content-inner-2">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 m-b30">
						<aside class="side-bar sticky-top left">
							<div class="section-head">
								<h3 class="title">FILTER</h3>
								<h6 class="sub-title style-1">Search your car</h6>
							</div>
							<form>
								<div class="widget widget_search">
									<div class="form-group search-bx m-b20">
										<div class="input-group">
											<input name="text" class="form-control" placeholder="Enter your keywords..." type="text">
											<span class="input-group-btn">
												<button type="submit" class="btn shadow-none"><i class="la la-search scale3"></i></button>
											</span> 
										</div>
									</div>
									<div class="form-group m-b20">
										<select class="form-control">
											<option>Choose Brand</option>
											<option>Maruti</option>
											<option>Hyundai</option>
											<option>Honda</option>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control">
											<option>Choose Class</option>
											<option>First</option>
											<option>Luxury</option>
										</select>
									</div>
								</div>
								
								<div class="widget widget_product_tag">
									<div class="d-flex justify-content-between m-b20">
										<h5>Model</h5>
										<div class="form-check style-1">
											<input type="checkbox" class="form-check-input" id="checkAll">
											<label class="form-check-label" for="checkAll">Select All</label>
										</div>
									</div>
									<div class="btn-group product-tag-group" role="group" aria-label="Basic checkbox toggle button group">
										<input type="checkbox" class="btn-check" id="btncheck1">
										<label class="btn btn-outline-primary" for="btncheck1">CITY CAR</label>

										<input type="checkbox" class="btn-check" id="btncheck2">
										<label class="btn btn-outline-primary" for="btncheck2">SPORT</label>

										<input type="checkbox" class="btn-check" id="btncheck3">
										<label class="btn btn-outline-primary" for="btncheck3">SUV</label>
										
										<input type="checkbox" class="btn-check" id="btncheck4">
										<label class="btn btn-outline-primary" for="btncheck4">OFFROAD</label>
									</div>
								</div>
								
								<div class="widget widget_price_range">
									<h5>Price range</h5>
									<div class="price-slider">
										<span id="input-with-keypress-0"></span>
										<span id="input-with-keypress-1"></span>
										<div id="amount"></div>
									</div>
									
								</div>
								<div class="widget">
									<div class="form-group m-b20">
										<select class="form-control">
											<option>Any fuel</option>
											<option>1 liter</option>
											<option>2 liter</option>
											<option>3 liter</option>
										</select>
									</div>
									<div class="form-group m-b20">
										<select class="form-control">
											<option>Colour</option>
											<option>Black</option>
											<option>White</option>
											<option>Red</option>
											<option>Green</option>
										</select>
									</div>
									<div class="form-group m-b30">
										<select class="form-control">
											<option>Transmision</option>
											<option>auto</option>
											<option>manual</option>
										</select>
									</div>
									<div class="form-group">
										<a href="javascript:void(0);" class="btn btn-lg shadow-none btn-primary d-flex justify-content-between">
											FIND CARS<i class="las la-long-arrow-alt-right"></i>
										</a>
									</div>
								</div>
							</form>
                        </aside>
					</div>
					<div class="col-xl-8 col-lg-8">
						<div class="catagory-result-row">
							<h5 class="serch-result">Showing <strong>8 product from 40</strong></h5>
							<div>Sort by
							<select class="form-control custom-select ms-3">
								<option>Newest</option>
								<option>Oldest</option>
							</select>
							</div>
						</div>
						<div class="row lightgallery">
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic1.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic1.jpg" data-src="images/product/grid/pic1.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">SMART GT AA-211</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic2.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic2.jpg" data-src="images/product/grid/pic2.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">GT-Z 221 BOOST</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic3.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic3.jpg" data-src="images/product/grid/pic3.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">SPORT X-GTZ 2022</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic4.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic4.jpg" data-src="images/product/grid/pic4.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">FORT 2020 GT</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic5.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic5.jpg" data-src="images/product/grid/pic5.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">CLASSIC KOROLA 2022</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-6 col-lg-12 col-md-6 m-b30">
								<div class="car-list-box">
									<div class="media-box">
										<img src="images/product/grid/pic6.jpg" alt="">
										<div class="overlay-bx">
											<span data-exthumbimage="images/product/grid/pic6.jpg" data-src="images/product/grid/pic6.jpg" class="view-btn lightimg">
												<svg width="75" height="74" viewBox="0 0 75 74" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M44.5334 27.7473V32.3718C44.5334 33.3257 43.7424 34.106 42.7755 34.106H34.572V42.199C34.572 43.1528 33.7809 43.9332 32.8141 43.9332H28.1264C27.1595 43.9332 26.3685 43.1528 26.3685 42.199V34.106H18.1649C17.1981 34.106 16.4071 33.3257 16.4071 32.3718V27.7473C16.4071 26.7935 17.1981 26.0131 18.1649 26.0131H26.3685V17.9201C26.3685 16.9663 27.1595 16.1859 28.1264 16.1859H32.8141C33.7809 16.1859 34.572 16.9663 34.572 17.9201V26.0131H42.7755C43.7424 26.0131 44.5334 26.7935 44.5334 27.7473ZM73.9782 68.8913L69.8325 72.9812C68.4555 74.3396 66.2288 74.3396 64.8664 72.9812L50.2466 58.5728C49.5874 57.9225 49.2212 57.0409 49.2212 56.116V53.7604C44.05 57.749 37.5458 60.1191 30.4702 60.1191C13.6384 60.1191 0 46.6646 0 30.0596C0 13.4545 13.6384 0 30.4702 0C47.3021 0 60.9405 13.4545 60.9405 30.0596C60.9405 37.0397 58.538 43.4563 54.4949 48.5578H56.8827C57.8202 48.5578 58.7138 48.9191 59.373 49.5694L73.9782 63.9777C75.3406 65.3362 75.3406 67.5329 73.9782 68.8913ZM50.3931 30.0596C50.3931 19.1919 41.4864 10.4052 30.4702 10.4052C19.4541 10.4052 10.5474 19.1919 10.5474 30.0596C10.5474 40.9273 19.4541 49.7139 30.4702 49.7139C41.4864 49.7139 50.3931 40.9273 50.3931 30.0596Z" fill="white" fill-opacity="0.66"/>
												</svg>
											</span>
										</div>
									</div>
									<div class="list-info">
										<h4 class="title mb-0"><a href="car-details.html" data-splitting class="text-white">MUSTANG 2022</a></h4>
										<div class="car-type">SPORT CAR</div>
										<span class="badge m-b30">$34,500</span>
										<div class="feature-list">
											<div>
												<label>Transmotion</label>
												<p class="value">Automatic</p>
											</div>
											<div>
												<label>Fuel</label>
												<p class="value">Electric</p>
											</div>
											<div>
												<label>Passenger</label>
												<p class="value">2 Person</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<nav aria-label="Blog Pagination">
							<ul class="pagination text-center m-b30">
								<li class="page-item"><a class="page-link prev" href="javascript:void(0);"><i class="la la-angle-left"></i></a></li>
								<li class="page-item"><a class="page-link active" href="javascript:void(0);">1</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
								<li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
								<li class="page-item"><a class="page-link next" href="javascript:void(0);"><i class="la la-angle-right"></i></a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</section>
        <?php require 'qbanner.php'; ?>
	</div>

    <?php require 'footer.php' ?>

	<button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>
</div>
<!-- JAVASCRIPT FILES ========================================= -->
<script src="js/jquery.min.js"></script><!-- JQUERY.MIN JS -->
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="vendor/bootstrap-select/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP.MIN JS -->
<script src="vendor/magnific-popup/magnific-popup.js"></script><!-- MAGNIFIC-POPUP JS -->
<script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
<script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
<script src="vendor/lightgallery/js/lightgallery-all.min.js"></script><!-- LIGHTGALLERY -->
<script src="vendor/splitting/dist/splitting.min.js"></script><!-- LIGHTGALLERY -->
<script src="vendor/rangeslider/rangeslider.js"></script><!-- AOS -->
<script src="vendor/wnumb/wNumb.js"></script>
<script src="vendor/nouislider/nouislider.min.js"></script><!-- AOS -->
<script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER -->
<script src="vendor/aos/aos.js"></script><!-- AOS -->
<script src="js/dlab.carousel.js"></script><!-- OWL CAROUSEL -->
<script src="js/dlab.ajax.js"></script><!-- AJAX -->
<script src="js/custom.min.js"></script><!-- CUSTOM JS -->

</body>
</html>