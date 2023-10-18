<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<title>Home Services</title>
<style type="text/css">
<!--
.style1 {
	font-weight: bold;
	font-family: "Times New Roman", Times, serif;
}
.style2 {font-family: "Times New Roman", Times, serif}
-->
</style>
</head>
<body>
        <!--/. NAV TOP  -->
        
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
               <div class="col-md-12">
                   <h1 class="page-header style1">
                       Service Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="service_details_form.php" class="btn btn-info btn">Add Service Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Service Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="78" height="58">Sl.No</th>
    <th width="192">Service Name</th>
    <th width="253">Service Description </th>
    <th width="203">Service Category  </th>
    <th width="64"><div align="center">Edit</div></th>
    <th width="71"><div align="center">Delete</div></th>
   </tr>
  </thead>
  <tbody>
  <?php
  include("dbconnect.php");
  $sl=1;
  $sql="select * from service_details sd , service_categories sc where sd.service_category_id=sc.service_category_id ";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td height="63"><?php echo $sl++ ?></td>
    <td><?php echo $row['service_name']?></td>
    <td><?php echo $row['service_description']?></td>
    <td><?php echo $row['service_category_name']?></td>
    <td><div align="center"><a href="service_details_edit.php?sd_id=<?php echo $row['service_id']?>"><img src="../img/edit_01.png" width="40" height="40"></a></div></td>
    <td><div align="center"><a href="service_details_delete.php?sd_id=<?php echo $row['service_id']?>"><img src="../img/delete.png" width="40" height="40"></a></div></td>
  </tr>
  <?php } ?>
  </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
              
                <!-- /. ROW  -->
     
        
                    <!-- End  Hover Rows  -->
               <?php include('footer.php');?>
                <div class="col-md-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
                <!-- /. ROW  -->
        </div>
</body>
</html>


