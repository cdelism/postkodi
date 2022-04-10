<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Creative - Bootstrap Admin Template</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
    </head>
    <body class="bg-primary1" style="background-color:lightblue">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                
                    <div class="container">
                        <div class="row justify-content-center"><legend style="text-align: center;"><img src="img/logo.jpg" height="80px" width="100px" style="border-radius: 50%;margin-top: 8px;"></legend>
                            <div class="col-lg-7">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Account</h3></div>
                                    <div class="card-body">
                                        <form action=""  method="post" onsubmit="return validateForm()" name="myform">
                                            <div class="form-row">
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">First Name</label><input class="form-control py-4" name="name" type="text" placeholder="said othman" pattern="[A-Za-z\-]{2,}" title="Special character and numbers are not allowed and name must be more than one character ,in this field apart from this(-) character" required /></div>
                                                </div>
                                        
                   
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Last Name</label><input class="form-control py-4" name="lname" type="text" placeholder=""  title="enter valid lessence number" required/></div>
                                                </div>
                                                
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Contact</Address></label><input class="form-control py-4" name="contact"  placeholder="example@gmail.com" required /></div>
                                                </div>
                                        
                                                

                                                <div class="col-md-6">
                                                <label class="small mb-1" for="inputFirstName">Role</Address></label>
      <select  class="form-control py-4style=" name="role" style="padding:5px" Hidden >
          


  
  <option  name="role" value="staff">Driver</option>
  
  

  </select>
         </div>
        
                                              
                                                
                                            
<div class="form-row">
                                                

                                                
                                                

                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputFirstName">Username</Address></label>
                                                    <input class="form-control py-4" name="uname" type="text" placeholder="" pattern="[A-Za-z\-]{2,}" title="Special character and numbers are not allowed and name must be more than one character ,in this field apart from this(-) character" required  /></div>
                                                </div>
                                        
                                                <div class="col-md-6">
                                                    <div class="form-group"><label class="small mb-1" for="inputPassword">Password</label>
                                                    <input class="form-control py-4" name="pass" type="password" placeholder="enter passwrd" pattern="[A-Za-z0-9\!@#$%^&*()_+-={}|\';:?<,./>`~]{6,15}" title="Password should have at least 6  up to maximum 16 characters with exeption of these [] character" required/>
                                                    
                                                </div>
</div>
                                                
                                                
                                                
                                                    <button type="submit" class="btn btn-primary btn-block" name="register">Register</a></div>
                                        
                                  <div class="col-md-6">
                                      <a  class="btn btn-primary btn-block" href="index.php">Cancel</a>
                                      </div>
                                            </form>
         </div>
                                    
                                    <div class="card-footer text-center">
                                        

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div c  lass="text-muted">Copyright &copy; EasyFix.com </div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>




<?php
include("connect.php");

if (isset($_POST['register'])){
	
	

    $name=$_POST['name'];
    $lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$role=$_POST['role'];
	
    
    
	$user=$_POST['uname'];
    $pass=sha1($_POST['pass']);
    $role=$_POST['role'];
    
	
//$pdo_statement = $db_con->prepare("SELECT * FROM user_role");
//$pdo_statement->execute();
//$result = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
//$row= $pdo_statement->rowCount();
   // if($row){
       // echo"<script>
       // alert('Sorry the username you enter is exist');
        
       // </script> ";
    //}else{

        $sql='insert into user values (?,?,?,?)';
        $stm=$db_con->prepare($sql);
        $stm->execute(array($contact,$user,$pass,$role));
        
        
    
    if($role=='staff'){
            $sql2='insert into officer values (?,?,?,?,?,?)';
            $stm2=$db_con->prepare($sql2);
            $stm2->execute(array(NULL,$name,$lname,$contact,$role,$contact));
            $row = $stm2->rowCount();
            echo "<script type= 'text/javascript'>alert('Regestration Successfully');
            window.location.href='index.php';
            </script>";
    
                                }
                                
                                
        else 
                {   
    }
    
           //  header("Location:home.php"); 
        
        }

    

    ?>



</body>
</html>
