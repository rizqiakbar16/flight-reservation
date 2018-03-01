
   <?php  $this->load->view('layout_admin/header');?>
    <!-- Left side column. contains the logo and sidebar -->
   <?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Reservation
          <small>(Dari yang Sudah Membayar dan yang Belum Membayar)</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="<?php echo base_url('Admin_Reservation'); ?>">Data Reservation</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
	<div class="row">
		<div class="col-xs-12">
			<!-- /.box -->

			<div class="box">
				<!-- /.box-header -->
				<div class="box-body">
					<table id="example1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>Reservation Code</th>
								<th>Reservation Date</th>
								<th>Users</th>
								<th>Rute</th>
								<th>Status</th>
								<th>Proof of Payment</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($reservation as $value) : ?>
							<tr>
								<td><?php echo $value['reservation_code'] ?></td>
								<td><?php echo $value['reservation_date'] ?></td>
								<td class="reservation-action"><?php echo $value['username'] ?></td>
								<td class="reservation-action"><?php echo $value['rute_from'] ?> - <?php echo $value['rute_to'] ?></td>
								<td>
									<?php 
									if($value['status'] == 1){
										echo "PAID";
									}
									elseif($value['status'] == 0){
										echo "UNPAID";
									}
									?>
								</td>
								<td>
									<?php 
									if($value['proof_of_payment'] != null){
										echo 'uploaded';
									}
									else{
										echo 'not yet';
									}
									?>
								</td>
								<td>
									<!--<button type="button" onclick="viewedit(<?php echo $value['id'] ?>)" class="btn btn-success" data-toggle="modal" data-target="#modal-viewedit">View/Edit</button>-->

									<a class="btn btn-success" href="<?php echo base_url() ?>Admin_Reservation/viewedit/<?php echo $value['id']?>">View/Edit </a>

									<a onclick="return confirm('Are you sure you want to delete this item?');" class="btn btn-danger" href="<?php echo base_url() ?>Admin_Reservation/delete/<?php echo $value['id']?>">Delete</a>
								</td>
							</tr>
							<?php endforeach; ?>
						</tbody>
			
					</table>
					</div>
				</div>
				<!-- /.box-body -->
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->
	</div>
	<!-- /.row -->
</section>
  <script>
  $(function () {
    $("#data_rute").DataTable({
       "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
