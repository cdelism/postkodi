<?php

session_start();
$_SESSION['activemenu']="map_view";
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
	<?php include('header.php');
include('sidebar.php')
	?>
	
        
        <script src="shopdemo/js/kazi1.js"></script>
        <section id="main-content">

			<section class="wrapper">
				
				<div class="row">
			  <div class="col-lg-12">
				<h3 class="page-header"><i class="fa fa-map-marker"></i> Map View</h3>
				
			  </div>
			</div>
				
			
			
				<div class="row">
					<div class="col-lg-12">
						<div id="map"></div>
					</div>
				</div>
			</section>
		</section>
		
		<script src="shopdemo/vendor/jquery/jquery.slim.min.js"></script>
		  <script src="shopdemo/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        
		
		<script src="shopdemo/js/qgis2web_expressions.js"></script>
        <script src="shopdemo/js/leaflet.js"></script>
        <script src="shopdemo/js/leaflet.rotatedMarker.js"></script>
        <script src="shopdemo/js/leaflet.pattern.js"></script>
        <script src="shopdemo/js/leaflet-hash.js"></script>
        <script src="shopdemo/js/Autolinker.min.js"></script>
        <script src="shopdemo/js/rbush.min.js"></script>
        <script src="shopdemo/js/labelgun.min.js"></script>
        <script src="shopdemo/js/labels.js"></script>
        <script src="shopdemo/data/clipping_boundary_1.js"></script>
        <script src="shopdemo/data/shop_planet_osm_point_points_2.js"></script>
        <script>
            
        var highlightLayer;
        function highlightFeature(e) {
            highlightLayer = e.target;
            highlightLayer.openPopup();
        }
        var map = L.map('map', {
            zoomControl:true, maxZoom:28, minZoom:1
        }).fitBounds([[-6.178245710133154,39.21527435349236],[-6.172242558419508,39.22468982302219]]);
        var hash = new L.Hash(map);
        map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
        var autolinker = new Autolinker({truncate: {length: 30, location: 'smart'}});
        var bounds_group = new L.featureGroup([]);
        function setBounds() {
        }
        map.createPane('pane_OSMStandard_0');
        map.getPane('pane_OSMStandard_0').style.zIndex = 400;
        var layer_OSMStandard_0 = L.tileLayer('http://tile.openstreetmap.org/{z}/{x}/{y}.png', {
            pane: 'pane_OSMStandard_0',
            opacity: 1.0,
            attribution: '<a href="https://www.openstreetmap.org/copyright">© OpenStreetMap contributors, CC-BY-SA</a>',
            minZoom: 1,
            maxZoom: 28,
            minNativeZoom: 0,
            maxNativeZoom: 19
        });
        layer_OSMStandard_0;
        map.addLayer(layer_OSMStandard_0);
        function pop_clipping_boundary_1(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
        }

        function style_clipping_boundary_1_0() {
            return {
                pane: 'pane_clipping_boundary_1',
                opacity: 1,
                color: 'rgba(35,35,35,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 1.0, 
                fill: true,
                fillOpacity: 0,
                fillColor: 'rgba(166,206,227,1.0)',
                interactive: true,
            }
        }
        map.createPane('pane_clipping_boundary_1');
        map.getPane('pane_clipping_boundary_1').style.zIndex = 401;
        map.getPane('pane_clipping_boundary_1').style['mix-blend-mode'] = 'normal';
        var layer_clipping_boundary_1 = new L.geoJson(json_clipping_boundary_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_clipping_boundary_1',
            layerName: 'layer_clipping_boundary_1',
            pane: 'pane_clipping_boundary_1',
            onEachFeature: pop_clipping_boundary_1,
            style: style_clipping_boundary_1_0,
        });
        bounds_group.addLayer(layer_clipping_boundary_1);
        map.addLayer(layer_clipping_boundary_1);
        function pop_shop_planet_osm_point_points_2(feature, layer) {
            layer.on({
                mouseout: function(e) {
                    if (typeof layer.closePopup == 'function') {
                        layer.closePopup();
                    } else {
                        layer.eachLayer(function(feature){
                            feature.closePopup()
                        });
                    }
                },
                mouseover: highlightFeature,
            });
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['osm_id'] !== null ? autolinker.link(feature.properties['osm_id'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['name'] !== null ? autolinker.link(feature.properties['name'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['shop'] !== null ? autolinker.link(feature.properties['shop'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['opening_ho'] !== null ? autolinker.link(feature.properties['opening_ho'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['editshop_field_2'] !== null ? autolinker.link(feature.properties['editshop_field_2'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['editshop_tax status'] !== null ? autolinker.link(feature.properties['editshop_tax status'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {maxHeight: 700});
        }

        function style_shop_planet_osm_point_points_2_0(feature) {
            switch(String(feature.properties['editshop_tax status'])) {
                case 'not pay':
                    return {
                pane: 'pane_shop_planet_osm_point_points_2',
                radius: 8.0,
                opacity: 1,
                color: 'rgba(128,17,25,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(219,30,42,1.0)',
                interactive: true,
            }
                    break;
                case 'pay':
                    return {
                pane: 'pane_shop_planet_osm_point_points_2',
                radius: 8.0,
                opacity: 1,
                color: 'rgba(61,128,53,1.0)',
                dashArray: '',
                lineCap: 'butt',
                lineJoin: 'miter',
                weight: 2.0,
                fill: true,
                fillOpacity: 1,
                fillColor: 'rgba(84,176,74,1.0)',
                interactive: true,
            }
                    break;
            }
        }
        map.createPane('pane_shop_planet_osm_point_points_2');
        map.getPane('pane_shop_planet_osm_point_points_2').style.zIndex = 402;
        map.getPane('pane_shop_planet_osm_point_points_2').style['mix-blend-mode'] = 'normal';
        var layer_shop_planet_osm_point_points_2 = new L.geoJson(json_shop_planet_osm_point_points_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_shop_planet_osm_point_points_2',
            layerName: 'layer_shop_planet_osm_point_points_2',
            pane: 'pane_shop_planet_osm_point_points_2',
            onEachFeature: pop_shop_planet_osm_point_points_2,
            pointToLayer: function (feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.circleMarker(latlng, style_shop_planet_osm_point_points_2_0(feature));
            },
        });
        bounds_group.addLayer(layer_shop_planet_osm_point_points_2);
        map.addLayer(layer_shop_planet_osm_point_points_2);
        setBounds();
        //legend
        var legend_drainage = L.control({position: 'bottomleft'});

legend_drainage.onAdd = function (map) {
    var div = L.DomUtil.create('div', 'info legend'),
        grades = ["ditch", "drain","stream","underground_drain"],
        labels = [];
    div.innerHTML += '<b>LEGEND</b><br><img src="shopdemo/images/legend.PNG">' 
    return div;
};
map.addControl(legend_drainage);


        </script>
    </body>
</html>
