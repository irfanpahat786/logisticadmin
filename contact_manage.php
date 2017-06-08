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
					<h3 class="page-header"><i class="fa fa-files-o"></i>Manage Contact Page</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="icon_document_alt"></i>Forms</li>
						<li><i class="fa fa-files-o"></i>Manage Contact Page</li>
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
			 $q1="update contact_page set main_image='$fn' where id=1";
			 ExecuteQuery($q1);
			}
			 if(isset($_POST['s1']))
			{ 
			 $text=$_POST['text'];
			 $text1=$_POST['text1'];
			 $head=$_POST['head'];
			 $head1=$_POST['head1'];
			 $head2=$_POST['head2'];
			 $address=$_POST['address'];
			 $contact1=$_POST['contact1'];
			 $contact2=$_POST['contact2'];
			 $email=$_POST['email'];
			 $url=$_POST['url'];
			 $q1="update contact_page set text='$text', text1='$text1',head='$head', head1='$head1',head3='$head2', address='$address', contact1='$contact1', contact2='$contact2', email='$email', url='$url' where id=1";
			 ExecuteQuery($q1);
			}
			 if(isset($_POST['s3']))
			{ 
			 $s_su=$_POST['s_su']; 
			 $s_tu=$_POST['s_tu'];
			 $s_we=$_POST['s_we'];
			 $s_th=$_POST['s_th'];
			 $s_fr=$_POST['s_fr'];
			 $s_sa=$_POST['e_sa'];
			 $e_su=$_POST['e_su']; 
			 $e_tu=$_POST['e_tu'];
			 $e_we=$_POST['e_we'];
			 $e_th=$_POST['e_th'];
			 $e_fr=$_POST['e_fr'];
			 $e_sa=$_POST['e_sa'];
			 $q1="update time set s_sunday='$s_su',s_tuesday='$s_tu', s_wednesday='$s_we',s_thursday='$s_th', s_friday='$s_fr', s_saturday='$s_sa', e_su='$e_su', e_t='$e_tu', e_w='$e_we', e_th='$e_th', e_f='$e_fr', e_sa='$e_sa' where id=1";
			 ExecuteQuery($q1);
			} 
			  $q="select * from contact_page";
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
                                          <label for="cname" class="control-label col-lg-2">Text1 <span></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="facebook" name="text"  type="text" value="<?php echo $k['text']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Text2 <span ></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="twiter" type="text" name="text1"  value="<?php echo $k['text1']; ?>"   />
                                          </div>
                                      </div> 
									   <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Heading 1 <span></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="facebook" name="head"  type="text" value="<?php echo $k['head']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Heading 2<span ></span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="twiter" type="text" name="head1"  value="<?php echo $k['head1']; ?>"   />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Heading 3</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="head2"  value="<?php echo $k['head3']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Address</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="address"  value="<?php echo $k['address']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Contact 1</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="contact1"  value="<?php echo $k['contact1']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Contact 2</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="contact2"  value="<?php echo $k['contact2']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Email</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="email"  value="<?php echo $k['email']; ?>"  />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Url</label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="curl" type="text" name="url"  value="<?php echo $k['url']; ?>"  />
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
                           <img src="img/<?php echo $k['m_image'];?>" height="100px" width="200px"><br>
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
								  <header class="panel-heading">
                              Change Time 
                          </header>
						  <br> 
						  <?php
                 $q="select * from time";
				 $ar=ExecuteQueryResule($q);						  
						  ?>
						  <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="post" action="" >
								  <div class="form-group "> 
								  <label for="cname" class="control-label col-lg-2"><span></span></label>
                                          <div class="col-lg-5">
                                              <label for="cname" class="control-label col-lg-2">Start Time<span></span></label>
                                          </div>
										  <div class="col-lg-5">
                                              <label for="cname" class="control-label col-lg-2">End Time <span></span></label>
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Sunday <span></span></label>
                                          <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="s_su"  type="text" value="<?php echo $ar[0]['s_sunday']; ?>" />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_su"  type="text" value="<?php echo $ar[0]['e_su']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Monday<span ></span></label>
                                          <div class="col-lg-5">
                                              <input class="form-control " id="twiter" type="text" name="s_mo"  value="<?php echo $ar[0]['s_monday']; ?>Closed"   />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_mo"  type="text" value="<?php echo $ar[0]['e_m']; ?>Closed" />
                                          </div>
                                      </div> 
									   <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Tuesday<span></span></label>
                                          <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="s_tu"  type="text" value="<?php echo $ar[0]['s_tuesday']; ?>" />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_tu"  type="text" value="<?php echo $ar[0]['e_t']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Wednesday<span ></span></label>
                                          <div class="col-lg-5">
                                              <input class="form-control " id="twiter" type="text" name="s_we"  value="<?php echo $ar[0]['s_wednesday']; ?>"   />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_we"  type="text" value="<?php echo $ar[0]['e_w']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Thursday</label>
                                          <div class="col-lg-5">
                                              <input class="form-control " id="curl" type="text" name="s_th"  value="<?php echo $ar[0]['s_thursday']; ?>"  />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_th"  type="text" value="<?php echo $ar[0]['e_th']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Friday</label>
                                          <div class="col-lg-5">
                                              <input class="form-control " id="curl" type="text" name="s_fr"  value="<?php echo $ar[0]['s_friday']; ?>"  />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_fr"  type="text" value="<?php echo $ar[0]['e_f']; ?>" />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="curl" class="control-label col-lg-2">Saturday</label>
                                          <div class="col-lg-5">
                                              <input class="form-control " id="curl" type="text" name="s_sa"  value="<?php echo $ar[0]['s_saturday']; ?>"  />
                                          </div>
										  <div class="col-lg-5">
                                              <input class="form-control" id="facebook" name="e_sa"  type="text" value="<?php echo $ar[0]['e_sa']; ?>" />
                                          </div>
                                      </div> 
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input type="submit" class="btn btn-primary" name="s3" value="update" > 
                                          </div>
                                      </div> 
                                      </div>
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
