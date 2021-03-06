    <?php  $this->load->view('layout_admin/header');?>
    <?php  $this->load->view('layout_admin/menu_samping');?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Data User
          <small>(Para Pelanggan yang Sudah Memiliki Akun)</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="<?php echo base_url('admin'); ?>"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active"><a href="<?php echo base_url('admin/data_user'); ?>">Data User</a></li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <div class="row">
          <div class="col-xs-12">

            <div class="box">
              <div class="box-header">
                <h3 class="box-title"></h3>     
                  <a href=<?php echo base_url("crud/tambah/"); ?> class="btn btn-primary a-btn-slide-text" style="position:absolute;right:0;margin-right:10px; ">
                          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                          <span><strong>Add</strong></span>            
                        </a>
              </div>
              <!-- /.box-header -->
              <div class="box-body">
                <table id="data_user" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No id</th>
                      <th>Username</th>
                      <th>Level</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                      $no = 1;
                      foreach ($user as $u) { 
                    ?>
                    <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $u->id; ?></td>
                      <td><?php echo $u->username; ?></td>
                      <td><?php echo $u->level; ?></td>
                      <td>
                        <a href=<?php echo base_url("crud/edit/".$u->id); ?> class="btn btn-success a-btn-slide-text">
                          <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                          <span><strong>Edit</strong></span>            
                        </a>
                        <a href=<?php echo base_url("crud/hapus/".$u->id); ?> class="btn btn-danger a-btn-slide-text">
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
