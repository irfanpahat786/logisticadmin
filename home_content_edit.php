<?php
include_once('db.php'); 
if(isset($_POST['s1']))
{
$id=$_REQUEST['id'];	
$fn=$_FILES['file']['name'];
$tmn=$_FILES['file']['tmp_name'];
move_uploaded_file($tmn, "img/".$fn);
$q1="update home_content set image='$fn' where id=$id";
ExecuteQuery($q1);
}
if(isset($_POST['s7']))
{
$id=$_REQUEST['id'];	
$bt=$_REQUEST['button']; 
$q1="update home_content set button='$bt' where id=$id";
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

    <title>Form Validation | Creative - Bootstrap 3 Responsive Admin Template</title>

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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Manage Home Content</h3>
					<ol class="breadcrumb">
					<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
					<li><i class="icon_document_alt"></i>Forms</li>
					<li><i class="fa fa-files-o"></i>Manage Home Content</li>
					</ol>
				</div>
			</div>
			<?php
			include_once('db.php'); 
			  ?>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Our Directions
                          </header>
			  <?php
			  $id=$_REQUEST['id'];
			  $q="select * from home_content where id=$id";
			 $ar=ExecuteQueryResule($q);
			 foreach($ar as $k)
			   { 
			   ?>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="post" action="" enctype= "multipart/form-data">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2"><span></span></label>
                                          <div class="col-sm-4">
                                              <img src="img/<?php echo $k['image']; ?>" height="200px" width="200px"> 
                                          </div>
                                      </div> 
					  <input  id="" name="file" type="file" /><br> 
					   <input type="submit" class="btn btn-primary" name="s1" value="update" > 
                                      </div> <br>
                                          <div class="col-sm-4">
                                              <input type="text" name="button" class="form-control" value="<?php echo $k['button']; ?>">
                                          </div> 
					   <input type="submit" class="btn btn-primary" name="s7" value="update" >
					  </form> 
                                      </div> 
				</form> 
                              </div> 
			 <?php 
			} 
			?> 
                          </div> 
			  <div class="row">
                  <div class="col-lg-4">
                      <section class="panel"> 
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
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
