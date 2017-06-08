<?php
include_once('db.php'); 
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

    <title>Basic Table | Creative - Bootstrap 3 Responsive Admin Template</title>

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

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-table"></i> Table</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Basic Table</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
               
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Responsive tables
                          </header>
                          <div class="table-responsive">
                            <table class="table">
                              <thead>
                                <tr> 
                                  <th>Heading</th>
                                  <th>Text1</th>
                                  <th>Text2</th>
                                  <th>Text3</th>
                                  <th>Text4</th>
                                  <th>Text6</th>
								  <th>Text7</th>
								  <th>Text8</th>
								  <th>Text9</th>
								  <th>Text10</th>
								  <th>Text11</th>
								  <th>Link1</th>
								  <th>Link2</th>
                                </tr>
                              </thead>
                              <tbody>
							  <?php
				$q="select * from courses";
				 $ar=ExecuteQueryResule($q);
				 foreach($ar as $k)
				 { 
				 ?>
                                <tr> 
                                  <td><?php echo $k['heading'] ?></td><td><?php echo $k['text1'] ?></td><td><?php echo $k['text2'] ?></td><td><?php echo $k['text3'] ?></td><td><?php echo $k['text4'] ?></td><td><?php echo $k['text5'] ?></td><td><?php echo $k['text6'] ?></td><td><?php echo $k['text7'] ?></td><td><?php echo $k['text9'] ?></td><td><?php echo $k['text10'] ?></td><td><?php echo $k['text11'] ?></td></td><td><a href="course_edit.php?id=<?php echo $k['id']; ?>" class="btn btn-primary">Edit</a><td><a href="?op=de&id=<?php echo $k["id"]?>" class="btn btn-primary">Delete</a></td></td> 
                                </tr> 
								<?php
				 }
								?>
                              </tbody>
                            </table>
                          </div>

                      </section>
                  </div>
              </div>
                               
                           </tbody>
                        </table>
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
    <!-- nicescroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
