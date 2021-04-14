<!-- edit modal -->
<div class="modal fade" id='exampleModal1_<?php echo $row['id']?>' tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					        <h5 class="modal-title" id="exampleModalLabel"> EDIT USER</h5>
					        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					          <span aria-hidden="true">&times;</span>
					        </button>
					      </div>

					    <div class="modal-body">

						  <!-- form -->
						<form action="" method="POST">
					    <div class="form-group" >
						<label for="username">Username</label>
                            <input type='hidden' value='<?php echo $row['id'] ?>' name="id">		 
							<input type='text' class='form-control' id='username' name='username' value = '<?php echo $row['username']?>' autocomplete='off'>    
						</div>
						<div class="form-group">
						<label for="email">email</label>
						<input type='text' class='form-control' id='email' name='email' value = '<?php echo $row['email']?>' autocomplete='off'>           
						</div>

						<div class="form-group">
						<label for="email">first Name</label>
						<input type='text' class='form-control' id='fname' name='fname' value = '<?php echo $row['fname']?>' autocomplete='off'>           
						</div>

						<div class="form-group">
						<label for="email">Last Name</label>
						<input type='text' class='form-control' id='lname' name='lname' value = '<?php echo $row['lname']?>' autocomplete='off'>           
						</div>

						<div class="form-group">
						<label for="email">phone</label>
						<input type='text' class='form-control' id='phone' name='phone' value = '<?php echo $row['phone']?>' autocomplete='off'>           
						</div>

						<div class="form-group">
						            	<label for="gender">gender</label>
						            <select class="form-control" id="status" name="gender" value="Femail">
						              	<option value="mail" style="color: green">MALE</option>
						              	<option value="femail" style="color: red">FEMAIL</option>
						            </select>
						</div>

						<div class="form-group">
						<label for="password">password</label>
						<input type='text' class='form-control' id='phone' name='password' value = '<?php echo $row['pass']?>' autocomplete='off'>           
						</div>

						<div class="form-group">
						<label for="password">conform password</label>
						<input type='password' class='form-control' id='phone' name='password' value = '<?php echo $row['cpassword']?>' autocomplete='off'>           
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
					        <h5 class="modal-title" id="exampleModalLabel2"> USER DELETE </h5>
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
								<h2 class="text-center"><?php echo $row['fname'].' '.$row['lname']; ?></h2>   	
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