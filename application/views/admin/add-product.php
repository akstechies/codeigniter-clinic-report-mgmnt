<div class="content-wrapper">
 <!-- Content Header (Page header) -->

 <section class="content">
  <div class="card card-primary">
   <div class="container-fluid">
    <div class="card-header">
     <h3 class="card-title">Add Products</h3>
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
      <form method="post" action="<?php echo base_url() . 'admin/addProducts'; ?>" enctype="multipart/form-data">
       <div class="card-body">

    
		
		<div class="form-group">
         <label for="exampleInputEmail1">Product Details</label>
         <input type="text" class="form-control" value="<?php echo set_value('product_details'); ?>" name="product_details" id="product_details" placeholder="Enter Product Details">
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
