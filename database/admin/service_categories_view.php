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
                       Service Categories Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="service_categories_form.php" class="btn btn-info btn">Add Service categories Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Service Categories View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table width="679" height="154" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        
	 </tr>
  </thead>
  <tbody>
    <th width="83" height="43">Sl.No</th>
    <th width="247">Service Category Name </th>
    <th width="200">Category Icon </th>
    <th width="62"><div align="center">Edit</div></th>
    <th width="63"><div align="center">Delete</div></th>
  </tr>
  </thead>
  <tbody>
  <?php 
  include("dbconnect.php");
  $sl=1;
  $sql="select * from service_categories";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td height="95"><?php echo $sl++ ?></td>
    <td><?php echo $row['service_category_name']?></td>
    <td><img src="../img/<?php echo $row['category_icon']?>" width="175" height="93"></td>
    <td><div align="center"><a href="service_categories_edit.php?ss_id=<?php echo $row['service_category_id']?>"><img src="../img/edit_01.png" width="40" height="40"></a></div></td>
    <td><div align="center"><a href="service_categories_delete.php?ss_id=<?php echo $row['service_category_id']?>"><img src="../img/delete.png" width="40" height="40"></a></div></td>
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

