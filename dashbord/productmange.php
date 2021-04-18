<!-- del product -->
<?php

if(isset($_POST['del'])){
	
	include 'include/db.php';
	
	$id = isset($_POST['id']) ? $_POST['id'] : '';
	
	$sql = "DELETE FROM addproduct WHERE id = '$id'";
	//use for MySQLi OOP
	if ($conn->query($sql) === TRUE) {
		//echo "deltete record successfully";
		} 
		else {
		echo "Error: " . $sql . "<br>" . $conn->error;
		}
$conn->close();
	
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

						


						<li><a href="brand.php" class=""><i class="lnr lnr-tag"></i> <span>Brands</span></a></li>

						<li><a href="category.php" class=""><i class="lnr lnr-file-empty"></i> <span>Category</span></a></li>

						<li><a href="stores.php" class=""><i class="lnr lnr-store"></i> <span>Stores</span></a></li>

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
									<li><a href="order.php" class="">+ Add Orders</a></li>
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
							<h3 class="panel-title">Manage product</h3>
						</div>
					</div>
							<!-- Main content -->
									<section class="content">
										<!-- Small boxes (Stat box) -->
										<div class="row">
										<div class="col-md-12 col-xs-12">

											<div id="messages"></div>

											
													<a href="addproduct.php" class="btn btn-primary">Add Product</a>
											<br /> <br />
											
											<div class="box">
											<div class="box-header">
												<h3 class="box-title">Manage Products</h3>
											</div>
											<!-- /.box-header -->
											<div class="box-body">
												<table id="manageTable" class="table table-bordered table-striped">
												<thead>
												<tr>
													<th><b>Image</th>
													<th><b>SKU</th>
													<th><b>Product Name</th>
													<th><b>Price</th>
													<th><b>Qty</th>
													<th><b>Store</th>
													<th><b>Availability</th>
																	<th><b>Action</th>
												</tr>
												</thead>
												<tbody>
												<?php
											include 'include/db.php';
											//database show webpage
											$query = "SELECT * FROM addproduct";
											$result = $conn->query($query);
												while($row = $result->fetch_assoc())
												{
													echo
													"<tr>
														
														<th>" .$row['product_image']."</th>
														<th>". $row['sku']."</th>
														<th>". $row['product_name']."</th>
														<th>". $row['price']."</th>
														<th>". $row['qty']."</th>
														<th>". $row['store']."</th>
														<th>". $row['availability']."</th>
															<td>
															<a href='/' data-toggle='modal' data-target='#exampleModal2".$row['id']."' id='". $row['id'] . "'  class='btn btn-danger'>DELETE</a>
															</td>
													</tr>";
													include('product_del_modal.php');
													
													
												}
										?>
																	
												</tbody>

												</table>
											</div>
											<!-- /.box-body -->
											</div>
											<!-- /.box -->
										</div>
										<!-- col-md-12 -->
										</div>
										<!-- /.row -->
										

									</section>
									<!-- /.content -->
									</div>
									<!-- /.content-wrapper -->

								

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

</body>

</html>
