<!-- insert brand -->
<?php
include 'include/db.php';
if(isset($_POST['submit'])){
	
//print_r($_POST['data']);
	$filename = $_FILES['file']['name'];
	$filetmpname = $_FILES['file']['tmp_name'];
	$folder = 'uplode/';
	move_uploaded_file($filetmpname, $folder.$filename);

	$product_name = (!empty($_POST['product_name'])) ? $_POST['product_name']: '';
	$sku = (!empty($_POST['sku'])) ? $_POST['sku']: '';
	$price = (!empty($_POST['price'])) ? $_POST['price']: '';
	$qty = (!empty($_POST['qty'])) ? $_POST['qty']: '';
	$description= (!empty($_POST['des'])) ? $_POST['des']: '';
	$brand = (!empty($_POST['brand'])) ? $_POST['brand']: '';
	$cetegory = (!empty($_POST['cetegory'])) ? $_POST['cetegory']: '';
	$store = (!empty($_POST['store'])) ? $_POST['store']: '';
	$data = (!empty($_POST['data'])) ? $_POST['data']: '';
	$brand1= implode(",",$brand);
	$cetegory1= implode(",",$cetegory);
	$store1= implode(",",$store);
	$attributedata = implode(",",$data);
	$availability = (!empty($_POST['availability'])) ? $_POST['availability']: '';
	

$sql = "INSERT INTO addproduct (product_image, product_name, sku, price, qty, notes, brand, cetegory, store, attributedata, availability) 
VALUES ('$filename','$product_name', '$sku', '$price', '$qty', '$description', '$brand1', '$cetegory1', '$store1','	$attributedata', '$availability')";
if ($conn->query($sql) === TRUE) {
	echo "insert record successfully";
	} 
	else {
	echo "Error: " . $sql . "<br>" . $conn->error;
	}

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
							<h3 class="panel-title">Manage Product</h3>
						</div>
                    </div>    
                        <!-- Main content -->
                                <section class="content">
                                    <!-- Small boxes (Stat box) -->

                                        

                                        <div class="box">
                                        <div class="box-header">
                                            <h3 class="box-title">Add Product</h3>
                                        </div>
                                        <!-- /.box-header -->
                                        <form role="form" action="" method="POST" enctype="multipart/form-data">
                                            <div class="box-body">

                                                
                                                <div class="form-group">

                                                <label for="product_image">Image</label>
                                                <div class="kv-avatar">
                                                    <div class="file-loading">
                                                        <input id="product_image" name="file" type="file">
                                                    </div>
                                                </div>
                                                </div>

                                                <div class="form-group">
                                                <label for="product_name">Product name</label>
                                                <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Enter product name" autocomplete="off" required/>
                                                </div>

                                                <div class="form-group">
                                                <label for="sku">SKU</label>
                                                <input type="text" class="form-control" id="sku" name="sku" placeholder="Enter sku" autocomplete="off" required/>
                                                </div>

                                                <div class="form-group">
                                                <label for="price">Price</label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Enter price" autocomplete="off" required />
                                                </div>

                                                <div class="form-group">
                                                <label for="qty">Qty</label>
                                                <input type="text" class="form-control" id="qty" name="qty" placeholder="Enter Qty" autocomplete="off" required/>
                                                </div>

												<div class="form-group">
												<label for="Description">Description</label>
												<div class="col-md-12">
											   		<textarea name="des" id="summernote"></textarea>
												</div>
												</div>


												<div class="form-group">
													<?php
														include 'include/db.php';
														//database show webpage
															$query = "SELECT * FROM attribute";
															$result = $conn->query($query);
															while($row = $result->fetch_assoc())
																{
																	echo
																	"
																		
																	<label for='attribute'>".$row['attribute_name']."</label>
																	<select class='form-control multiple-select' id='".$row['attribute_name']."' name='data[]' value='' multiple>	
																	<option value=''>~~SELECT~~</option>
																	
																	

																	";
																	$name=$row['attribute_name'];
																	$query1 = "SELECT * FROM attribute_value where attribute='$name'";
																	$result1 = $conn->query($query1);
																	while($row1 = $result1->fetch_assoc())
																	{
																	echo
																	"
																		
																	<option value='".$row1['attribute_value_name'],$name."' >".$row1['attribute_value_name']."</option>
																		
																			
																	";
																	}
																	echo "</select>	";	
																}
																
													?>
													
                                                </div>
                                                


                                               


                                                                
                                                <div class="form-group">
                                                <label for="brands">Brands</label>
                                                <select class="form-control multiple-select" id="brand" name="brand[]" value="" multiple>
													<option value="">~~SELECT~~</option>
													
														

													<?php
														include 'include/db.php';
														//database show webpage
															$query = "SELECT * FROM brand";
															$result = $conn->query($query);
																while($row = $result->fetch_assoc())
																{
																	echo
																	"
																		
																	<option value='".$row['brand_name']."' >".$row['brand_name']."</option>		
																	";
																	
																	
																}
														?>
													
													</select>
													
                                                </div>
												


                                                <div class="form-group">
                                                <label for="category">Category</label>
                                                <select class="form-control multiple-select" id="category" name="cetegory[]" value="" multiple>
													<option value="">~~SELECT~~</option>
													<?php
														include 'include/db.php';
														//database show webpage
															$query = "SELECT * FROM category";
															$result = $conn->query($query);
																while($row = $result->fetch_assoc())
																{
																	echo
																	"
																		
																	<option value='".$row['category_name']."' >".$row['category_name']."</option>
																		
																			
																	";
																	
																	
																}
														?>

																		
													</select>                       
                                                </div>

                                                <div class="form-group">
                                                <label for="store">Store</label>
                                                <select class="form-control multiple-select" id="store" name="store[]" value="" multiple>
													<option value="">~~SELECT~~</option>
													<?php
														include 'include/db.php';
														//database show webpage
															$query = "SELECT * FROM store";
															$result = $conn->query($query);
																while($row = $result->fetch_assoc())
																{
																	echo
																	"
																		
																	<option value='".$row['store_name']."' >".$row['store_name']."</option>
																		
																			
																	";
																	
																	
																}
														?>

																		
													</select>
                                                </div>

                                                <div class="form-group">
                                                <label for="store">Availability</label>
                                                <select class="form-control" id="availability" name="availability">
                                                    <option value="YES">Yes</option>
                                                    <option value="NO">No</option>
                                                </select>
                                                </div>

                                            </div>
                                            <!-- /.box-body -->

                                            <div class="box-footer">
                                                <button type="submit" class="btn btn-primary" name="submit">Save Changes</button>
                                                <a href="" class="btn btn-warning">Back</a>
                                            </div>
                                            </form>
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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script>
	$(".multiple-select").select2({
  	maximumSelectionLength: 50
	});
	</script>														
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
