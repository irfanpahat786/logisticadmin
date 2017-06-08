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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Manage About Page</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Manage About Page</li>
					</ol>
				</div>
			</div>
			<?php
			include_once('db.php'); 
			if(isset($_POST['s2']))
			{
			 $fn=$_FILES['file']['name'];
	         $tmn=$_FILES['file']['tmp_name'];
			 move_uploaded_file($tmn, "img/".$fn);
			 $q1="update abou set image='$fn' where id=1";
			 ExecuteQuery($q1);
			}
			 if(isset($_POST['s1']))
			{ 
			 $text=$_POST['head'];
			 $text1=$_POST['text1'];
		     $text2=$_POST['text2'];
			 $text3=$_POST['text3'];			 
			 $q1="update abou set heading='$text', para1='$text1',para2='$text2', para3='$text3' where id=1";
			 ExecuteQuery($q1);
			}
			  
			  $q="select * from abou";
				 $ar=ExecuteQueryResule($q);
				 foreach($ar as $k)
				 { 
			?>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Manage Main Text And Heading
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="post" action="" >
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Heading<span></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="facebook" name="head"  type="text" value="<?php echo $k['heading']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Paragraph1<span ></span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " name="text1" rows="3px" cols="5px"><?php echo $k['para1']; ?></textarea>
                                          </div>
                                      </div> 
									   <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Paragraph2<span></span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " name="text2" rows="3px" cols="5px"><?php echo $k['para2']; ?></textarea>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Paragraph3<span ></span></label>
                                          <div class="col-lg-10">
                                              <textarea class="form-control " name="text3" rows="3px" cols="5px"><?php echo $k['para3']; ?></textarea>
                                          </div>
                                      </div> 			  
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" class="btn btn-primary" name="s1" value="update" > 
                                          </div>
                                      </div> 
									  </form>
									  </br>
								  <header class="panel-heading">
                              Change Main Image 
                          </header>
						  <br> 
						  <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                           <img src="img/<?php echo $k['image'];?>" height="100px" width="200px"><br>
						   </div>
                                      </div>
                            <div class="form"> 
				             <form class="form-validate form-horizontal" id="" method="post" action="" enctype= "multipart/form-data">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Choose File<span></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="" name="file" type="file" /><br>
                                          </div>
                                      </div>  						  
						           </div> 
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" class="btn btn-primary" name="s2" value="update" ></br>
                                          </div>
                                      </div> 
                                      </div>
									  </form> 
									   </br>
								   
									  </form> 
                              </div> 
                          </div>
                      </section>
                  </div>
              </div> 
			  <div class="row">
                  <div class="col-lg-12">
                      <section class="panel"> 
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
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>
