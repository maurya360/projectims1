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
							<h3 class="panel-title">User profile</h3>
						</div>
                    </div>
                    
                                 <!-- Main content -->
                                        <section class="content">
                                                <!-- Small boxes (Stat box) -->
                                                <div class="row">
                                                    <div class="col-md-12 col-xs-12">

                                                    <div class="box">
                                                        <div class="box-header">
                                                        <h3 class="box-title">Profile XXX</h3>
                                                        </div>
                                                        
                                                        <!-- /.box-header -->
                                                        <div class="box-body">
                                                        <?php
                                                                //session_start();
                                                                include 'include/db.php';
                                                               // $id = $_SESSION['id'];
                                                            //database show webpage
                                                            $query = "SELECT * FROM users";
                                                            $result = $conn->query($query);
                                                            while($row = mysqli_fetch_array($result))
                                                            {
                                                                ?>
                                                                <from action="" method="POST">
                                                                <table class="table table-bordered table-condensed table-hovered">
                                                                    <tr>
                                                                    <th>Username</th>
                                                                    <td><?php echo $row['username'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>Email</th>
                                                                    <td><?php echo $row['user_name'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>First Name</th>
                                                                    <td><?php echo $row['firstname'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>Last Name</th>
                                                                    <td><?php echo $row['lastname'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>Gender</th>
                                                                    <td><?php echo $row['gender'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>Phone</th>
                                                                    <td><?php echo $row['phone'] ?></td>
                                                                    </tr>
                                                                    <tr>
                                                                    <th>Group</th>
                                                                    <td><span class="label label-info">Administrator</span></td>
                                                                    </tr>
                                                                </table>
                                                                </from>
                                                        </div>
                                                        <?php
                                                        }
                                                    ?>
                                                       
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
