<!-- edit modal -->
<div class="modal fade" id='exampleModal1_<?php echo $row['id']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel"> EDIT CATEGORY</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>

					    <div class="modal-body">

						  <!-- form -->
						<form action="" method="POST">
					    <div class="form-group" >
						<label for="category_name">Category Name</label>
                            <input type='hidden' value='<?php echo $row['id'] ?>' name="id">		 
							<input type='text' class='form-control' id='category_name' name='category_name' value = '<?php echo $row['category_name']?>' autocomplete='off' required>    
						    </div>
						        <div class="form-group">
						            	<label for="avil">Status</label>
						            <select class="form-control" id="status" name="avil" value="incative">
						              	<option value="active" style="color: green">Active</option>
						              	<option value="Inactive" style="color: red">Inactive</option>
						            </select>
						          </div>
								</div>
					    	<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
					        <input type="submit" name="edit" value="update" class="btn btn-primary"></button>
					    	</div>
					    </div>
					  </div>
					</div>
				</form>	
  </div>  
  <!-- close edit  -->
  <!-- delete modal -->
  <div class="modal fade" id='exampleModal2_<?php echo $row['id'] ?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel2"> DELETE CATEGORY </h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>
					      <div class="modal-body">
						  <!-- form -->
						 <form action="" method="POST"> 	
							<div>
								<p class="text-center">Are you sure you want to Delete</p>
								<input type='hidden' value='<?php echo $row['id'] ?>' name="id">
								<h2 class="text-center"><?php echo $row['category_name'].' '.$row['available']; ?></h2>   	
							</div>
					    <div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                        <input type="submit" name="del" value="YES" class="btn btn-danger">
					    </div>
					    </div>
					  </div>
					</div>
				</form>	
	</div>			
  <!-- close delete -->