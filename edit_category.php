<?php 
include_once('config.php');

if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
} 
if(isset($_GET["cat_id"]) && is_numeric(trim($_GET["cat_id"])))
{

	$slqQuery="SELECT * FROM category  WHERE cat_id='".trim($_GET["cat_id"])."' ";
		$sqlRes=mysql_query($slqQuery);
			while($sqlRow=mysql_fetch_array($sqlRes))
			{
				$cat_name=$sqlRow["cat_name"];
				
				$cat_id=$sqlRow["cat_id"];
                
			}

}
if(isset($_POST['add']))
{

	$cat_id=trim($_POST['textGetId']);
	$cat_name=addslashes(trim($_POST['cat_name']));
	//$cat_id=addslashes(trim($_POST['cat_id']));
	
	$q1=mysql_query("UPDATE category SET cat_name='$cat_name' WHERE cat_id='$cat_id' ");
	header('location:category_list.php');

}

/*if(isset($_POST['op']))
{
	$id=$_REQUEST['cat_id'];
	$q1="DELETE FROM product WHERE cat_id=$id";
    ExecuteQuery($q1);
}*/
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
       <?php include_once('include/header.php') ?>
      <!--header end-->

      <!--sidebar start-->
       <?php  include_once('include/sidebar.php') ?>
      <!--sidebar end-->
      
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-user-md"></i> Profile</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
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
                                                      <label class="col-lg-2 control-label">Category</label>
                                                      <div class="col-lg-6">
                                                          <input type="text" class="form-control" id="mobile" placeholder="Category " name="cat_name" value="<?php echo $cat_name; ?>">
                                                      </div>
                                                  </div>
                                                  
                                                  <div class="form-group">
                                                      <div class="col-lg-offset-2 col-lg-10">
                                                          <button type="submit" class="btn btn-primary" name="add">Update</button>
                                                          <input type="hidden" name="textGetId" value="<?php echo trim($_GET["cat_id"]);?>" /> 
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
