<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="<?php echo base_url(); ?>_assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p><?php echo $this->session->userdata('fullname'); ?></p>
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>
    <!-- search form -->
    <!--
    /<form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
  -->
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <?php
    $halaman = apache_getenv("HTTP_HOST") . apache_getenv("REQUEST_URI");
    $admin = 'localhost/ukk-tintin/admin';
    $data_user = 'localhost/ukk-tintin/admin/data_user';
    $data_customer = 'localhost/ukk-tintin/admin/data_customer';
    $data_rute = 'localhost/ukk-tintin/admin/data_rute';
    $data_transportation = 'localhost/ukk-tintin/admin/data_transportation';
    $data_transportation_type = 'localhost/ukk-tintin/admin/data_transportation_type';
    $data_reservation = 'localhost/ukk-tintin/admin/data_reservation';
    ?>
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li <?php if ($halaman==$admin) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin"); ?>><i class="fa fa-circle-o"></i> Dashboard</a></li>
      <li <?php if ($halaman==$data_user) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_user"); ?>><i class="fa fa-table"></i> Data Users</a></li>
      <li <?php if ($halaman==$data_customer) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_customer"); ?>><i class="fa fa-table"></i> Data Customers</a></li>
      <li <?php if ($halaman==$data_rute) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_rute"); ?>><i class="fa fa-table"></i> Data Rute</a></li>
      <li <?php if ($halaman==$data_transportation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("admin/data_transportation"); ?>><i class="fa fa-table"></i> Data Transportation</a></li>
      <li <?php if ($halaman==$data_reservation) {echo "class='active'"; } ?> ><a href=<?php echo base_url("Admin_Reservation"); ?>><i class="fa fa-table"></i> Data Reservation</a></li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
