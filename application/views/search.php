<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="apple-touch-icon" href="http://library.marist.edu/images/box.png"/>
		<link rel="shortcut icon" href="http://library.marist.edu/images/box.png" />
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<title>Repository</title>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<!-- Bootstrap core CSS -->
		<link href="http://library.marist.edu/css/bootstrap.css" rel="stylesheet">
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
		<link href="http://library.marist.edu/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
		<link href="http://library.marist.edu/css/library.css" rel="stylesheet">
		<link href="http://library.marist.edu/css/menuStyle.css" rel="stylesheet">
		<link href="styles/main.css" rel="stylesheet">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<script type="text/javascript" src="http://library.marist.edu/js/libraryMenu.js"></script>
		<script type="text/javascript" src="http://library.marist.edu/crrs/js/jquery-ui.js"></script>
		<link rel="stylesheet" href="http://library.marist.edu/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
		
	</head>

	<body>
		<div id="headerContainer">
			<a href="http://library.marist.edu/" target="_self"> <div id="header"></div> </a>
		</div>
		<a class="menu-link" href="#menu"><img src="http://library.marist.edu/images/r-menu.png" style="width: 20px; margin-top: 4px;" /></a>
		<div id="menu">
			<div id="menuItems"></div>
		</div>
		<div id="miniMenu" style="width: 100%;border: 1px solid black; border-bottom: none;">

		</div>
		
		<!-- Main jumbotron for a primary marketing message or call to action -->
		<div id="main-container" class="container">
			<div class="jumbotron">
				<div class="container" style="margin-top: -36px;">
					<!-- Example row of columns -->
					<div class="row">
						<div class="col-md-12">
							<h2 style="text-align: center; margin: 30px; font-size: 40px;">Honors Program Thesis Repository</h2>
							<!--input type="text" id="searchBox" placeholder="Search Honor's Thesis Repository" /-->
							<div id="custom-search-input">
								<div class="input-group col-md-12">
									<input type="text" class="form-control input-lg" id="searchBox" placeholder="Search Honor's Thesis Repository" />
									<input type="hidden" class="form-control input-lg" id="queryTag" />
									<span class="input-group-btn">
										<button id="initiateSearch" class="btn btn-info btn-lg" type="button" style="background: #ffffff; border-color: #ccc;">
											<img src="./icons/search.png"  style="height: 25px;"/>
										</button> </span>
								</div>
							</div>
							<div id="selectedFacet">
							
							</div>
							<div id="searchResults" style="float: inherit">

							</div>

						</div>
					</div><!-- row -->
				</div><!-- container -->
			</div>
			<!-- jumbotron -->

			</br>

		</div></br>
		<!-- main-container -->
		<div class="container">
			<p  class = "foot">
				James A. Cannavino Library, 3399 North Road, Poughkeepsie, NY 12601; 845.575.3106
				<br />
				&#169; Copyright 2007-2017 Marist College. All Rights Reserved.

				<a href="http://www.marist.edu/disclaimers.html" target="_blank" >Disclaimers</a> | <a href="http://www.marist.edu/privacy.html" target="_blank" >Privacy Policy</a> | <a href="http://library.marist.edu/ack.html?iframe=true&width=50%&height=62%" rel="prettyphoto[iframes]">Acknowledgements</a>
			</p>

</div>
</body>
<script type="text/javascript">
		$('#initiateSearch').click(function(){
			var searchTerm = $('input#searchBox').val();
			var searchTerm = searchTerm.replace(/ /g,"%20");
			var resultUrl = "<?php echo base_url("?c=repository&m=searchKeyWords&key=")?>"+searchTerm;
			$('#searchResults').load(resultUrl);
		});
		
		$('#searchBox').keypress(function(e){
			var key = e.which;
			if(key == 13){
				var searchTerm = $('input#searchBox').val();
				var searchTerm = searchTerm.replace(/ /g,"%20");
				var resultUrl = "<?php echo base_url("?c=repository&m=searchKeyWords&key=")?>"+searchTerm;
				$('#searchResults').load(resultUrl);
			}
		});
</script>
</html>
