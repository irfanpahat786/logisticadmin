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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Manage Header</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Manage Header</li>
					</ol>
				</div>
			</div>
			<?php
			include_once('db.php'); 
			 
			 if(isset($_POST['s1']))
			{ 
		     $id=$_REQUEST['id'];
			 $head=$_POST['head'];
			 $text1=$_POST['text1'];
			 $text2=$_POST['text2'];
			 $text3=$_POST['text3'];
			 $text4=$_POST['text4'];
			 $text5=$_POST['text5'];
			 $text6=$_POST['text6'];
			 $text7=$_POST['text7'];
			 $text8=$_POST['text8'];
			 $text9=$_POST['text9'];
			 $q1="update courses set heading='$head', text1='$text1',text2='$text2', text3='$text3',text4='$text4', text5='$text5',text6='$text6',text7='$text7',text9='$text8',text10='$text9' where id=$id";
			 ExecuteQuery($q1);
			} 
			  $id=$_REQUEST['id'];
			  $q="select * from courses where id=$id";
				 $ar=ExecuteQueryResule($q);
				 foreach($ar as $k)
				 { 
			?>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Manage Social Link
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
                                          <label for="cemail" class="control-label col-lg-2">Text1<span ></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="twiter" type="text" name="text1"  value="<?php echo $k['text1']; ?>"   />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text2</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text2"  value="<?php echo $k['text2']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text3</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text3"  value="<?php echo $k['text3']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text4</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text4"  value="<?php echo $k['text4']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text5</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text5"  value="<?php echo $k['text5']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text6</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text6"  value="<?php echo $k['text6']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text7</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text7"  value="<?php echo $k['text7']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text8</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text8"  value="<?php echo $k['text9']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Text7</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="text9"  value="<?php echo $k['text10']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2"></label>
                                          <div class="col-lg-10">
                                              <input type="submit" class="btn btn-primary" name="s1" value="Update" > 
                                          </div>
                                      </div>
</form>									  
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
