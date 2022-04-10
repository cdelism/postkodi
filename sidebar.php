  <!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
      <!-- sidebar menu start-->
      <ul class="sidebar-menu">
        <li <?php //if($_SESSION['activemenu']=='home'){ echo 'class="active"';} ?>>
          <a class=""  href="viewpostkodi.php">
                        
                        <span>Dashboard</span>
                    </a>
        </li>
        <li <?php //if($_SESSION['activemenu']=='map_view'){ echo 'class="active"';} ?>class="sub-menu">
          <a href="viewpostkodi.php" class="">
                  <span>Map</span>
             </a>
        </li>
         <!-- <li <?php //if($_SESSION['activemenu']=='analyses'){ echo 'class="active"';} ?> class="sub-menu">
          <a href="analyses.php" class="">
                  <span>Analyses</span>
             </a>
        </li> -->
        <li class="sub-menu">
          <a href="index.php" onclick="return confirm('Are you Sure')" class="">
                  <span>Logout</span>
             </a>
        </li>
        
       
      </ul>
      <!-- sidebar menu end-->
    </div>
  </aside>
  <!--sidebar end-->