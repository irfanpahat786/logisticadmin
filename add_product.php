<?php 
include_once('db.php');
session_start();
if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
} 
if(isset($_POST['add']))
{
$cat_id= $_POST['cat_id']; 
$fn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "img/".$fn);
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pqty=$_POST['pqty'];
$pdesc=$_POST['pdisc'];
$stock=$_POST['stock'];
$pdescr=$_POST['pdescr']; 
$q1="insert into product(product,pro_name,pro_description,pro_qty,pro_price,pro_disc,pro_stock,cat_id,pro_date) values ('$fn','$pname','$pdescr','$pqty','$pprice','$pdesc','$stock','$cat_id',CURDATE()) ";
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
                                                      <label class="col-lg-2 control-label">Product Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control"  name="pname" placeholder="Product Name " required>
                                                      </div>
                                                  </div>
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label" >Category</label>
                                                      <div class="col-lg-6">
                                                          
							   <select class="form-control" name="cat_id" required>
								<option value=""<?php if($cat_id=='') echo 'selected';?>>Select Cetegory</option>
								<?php 
									$q="select * from category";
									$ar=ExecuteQueryResule($q);
									 foreach($ar as $k)
									 { 
									 	$cat_id=$k['cat_id'];
										$cat_name=$k['cat_name'];
								    ?>
							
								<option value="<?php echo $k['cat_id'];?>" <?php if($k['cat_id']==trim($cat_id)){ echo  'selected'; }?>><?php echo $k['cat_name'];?></option>
								
								  <?php }?>
								 </select>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Image</label>
                                                      <div class="col-lg-6">
                                                        <input type="file" name="file"  required >  
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Price</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="email" placeholder="Product Price " name="pprice"  required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Quantity</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder="Product Quantity " name="pqty" required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Stock Product</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder="Stock Product" name="stock" required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Discount</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="url" placeholder="Product Discount" name="pdisc"  required>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <label class="col-lg-2 control-label">Description</label>
                                                      <div class="col-lg-6">
                                                          <textarea  id="" class="form-control" cols="30" rows="5"placeholder="Product Description" name="pdescr" required></textarea>
                                                      </div>
                                                  </div>
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary" name="add">Save</button> 
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
