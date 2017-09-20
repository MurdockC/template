
<html>
	<head>
		<link rel="stylesheet" type-="text/css" href="/assets/css/normalize.css">
		<link rel="stylesheet" type="text/css" href="/assets/css/main.css">
		<script  type="text/javascript" href="assets/js/main.js"></script>
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	</head>
	<body>
	  <header>
			<script type="text/javascript">

			function doThis() {
			    var hidden = document.getElementById('mobile-hide');
			    var menu = document.getElementById('thisContent');
			    if (menu.style.display === 'none') {
			        menu.style.display = 'flex';
			        hidden.style.display = 'none';

			    } else {
			        menu.style.display = 'none';
			        hidden.style.display = 'block';
			    }
			}
			</script>



			<div class="container-full-width primary-bg flex centered-contents">
				<div class="container-1200 flex nav">
					<div class="logo"></div>
					<a onclick="doThis()">
						<div class="nav-icon">
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
							<div class="icon-bar"></div>
						</div>
					</a>
				</div>
			</div>
			<!-- below content is hidden until hamburger button is pushed -->
			<div id="thisContent" class="mobile-nav flex-column ">
				<a href="#"><div class="menu-button flex centered-contents padding-lg">One</div></a>
				<a href="#"><div class="menu-button flex centered-contents padding-lg">Two</div></a>
				<a href="#"><div class="menu-button flex centered-contents padding-lg">Three</div></a>
			</div>

			<!-- this div becomes hidden while viewing mobile nav -->


			<section id="campaign" class="container-fullwidth campaign-bg flex centered-contents">
				<div class="container-1200 flex wrap">
					<div class="flex margin-lg flex-column ">
						<h1 class="margin-lg self-start margin-tb-sm">You could work here.</h1>
						<h2 class="margin-lg self-start margin-tb-sm ">I guess</h2>
						<p class="self-start margin-lg margin-tb-sm ">The pay is okay, and sometimes Jim brings donuts.</p>
					</div>
					<div class="flex margin-lg flex-column ">
						<h1 class="margin-lg self-start margin-tb-sm">You could work here.</h1>
						<h2 class="margin-lg self-start margin-tb-sm ">I guess</h2>
						<p class="self-start margin-lg margin-tb-sm ">The pay is okay, and sometimes Jim brings donuts.</p>
					</div>
				</div>
			</section>
	  </header>







<div id="mobile-hide">

		<section id="body-content" class="container-full-width light-bg centered-contents flex">
			<div class="container-1200 flex wrap">
				<div class="flex margin-lg  flex-column primary-bg">
					<h1 class="margin-lg self-start">Benefits</h1>
					<p class="self-start margin-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
				</div>
				<div class="flex margin-lg flex-column primary-bg ">
					<h1 class="margin-lg self-start">Pay</h1>
					<p class="self-start margin-lg">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsums</p>
				</div>
			</div>
		</section>

		<section id="form" class="container-full-width alt-bg centered-contents flex">
			<div class="container-1200 flex wrap">
				<div class="flex margin-lg  flex-column">
					<label class="form-label" for="firstname">First & Last Name</label>
					<input type="text" name="firstname" placeholder="Enter your First & Last Name">
					<label class="form-label" for="email">Email</label>
					<input type="text" name="email" placeholder="Enter your Email">
					<label class="form-label" for="phone">Phone</label>
					<input type="text" name"phone" placeholder="Enter your Phone Number">
					<label class="form-label" for="zip">Zip Code</label>
					<input type="text" name"zip" placeholder="Enter your Zip Code">
				</div>
				<div class="flex margin-lg flex-column">
					<label class="form-label" for="experience">Years of Experience</label>
						<div class="check-radio-container">
							<input id="box1"type="checkbox" />
	    				<label for="box1">Yes</label>

					  	<input id="box2"type="checkbox" />
					  	<label for="box2">No</label>

					  	<input id="box3"type="checkbox" />
					  	<label for="box3">Maybe</label>
						</div>
					<label class="form-label" for="experience">Current CDL</label>
						<div class="check-radio-container">
							<input id="box4"type="radio" name="same" />
	    				<label for="box4">Yes</label>

					  	<input id="box5"type="radio" name="same"/>
					  	<label for="box5">No</label>
						</div>
						<button class="button_one margin-lg self-center">Button</button>
				</div>
			</div>
		</section>



	  <footer>

	  </footer>

	</div> <!-- hide section
	</body>
</html>
