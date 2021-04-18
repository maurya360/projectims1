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
									<li><a href="" class="">+ Add User</a></li>
									<li><a href="" class=""> Manage Users</a></li>	
								</ul>
							</div>
						</li>		

						<li>
							<a href="#gPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Groups</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="gPages" class="collapse ">
								<ul class="nav">
									<li><a href="" class="">+ Add Group</a></li>
									<li><a href="" class="">Manage Groups</a></li>	
								</ul>
							</div>
						</li>


						<li><a href="brand.php" class=""><i class="lnr lnr-tag"></i> <span>Brands</span></a></li>

						<li><a href="Category.php" class=""><i class="lnr lnr-file-empty"></i> <span>Category</span></a></li>

						<li><a href="Stores.php" class=""><i class="lnr lnr-store"></i> <span>Stores</span></a></li>

						<li><a href="attributes.php" class=""><i class="lnr lnr-file-empty"></i> <span>Attributes</span></a></li> 


						<li>
							<a href="#pPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="pPages" class="collapse ">
								<ul class="nav">
									<li><a href="" class="">+ Add Products</a></li>
									<li><a href="" class="">Manage Products</a></li>	
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
							<h3 class="panel-title">Order/Manage</h3>
						</div>
					</div>
					<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Manage
      <small>Orders</small>
    </h1>
    
  </section>

									<!-- Main content -->
									<section class="content">
										<!-- Small boxes (Stat box) -->
										<div class="row">
										<div class="col-md-12 col-xs-12">

											<div id="messages"></div>

											
													<a href="order.php" class="btn btn-primary">Add Order</a>
											<br /> <br />
											
											<div class="box">
											<div class="box-header">
												<h3 class="box-title">Manage Orders</h3>
											</div>
											<!-- /.box-header -->
											<div class="box-body">
												<table id="manageTable" class="table table-bordered table-striped">
												<thead>
												<tr>
													<th>Bill no</th>
													<th>Customer Name</th>
													<th>Customer Phone</th>
													<th>Date Time</th>
													<th>Total Products</th>
													<th>Total Amount</th>
													<th>Paid status</th>
																	<th>Action</th>
																</tr>
												</thead>
												<tbody>
													<?php
													include 'include/db.php';
													//database show webpage
														$query = "SELECT * FROM orders";
														$result = $conn->query($query);
															while($row = $result->fetch_assoc())
															{
																
																echo
																"<tr>
																	
																	<th>" .$row['bill_no']."</th>
																	<th>". $row['customer_name']."</th>
																	<th>". $row['customer_phone']."</th>
																	
																	<th>". $row['date_time']."</th>
																	<th>". $row['date_time']."</th>
																	<th>". $row['paid_status']."</th>
																		<td>
																		
																		 <a href='#' class='btn btn-success btn-lg' <span class='glyphicon glyphicon-print'></span> Print</a>
																		<a  data-toggle='modal' data-target='#exampleModal1_".$row['id']."' id=".$row['id']." class='btn btn-primary'>EDIT</a>
																		<a  data-toggle='modal' data-target='#exampleModal2_".$row['id']."' id=".$row['id']." class='btn btn-danger'>DELETE</a>
																		</td>
																</tr>";
																
																
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

									<!-- remove brand modal -->
									<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											<h4 class="modal-title">Remove Order</h4>
										</div>

										<form role="form" action="" method="post" id="removeForm">
											<div class="modal-body">
											<p>Do you really want to remove?</p>
											</div>
											<div class="modal-footer">
											<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											<button type="submit" class="btn btn-primary">Save changes</button>
											</div>
										</form>


										</div><!-- /.modal-content -->
									</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->      
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

