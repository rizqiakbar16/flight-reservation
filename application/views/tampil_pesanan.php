<!DOCTYPE html>
<html>
<head>
	<title>TAMPIL</title>
</head>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resource/bootstrap/css/bootstrap-theme.css">
<body>
<div class="container-fluid col-md-offset-2 col-md-8 " style=" margin-top: 10%; align:center">
		<table class="table table-responsive table-bordered table-hover " style="align:left">
	<tr>
        <th>No</th>
        <th>From</th>
        <th>To</th>
        <th>Depart</th>
        <th>Class</th>
        <th>Adult</th>
        <th>Child</th>
        <th>Aksi</th>
	</tr>
    <?php
        $no = 1; 
		foreach ($data as $row)
		{
	?>
		<tr>
			<td  style="text-align: center;">
                <?php echo $no++ ?>
			</td>
			<td>
				<?php echo $row->from?>
			</td>
			<td>
				<?php echo $row->to?>
			</td>
			<td>
				<?php echo $row->depart?>
			</td>
			<td>
				<?php echo $row->class?>
			</td>
			<td style="text-align: center;">
				<?php echo $row->adults?>
			</td>
			<td style="text-align: center;">
				<?php echo $row->child?>
			</td>
			<td style="text-align: center;">
			<a href="<?php echo base_url('index.php/welcome/ganti?id='.$row->id);?>">Edit</a>
			<a> | </a>
			<a href="<?php echo base_url('index.php/welcome/hapus?id='.$row->id);?>">Delete</a>
			</td>
		</tr>
	<?php
		 } 
	?>
	</table>
</div>
</body>
	<script type="text/javascript" src="<?php echo base_url();?>resource/admin/bootstrap/js/jquery-3.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>resource/admin/bootstrap/js/bootstrap.js"></script>
</html>