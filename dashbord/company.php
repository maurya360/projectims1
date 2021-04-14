<?php
session_start();
if(isset($_POST['edit'])){
	include 'include/db.php';
    $id = $_SESSION['id'];
    $company_name = isset($_POST['company_name']) ? $_POST['company_name'] : '';
    $charge_Amount = isset($_POST['service_charge_value']) ? $_POST['service_charge_value'] : '';
    $vat_charge = isset($_POST['vat_charge_value']) ? $_POST['vat_charge_value'] : '';
    $address = isset($_POST['address']) ? $_POST['address'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $country = isset($_POST['country']) ? $_POST['country'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';
	$currency = isset($_POST['currency']) ? $_POST['currency'] : '';
	

	$query="UPDATE company set company_name = '$company_name', company_amt_charge = '$charge_Amount', company_vat_charge = '$vat_charge', address = '$address', phone = '$phone',
     country = '$country', message = '$message', currency = '$currency'
     where id ='$id'";

	if ($conn->query($query) === TRUE) {
		//echo "update record created successfully";
		} else {
		echo "Error: " . $query . "<br>" . $conn->error;
		}
$conn->close();
$_SESSION['currentChat'] .= htmlentities($message);
}




?>

<!doctype html>
<html lang="en">
	<?php include 'partial/head.php'?>
<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<?php include 'partial/nav.php'?>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						
						<li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="adduser.php" class="">+ Add User</a></li>
									<li><a href="manageuser.php" class=""> Manage Users</a></li>	
								</ul>
							</div>
						</li>		

						<!-- <li>
							<a href="#gPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Groups</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="gPages" class="collapse ">
								<ul class="nav">
									<li><a href="" class="">+ Add Group</a></li>
									<li><a href="" class="">Manage Groups</a></li>	
								</ul>
							</div>
						</li> -->


						<li><a href="brand.php" class=""><i class="lnr lnr-tag"></i> <span>Brands</span></a></li>

						<li><a href="Category.php" class=""><i class="lnr lnr-file-empty"></i> <span>Category</span></a></li>

						<li><a href="Stores.php" class=""><i class="lnr lnr-store"></i> <span>Stores</span></a></li>

						<li><a href="attributes.php" class=""><i class="lnr lnr-file-empty"></i> <span>Attributes</span></a></li> 


						<li>
							<a href="#pPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="pPages" class="collapse ">
								<ul class="nav">
									<li><a href="addproduct.php" class="">+ Add Products</a></li>
									<li><a href="productmange.php" class="">Manage Products</a></li>	
								</ul>
							</div>
						</li>

						<li>
							<a href="#oPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Orders</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="oPages" class="collapse ">
								<ul class="nav">
									<li><a href="" class="">+ Add Orders</a></li>
									<li><a href="" class="">Manage Orders</a></li>	
								</ul>
							</div>
						</li>

						<li><a href="report.php" class=""><i class="lnr lnr-chart-bars"></i> <span>Reports</span></a></li>
						<li><a href="Company.php" class=""><i class="lnr lnr-linearicons"></i> <span>Company</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-heading">
							<h3 class="panel-title">Manage/Company</h3>
						</div>
					</div>
							 <!-- Main content -->
									<section class="content">
									<!-- Small boxes (Stat box) -->
									<div class="row">
										<div class="col-md-12 col-xs-12">
										
										
										<div class="box">
											<div class="box-header">
											<h3 class="box-title">Manage Company Information</h3>
											</div>
											<?php  
												include 'include/db.php';
												$id = $_SESSION['id'];
											//database show webpage
												$query = "SELECT * FROM company where id='$id'";
												$result = $conn->query($query);
												while($row = mysqli_fetch_array($result))
												{
												?>
													<form role="form" action="" method="POST">
													<div class="box-body">

												
												<div class="form-group">
												<label for="company_name">Company Name</label>
												<input type="text" class="form-control" id="company_name" name="company_name" placeholder="Enter company name" value="<?php echo $row['company_name'] ?>" autocomplete="off">
												</div>
												<div class="form-group">
												<label for="service_charge_value">Charge Amount (%)</label>
												<input type="text" class="form-control" id="service_charge_value" name="service_charge_value" placeholder="Enter charge amount %" value="<?php echo $row['company_amt_charge'] ?>" autocomplete="off">
												</div>
												<div class="form-group">
												<label for="vat_charge_value">Vat Charge (%)</label>
												<input type="text" class="form-control" id="vat_charge_value" name="vat_charge_value" placeholder="Enter vat charge %" value="<?php echo $row['company_vat_charge'] ?>" autocomplete="off">
												</div>
												<div class="form-group">
												<label for="address">Address</label>
												<input type="text" class="form-control" id="address" name="address" placeholder="Enter address" value="<?php echo $row['address'] ?>" autocomplete="off">
												</div>
												<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" value="<?php echo $row['phone'] ?>" autocomplete="off">
												</div>
												<div class="form-group">
												<label for="country">Country</label>
												<input type="text" class="form-control" id="country" name="country" placeholder="Enter country" value="<?php echo $row['country'] ?>" autocomplete="off">
												</div>
												
												<div class="form-group">
												<label for="Description">Message</label>
												<div class="col-md-12">
											   		<textarea name="message" id="summernote" ><?php echo $row['message'] ?></textarea>
												</div>
												</div>	
												
												</div>	
												</div>
												<div class="form-group">
												<label for="currency">Currency</label>
													<select class="form-control" id="currency" name="currency" value="<?php echo $row['currency'] ?>">
													<option value="">~~SELECT~~</option>

																		<option value="AED" >AED</option>
																		<option value="AFN" >AFN</option>
																		<option value="ALL" >ALL</option>
																		<option value="ANG" >ANG</option>
																		<option value="AOA" >AOA</option>
																		<option value="ARS" >ARS</option>
																		<option value="AUD" >AUD</option>
																		<option value="AWG" >AWG</option>
																		<option value="AZN" >AZN</option>
																		<option value="BAM" >BAM</option>
																		<option value="BBD" >BBD</option>
																		<option value="BDT" >BDT</option>
																		<option value="BGN" >BGN</option>
																		<option value="BHD" >BHD</option>
																		<option value="BIF" >BIF</option>
																		<option value="BMD" >BMD</option>
																		<option value="BND" >BND</option>
																		<option value="BOB" >BOB</option>
																		<option value="BRL" >BRL</option>
																		<option value="BSD" >BSD</option>
																		<option value="BTN" >BTN</option>
																		<option value="BWP" >BWP</option>
																		<option value="BYR" >BYR</option>
																		<option value="BZD" >BZD</option>
																		<option value="CAD" >CAD</option>
																		<option value="CDF" >CDF</option>
																		<option value="CHF" >CHF</option>
																		<option value="CLP" >CLP</option>
																		<option value="CNY" >CNY</option>
																		<option value="COP" >COP</option>
																		<option value="CRC" >CRC</option>
																		<option value="CUP" >CUP</option>
																		<option value="CVE" >CVE</option>
																		<option value="CZK" >CZK</option>
																		<option value="DJF" >DJF</option>
																		<option value="DKK" >DKK</option>
																		<option value="DOP" >DOP</option>
																		<option value="DZD" >DZD</option>
																		<option value="EGP" >EGP</option>
																		<option value="ETB" >ETB</option>
																		<option value="EUR" >EUR</option>
																		<option value="FJD" >FJD</option>
																		<option value="FKP" >FKP</option>
																		<option value="GBP" >GBP</option>
																		<option value="GEL" >GEL</option>
																		<option value="GHS" >GHS</option>
																		<option value="GIP" >GIP</option>
																		<option value="GMD" >GMD</option>
																		<option value="GNF" >GNF</option>
																		<option value="GTQ" >GTQ</option>
																		<option value="GYD" >GYD</option>
																		<option value="HKD" >HKD</option>
																		<option value="HNL" >HNL</option>
																		<option value="HRK" >HRK</option>
																		<option value="HTG" >HTG</option>
																		<option value="HUF" >HUF</option>
																		<option value="IDR" >IDR</option>
																		<option value="ILS" >ILS</option>
																		<option value="INR" selected >INR</option>
																		<option value="IQD" >IQD</option>
																		<option value="IRR" >IRR</option>
																		<option value="ISK" >ISK</option>
																		<option value="JEP" >JEP</option>
																		<option value="JMD" >JMD</option>
																		<option value="JOD" >JOD</option>
																		<option value="JPY" >JPY</option>
																		<option value="KES" >KES</option>
																		<option value="KGS" >KGS</option>
																		<option value="KHR" >KHR</option>
																		<option value="KMF" >KMF</option>
																		<option value="KPW" >KPW</option>
																		<option value="KRW" >KRW</option>
																		<option value="KWD" >KWD</option>
																		<option value="KYD" >KYD</option>
																		<option value="KZT" >KZT</option>
																		<option value="LAK" >LAK</option>
																		<option value="LBP" >LBP</option>
																		<option value="LKR" >LKR</option>
																		<option value="LRD" >LRD</option>
																		<option value="LSL" >LSL</option>
																		<option value="LTL" >LTL</option>
																		<option value="LVL" >LVL</option>
																		<option value="LYD" >LYD</option>
																		<option value="MAD" >MAD</option>
																		<option value="MDL" >MDL</option>
																		<option value="MGA" >MGA</option>
																		<option value="MKD" >MKD</option>
																		<option value="MMK" >MMK</option>
																		<option value="MNT" >MNT</option>
																		<option value="MOP" >MOP</option>
																		<option value="MRO" >MRO</option>
																		<option value="MUR" >MUR</option>
																		<option value="MVR" >MVR</option>
																		<option value="MWK" >MWK</option>
																		<option value="MXN" >MXN</option>
																		<option value="MYR" >MYR</option>
																		<option value="MZN" >MZN</option>
																		<option value="NAD" >NAD</option>
																		<option value="NGN" >NGN</option>
																		<option value="NIO" >NIO</option>
																		<option value="NOK" >NOK</option>
																		<option value="NPR" >NPR</option>
																		<option value="NZD" >NZD</option>
																		<option value="OMR" >OMR</option>
																		<option value="PAB" >PAB</option>
																		<option value="PEN" >PEN</option>
																		<option value="PGK" >PGK</option>
																		<option value="PHP" >PHP</option>
																		<option value="PKR" >PKR</option>
																		<option value="PLN" >PLN</option>
																		<option value="PYG" >PYG</option>
																		<option value="QAR" >QAR</option>
																		<option value="RON" >RON</option>
																		<option value="RSD" >RSD</option>
																		<option value="RUB" >RUB</option>
																		<option value="RWF" >RWF</option>
																		<option value="SAR" >SAR</option>
																		<option value="SBD" >SBD</option>
																		<option value="SCR" >SCR</option>
																		<option value="SDG" >SDG</option>
																		<option value="SEK" >SEK</option>
																		<option value="SGD" >SGD</option>
																		<option value="SHP" >SHP</option>
																		<option value="SLL" >SLL</option>
																		<option value="SOS" >SOS</option>
																		<option value="SRD" >SRD</option>
																		<option value="STD" >STD</option>
																		<option value="SVC" >SVC</option>
																		<option value="SYP" >SYP</option>
																		<option value="SZL" >SZL</option>
																		<option value="THB" >THB</option>
																		<option value="TJS" >TJS</option>
																		<option value="TMT" >TMT</option>
																		<option value="TND" >TND</option>
																		<option value="TOP" >TOP</option>
																		<option value="TRY" >TRY</option>
																		<option value="TTD" >TTD</option>
																		<option value="TWD" >TWD</option>
																		<option value="UAH" >UAH</option>
																		<option value="UGX" >UGX</option>
																		<option value="USD" >USD</option>
																		<option value="UYU" >UYU</option>
																		<option value="UZS" >UZS</option>
																		<option value="VEF" >VEF</option>
																		<option value="VND" >VND</option>
																		<option value="VUV" >VUV</option>
																		<option value="WST" >WST</option>
																		<option value="XAF" >XAF</option>
																		<option value="XCD" >XCD</option>
																		<option value="XPF" >XPF</option>
																		<option value="YER" >YER</option>
																		<option value="ZAR" >ZAR</option>
																		<option value="ZMK" >ZMK</option>
																		<option value="ZWL" >ZWL</option>
																	</select>
												</div>
												
											</div>
											<?php
                                            }
                                        ?>

											<!-- /.box-body -->

											<div class="box-footer">
												<button type="submit" name="edit" class="btn btn-primary">Save Changes</button>
											</div>
											</form>
										</div>
										<!-- /.box -->
										</div>
										<!-- col-md-12 -->
									</div>
									<!-- /.row -->
									

									</section>
									<!-- /.content -->


					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2021 <a href="" target="_blank">Abhishek Maurya</a>. Made by me</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	<!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script> -->
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	
	<script>
      $('#summernote').summernote({
        placeholder: 'Type here..',
        tabsize: 2,
        height: 120,
		width: 1025,
        toolbar: [
          ['style', ['style']],
          ['font', ['bold', 'underline', 'clear']],
          ['color', ['color']],
          ['para', ['ul', 'ol', 'paragraph']],
          ['table', ['table']],
          ['insert', ['link', 'picture', 'video']],
          ['view', ['fullscreen', 'codeview', 'help']]
        ]
      });
    </script>
    



</body>

</html>
