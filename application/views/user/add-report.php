<div class="content-wrapper">
 <!-- Content Header (Page header) -->

 <section class="content">
  <div class="card card-primary">
   <div class="container-fluid">
    <div class="card-header">
     <h3 class="card-title">Add Report Form</h3>
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
      <form method="post" action="<?php echo base_url() . 'User/addReport'; ?>" enctype="multipart/form-data">
       <div class="card-body">

       <div class="form-group">
         <label for="exampleInputEmail1">User Name</label>

         <?php 

$user_id = $this->session->userdata('user_id');
$this->db->where('user_id', $user_id);
$name = $this->db->get('user_login')->row_array(); ?>

         <input type="text" class="form-control" id="username" value="<?php echo set_value('username', $name['name']); ?>" name="username" placeholder="Name" readonly>
		</div>
		

       <div class="form-group">
         <label for="exampleInputEmail1">Doctor Name</label>
		 
		 <select name="doctor_name" id="doctor_name" class="form-control" value="<?php echo set_value('	doctor_name'); ?>" required>
       <option value="">--Please Select--</option>
       
       <?php foreach($getDoctor as $doc){ ?>
         <option value="<?php echo $doc['doctor_name'];?>"><?php echo $doc['doctor_name'];?></option>
      <?php } ?>
			 
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Area of Visit</label>
		 
		 <select name="area_of_visit" id="area_of_visit" class="form-control" value="<?php echo set_value('area_of_visit'); ?>" required>
			 <option value="">--Please Select--</option>
			 <?php foreach($getArea as $area){ ?>
         <option value="<?php echo $area['area_of_visit'];?>"><?php echo $area['area_of_visit'];?></option>
      <?php } ?>
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Product Details</label>
		 
		 <select name="product_details" id="product_details" class="form-control" value="<?php echo set_value('	product_details'); ?>" required>
			 <option value="">--Please Select--</option>
			 <?php foreach($getProduct as $prod){ ?>
         <option value="<?php echo $prod['product_details'];?>"><?php echo $prod['product_details'];?></option>
      <?php } ?>
		 </select>
		</div>

		<div class="form-group">
         <label for="exampleInputEmail1">Promotional Items</label>
		 
		 <select name="promo_items" id="promo_items" class="form-control" value="<?php echo set_value('	promo_items'); ?>" required>
			 <option value="">--Please Select--</option>
			 <?php foreach($getPromo as $promo){ ?>
         <option value="<?php echo $promo['promo_items'];?>"><?php echo $promo['promo_items'];?></option>
      <?php } ?>
		 </select>
		</div>
		
		
		
		<div class="form-group">
         <label for="exampleInputEmail1">Remarks</label>
         <textarea type="text" class="form-control" value="<?php echo set_value('remarks'); ?>" name="remarks" id="remarks" placeholder="Remarks" required></textarea>
		</div>
		
		<div class="form-group">
         <label for="exampleInputEmail1">Date of Visit</label>
         <input type="date" class="form-control" value="<?php echo set_value('visit_date'); ?>" name="visit_date" id="visit_date" placeholder="Visit date" required>
        </div>


        
        
        

       </div>
       <div class="vcard-footer" style="padding: .75rem 1.25rem;">
        <input type="submit" class="btn btn-primary toastrDefaultSuccess" name="userSubmit" value="Save">
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


