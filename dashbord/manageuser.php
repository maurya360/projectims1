<!-- delete brand -->
<?php
if(isset($_POST['del'])){
	
	include 'include/db.php';
	$id = $_POST['id'];
	
	$sql = "DELETE FROM user WHERE id = '$id'";
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
<!-- edit brand -->
<?php
if(isset($_POST['edit']) && $_POST['edit']!=''){
	include 'include/db.php';
	$id = $_POST['id'];
	$username = (!empty($_POST['username'])) ? $_POST['username']: '';
	$email = (!empty($_POST['email'])) ? $_POST['email']: '';
	$fname = (!empty($_POST['fname'])) ? $_POST['fname']: '';
	$lname = (!empty($_POST['lname'])) ? $_POST['lname']: '';
	$phone = (!empty($_POST['phone'])) ? $_POST['phone']: '';
	$gender = (!empty($_POST['gender'])) ? $_POST['gender']: '';
	$password = (!empty($_POST['password'])) ? $_POST['password']: '';
	$cpassword = (!empty($_POST['password'])) ? $_POST['password']: '';

	$query="UPDATE user set username = '$username', email = '$email', fname ='$fname', lname ='$lname', gender = '$gender',
	pass = '$password', cpassword = '$cpassword'
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
							<h3 class="panel-title">Manage user</h3>
						</div>
					</div>
                     <!-- table form -->
                            <!-- table form -->
			<table id="manageBrandTable" class="table table-striped" style="width:100%">
		        <thead>
		            <tr> 
						<!-- <th>ID</th> -->
		                <th>username</th>
		                <th>email</th>
		                <th>Name</th>
                        <th>phone</th>
                        <th>gender</th>
                        <th>Action</th>

					</tr>
				</thead>	
		        <tbody>
					<?php
					 include 'include/db.php';
					   //database show webpage
						$query = "SELECT * FROM user";
						$result = $conn->query($query);
							while($row = $result->fetch_assoc())
							{
								echo
								"<tr>
									
									<th>" .$row['username']."</th>
									<th>". $row['email']."</th>
                                    <th>". $row['fname']." ". $row['lname']."</th>
                                    <th>". $row['phone']."</th>
                                    <th>". $row['gender']."</th>
										<td>
										<a href='/' data-toggle='modal' data-target='#exampleModal1_".$row['id']."' id=".$row['id']." class='btn btn-primary'>EDIT</a>
										<a href='/' data-toggle='modal' data-target='#exampleModal2_".$row['id']."' id=".$row['id']." class='btn btn-danger'>DELETE</a>
										</td>
								</tr>";
								include('user_edit_del_modal.php');
								
							}
					?>
					
				</tbody>
		        </table>
                   
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
