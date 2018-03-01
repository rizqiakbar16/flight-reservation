
   <?php  $this->load->view('layout_admin/header');?>
    <!-- Left side column. contains the logo and sidebar -->
   <?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data Transportation
          <small>(Semua Pesawat)</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="<?php echo base_url('admin/data_transportation'); ?>">Data transportation</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <h3 class="box-title"></h3>     
                  <a href=<?php echo base_url("crud/tambah_transportation/"); ?> class="btn btn-primary a-btn-slide-text" style="position:absolute;right:0;margin-right:10px; ">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          <span><strong>Add</strong></span>            
                        </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="data_transportation" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No id</th>
                      <th>Code</th>
                      <th>Seat Quantity</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php  foreach ($transportation as $transportation) { ?>
                    <tr>
                      <td><?php echo $transportation->id; ?></td>
                      <td><?php echo $transportation->code; ?></td>
                      <td><?php echo $transportation->seat_qty; ?></td>
                      <td><?php echo $transportation->description; ?></td>
                      <td>
                        <a href=<?php echo base_url("crud/edit_transportation/".$transportation->id); ?> class="btn btn-success a-btn-slide-text">
                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          <span><strong>Edit</strong></span>            
                        </a>
                        <a href=<?php echo base_url("crud/hapus_transportation/".$transportation->id); ?> class="btn btn-danger a-btn-slide-text">
                         <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                         <span><strong>Delete</strong></span>            
                       </a>
                     </td>
                   </tr>
                   <?php } ?>
                 </tfoot>
               </table>
             </div>
             <!-- /.box-body -->
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
    $("#data_transportation").DataTable({
       "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
  });
</script>
