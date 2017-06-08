<?php
include_once('db.php');
session_start();
if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
} 
if(isset($_POST['op']))
{
	$id=$_REQUEST['user_id'];
	$q1="delete from users  INNER JOIN invoice ON users.user_id=invoice.user_id where user_id=$id  ";
    ExecuteQuery($q1);
} 
?>
<!DOCTYPE html>
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
                  <div class="col-sm-10">
                      <section class="panel">
                          <header class="panel-heading">
                              Contextual classes
                          </header>
                          <table class="table" border="1">
                            <thead>
                              <tr>
                                <th>Product Id</th>
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
				<th>Discount Price In %</th>
				<th>Total Price</th>
				<th>Date  Time</th>
                              </tr>
                            </thead> 
                            <tbody>
                             <?php 
							$id=$_REQUEST['id'];
						    $q= "SELECT *
							  FROM product
							  INNER JOIN card
							  ON product.pro_id=card.pro_id 
							   where user_id=$id order by cart_id desc"; 
							   $ar=ExecuteQueryResule($q);
							   foreach($ar as $k)
							  { 
						     ?>	
						     <?php
					 $a=($k['pro_price']-$k['pro_disc'])
					?>								
                              <tr class="success">
                                <td><?php echo $k['pro_id'] ?></td>
                                <td><?php echo $k['pro_name'] ?></td>
                                <td><?php echo $k['quantity'] ?></td>
                                <td><?php echo $k['pro_price'] ?></td>
				<td><?php echo $k['pro_disc'] ?></td>
				<td><?php echo $a*$k['quantity'] ?></td>
				<td><?php echo $k['datetime']; ?></td>
                              </tr>
				  <tr>
							  <?php
							  $to=$to+($k['quantity']*$a);
							  }
							  ?>
			                    <td></td><td></td><td></td><td>Last Date Purchasing Item Add</td><th>Total Amount</th><td>Rs. <?php echo $to;?></td>
							  </tr>
                            </tbody> 
                          </table>
                      </section>
                  </div>
              </div>
                                           
		   </tbody>
		</table>
	  </section>
  </div>
              </div>
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


  </body>
</html>
