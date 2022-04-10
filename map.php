<?php
session_start();
if(!isset($_SESSION['username'])){
	
	header('location:index.php');
}

include('header.php');
include('sidebar.php');
?>
<html > 
    <head>
      
		
<link rel="stylesheet" charset="utf-8" href="library/leaflet/leaflet.css" />
	<script type="text/javascript" charset="utf-8" src="library/leaflet/leaflet.js"></script>
	<script type="text/javascript" charset="utf-8" src="dist/leaflet-meters.js"></script>
 <link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
   
   <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
   
   
<style>

 #mapid {
    height: 530px;
          width:1000px;
		  margin-top:35px;
          margin-left:5px
		  }
 
</style>
		
    </head>
    <body>
       
    <section id="main-content">
        


     <div id="mapid" ></div>
<script src="dist/leaflet.groupedlayercontrol.min.js"></script>
<script src="dist/leaflet.groupedlayercontrol.min.js.map"></script>
<script type="text/javascript" src="point.js"></script>
<script src="dist/leaflet-routing-machine.js"></script>
<script>

  //-6.1655/39.2033
	var mymap = L.map('mapid').setView([-6.1640236122945256, 39.204747798421586],14);
	L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png?access_token={accessToken}', {
	attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
	maxZoom: 70,
	id: 'mapbox.streets',
  accessToken: 'pk.eyJ1IjoiYmluYm9uaXkiLCJhIjoiY2swa2VhdDB0MGl5OTNsbGlnMWduMmd0ZiJ9.XajWTPyAcPtxvcxIVZmg3Q',
}).addTo(mymap);

  // Overlay layers are grouped
  var groupedOverlays = {
    "Random": {
      "Collection Point": ExampleData.LayerGroups.recyclebin,
      "Dumps sites": ExampleData.LayerGroups.dumps,
    }
  };

  
  var options = {
    // Make the "Landmarks" group exclusive (use radio inputs)
    exclusiveGroups: ["Landmarks"],
    // Show a checkbox next to non-exclusive group labels for toggling all
    groupCheckboxes: true
  };

  // Use the custom grouped layer control, not "L.control.layers"
  var layerControl = L.control.groupedLayers(ExampleData.Basemaps, groupedOverlays, options);
  mymap.addControl(layerControl);
/*Setup*/

</script>


     <?php 
      $try=$_GET["owner"];
           include 'connect.php';
            $sql1=("SELECT * FROM particular where particular.pid='$try'");
            $stm1=$db_con->prepare($sql1);
            $stm1->execute();
            $row = $stm1->fetchAll(PDO::FETCH_ASSOC);																																																																																			
            foreach($row as $rows){ 
                $latitude=$rows['latitude'];
                $longitude=$rows['longitude'];
                
                ?>
               
			
			<script>
			  L.marker(['<?php echo $latitude ?>','<?php echo $longitude; ?>'])
			 .bindPopup
		 ('Postkod Number : <?php echo $rows["pid"]; ?><br> Address :<?php echo $rows["area"]; ?>  . '  )
		 .addTo(mymap);
			</script>
							<?php }
          
            ?>
			
		 
		   
		   <!-- <br> VENUE PIC: <img src="featuresimages/<?php echo $rows["title"]; ?>">.<br>  <a <button  type="submit" name="Create" class="btn btn-block btn-success btn-sm" href="applyStudentHandler.php?eventID=<?php echo $rows["title"]; ?>"  >APPLY</button> </a> <br> <br><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">MORE ABOUT MAKER</button>-->

       
		
		
    </body>
</html>