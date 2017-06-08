<?php
include_once('config.php');

if(!isset($_SESSION['name']))
{
	 header("Location:login.php"); 
}  
if(isset($_GET['del']))
{
	//$id=$_REQUEST['sub_id'];
	$q1="delete from state where id='".$_GET['del']."'";
    $result=mysql_query($q1);
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
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-table"></i>Table</li>
						<li><i class="fa fa-th-list"></i>Basic Table</li>
					</ol>
				</div>
			</div>
              <!-- page start--> 
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
					  <form method="post">
                          <header class="panel-heading">
                             <a class="btn btn-primary" href="add_state.php">Add State</a> 
                          </header> 
						  <label class="col-lg-2 control-label"></label>
						 
				<table class="table table-striped table-advance table-hover">
                                 
                                 <tr> 
                                       
                                       <td><i class=""></i>State Name</td>
                                       <td><i class=""></i>Action</td>
                               </tr>
                                          <?php
                                               $slqQuery="select * from state";
							 /*$ar=ExecuteQueryResule($q);
							 foreach($ar as $k)
							 { */
								$sqlRes=mysql_query($slqQuery);
				                                $sqlr=mysql_num_rows($sqlRes);
				                                if($sqlr>0)
				                                {
				                                    $sr=0;
									while($sqlRow=mysql_fetch_array($sqlRes))
									{
                                                            		
                                        					$name=$sqlRow['state'];
                                        					$id=$sqlRow['id'];
						     ?> 	  
			       <tr>
                                    
                                    
                                    <td><?php echo $name;?></td>
                                    <td>
                                     <div class="btn-group">
                                       <a class="btn btn-primary" href="edit_state.php?id=<?php echo $id; ?>">Edit</a>
                                       <a class="btn btn-danger" href="#" onclick="del(<?php echo $id;?>)">Delete</a>
                                    </div>
                                  </td>
                              </tr> 
                             <?php } }?>	  
                          </table>
                      </section>
                  </div>
              </div>
			  </form>
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
    <script>
      function del(id)
          { 
		if(confirm('Sure To Remove This Record ?'))
	        {
		         window.location.href='state_list.php?del='+id;
	        } 
          } 
      </script>
  </body>
</html>
