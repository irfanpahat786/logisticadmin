<?php 
include_once('db.php');
if(isset($_POST['s1']))
{
$id= $_REQUEST['id']; 
$fn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "img/".$fn); 
$q1="update product set product='$fn'  where pro_id=$id";
ExecuteQuery($q1); 
}
if(isset($_POST['add']))
{
$id= $_REQUEST['id'];	
$cat= $_POST['cat']; 
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pqty=$_POST['pqty'];
$pdesc=$_POST['pdisc'];
$pdescr=$_POST['pdescr']; 
$q1="update product set pro_name='$pname', pro_description='$pdescr',pro_qty='$pqty',pro_price='$pprice',pro_disc='$pdesc' where pro_id=$id";
ExecuteQuery($q1); 
}
if(isset($_POST['op']))
{
	$id=$_REQUEST['id'];
	$q1="delete from product where pro_id=$id";
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

    <title>Profile | </title>

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
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_documents_alt"></i>Pages</li>
						<li><i class="fa fa-user-md"></i>Profile</li>
					</ol>
				</div>
			</div> 
			<?php
             $id=$_REQUEST['id'];			
			 $q="select * from product where pro_id=$id";
			 $ar=ExecuteQueryResule($q);
			 foreach($ar as $k)
			 { 
			 ?>	
              <div class="row">
                 <div class="col-lg-12">
                    <section class="panel">
                          <div class="panel-body">
                              <div class="tab-content"> 
                                    <section class="panel">                                          
                                          <div class="panel-body bio-graph-info">
                                              <h1> Profile Info</h1> 
											  <form class="form-horizontal" role="form" method="post" enctype= "multipart/form-data">  
											     <div class="form-group">
                                                      <label class="col-lg-2 control-label"></label>
                                                      <div class="col-lg-6">
													  <img src="img/<?php  echo $k['product'];?>" height="200px" height="200px">
                                                        <input type="file" name="file"  required >  
                                                      </div>
                                                  </div>
												  <div class="form-group">
                                                      <label class="col-lg-2 control-label"></label>
                                                      <div class="col-lg-6">
													   <button type="submit" class="btn btn-primary" name="s1">Update</button> 
                                                      </div>
                                                  </div>
												  </form>
                                              <form class="form-horizontal" role="form" method="post" enctype= "multipart/form-data"> 
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Product Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control"  name="pname" placeholder="Product Name " value="<?php echo $k['pro_name'] ?>">
                                                      </div>
                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label" >Category</label>
                                                      <div class="col-lg-6">
                                                           <select class="form-control" name="cat" required>
														   <option value="">Select Cetegory</option>
														   <option value="1">Hot Product</option>
														   <option value="2">Best Seller</option>
														   <option value="3">New Product</option>
														   </select>
                                                      </div>
                                                  </div> 
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Price</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" placeholder="Product Price " name="pprice" value="<?php echo $k['pro_price'] ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quantity</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder="Product Quantity " name="pqty" value="<?php echo $k['pro_qty'] ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Discount</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="url" placeholder="Product Discount" name="pdisc"  value="<?php echo $k['pro_disc'] ?>">
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Description</label>
                                                      <div class="col-lg-6">
                                                          <textarea  id="" class="form-control" cols="30" rows="5"placeholder="Product Description" name="pdescr" ><?php echo $k['pro_description'] ?></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary" name="add">Update</button> 
                                                      </div>
                                                  </div>
                                              </form>
                                          </div>
                                      </section> 
                              </div>
                          </div>
                      </section>
                 </div>
              </div>
                <?php
			 }
			 ?>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery knob -->
    <script src="assets/jquery-knob/js/jquery.knob.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>

  <script>

      //knob
      $(".knob").knob();

  </script>


  </body>
</html>
