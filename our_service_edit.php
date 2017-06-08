<?php
include_once('db.php'); 
if(isset($_POST['s4']))
{
$id=$_REQUEST['id'];
$text=$_REQUEST['text'];
$head=$_REQUEST['heading']; 			 
$q1="update our_service_image set text='$text',heading='$head' where id=$id";
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
			 
						  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Our Services:
                          </header>
						  <?php
						  $id=$_REQUEST['id'];
						  $q="select * from our_service_image where id=$id";
				 $ar=ExecuteQueryResule($q);
				 foreach($ar as $k)
				 { 
			?>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="post" action="" enctype= "multipart/form-data" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2"><span></span></label> 
										  <div class="col-sm-5">
                                              <textarea cols="40px" rows="5px" class="form-control" name="text"><?php echo $k['text']; ?></textarea> 
                                          </div>
										  <div class="col-sm-5" >
                                              <input type="text" name="heading" class="form-control" value="<?php echo $k['heading']; ?>"><br>
                                              <input type="submit" class="btn btn-primary" name="s4" value="Update Text OR Heading" > 
                                          </div>
                                      </div> 
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
