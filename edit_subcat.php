<?php 
include_once('db.php');
session_start();
if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
} 

if(isset($_POST['add']))
{
$id= $_REQUEST['sub_id'];	
$cat_id= addslashes($_POST['cat_id']); 


$sub_catName=addslashes($_POST['sub_catName']);

$q1="update subcategory set cat_id='$cat_id', sub_catName='$sub_catName',  where sub_id='$id'";
ExecuteQuery($q1); 
}
if(isset($_POST['op']))
{
	$id=$_REQUEST['id'];
	$q1="delete from subcategory where sub_id=$id";
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
             $id=$_REQUEST['sub_id'];			
			 $q="select * from subcategory where sub_id=$id";
			 $ar=ExecuteQueryResule($q);
			 foreach($ar as $ks)
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
											  
												  
												  
                                              <form class="form-horizontal" role="form" method="post" > 
                                                  
												   <div class="form-group">
                                                      <label class="col-lg-2 control-label" >Category</label>
                                                      <div class="col-lg-6">
                                                           <select class="form-control" name="cat_id" required>
								<option value=""<?php if($cat_id=='') echo 'selected';?>>Select Cetegory</option>
								<?php 
									$q="select * from category ";
									$ar=ExecuteQueryResule($q);
									 foreach($ar as $ak)
									 { 
									 	$cat_id=$ak['cat_id'];
										$cat_name=$ak['cat_name'];
								    ?>
							
								<option value="<?php echo $cat_id;?>" <?php if($cat_id==$k['cat_id']){ echo  'selected'; }?>><?php echo $cat_name ?></option>
								
								  <?php }?>
								 </select>
                                                      </div>
                                                  </div> 
                                                  
                                                 <div class="form-group">
                                                      <label class="col-lg-2 control-label">Product Name</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control"  name="sub_catName" placeholder="Product Name " value="<?php echo $ks['sub_catName'] ?>">
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
