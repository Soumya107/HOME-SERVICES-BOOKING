<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('medatada.php');?>
<?php include('header.php');?>
<?php include('sidebar.php');?>
<title>Customer Details</title>
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
                       Customer Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="customers_details_form.php" class="btn btn-info btn">Add Customer Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Customer Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

    <th width="53" height="58">Sl.No</th>
    <th width="151">Customer Name </th>
    <th width="113">Date Of Birth</th>
    <th width="76">Gender</th>
    <th width="95">Address</th>
    <th width="162">Mobile No</th>
    <th width="210">Email Id </th>
    <th width="64"><div align="center">Edit</div></th>
    <th width="63"><div align="center">Delete</div></th>
   </tr>
  </thead>
  <tbody>
   <?php
  include("dbconnect.php");
  $sl=1;
  $sql="select * from customer_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
 
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['customer_name'] ?></td>
    <td><?php echo $row['date_of_birth'] ?></td>
    <td><?php echo $row['gender']?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['mobile_number']?></td>
    <td><?php echo $row['email_id']?></td>
    <td><div align="center"><a href="customer_details_edit.php?c_id=<?php echo $row['customer_id'];?>"><img src="../img/edit_01.png" width="40" height="40"></a></div></td>
	 <td height="53"><div align="center"><a href="customer_details_delete.php?c_id=<?php echo $row['customer_id'];?>"><img src="../img/delete.png" width="40" height="40"></a></div></td>
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

