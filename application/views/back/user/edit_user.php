<body>
	<div class="container-scroller">
		<?php $this->load->view('include/menu-top'); ?>
		<div class="container-fluid page-body-wrapper">
			<?php $this->load->view('include/sidenav'); ?>
			<div class="main-panel" style="margin-left: 255px;">
				<div class="content-wrapper">
					<div class="row">
						<div class="col-md-12 grid-margin stretch-card">
							<div class="card">
								<div class="card-body">
									<h3 class="card-title" style="font-size: 20px;">Edit Pengguna</h3>
									<?php foreach ($edituser as $rowEdit) { ?>
										<form class="forms-sample" method="post" action="<?php echo site_url('main/actEditUser/'.$rowEdit->id); ?>">
											<div class="form-group">
												<label for="exampleInputEmail1">Email address</label>
												<input type="email" name="email" value="<?php echo $rowEdit->email; ?>" class="form-control" placeholder="Enter email">
											</div>
											<div class="form-group">
												<label for="exampleInputEmail1">Username</label>
												<input type="text" name="username" value="<?php echo $rowEdit->username; ?>" class="form-control" placeholder="Enter email">
											</div>
											<div class="form-group">
												<label for="exampleInputPassword1">Password</label>
												<input type="text" name="password" value="<?php echo $rowEdit->ulang_password; ?>" class="form-control" placeholder="Password">
											</div>
											<div class="form-group">
												<label>Status</label>
												<select class="form-control" name="status">
													<?php if ($rowEdit->status=='admin'){ ?>
														<option value="admin">Admin</option>
														<option value="user">User</option>
													<?php }else{ ?>
														<option value="user">User</option>
														<option value="admin">Admin</option>
													<?php } ?>
												</select>
											</div>
											<button type="submit" class="btn btn-success mr-2">Simpan</button>
											<button class="btn btn-light">Batal</button>
										</form>
									<?php } ?>
								</div>
							</div>
						</div>  
					</div>  
				</div>
				<footer class="footer">
					<div class="container-fluid clearfix">
						<span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
							<a href="http://www.bootstrapdash.com/" target="_blank">Bootstrapdash</a>. All rights reserved.
						</span>
						<!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with
							<i class="mdi mdi-heart text-danger"></i>
						</span> -->
					</div>
				</footer>
			</div>
		</div>
	</div>