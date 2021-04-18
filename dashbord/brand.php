<!-- insert brand -->
<?php
	if(isset($_POST['submit']) && $_POST['submit']!=''){
		include 'include/db.php';
		$brand_name = (!empty($_POST['brand_name'])) ? $_POST['brand_name']: '';
		$status = (!empty($_POST['avil'])) ? $_POST['avil']: '';
        
				$sql = "INSERT INTO brand (brand_name, available)
				VALUES ('$brand_name', '$status')";

				if ($conn->query($sql) === TRUE) {
				//echo "New record created successfully";
				} else {
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
	$brand_name = (!empty($_POST['brand_name'])) ? $_POST['brand_name']: '';
	$status = (!empty($_POST['avil'])) ? $_POST['avil']: '';

	$query="UPDATE brand set brand_name = '$brand_name', available = '$status' where id ='$id'";

	if ($conn->query($query) === TRUE) {
		echo "update record created successfully";
		} else {
		echo "Error: " . $query . "<br>" . $conn->error;
		}
$conn->close();
}

?>
<!-- delete brand -->
<?php
if(isset($_POST['del'])){
	echo 'it is go';
	include 'include/db.php';
	$id = $_POST['id'];
	// $brand_name = (!empty($_POST['brand_name'])) ? $_POST['brand_name']: '';
	// $status = (!empty($_POST['avil'])) ? $_POST['avil']: '';

	
	$sql = "DELETE FROM brand WHERE id = '$id'";
	//use for MySQLi OOP
	if ($conn->query($sql) === TRUE) {
		echo "deltete record successfully";
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

						<li><a href="category.php" class=""><i class="lnr lnr-file-empty"></i> <span>Category</span></a></li>

						<li><a href="stores.php" class=""><i class="lnr lnr-store"></i> <span>Stores</span></a></li>

						<li><a href="attributes.php" class=""><i class="lnr lnr-file-empty"></i> <span>Attributes</span></a></li> 


						<li>
							<a href="#pPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i> <span>Products</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="pPages" class="collapse ">
								<ul class="nav">
									<li><a href="addproduct.php" class="">+ Add Products</a></li>
									<li><a href="" class="">Manage Products</a></li>	
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
						<li><a href="company.php" class=""><i class="lnr lnr-linearicons"></i> <span>Company</span></a></li>
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
							<h3 class="panel-title">Brand/Manage</h3>
						</div>
					</div>
			<!-- add main body -->
						<!-- Button trigger modal -->
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
			ADD BRAND
			</button>




			<!-- table form -->
			<table id="manageBrandTable" class="table table-striped" style="width:100%">
		        <thead>
		            <tr> 
						<!-- <th>ID</th> -->
		                <th>Brand Name</th>
		                <th>Status</th>
		                <th>Action</th>
					</tr>
				</thead>	
		        <tbody>
					<?php
					 include 'include/db.php';
					   //database show webpage
						$query = "SELECT * FROM brand";
						$result = $conn->query($query);
							while($row = $result->fetch_assoc())
							{
								
								echo
								"<tr>
									
									<th>" .$row['brand_name']."</th>
									<th>". $row['available']."</th>
										<td>
										<a  data-toggle='modal' data-target='#exampleModal1_".$row['id']."' id=".$row['id']." class='btn btn-primary'>EDIT</a>
										<a  data-toggle='modal' data-target='#exampleModal2_".$row['id']."' id=".$row['id']." class='btn btn-danger'>DELETE</a>
										</td>
								</tr>";
								include('brand_edit_del_modal.php');
								
							}
					?>
					
				</tbody>
		        </table>



					<!-- Modal -->
					<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel"> ADD BRAND </h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">

						  <!-- form -->
						  <form action="" method="POST">
					      	<div class="form-group" >
						            <label for="brand_name">Brand Name</label>
						            <input type="text" class="form-control" id="brand_name"  name="brand_name" placeholder="Enter brand name" autocomplete="off" required>
						    </div>
						          	<div class="form-group">
						            	<label for="active">Status</label>
						            <select class="form-control" id="active" name="avil" required>
						              	<option value="active" style="color: green">Active</option>
						              	<option value="Inactive" style="color: red">Inactive</option>
						            </select>
						          </div>
								</div>
					    <div class="modal-footer">
					        <input type="submit" name="submit" value="submit" class="btn btn-primary"></button>
					    </div>
					    </div>
					  </div>
					</div>
				</form>	



	<!-- form table -->

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
	<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	

</body>
</html>