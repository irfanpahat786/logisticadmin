<?php
include_once('db.php');
if(isset($_POST['s2']))
			{ 
			 $url=$_POST['url'];
			 $name=$_POST['name'];
			 $degree=$_POST['degree'];
			 $stime=$_POST['stime'];
			 $etime=$_POST['etime']; 
			 $q1="insert into team(image,name,degree,stime,etime) values ('$url','$name','$degree','$stime','$etime') ";
			 ExecuteQuery($q1);
			} 
			
			 ?>
<!DOCTYPE html> 
<?php
$error="";
if(isset($_GET['op'])=="de")
                 { 
                 $id=$_GET['id']; 
                 $q="delete from team where id=$id";
                  if(ExecuteQuery($q))
				  {
					  $error= "Delete Item";
				  }
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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Manage Doctor Team</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Manage Doctor Team</li>
					</ol>
				</div>
			</div>
			<header class="panel-heading">
                              Manage Doctor Team
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" method="post" action="" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Url<span></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="facebook" name="url"  type="text" required placeholder="Fill Image Name"/>
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Name<span ></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="twiter" type="text" name="name"  required  placeholder="Fill Doctor Name" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Degree<span ></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="twiter" type="text" name="degree"  required   placeholder="Fill Degree"/>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Start Time</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="stime"  required placeholder="Fill Start Time" />
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">End Time</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="etime"  required placeholder="Fill End Time" />
                                          </div>
                                      </div>
									  <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2"></label>
                                          <div class="col-lg-10">
                                              <input type="submit" class="btn btn-primary" name="s2" value="Add Doctor" >  					
                                          </div>
                                      </div>
									  </form>
									  </div>
									  </div> 
              <!-- Form validations -->              
              <div class="row"> 
						  <?php
						  echo $error;
				$q="select * from team";
				 $ar=ExecuteQueryResule($q);
				 foreach($ar as $k)
				 { 
			?>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="post" action="" >
                                      <div class="form-group ">
                                          <label for="cname" class=""><span></span></label>
										  <div class="col-sm-2">
                                            <img src="img/<?php echo $k['image']; ?>" height="110px" width="110px"> 
                                          </div> 
										  <div class="col-sm-2" >
                                              <input type="text" name="heading" class="form-control" value="<?php echo $k['name']; ?>"> 
                                          </div>
										  <div class="col-sm-2" >
                                              <input type="text" name="heading" class="form-control" value="<?php echo $k['degree']; ?>"> 
                                          </div>
										  <div class="col-sm-2" >
                                              <input type="text" name="heading" class="form-control" value="<?php echo $k['stime']; ?>"> 
                                          </div>
										  <div class="col-sm-2" >
                                              <input type="text" name="heading" class="form-control" value="<?php echo $k['etime']; ?>"> 
                                          </div>
										  <div class="col-sm-2" > 
											  <a href="team_edit.php?id=<?php echo $k['id']; ?>"class="btn btn-primary">Edit</a>
                                              <a href="?op=de&id=<?php echo $k["id"]?>" class="btn btn-primary">Delete</a> 
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
                  </div> 
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
