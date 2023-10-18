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
                       Worker Details
                   </h1>
                    </div>
                </div> 
                 <strong>
                 <!-- /. ROW  -->
                  </strong><a href="worker_details_form.php" class="btn btn-info btn">Add Worker Details </a> 
                 <hr>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading style2">
                             Worker Details View
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
    <th width="55">Sl.No</th>
    <th width="152">Worker Name </th>
    <th width="98">Gender</th>
    <th width="135">Date Of Birth </th>
    <th width="125">Address</th>
    <th width="128">Qualification</th>
    <th width="129">Mobile No </th>
    <th width="101">Email Id </th>
    <th width="118">Work Description </th>
    <th width="108">Experience</th>
    <th width="129">Specialization</th>
    <th width="81">Photo</th>
    <th width="54"><div align="center">Edit</div></th>
    <th width="60"><div align="center">Delete</div></th>
  </tr>
  </thead>
  <tbody>
  <?php 
  include("dbconnect.php");
  $sl=1;
  $sql="select * from worker_details";
  $res=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($res))
  {
  ?>
  <tr>
    <td><?php echo $sl++ ?></td>
    <td><?php echo $row['worker_name']?></td>
    <td><?php echo $row['gender']?></td>
    <td><?php echo $row['date_of_birth']?></td>
    <td><?php echo $row['address']?></td>
    <td><?php echo $row['qualification']?></td>
    <td><?php echo $row['mobile_number']?></td>
    <td><?php echo $row['email_id']?></td>
    <td><?php echo $row['work_description']?></td>
    <td><?php echo $row['experiance']?></td>
    <td><?php echo $row['specialization']?></td>
    <td><img src="../img/<?php echo $row['photo']?> "width="175" height="93"></td>
    <td><div align="center"><a href="worker_details_edit.php?w_id=<?php echo $row['worker_id']?>"><img src="../img/edit_01.png" width="40" height="40"></a></div></td>
    <td><div align="center"><a href="worker_details_delete.php?w_id=<?php echo $row['worker_id']?>"><img src="../img/delete.png" width="40" height="40"></a></div></td>
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


