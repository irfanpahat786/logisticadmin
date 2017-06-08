<?php
include_once('db.php');
session_start();
if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
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
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Basic Table</li>
					</ol>
				</div>
			</div>
              <!-- page start--> 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  <form method="post">
                          <header class="panel-heading">
                             <a class="btn btn-primary" href="add_product.php">Add Product</a> 
                          </header> 
						  <label class="col-lg-2 control-label"></label>
						  <div class="col-lg-4">
						   <input type="text" class="form-control"  name="iname" placeholder="Enter Item Name"value=""> 
						  </div>
                           <button type="submit" class="btn btn-primary" name="search">Search</button> <br>
						  
						  
                          <table class="table table-striped table-advance table-hover">
                           <tbody><br>
                              <tr>
							     <th><i class=""></i>Product Id</th>
                                 <th><i class=""></i>Product Name</th>
                                 <th><i class=""></i>Image</th>
                                 <th><i class=""></i>Price</th>
                                 <th><i class=""></i>Qunatity</th>
                                 <th><i class=""></i>Discount</th>
                                 <th><i class=""></i>Action</th> 
                              </tr>
							  <tr>
							     <th style="color:red"><center>Electronic Product List</th>
                               </tr>
							   <?php
							   if(isset($_POST['search']))
								{  
								$iname=$_POST['iname']; 
								$q1="SELECT * FROM product WHERE pro_name LIKE'%$iname%'";  
								$ar=ExecuteQueryResule($q1);
								if(($ar[0]['pro_name'])==$iname)
								{?>
								 <tr>
							     <td><?php echo $ar[0]['pro_id'];?></td>
                                 <td><?php echo $ar[0]['pro_name'];?></td>
                                 <td><img src="img/<?php echo $ar[0]['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $ar[0]['pro_price'];?></td>
                                 <td><?php echo $ar[0]['pro_qty'];?></td>
                                 <td><?php echo $ar[0]['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $ar[0]['pro_id']; ?>">Edit</a> 
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $ar[0]['pro_id'];?>')">Delete</a>
                                  </div>
                                  </td>
                              </tr> 
								<?
								exit;
								} 
								else
								{	
								echo "<b style='color:red'>NOT MATCH ITEM</b>";
								} 
								}
							   ?>
                           <?php 
						     $q="select * from product where cat_id='1' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a> 
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>
                                  </div>
                                  </td>
                              </tr> 
                        <?php
							 }
						?>			
                           <tr>
							     <th style="color:red"><center>Cloths Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='2' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a> 
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>
                                  </div>
                                  </td>
                              </tr> 
                        <?php
							 }
						?>	
                          <tr>
							     <th style="color:red"><center>Watches Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='3' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a> 
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>
                                  </div>
                                  </td>
                              </tr> 
                        <?php
							 }
						?>
				<tr>
							     <th style="color:red"><center>Kids& Girls Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='4' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                             <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a> 
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>
                                  </div>
                                  </td>
                              </tr>
                        <?php
							 }
						?>			
                         <tr>
							     <th style="color:red"><center>Toys Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='5' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>									  
                                  </div>
                                  </td>
                              </tr>
                        <?php
							 }
						?>
				<tr>
							     <th style="color:red"><center>Deals Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='6' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>									  
                                  </div>
                                  </td>
                              </tr>
                        <?php
							 }
						?>
				<tr>
							     <th style="color:red"><center>Electronic Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='7' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>									  
                                  </div>
                                  </td>
                              </tr>
                        <?php
							 }
						?>
				<tr>
							     <th style="color:red"><center>Electronic Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='8' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>									  
                                  </div>
                                  </td>
                              </tr>
                        <?php
							 }
						?>
				<tr>
							     <th style="color:red"><center>Electronic Product List</th>
                               </tr>
                           <?php 
						     $q="select * from product where cat_id='10' ORDER BY 1 DESC";
							 $ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { 
						     ?> 							 
                              <tr>
							     <td><?php echo $k['pro_id'];?></td>
                                 <td><?php echo $k['pro_name'];?></td>
                                 <td><img src="img/<?php echo $k['product']?>" height="100px" width="100px"></td>
                                 <td><?php echo $k['pro_price'];?></td>
                                 <td><?php echo $k['pro_qty'];?></td>
                                 <td><?php echo $k['pro_disc'];?></td>
                                 <td>
                                  <div class="btn-group">
                                      <a class="btn btn-primary" href="edit_product.php?id=<?php echo $k['pro_id']; ?>">Edit</a>
                                      <a class="btn btn-danger" href="#" onclick="del('<?php echo $k['pro_id'];?>')">Delete</a>									  
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
      function del(did)
          { 
		  alert('Do you want delete this item'+did)
		  var da= {'op':'del','id':did};
              $.ajax(
                      {
                 url:'edit_product.php',
                 data:da,
                 type:'post',
                 success:function(data)
                 {
                    location.reload();
                 }
                      }); 
          } 
      </script>
  </body>
</html>
