<?php
session_start();
if(!isset($_SESSION['username'])){
	
	header('location:index.php');
}

include('header.php');
include('sidebar.php');
?>
<body>  

	<section id="main-content">
      <section class="wrapper">
        <div class="">
		
		<div class="row">
          <div class="col-lg-12">
           
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
              <li><i class="fa fa-laptop"></i>Dashboard</li>
            </ol>
          </div>
        </div>
		
		<div class="row">
          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box blue-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">14M</div>
              <div class="title"> House</div>
            </div>
            <!--/.info-box-->
			</div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">10M</div>
              <div class="title">Total Hotel </div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count">42M</div>
              <div class="title">Total Shop</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count">67M</div>
              <div class="title">Total House</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>

		<div class="row">
		
			
			<div class="col-lg-12">
				<section class="panel">
					 <header class="panel-heading">
			Search <strong>POSTKODI</strong> in Search Bar
					 </header>
					  
					<table class="table table-striped display table-hover" id="example" style="width:100%">
					<thead>          
						<tr >
							<th>Post ID</th>
							<th>Area</th>
							
							<th > Directions</th>   
						</tr>
					</thead>
					<tbody>

					<?php
						include('connect.php');
						$result = $db_con->prepare("SELECT * FROM  postkodi.particular");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>

						<tr style colour ="red">
							<td > <?php echo $row ['pid']; ?></td>
							<td > <?php echo $row ['area']; ?></td>
							
						   <td>
									<a class="btn btn-primary" href='updateshop.php?owner=<?php echo $row['pid']; ?>'><i class="fa fa-road"></i></a>
                  <a class="btn btn-success" href='map.php?owner=<?php echo $row['pid']; ?>'><i class="fa fa-map-marker red"></i></a>
							 
							</td>
													 
						</tr>
					
													 
					
					<?php
						}
					?>
					</tbody>
				</table>
				</section>
			</div>
		</div>
	
	
<script>
$(document).ready(function() {
    $('#example').DataTable();
} );
</script>

    <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


    </body>
    </html>