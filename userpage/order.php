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
						
						<!-- <li>
							<a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-users"></i> <span>Users</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPages" class="collapse ">
								<ul class="nav">
									<li><a href="adduser.php" class="">+ Add User</a></li>
									<li><a href="manageuser.php" class=""> Manage Users</a></li>	
								</ul>
							</div>
						</li>		 -->

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
						<!-- <li><a href="Company.php" class=""><i class="lnr lnr-linearicons"></i> <span>Company</span></a></li> -->
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
							<h3 class="panel-title">Manage orders</h3>
						</div>
                    </div>
								<!-- Content Wrapper. Contains page content -->
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

											

											<div class="box">
											<div class="box-header">
												<h3 class="box-title">Add Order</h3>
											</div>
											<!-- /.box-header -->
											<form role="form" action="" method="post" class="form-horizontal">
												<div class="box-body">

													
													<div class="form-group">
													<label for="gross_amount"  class="col-sm-12 control-label">Date: <?php $t=time(); echo(date("Y-m-d",$t)); ?>
													</label>
													</div>
													<div class="form-group">
													<label for="gross_amount"  class="col-sm-12 control-label">Time:<?php
														// Set the new timezone
														date_default_timezone_set('Asia/Kolkata');
														$date = date('h:i:s');
														echo $date;
														?></label>
													</div>

													<div class="col-md-4 col-xs-12 pull pull-left">

													<div class="form-group">
														<label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Name</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="customer_name" name="customer_name" placeholder="Enter Customer Name" autocomplete="off" required/>
														</div>
													</div>

													<div class="form-group">
														<label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Address</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="customer_address" name="customer_address" placeholder="Enter Customer Address" autocomplete="off" required>
														</div>
													</div>

													<div class="form-group">
														<label for="gross_amount" class="col-sm-5 control-label" style="text-align:left;">Customer Phone</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="customer_phone" name="customer_phone" placeholder="Enter Customer Phone" autocomplete="off" required>
														</div>
													</div>
													</div>
													
													
													<br /> <br/>
													<table class="table table-bordered" id="product_info_table">
													<thead>
														<tr>
														<th style="width:50%">Product</th>
														<th style="width:10%">Qty</th>
														<th style="width:10%">Rate</th>
														<th style="width:20%">Amount</th>
														<th style="width:10%"><button type="button" id="add_row" class="btn btn-default"><i class="fa fa-plus"></i></button></th>
														</tr>
													</thead>

													<tbody>
														<tr id="row_1">
														<td>
															<select class="form-control select_group product" data-row-id="row_1" id="product_1" name="product[]" style="width:100%;" onchange="getProductData(1)" required>
																<option value=""></option>
																
															</td>
															<td><input type="text" name="qty[]" id="qty_1" class="form-control" required onkeyup="getTotal(1)"></td>
															<td>
															<input type="text" name="rate[]" id="rate_1" class="form-control" disabled autocomplete="off">
															<input type="hidden" name="rate_value[]" id="rate_value_1" class="form-control" autocomplete="off">
															</td>
															<td>
															<input type="text" name="amount[]" id="amount_1" class="form-control" disabled autocomplete="off">
															<input type="hidden" name="amount_value[]" id="amount_value_1" class="form-control" autocomplete="off">
															</td>
															<td><button type="button" class="btn btn-default" onclick="removeRow('1')"><i class="fa fa-close"></i></button></td>
														</tr>
													</tbody>
													</table>

													<br /> <br/>

													<div class="col-md-6 col-xs-12 pull pull-right">

													<div class="form-group">
														<label for="gross_amount" class="col-sm-5 control-label">Gross Amount</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="gross_amount" name="gross_amount" disabled autocomplete="off">
														<input type="hidden" class="form-control" id="gross_amount_value" name="gross_amount_value" autocomplete="off">
														</div>
													</div>
																		<div class="form-group">
														<label for="service_charge" class="col-sm-5 control-label">S-Charge 13 %</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="service_charge" name="service_charge" disabled autocomplete="off">
														<input type="hidden" class="form-control" id="service_charge_value" name="service_charge_value" autocomplete="off">
														</div>
													</div>
																						<div class="form-group">
														<label for="vat_charge" class="col-sm-5 control-label">Vat 10 %</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="vat_charge" name="vat_charge" disabled autocomplete="off">
														<input type="hidden" class="form-control" id="vat_charge_value" name="vat_charge_value" autocomplete="off">
														</div>
													</div>
																		<div class="form-group">
														<label for="discount" class="col-sm-5 control-label">Discount</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="discount" name="discount" placeholder="Discount" onkeyup="subAmount()" autocomplete="off">
														</div>
													</div>
													<div class="form-group">
														<label for="net_amount" class="col-sm-5 control-label">Net Amount</label>
														<div class="col-sm-7">
														<input type="text" class="form-control" id="net_amount" name="net_amount" disabled autocomplete="off">
														<input type="hidden" class="form-control" id="net_amount_value" name="net_amount_value" autocomplete="off">
														</div>
													</div>

													</div>
												</div>
												<!-- /.box-body -->

												<div class="box-footer">
													<input type="hidden" name="service_charge_rate" value="13" autocomplete="off">
													<input type="hidden" name="vat_charge_rate" value="10" autocomplete="off">
													<button type="submit" class="btn btn-primary">Create Order</button>
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
	<script type="text/javascript">
  var base_url = "";

  $(document).ready(function() {
    //$(".select_group").select2();
    // $("#description").wysihtml5();

    $("#mainOrdersNav").addClass('active');
    $("#addOrderNav").addClass('active');
    
    var btnCust = '<button type="button" class="btn btn-secondary" title="Add picture tags" ' + 
        'onclick="alert(\'Call your custom code here.\')">' +
        '<i class="glyphicon glyphicon-tag"></i>' +
        '</button>'; 
  
    // Add new row in the table 
    //$("#add_row").unbind('click').bind('click', function() {
	
	$("#add_row").on('click', function(){
	console.log("addbuttonclick");
      var table = $("#product_info_table");
      var count_table_tbody_tr = $("#product_info_table tbody tr").length;
      var row_id = count_table_tbody_tr + 1;

    //   $.ajax({
	
    //       url: base_url + '/orders/getTableProductRow/',
    //       type: 'post',
    //       dataType: 'json',
    //       success:function(response) {
            
              // console.log(reponse.x);
               var html = '<tr id="row_'+row_id+'">'+
                   '<td>'+ 
                    '<select class="form-control select_group product" data-row-id="'+row_id+'" id="product_'+row_id+'" name="product[]" style="width:100%;" onchange="getProductData('+row_id+')">'+
                        '<option value=""></option>';
                        // $.each(response, function(index, value) {
                        //   html += '<option value="'+value.id+'">'+value.name+'</option>';             
                        // });
                        
                      html += '</select>'+
                    '</td>'+ 
                    '<td><input type="number" name="qty[]" id="qty_'+row_id+'" class="form-control" onkeyup="getTotal('+row_id+')"></td>'+
                    '<td><input type="text" name="rate[]" id="rate_'+row_id+'" class="form-control" disabled><input type="hidden" name="rate_value[]" id="rate_value_'+row_id+'" class="form-control"></td>'+
                    '<td><input type="text" name="amount[]" id="amount_'+row_id+'" class="form-control" disabled><input type="hidden" name="amount_value[]" id="amount_value_'+row_id+'" class="form-control"></td>'+
                    '<td><button type="button" class="btn btn-default" onclick="removeRow(\''+row_id+'\')"><i class="fa fa-close"></i></button></td>'+
                    '</tr>';

                if(count_table_tbody_tr >= 1) {
                $("#product_info_table tbody tr:last").after(html);  
              }
              else {
                $("#product_info_table tbody").html(html);
              }

              $(".product").select2();

        //   }
        // });

      return false;
    });

  }); // /document

  function getTotal(row = null) {
    if(row) {
      var total = Number($("#rate_value_"+row).val()) * Number($("#qty_"+row).val());
      total = total.toFixed(2);
      $("#amount_"+row).val(total);
      $("#amount_value_"+row).val(total);
      
      subAmount();

    } else {
      alert('no row !! please refresh the page');
    }
  }

  // get the product information from the server
  function getProductData(row_id)
  {
    var product_id = $("#product_"+row_id).val();    
    if(product_id == "") {
      $("#rate_"+row_id).val("");
      $("#rate_value_"+row_id).val("");

      $("#qty_"+row_id).val("");           

      $("#amount_"+row_id).val("");
      $("#amount_value_"+row_id).val("");

    } else {
      $.ajax({
        url: base_url + 'orders/getProductValueById',
        type: 'post',
        data: {product_id : product_id},
        dataType: 'json',
        success:function(response) {
          // setting the rate value into the rate input field
          
          $("#rate_"+row_id).val(response.price);
          $("#rate_value_"+row_id).val(response.price);

          $("#qty_"+row_id).val(1);
          $("#qty_value_"+row_id).val(1);

          var total = Number(response.price) * 1;
          total = total.toFixed(2);
          $("#amount_"+row_id).val(total);
          $("#amount_value_"+row_id).val(total);
          
          subAmount();
        } // /success
      }); // /ajax function to fetch the product data 
    }
  }

  // calculate the total amount of the order
  function subAmount() {
    var service_charge = 13;
    var vat_charge = 10;

    var tableProductLength = $("#product_info_table tbody tr").length;
    var totalSubAmount = 0;
    for(x = 0; x < tableProductLength; x++) {
      var tr = $("#product_info_table tbody tr")[x];
      var count = $(tr).attr('id');
      count = count.substring(4);

      totalSubAmount = Number(totalSubAmount) + Number($("#amount_"+count).val());
    } // /for

    totalSubAmount = totalSubAmount.toFixed(2);

    // sub total
    $("#gross_amount").val(totalSubAmount);
    $("#gross_amount_value").val(totalSubAmount);

    // vat
    var vat = (Number($("#gross_amount").val())/100) * vat_charge;
    vat = vat.toFixed(2);
    $("#vat_charge").val(vat);
    $("#vat_charge_value").val(vat);

    // service
    var service = (Number($("#gross_amount").val())/100) * service_charge;
    service = service.toFixed(2);
    $("#service_charge").val(service);
    $("#service_charge_value").val(service);
    
    // total amount
    var totalAmount = (Number(totalSubAmount) + Number(vat) + Number(service));
    totalAmount = totalAmount.toFixed(2);
    // $("#net_amount").val(totalAmount);
    // $("#totalAmountValue").val(totalAmount);

    var discount = $("#discount").val();
    if(discount) {
      var grandTotal = Number(totalAmount) - Number(discount);
      grandTotal = grandTotal.toFixed(2);
      $("#net_amount").val(grandTotal);
      $("#net_amount_value").val(grandTotal);
    } else {
      $("#net_amount").val(totalAmount);
      $("#net_amount_value").val(totalAmount);
      
    } // /else discount 

  } // /sub total amount

  function removeRow(tr_id)
  {
    $("#product_info_table tbody tr#row_"+tr_id).remove();
    subAmount();
  }
</script>




</body>

</html>
