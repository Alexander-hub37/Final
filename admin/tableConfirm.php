<?php  
session_start();  
if(!isset($_SESSION["user"]))
{
 header("location:index.php");
}
?> 

<?php
		if(!isset($_GET["rid"]))
		{
				
			 header("location:index.php");
		}
		else {
				$curdate=date("Y/m/d");
				include ('db.php');
				$id = $_GET['rid'];
				
				
				$sql ="Select * from roombook where id = '$id'";
				$re = mysqli_query($con,$sql);
				while($row=mysqli_fetch_array($re))
				{
					
					$fname = $row['FName'];
					$lname = $row['LName'];
					$email = $row['Email'];
					
					$country = $row['Country'];
					$Phone = $row['Phone'];
					$troom = $row['TRoom'];
					$nroom = $row['NRoom'];
					$bed = $row['Bed'];
					$non = $row['NRoom'];
					$meal = $row['Meal'];
					$cin = $row['cin'];
					$sta = $row['stat'];
					
				
				
				}
					
					
				
		
	}
		
		
		
			?> 

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">



<body>
    <div id="wrapper">
	<?php
    require_once('header.php')
	?>
        
        
        <!-- /. NAV SIDE  -->
		
		
		

        <div id="page-wrapper">
            <div id="page-inner">


                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Reserva de Mesa<small>	<?php echo  $curdate; ?> </small>
                        </h1>
                    </div>
					
					
					<div class="col-md-8 col-sm-8">
                    <div class="panel panel-info">
                        <div class="panel-heading">
Confirmación de reserva
                        </div>
                        <div class="panel-body">
							
							<div class="table-responsive">
                                <table class="table">
                                    <tr>
                                            <th>DESCRIPCION</th>
                                            <th>INFORMACION</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>nombre</th>
                                            <th><?php echo $fname." ".$lname; ?> </th>
                                            
                                        </tr>
										<tr>
                                            <th>Email</th>
                                            <th><?php echo $email; ?> </th>
                                            
                                        </tr>										
										<tr>
                                            <th>Pais </th>
                                            <th><?php echo $country;  ?></th>
                                            
                                        </tr>
										<tr>
                                            <th> No Telefono</th>
                                            <th><?php echo $Phone; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Seccion</th>
                                            <th><?php echo $troom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Nro Personas</th>
                                            <th><?php echo $nroom; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Comida</th>
                                            <th><?php echo $meal; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Mesa </th>
                                            <th><?php echo $bed; ?></th>
                                            
                                        </tr>
										<tr>
                                            <th>Fecha de entrada</th>
                                            <th><?php echo $cin; ?></th>
                                            
                                        </tr>										
										
										<tr>
                                            <th>Nivel de estado</th>
                                            <th><?php echo $sta; ?></th>
                                            
                                        </tr>
                                   
                                  
                                        
                                        
                                    
                                </table>
                            </div>
                        
					
							
                        </div>
                        <div class="panel-footer">
                            <form method="post">
										<div class="form-group">
														<label>Seleccione la Confirmación</label>
														<select name="conf"class="form-control">
															<option value selected>	</option>
															<option value="Conform">Confirmar</option>
															
															
														</select>
										 </div>
							<input type="submit" name="co" value="Conform" class="btn btn-success">
							
							</form>
                        </div>
                    </div>
					</div>
					
					<?php
						$rsql ="select * from room";
						$rre= mysqli_query($con,$rsql);
						$r =0 ;
						$sc =0;
						$gh = 0;
						$sr = 0;
						$dr = 0;
						while($rrow=mysqli_fetch_array($rre))
						{
							$r = $r + 1;
							$s = $rrow['type'];
							$p = $rrow['place'];
							if($s=="PRIMERA PLANTA" )
							{
								$sc = $sc+ 1;
							}
							
							if($s=="TERRAZA")
							{
								$gh = $gh + 1;
							}
							if($s=="BALCON" )
							{
								$sr = $sr + 1;
							}
							if($s=="SEGUNDA PLANTA" )
							{
								$dr = $dr + 1;
							}
							
						
						}
						?>
						
						<?php
						$csql ="select * from payment";
						$cre= mysqli_query($con,$csql);
						$cr =0 ;
						$csc =0;
						$cgh = 0;
						$csr = 0;
						$cdr = 0;
						while($crow=mysqli_fetch_array($cre))
						{
							$cr = $cr + 1;
							$cs = $crow['troom'];
							
							if($cs=="PRIMERA PLANTA"  )
							{
								$csc = $csc + 1;
							}
							
							if($cs=="TERRAZA" )
							{
								$cgh = $cgh + 1;
							}
							if($cs=="BALCON" )
							{
								$csr = $csr + 1;
							}
							if($cs=="SEGUNDA PLANTA" )
							{
								$cdr = $cdr + 1;
							}
							
						
						}
				
					?>
					<div class="col-md-4 col-sm-4">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                   Detalles de mesas disponibles

                        </div>
                        <div class="panel-body">
						<table width="200px">
							
							<tr>
								<td><b>PRIMERA PLANTA	 </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php  
									$f1 =$sc - $csc;
									if($f1 <=0 )
									{	$f1 = "NO";
										echo $f1;
									}
									else{
											echo $f1;
									}
								
								
								?> </button></td> 
							</tr>
							<tr>
								<td><b>TERRAZA</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								$f2 =  $gh -$cgh;
								if($f2 <=0 )
									{	$f2 = "NO";
										echo $f2;
									}
									else{
											echo $f2;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>BALCON </b></td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php
								$f3 =$sr - $csr;
								if($f3 <=0 )
									{	$f3 = "NO";
										echo $f3;
									}
									else{
											echo $f3;
									}

								?> </button></td> 
							</tr>
							<tr>
								<td><b>SEGUNDA PLANTA</b>	 </td>
								<td><button type="button" class="btn btn-primary btn-circle"><?php 
								
								$f4 =$dr - $cdr; 
								if($f4 <=0 )
									{	$f4 = "NO";
										echo $f4;
									}
									else{
											echo $f4;
									}
								?> </button></td> 
							</tr>
							<tr>
								<td><b>Total de mesas</b> </td>
								<td> <button type="button" class="btn btn-danger btn-circle"><?php 
								
								$f5 =$r-$cr; 
								if($f5 <=0 )
									{	$f5 = "NO";
										echo $f5;
									}
									else{
											echo $f5;
									}
								 ?> </button></td> 
							</tr>
						</table>
						
						
						
                        
						
						</div>
                        <div class="panel-footer">
                            
                        </div>
                    </div>
					</div>
                </div>
                <!-- /. ROW  -->
				
                </div>
                <!-- /. ROW  -->
				
				
				
				
         </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>


</body>

</html>

<?php
						if(isset($_POST['co']))
						{	
							$st = $_POST['conf'];
							
							 
							
							if($st=="Conform")
							{
									$urb = "UPDATE `roombook` SET `stat`='$st' WHERE id = '$id'";
									
								if($f1=="NO" )
								{
									echo "<script type='text/javascript'> alert('Sorry! Not Available Superior Room ')</script>";
								}
								else if($f2 =="NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Guest House')</script>";
										
									}
									else if ($f3 == "NO")
									{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Single Room')</script>";
									}
										else if($f4=="NO")
										{
										echo "<script type='text/javascript'> alert('Sorry! Not Available Deluxe Room')</script>";
										}
										
										else if( mysqli_query($con,$urb))
											{	
												//echo "<script type='text/javascript'> alert('Guest Room booking is conform')</script>";
												//echo "<script type='text/javascript'> window.location='home.php'</script>";
												 $type_of_room = 0;       
														if($troom=="PRIMERA PLANTA")
														{
															$type_of_room = 320;
														
														}
														else if($troom=="SEGUNDA PLANTA")
														{
															$type_of_room = 220;
														}
														else if($troom=="TERRAZA")
														{
															$type_of_room = 180;
														}
														else if($troom=="BALCON")
														{
															$type_of_room = 150;
														}
														
														
														
														
														if($bed=="MESA REDONDA")
														{
															$type_of_bed = $type_of_room * 1/100;
														}
														else if($bed=="MESA CUADRADA")
														{
															$type_of_bed = $type_of_room * 2/100;
														}
														else if($bed=="MESA OVALADA")
														{
															$type_of_bed = $type_of_room * 3/100;
														}
														else if($bed=="MESA RECTANGULAR")
														{
															$type_of_bed = $type_of_room * 4/100;
														}
														
														
														
														if($meal=="Pizza Napolitana")
														{
															$type_of_meal=$type_of_bed * 1;
														}
														else if($meal=="Khachapuri")
														{
															$type_of_meal=$type_of_bed * 2;
														}else if($meal=="Ćevapi")
														{
															$type_of_meal=$type_of_bed * 3;
														
														}else if($meal=="Ceviche")
														{
															$type_of_meal=$type_of_bed * 4;
														}
														
														
														$ttot = $type_of_room ;
														$mepr = $type_of_meal * $nroom;
														$btot = $type_of_bed ;
														
														$fintot = $ttot + $mepr + $btot ;
															
															//echo "<script type='text/javascript'> alert('$count_date')</script>";
														$psql = "INSERT INTO `payment`(`id`, `fname`, `lname`, `troom`, `tbed`, `nroom`, `cin`, `ttot`,`meal`, `mepr`, `btot`,`fintot`,`noofdays`) VALUES ('$id','$fname','$lname','$troom','$bed','$nroom','$cin','$ttot','$meal','$mepr','$btot','$fintot','$days')";
														
														if(mysqli_query($con,$psql))
														{	$notfree="NotFree";
															$rpsql = "UPDATE `room` SET `place`='$notfree',`cusid`='$id' where bedding ='$bed' and type='$troom' ";
															if(mysqli_query($con,$rpsql))
															{
															echo "<script type='text/javascript'> alert('Booking Conform')</script>";
															echo "<script type='text/javascript'> window.location='tableConfirm.php'</script>";
															}
															
															
														}
												
											}
									
                                        
							}	
					
						}
					
									
									
							
						?>

<?php

require_once('footer.php');
?>