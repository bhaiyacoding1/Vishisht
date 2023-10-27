<!DOCTYPE html>
<html>
<head>
	<!--  *****   Link To Custom CSS Style Sheet   *****  -->
	<link rel="stylesheet" type="text/css" href="./css/gallery-a.css">

	<!--  *****   Link To Font Awsome Icons   *****  -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Portfolio</title>
</head>
<body>
<section class="portfolio">
	
	<header class="section-head">
		<h1>Some Of Our Latest Memories</h1>
	</header>

	<main class="mainContainer">
		
		<!--  *****  Buttons Section Starts  *****  -->
		<div class="button-group">
			<button class="button active" data-filter="*">All</button>
			<button class="button" data-filter=".Festivals">Festivals</button>
		<button class="button" data-filter=".Events">Events</button>
			<button class="button" data-filter=".Travel">Travel</button>
		</div>
		<!--  *****  Buttons Section Ends  *****  -->

		<!--  *****  Gallery Section Starts  *****  -->
		<div class="gallery">
			
			<!--  *****  Card 1 Starts  *****  -->
			<div class="item Festivals">
				<img src="./img/navratri 1.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!--  *****  Card 1 Ends  *****  -->

			<!--  *****  Card 2 Starts  *****  -->
			<div class="item Festivals">
				<img src="./img/ganpati.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!--  *****  Card 2 Ends  *****  -->

			<!--  *****  Card 3 Starts  *****  -->
			<div class="item Events">
				<img src="./img/15aug.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!--  *****  Card 3 Ends  *****  -->

			<!--  *****  Card 4 Starts  *****  -->
			<div class="item Events">
				<img src="./img/convocation.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!--  *****  Card 4 Ends  *****  -->

			<!--  *****  Card 5 Starts  *****  -->
			<div class="item Events">
				<img src="./img/induction.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
			<!--  *****  Card 5 Ends  *****  -->

			<!--  *****  Card 6 Starts  *****  -->
			<div class="item Travel">
				<img src="./img/industry.jpg">
				<div class="overlay">
					<a href="#">VIEW MORE</a>
				</div>
			</div>
		
			<!--  *****  Card 6 Ends  *****  -->

		</div>
		<!--  *****  Gallery Section Ends  *****  -->
	
	</main>

</section>


<!--   *****   JQuery Link   *****   -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>

<!--   *****   Isotope Filter Link   *****  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>

<script type="text/javascript">
	var $galleryContainer = $('.gallery').isotope({
		itemSelector: '.item',
  		layoutMode: 'fitRows'
	})

	$('.button-group .button').on('click', function(){
		$('.button-group .button').removeClass('active');
		$(this).addClass('active');

		var value = $(this).attr('data-filter');
		$galleryContainer.isotope({
			filter: value 
		})
	})

</script>


</body>
</html>