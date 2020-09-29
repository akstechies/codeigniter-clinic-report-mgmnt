

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
          <div class="col-lg-3 col-6">

		  <?php 
            $success = $this->session->userdata('success');
            if($success !="") { 
            echo '<script>toastr.success("'.$this->session->flashdata('success').'","Success");</script>';
            }
            $failure = $this->session->userdata('failure');
            if($failure !="") { 
            echo '<script>toastr.error("'.$this->session->flashdata('failure').'","failure");</script>';
              } ?>
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>10</h3>

                <p>User Registration</p>
              </div>
              <div class="icon">
                <i class="fa fa-user"></i>
              </div>
              <a href="<?php echo base_url()?>Admin/manage_user" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h3>10</h3>

                <p>Loan Applied</p>
              </div>
              <div class="icon">
                <i class="ion ion-cash"></i>
              </div>
              <a href="<?php echo base_url()?>Admin/manage_loan" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 style="color: white;">10</h3>

                <p style="color: white;">Gallery Images</p>
              </div>
              <div class="icon">
                <i class="ion ion-image"></i>
              </div>
              <a href="<?php echo base_url()?>Admin/manage_gallery" class="small-box-footer"><span style="color: white;">More info <i class="fas fa-arrow-circle-right"></i></span></a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>My Profile</h3>

                <p> &nbsp;</p>
              </div>
              <div class="icon">
                <i class="ion ion-android-contact"></i>
              </div>
              <a href="<?php echo base_url()?>Admin/profile" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  