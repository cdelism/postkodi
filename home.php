<?php
session_start();
$_SESSION['activemenu']="home";
if(!isset($_SESSION['username'])){
	
	header('location:index.php');
}

include('header.php');
include('sidebar.php');


	 
		
?>

<?php
include('connect.php');
$noshop=$db_con->query("select count(shopid) from kwerekwe")->fetchColumn();
	
	
	 $pay=$db_con->query("select count(taxstatus) from kwerekwe where taxstatus ='pay'")->fetchColumn();
	 $unpay=$db_con->query("select count(taxstatus) from kwerekwe where taxstatus ='not pay'")->fetchColumn();
	 
	 $amaount=$db_con->query("select sum(payedamount) from kwerekwe")->fetchColumn();
	  
	
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
              <div class="count"><?php echo $noshop ?>.00</div>
              <div class="title"> Total Shops </div>
            </div>
            <!--/.info-box-->
			</div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box brown-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php echo $pay ?>.00</div>
              <div class="title">Shops paid</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box dark-bg">
              <i class="fa fa-shopping-cart"></i>
              <div class="count"><?php echo $unpay ?>.00</div>
              <div class="title">Shops Unpaid</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

          <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <div class="info-box green-bg">
              <i class="fa fa-cubes"></i>
              <div class="count"><?php echo $amaount ?></div>
              <div class="title">total Revenue</div>
            </div>
            <!--/.info-box-->
          </div>
          <!--/.col-->

        </div>

		<div class="row">
		
			
			<div class="col-lg-12">
				<section class="panel">
					 <header class="panel-heading">
				  Available Shops
					 </header>
					  
					<table class="table table-striped display table-hover" id="example" style="width:100%">
					<thead>          
						<tr >
							<th>ShopNumber</th>
							<th>ShopName</th>
              <th> lesence number</th>
              <th> ShopType</th>
						   <th>TaxStatus</th>
						
						   <th>Amount</th>
							<th > Action</th>   
						</tr>
					</thead>
					<tbody>

					<?php
						include('connect.php');
						$result = $db_con->prepare("SELECT * FROM kwerekwe");
						$result->execute();
						for($i=0; $row = $result->fetch(); $i++){
					?>

						<tr style colour ="red">
							<td > <?php echo $row ['shopid']; ?></td>
							<td > <?php echo $row ['name10']; ?></td>
							<td > <?php echo $row ['lesencenumber']; ?></td>
							<td > <?php echo $row ['shop']; ?></td>
              <td > <?php echo $row ['taxstatus']; ?></td>
              <td > <?php echo $row ['payedamount']; ?></td>


						   <td>
									<!--<a class="btn btn-primary" href='updateshop.php?owner=<?php// echo $row['shopid']; ?>'><i class="icon_plus_alt2"></i></a>-->
									<a class="btn btn-success" href='map.php?owner=<?php echo $row['shopid']; ?>'><i class="fa fa-map-marker red"></i></a>
									<a class="btn btn-danger" href='deleteshop.php?owner=<?php echo $row['shopid']; ?>'onclick="return confirm('Are you sure ?')"><i class="icon_close_alt2"></i></a>
							 
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