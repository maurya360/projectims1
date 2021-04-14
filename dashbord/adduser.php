<!-- insert brand -->
<?php
	if(isset($_POST['submit'])){
		include 'include/db.php';
		
		$username = (!empty($_POST['username'])) ? $_POST['username']: '';
		$email = (!empty($_POST['email'])) ? $_POST['email']: '';
		$password = (!empty($_POST['password'])) ? $_POST['password']: '';
		$cpassword = (!empty($_POST['cpassword'])) ? $_POST['cpassword']: '';
		$fname = (!empty($_POST['fname'])) ? $_POST['fname']: '';
		$lname = (!empty($_POST['lname'])) ? $_POST['lname']: '';
		$phone = (!empty($_POST['phone'])) ? $_POST['phone']: '';
		$gender = (!empty($_POST['gender'])) ? $_POST['gender']: '';
        
		$sql = "INSERT INTO user (username, email, pass, cpassword, fname, lname, phone, gender)
		VALUES ('$username', '$email', '$password', '$cpassword', '$fname', '$lname', '$phone','$gender')";

		if ($conn->query($sql) === TRUE) {
		//echo "New record created successfully";
		} else {
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
							<h3 class="panel-title">Add User</h3>
						</div>
						</div>
									<!-- Main content -->
									<section class="content">
									<!-- Small boxes (Stat box) -->
									<div class="row">
										<div class="col-md-12 col-xs-12">
											<div class="box">
											<div class="box-header">
											<h3 class="box-title">Add User</h3>
											</div>
												<form role="form" action="" method="POST">
												<div class="box-body">
												<div class="form-group">
												<label for="username">Username</label>
												<input type="text" class="form-control" id="username" name="username" placeholder="Username" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="email">Email</label>
												<input type="email" class="form-control" id="email" name="email" placeholder="Email" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="password">Password</label>
												<input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="cpassword">Confirm password</label>
												<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="fname">First name</label>
												<input type="text" class="form-control" id="fname" name="fname" placeholder="First name" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="lname">Last name</label>
												<input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="phone">Phone</label>
												<input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" autocomplete="off" required>
												</div>

												<div class="form-group">
												<label for="gender">Gender</label>
												<div class="radio">
													<label>
													<input type="radio" name="gender" id="male" value="Male" required>
													Male
													</label>
													<label>
													<input type="radio" name="gender" id="female" value="Female">
													Female
													</label>
												</div>
												</div>

											</div>
											<!-- /.box-body -->

											<div class="box-footer">
												<button type="submit" name="submit" class="btn btn-primary">Save Changes</button>
												<a href="index.php" class="btn btn-warning">Back</a>
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

</body>

</html>
