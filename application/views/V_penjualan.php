<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD - Quiz Promnet</title>
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	<style type="text/css">
	body {
		color: #566787;
		background: #f5f5f5;
		font-family: 'Varela Round', sans-serif;
		font-size: 13px;
	}
	.table-wrapper {
		background: #fff;
		padding: 20px 25px;
		margin: 30px 0;
		border-radius: 3px;
		box-shadow: 0 1px 1px rgba(0,0,0,.05);
	}
	.table-title {
		padding-bottom: 15px;
		/* background: #435d7d; */
		background: #2C3A47;
		color: #fff;
		padding: 16px 30px;
		margin: -20px -25px 10px;
		border-radius: 3px 3px 0 0;
	}
	.table-title h2 {
		margin: 5px 0 0;
		font-size: 24px;
	}
	.table-title .btn-group {
		float: right;
	}
	.table-title .btn {
		color: #fff;
		float: right;
		font-size: 13px;
		border: none;
		min-width: 50px;
		border-radius: 2px;
		border: none;
		outline: none !important;
		margin-left: 10px;
	}
	.table-title .btn i {
		float: left;
		font-size: 21px;
		margin-right: 5px;
	}
	.table-title .btn span {
		float: left;
		margin-top: 2px;
	}
	table.table tr th, table.table tr td {
		border-color: #e9e9e9;
		padding: 12px 15px;
		vertical-align: middle;
	}
	table.table tr th:first-child {
		width: 60px;
	}
	table.table tr th:last-child {
		width: 100px;
	}
	table.table-striped tbody tr:nth-of-type(odd) {
		background-color: #fcfcfc;
	}
	table.table-striped.table-hover tbody tr:hover {
		background: #f5f5f5;
	}
	table.table th i {
		font-size: 13px;
		margin: 0 5px;
		cursor: pointer;
	}
	table.table td:last-child i {
		opacity: 0.9;
		font-size: 22px;
		margin: 0 5px;
	}
	table.table td a {
		font-weight: bold;
		color: #566787;
		display: inline-block;
		text-decoration: none;
		outline: none !important;
	}
	table.table td a:hover {
		color: #2196F3;
	}
	table.table td a.update {
		color: #FFC107;
	}
	table.table td a.delete {
		color: #F44336;
	}
	table.table td i {
		font-size: 19px;
	}
	table.table .avatar {
		border-radius: 50%;
		vertical-align: middle;
		margin-right: 10px;
	}
	.pagination {
		float: right;
		margin: 0 0 5px;
	}
	.pagination li a {
		border: none;
		font-size: 13px;
		min-width: 30px;
		min-height: 30px;
		color: #999;
		margin: 0 2px;
		line-height: 30px;
		border-radius: 2px !important;
		text-align: center;
		padding: 0 6px;
	}
	.pagination li a:hover {
		color: #666;
	}
	.pagination li.active a, .pagination li.active a.page-link {
		background: #03A9F4;
	}
	.pagination li.active a:hover {
		background: #0397d6;
	}
	.pagination li.disabled i {
		color: #ccc;
	}
	.pagination li i {
		font-size: 16px;
		padding-top: 6px
	}
	.hint-text {
		float: left;
		margin-top: 10px;
		font-size: 13px;
	}
	/* Custom checkbox */
	.custom-checkbox {
		position: relative;
	}
	.custom-checkbox input[type="checkbox"] {
		opacity: 0;
		position: absolute;
		margin: 5px 0 0 3px;
		z-index: 9;
	}
	.custom-checkbox label:before{
		width: 18px;
		height: 18px;
	}
	.custom-checkbox label:before {
		content: '';
		margin-right: 10px;
		display: inline-block;
		vertical-align: text-top;
		background: white;
		border: 1px solid #bbb;
		border-radius: 2px;
		box-sizing: border-box;
		z-index: 2;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		content: '';
		position: absolute;
		left: 6px;
		top: 3px;
		width: 6px;
		height: 11px;
		border: solid #000;
		border-width: 0 3px 3px 0;
		transform: inherit;
		z-index: 3;
		transform: rotateZ(45deg);
	}
	.custom-checkbox input[type="checkbox"]:checked + label:before {
		border-color: #03A9F4;
		background: #03A9F4;
	}
	.custom-checkbox input[type="checkbox"]:checked + label:after {
		border-color: #fff;
	}
	.custom-checkbox input[type="checkbox"]:disabled + label:before {
		color: #b8b8b8;
		cursor: auto;
		box-shadow: none;
		background: #ddd;
	}
	/* Modal styles */
	.modal .modal-dialog {
		max-width: 800px;
	}
	.modal .modal-header, .modal .modal-body, .modal .modal-footer {
		padding: 20px 30px;
	}
	.modal .modal-content {
		border-radius: 3px;
	}
	.modal .modal-footer {
		background: #ecf0f1;
		border-radius: 0 0 3px 3px;
	}
	.modal .modal-title {
		display: inline-block;
	}
	.modal .form-control {
		border-radius: 2px;
		box-shadow: none;
		border-color: #dddddd;
	}
	.modal textarea.form-control {
		resize: vertical;
	}
	.modal .btn {
		border-radius: 2px;
		min-width: 100px;
	}
	.modal form label {
		font-weight: normal;
	}
</style>
<script type="text/javascript">
	$(document).ready(function(){
	// Activate tooltip
	$('[data-toggle="tooltip"]').tooltip();

	// Select/Deselect checkboxes
	var checkbox = $('table tbody input[type="checkbox"]');
	$("#selectAll").click(function(){
		if(this.checked){
			checkbox.each(function(){
				this.checked = true;
			});
		} else{
			checkbox.each(function(){
				this.checked = false;
			});
		}
	});
	checkbox.click(function(){
		if(!this.checked){
			$("#selectAll").prop("checked", false);
		}
	});
});
</script>
</head>
<body>
	<div class="container">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-2">
						<h2><b>Penjualan Motor</b></h2>
					</div>
					<div class="col-sm-2">
						<a href='<?php echo site_url("C_PenjualanMotor/index"); ?>' class="nav-link">Data User</a>
					</div>
					<div class="col-sm-2">
						<a href='<?php echo site_url("C_PenjualanMotor/c_motor"); ?>' class="nav-link">Data Motor</a>
					</div>
					<div class="col-sm-2">
						<a href='<?php echo site_url("C_PenjualanMotor/c_cicilan"); ?>' class="nav-link">Data Cicilan</a>
					</div>
					<div class="col-sm-2">
						<a href='<?php echo site_url("C_PenjualanMotor/c_uang_muka"); ?>' class="nav-link">Data Uang Muka</a>
					</div>
					<div class="col-sm-1">
						<a href='<?php echo site_url("C_PenjualanMotor/c_penjualan"); ?>' class="nav-link">Data Penjualan</a>
					</div>
					<div class="col-sm-1">
						<a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"> <span>Add</span></a>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th>No.</th>
						<th>NIM Sales</th>
						<th>Nama Sales</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<?php
						$i=1;
						var_dump($penjualan);
						foreach($penjualan as $key) {
							?>
							<td><?php echo $i; ?></td>
							<td><?php echo $key->nim_sales; ?></td>
							<td><?php echo $key->nama_sales; ?></td>
							<td>
								<a href="#deleteEmployeeModal<?php echo $key->nim_sales;?>" class="delete" data-toggle="modal">Delete</a>
								<a href="#editEmployeeModal<?php echo $key->nim_sales;?>" class="update" data-toggle="modal">Update</a>
							</td>
						</tr>
						<?php
						$i++;

					}
					?>
				</tbody>
			</table>

		</div>
	</div>

	<!-- Add Modal HTML -->
	<div id="addEmployeeModal" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">
				<form action="<?php echo site_url('C_PenjualanMotor/add'); ?>" method="post">
					<div class="modal-header">
						<h4 class="modal-title">Add</h4>
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label>Motor</label>
							<input type="text" name="id_motor" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cicil</label>
							<input type="text" name="id_cicil" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Uang Muka</label>
							<input type="text" name="id_uang_muka" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cicilan Pokok</label>
							<input type="text" name="cicilan_pokok" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cicilan Bunga</label>
							<input type="text" name="cicilan_bunga" class="form-control" required>
						</div>
						<div class="form-group">
							<label>Cicilan Total</label>
							<input type="text" name="cicilan_total" class="form-control" required>
						</div>
					</div>
					<div class="modal-footer">
						<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
						<input id="tombol" type="submit" class="btn btn-success" value="Add">
					</div>
				</form>
			</div>
		</div>
	</div>




	<!-- Delete Modal HTML -->
	<?php
	foreach($penjualan as $key){

		?>
		<div id="deleteEmployeeModal<?php echo $key->nim_sales;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url('C_PenjualanMotor/delete/'.$key->nim_sales); ?>" method="POST">
						<div class="modal-header">
							<h4 class="modal-title">Delete</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<p>Are you sure you want to delete these Records?</p>
							<p class="text-warning"><small>This action cannot be undone.</small></p>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input type="submit" class="btn btn-danger" value="Delete">
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php 
	} 

	foreach($penjualan as $key){

		?>
		<div id="editEmployeeModal<?php echo $key->nim_sales;?>" class="modal fade">
			<div class="modal-dialog">
				<div class="modal-content">
					<form action="<?php echo site_url('C_PenjualanMotor/update/'.$key->nim_sales ); ?>" method="post">
						<div class="modal-header">
							<h4 class="modal-title">Edit</h4>
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<label>Motor</label>
								<input type="text" name="id_motor" class="form-control" value="<?php echo $key->nim_sales_motor; ?>" required>
							</div>
							<div class="form-group">
								<label>Cicil</label>
								<input type="text" name="id_cicil" class="form-control" value="<?php echo $key->nim_sales_cicil; ?>" required>
							</div>
							<div class="form-group">
								<label>Uang Muka</label>
								<input type="text" name="id_uang_muka" class="form-control" value="<?php echo $key->nim_sales_uang_muka; ?>" required>
							</div>
							<div class="form-group">
								<label>Cicilan Pokok</label>
								<input type="text" name="cicilan_pokok" class="form-control" value="<?php echo $key->cicilan_pokok; ?>" required>
							</div>
							<div class="form-group">
								<label>Cicilan Bunga</label>
								<input type="text" name="cicilan_bunga" class="form-control" value="<?php echo $key->cicilan_bunga; ?>" required>
							</div>
							<div class="form-group">
								<label>Cicilan Total</label>
								<input type="text" name="cicilan_total" class="form-control" value="<?php echo $key->cicilan_total; ?>" required>
							</div>
						</div>
						<div class="modal-footer">
							<input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
							<input id="tombol" type="submit" class="btn btn-success" value="Update">
						</div>
					</form>
				</div>
			</div>
		</div>

	<?php } ?>

</body>
</html>
