<?php

session_start();
$_SESSION['activemenu']="analyses";
if(!isset($_SESSION['username'])){
	
	header('location:index.php');
}


?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <link rel="stylesheet" href="shopdemo/css/leaflet.css">
        <link href="shopdemo/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

       
        <style>
        #map {
            width: 100%;
            height: 630px;
        }
        </style>
        <title></title>
    </head>
    <body>
	<?php 
		include('header.php');
		
		include('sidebar.php');
	?>
	
	<script src="shopdemo/js/kazi1.js"></script>
        <section id="main-content">

			<section class="wrapper">
				<div class="row">
				  <div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-area-chart"></i> Shops Anaylys</h3>
					 
				  </div>
				 
				</div>
				<div class="row">
					<div class="col-lg-12">
							<div class='container'>
									<div class='tableauPlaceholder' id='viz1609704982778' style="position:relative; ">
										<noscript>
											<a href='#'><img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;shops_16097042649380&#47;Sheet1&#47;1_rss.png' style='border: none' />
											</a>
										</noscript>
											<object class='tableauViz'  style='display:none;'>
											<param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> 
											<param name='embed_code_version' value='3' /> <param name='site_root' value='' />
											<param name='name' value='shops_16097042649380&#47;Sheet1' /><param name='tabs' value='no' />
											<param name='toolbar' value='yes' />
											<param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;sh&#47;shops_16097042649380&#47;Sheet1&#47;1.png' /> <param name='animate_transition' value='yes' />
											<param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' />
											<param name='display_overlay' value='yes' /><param name='display_count' value='yes' />
											<param name='language' value='en' /><param name='filter' value='publish=yes' />
											</object>
									</div>  
								<script type='text/javascript'>
									var divElement = document.getElementById('viz1609704982778'); 
													   var vizElement = divElement.getElementsByTagName('object')[0];
																vizElement.style.width='100%';
																vizElement.style.height=(divElement.offsetWidth*0.50)+'px'; 
																var scriptElement = document.createElement('script'); 
														scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
								vizElement.parentNode.insertBefore(scriptElement, vizElement);  
								</script>


							</div>
					</div>
				</div>
			</section>
		</section>
	

	 
	

    </body>
</html>
