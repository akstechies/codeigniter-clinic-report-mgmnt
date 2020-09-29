<div class="content-wrapper">
 <!-- Content Header (Page header) -->

 <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-10">
            <h1>Manage Area of Visit</h1>
		  </div>
		  
		  <div class="col-sm-2">
          <a href="<?php echo site_url('Admin/addArea'); ?>" class="btn btn-primary" style="margin-left: 70px;">Add Area</a>
    </div>
       </div>

       
     </div>
      <!-- /.container-fluid -->
    </section>

 <section class="content">
  <div class="card card-primary">
   <div class="container-fluid">
    <div class="card-header">
     <h3 class="card-title">Manage Area of Visit</h3>
    </div>
	<?php
	$success = $this->session->userdata('success');
	if ($success != "") {
	 echo '<script>toastr.success("' . $this->session->flashdata('success') . '","Success");</script>';
	}
    $failure = $this->session->userdata('failure');
    if ($failure != "") {
     echo '<script>toastr.error("' . $this->session->flashdata('failure') . '","failed");</script>';
    }
    ?>
    <div class="row">

     <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Sr. No.</th>
                  <th>Area of Visit</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
             <?php $counter2 = 0;
             if (!empty($get)) {
              foreach ($get as $val) {
             
             ?>
                <tr>
                 <td width="5%"><?php echo ++$counter2; ?></td>
                 <td width="5%"><?php echo $val['area_of_visit'] ?></td>
				 
                 <td width="5%">
                 <a onclick="return confirm('Are you sure?')" href="<?php echo base_url() . 'Docreg/deleteDoctor/' . $val['id'] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a></td>
                 </tr>

                <?php }} ?>
                
                
                </tbody>
               
              </table>
            </div>
            <!-- /.card-body -->
          </div>

          <!-- /.card -->
        </div>
    </div>
   </div>
  </div>
 </section>
</div>