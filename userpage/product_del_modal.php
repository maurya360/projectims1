<!-- remove brand modal -->
<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal2<?php echo $row['id']; ?>" >
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Remove Product</h4>
									</div>

									<form role="form" action="" method="POST" id="removeForm">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										<div class="modal-body">
										<p>Do you really want to remove?</p>
										</div>
										<div class="modal-footer">
										<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										<button type="submit" name="del" class="btn btn-primary">Save changes</button>
										</div>
									</form>


									</div><!-- /.modal-content -->
								</div><!-- /.modal-dialog -->
								</div><!-- /.modal -->
