<?php
include_once('db.php'); 

if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
} 
if(isset($_GET['del']))
{
	//$id=$_REQUEST['id'];
	$q1="delete from users where id='".$_GET['del']."'";
    ExecuteQuery($q1);
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
       <?php  include_once('include/header.php')?>
      <!--header end-->

      <!--sidebar start-->
      <?php  include_once('include/sidebar.php')?>

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12"> 
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-table"></i>User</li>
						<li><i class="fa fa-th-list"></i>User List</li>
					</ol>
				</div>
			</div>
              <!-- page start--> 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  <form method="post"> 
						  <label class="col-lg-2 control-label"></label>
						  <div class="col-lg-4">
						   <input type="text" class="form-control"  name="iname" placeholder="Enter Email"value=""> 
						  </div>
                           <button type="submit" class="btn btn-primary" name="search">Search</button> <br>
						  
						  
                          <table class="table table-striped table-advance table-hover">
                           <tbody><br>
                              <tr>
							     <th><i class=""></i>User Id</th>
                                 <th><i class=""></i>User Name</th>
                                 <th><i class=""></i>email</th>
                                 <th><i class=""></i>Contact</th>
                                 <th><i class=""></i>Address</th>
                                 <th><i class=""></i>City</th>
                                 <th><i class=""></i>State</th>
                                 <th><i class=""></i>Inquiry Date</th>
                                 <th><i class=""></i>Action</th> 
                              </tr> 
							   
                           <?php 
						     $q="select * from users ORDER BY id  DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['id'];?></td>
                                 <td><?php echo $k['user_name'];?></td>
                                 <td><?php echo $k['user_email']?></td>
                                 <td><?php echo $k['mobile_no'];?></td>
                                 <td><?php echo $k['address'];?></td>
                                 <td><?php echo $k['city'];?></td>
                                 <td><?php echo $k['state'];?></td>
                                 <td><?php echo $k['created_dt'];?></td>
                                 <td><?php echo $k['active'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      
                                      <a class="btn btn-danger" href="#" onclick="del(<?php echo $k['id'];?>)">Delete</a>									  
                                  </div>
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
			  </form>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <script>
      function del(id)
          { 
		if(confirm('Sure To Remove This Record ?'))
	        {
		         window.location.href='user_list.php?del='+id;
	        } 
          } 
      </script>
  </body>
</html>
