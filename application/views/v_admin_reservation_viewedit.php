    <?php  $this->load->view('layout_admin/header');?>
    <?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Tables
          <small>advanced tables</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li><a href="#">Tables</a></li>
          <li class="active">Data tables</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <form role="form" action="<?php echo base_url() ?>Admin_Reservation/update" method="POST">
        <input type="hidden" name="id" value="<?php echo $reservation['id'] ?>">
        <div class="box-body">
            <div class="form-group">
                <label for="exampleInputEmail1">Reservation Code</label>
                <input disabled value="<?php echo $reservation['reservation_code'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Reservation Code">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Reservation Date</label>
                <input disabled value="<?php echo $reservation['reservation_date'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Reservation Date">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Users</label>
                <input disabled value="<?php echo $reservation['username'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Users">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Rute</label>
                <input disabled value="<?php echo $reservation['rute_from'] ?> - <?php echo $reservation['rute_to'] ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Rute">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Status</label>
                <select name="status" id="" class="form-control">
                    <option value="1">PAID</option>
                    <option value="0">UNPAID</option>
                </select>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Proof of Payment</label>
                <!-- <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email"> -->
                <?php if ( $reservation['proof_of_payment'] != 'null' ): ?>
                <img class="proof-of-payment-img" src="<?php echo base_url() ?>_assets/proof_of_payment/<?php echo $reservation['proof_of_payment'] ?>" alt="">
                <?php else : ?>
                <p>not yet :(</p>                                        
                <?php endif; ?>
            </div>

        </div>
        <!-- /.box-body -->

        <div class="box-footer">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
           </div>
           <!-- /.box -->
         </div>
         <!-- /.col -->
       </div>
       <!-- /.row -->
     </section>
     <!-- /.content -->
    </div>
   <!-- /.content-wrapper -->
   <?php  $this->load->view('layout_admin/footer');?>
  <script>
  $(function () {
    $("#data_user").DataTable({
       "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
