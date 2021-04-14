<?php
session_start();
if(isset($_POST['edit'])){
	include 'include/db.php';
    $id = $_SESSION['id'];
    $user_name = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $firstname = isset($_POST['fname']) ? $_POST['fname'] : '';
    $lastname = isset($_POST['lname']) ? $_POST['lname'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $gender = isset($_POST['gender']) ? $_POST['gender'] : '';
	

	$query="UPDATE users set user_name = '$user_name', username = '$username', password = '$password', firstname = '$firstname', lastname = '$lastname',
     phone = '$phone', gender = '$gender'
     where id ='$id'";

	if ($conn->query($query) === TRUE) {
		//echo "update record created successfully";
		} else {
		echo "Error: " . $query . "<br>" . $conn->error;
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
							<h3 class="panel-title">Admin Setting</h3>
						</div>
                    </div>
                                     <!-- Main content -->
                                <section class="content">
                                <!-- Small boxes (Stat box) -->
                                <div class="row">
                                    <div class="col-md-12 col-xs-12">


                                    
                                    <div class="box">
                                        <div class="box-header">
                                        <h3 class="box-title">Update Information</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <?php  
                                            include 'include/db.php';
                                            $id = $_SESSION['id'];
                                          //database show webpage
                                           $query = "SELECT * FROM users where id='$id'";
                                           $result = $conn->query($query);
                                           while($row = mysqli_fetch_array($result))
                                           {
                                             ?>

                                                <form role="form" action="" method="POST">
                                                <div class="box-body">

                                            
                                                <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?php echo $row['username'] ?>" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                <label for="email">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['user_name'] ?>" autocomplete="off">
                                                </div>                

                                                <div class="form-group">
                                                <label for="fname">First name</label>
                                                <input type="text" class="form-control" id="fname" name="fname" placeholder="First name" value="<?php echo $row['firstname'] ?>" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                <label for="lname">Last name</label>
                                                <input type="text" class="form-control" id="lname" name="lname" placeholder="Last name" value="<?php echo $row['lastname'] ?>" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                <label for="phone">Phone</label>
                                                <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" value="<?php echo $row['phone'] ?>" autocomplete="off">
                                                </div>

                                                <div class="form-group">
                                                <label for="gender">Gender</label>
                                                <div class="radio">
                                                    <label>
                                                    <input type="radio" name="gender" id="male" value="<?php echo $row['gender'] ?>" checked>
                                                    Male
                                                    </label>
                                                    <label>
                                                    <input type="radio" name="gender" id="female" value="<?php echo $row['gender'] ?>" >
                                                    Female
                                                    </label>
                                                </div>
                                                </div>
                                             <?php
                                            }
                                        ?>



                                            <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="text" class="form-control" id="password" name="password" placeholder="Password" autocomplete="off">
                                            </div>

                                            <div class="form-group">
                                            <label for="cpassword">Confirm password</label>
                                            <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" autocomplete="off">
                                            </div>

                                        </div>
                                        <!-- /.box-body -->

                                        <div class="box-footer">
                                            <button type="submit" name="edit" class="btn btn-primary">Save Changes</button>
                                            <a href="index.php" class="btn btn-warning">Back</a>
                                        </div>
                                        </form>
                                    </div>
                                    <!-- /.box -->
                                    </div>
                                
                                </div>
                                <!-- /.row -->
                                

                                </section>
                                <!-- /.content -->
                    </div>	
						
						
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
