<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
ob_start();
?> 

<?php
include('db.php');
$rsql ="select id from room";
$rre=mysqli_query($con,$rsql);

?>
							 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
    <div id="wrapper">
	<?php

require_once('header.php');
?>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Estado de mesa</a>
                    </li>
					<li>
                        <a   href="table.php"><i class="fa fa-plus-circle"></i>Agregar mesa</a>
                    </li>
                    <li>
                        <a  class="active-menu" href="tabledel.php"><i class="fa fa-pencil-square-o"></i> Eliminar mesa
</a>
                    </li>
					

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
       
        
       
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                          	ELIMINAR MESA
 <small></small>
                        </h1>
                    </div>
                </div> 
                 
                                 
            <div class="row">
                
                <div class="col-md-12 col-sm-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                       Eliminar mesas

                        </div>
                        <div class="panel-body">
						<form name="form" method="post">
                            <div class="form-group">
                                            <label>Seleccione la ID de la mesa
 *</label>
                                            <select name="id"  class="form-control" required>
												<option value selected ></option>
												<?php
												while($rrow=mysqli_fetch_array($rre))
												{
												$value = $rrow['id'];
												 echo '<option value="'.$value.'">'.$value.'</option>';
												
												}
												?>
                                                
                                            </select>
                              </div>
							  
								
							 <input type="submit" name="del" value="Delete" class="btn btn-primary"> 
							</form>
							<?php
							 include('db.php');
							 
							 if(isset($_POST['del']))
							 {
								$did = $_POST['id'];
								
								
								$sql ="DELETE FROM `room` WHERE id = '$did'" ;
								if(mysqli_query($con,$sql))
								{
								 echo '<script type="text/javascript">alert("Delete the Room") </script>' ;
										
										header("Location: tabledel.php");
								}else {
									echo '<script>alert("Sorry ! Check The System") </script>' ;
								}
							 }
							
							?>
                        </div>
                        
                    </div>
                </div>
                
                  
           <?php
						include ('db.php');
						$sql = "select * from room";
						$re = mysqli_query($con,$sql)
				?>
                <div class="row">
				
				
				<?php
										while($row= mysqli_fetch_array($re))
										{
												$id = $row['type'];
											if($id == "PRIMERA PLANTA") 
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-blue'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-blue'>
															".$row['type']."

														</div>
													</div>
												</div>";
											}
											else if ($id == "SEGUNDA PLANTA")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-green'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-green'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="TERRAZA")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-brown'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-brown'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
											else if($id =="BALCON")
											{
												echo"<div class='col-md-3 col-sm-12 col-xs-12'>
													<div class='panel panel-primary text-center no-boder bg-color-red'>
														<div class='panel-body'>
															<i class='fa fa-users fa-5x'></i>
															<h3>".$row['bedding']."</h3>
														</div>
														<div class='panel-footer back-footer-red'>
															".$row['type']."

														</div>
													</div>
												</div>";
											
											}
										}
									?>
                    
                </div>
            <?php
				
			ob_end_flush();
			?>
                    
            
				
					</div>
			 <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>

		<?php

require_once('footer.php');
?>
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
