

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
			<!-- small box -->
			<?php 
            $success = $this->session->userdata('success');
            if($success !="") { 
            echo '<script>toastr.success("'.$this->session->flashdata('success').'","Success");</script>';
            }
            $failure = $this->session->userdata('failure');
            if($failure !="") { 
            echo '<script>toastr.error("'.$this->session->flashdata('failure').'","failure");</script>';
              } ?>
            
          


		  <!-- New -->

		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #ffa07a;">
              <div class="inner">
                <h4 style="color: white;">My Contribution</h4>

                <p> &nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/account_details" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h4>Emergency Fund</h4>
				<h4 style="padding-bottom: 1.2%;"> Balance </h4>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/myContri" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4>Loan Request Form</h4>

                <p> &nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/addLoan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>
		  
		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #f5a351;">
              <div class="inner">
                <h4 style="color: white;">My Loan Account</h4>

                <p> &nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/loan_mgmt" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>
		  
		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #20b2aa;">
              <div class="inner">
                <h4 style="color: white;">My Profile</h4>

                <p> &nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>
		  
		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #ff7566;">
              <div class="inner">
                <h4 style="color: white;">Be Visionary</h4>

                <h4 style="padding-bottom: 1.2%; color: white;">Account Details</h4>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/account_details" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">

				<h4>Payment</h4>
				<p>&nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/addContri" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>
		  
		  <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">

				<h4>Loan Calculator</h4>
				<p>&nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/loan_calculator" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #ffb133;">
              <div class="inner">

				<h4 style="color: white;">Membership Cancel </h4>
					
				<h4 style="padding-bottom: 1.2%; color: white;">Request Form</h4>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/membershipCancel" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
              <div class="inner">

				<h4>Gallery</h4>
				<p>&nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/gallery" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box" style="background-color: #ff6347;">
              <div class="inner">

				<h4 style="color: white;">Rewards</h4>
				<p>&nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/rewards" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">

				<h4>Monthly Statements</h4>
				<p>&nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Docreg/monthly_statements" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
		  </div>

		  
		  
		  
		  

         
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    
  