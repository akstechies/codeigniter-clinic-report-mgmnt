<div class="content-wrapper">
 <!-- Content Header (Page header) -->

 <section class="content">
  <div class="card card-primary">
   <div class="container-fluid">
    <div class="card-header">
     <h3 class="card-title">View Report</h3>
    </div>
    <?php
    $failure = $this->session->userdata('failure');
    if ($failure != "") {
     echo '<script>toastr.error("' . $this->session->flashdata('failure') . '","failed");</script>';
    }

    $nopic = $this->session->userdata('nopic');
    if ($nopic != "") {
     echo '<script>toastr.error("' . $this->session->flashdata('nopic') . '","failed");</script>';
    }
    ?>
    <div class="row">
     <div class="col-md-3">
     </div>

     <div class="col-md-6">
      <form method="post" action="#" enctype="multipart/form-data">
       <div class="card-body">
		<?php $this->db->where('user_id', $getReport['user_id']); 
		$user = $this->db->get('user_login')->row_array();	?>
       <div class="form-group">
         <label for="exampleInputEmail1">User Name</label>
         <input type="text" class="form-control" value="<?php echo  $user['name']; ?>" name="username" placeholder="Name" readonly>
		</div>
		
		<div class="form-group">
         <label for="exampleInputEmail1">User Name</label>
         <input type="text" class="form-control" value="<?php echo  $getReport['user_id']; ?>" name="username" placeholder="Name" readonly>
		</div>

       <div class="form-group">
         <label for="exampleInputEmail1">Doctor Name</label>
		 
		 <select name="doctor_name" id="doctor_name" class="form-control" value="<?php echo set_value('doctor_name', $getReport['doctor_name']); ?>" readonly>
			 <option value="<?php echo $getReport['doctor_name']; ?>"><?php echo $getReport['doctor_name']; ?></option>
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Area of Visit</label>
		 
		 <select name="area_of_visit" id="area_of_visit" class="form-control" value="<?php echo set_value('area_of_visit'); ?>" readonly>
			 
			 <option value="<?php echo $getReport['area_of_visit']; ?>"><?php echo $getReport['area_of_visit']; ?></option>
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Product Details</label>
		 
		 <select name="product_details" id="product_details" class="form-control" value="<?php echo set_value('product_details'); ?>" readonly>
			 
			 <option value="<?php echo $getReport['product_details']; ?>"><?php echo $getReport['product_details']; ?></option>
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Promotional Items</label>
		 
		 <select name="promo_items" id="promo_items" class="form-control" value="<?php echo set_value('	promo_items'); ?>" readonly>
			 
			 <option value="<?php echo $getReport['promo_items']; ?>"><?php echo $getReport['promo_items']; ?></option>
		 </select>
		</div>
		
		
		
		<div class="form-group">
         <label for="exampleInputEmail1">Remarks</label>
         <textarea type="text" class="form-control" value="<?php echo set_value('remarks'); ?>" name="remarks" id="remarks" placeholder="Remarks" readonly><?php echo $getReport['remarks']; ?></textarea>
		</div>

		
		
		<div class="form-group">
         <label for="exampleInputEmail1">Date of Visit</label>
         <input type="date" class="form-control" value="<?php echo $getReport['visit_date']; ?>" name="visit_date" id="visit_date" placeholder="Visit date" readonly>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Report Added Date</label>
         <input type="text" class="form-control" value="<?php echo $getReport['created_at']; ?>" name="created_at" id="created_at" placeholder="Created date" readonly>
		</div>
		
       </div>
      </form>
     </div>
     <div class="col-md-3">
     </div>
    </div>
   </div>
  </div>
 </section>
</div>
