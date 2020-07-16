
<?php include 'common/header.php';?> 

  <section id="container">
  
    <!--topbar start-->
    <?php include 'common/topbar.php';?>
    <!--topbar start-->

    <!--sidebar start-->
    <?php include 'common/sidebar.php';?>
    <!--sidebar end-->
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper"> 
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><b> User Registration</b></h4>
              <form class="form-horizontal style-form" method="get">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Add Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group">
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Add Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control">
                  </div>
                </div> 
                <div class="form-group">

                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="">
                  </div>
                </div> 
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit">Submit</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <!-- col-lg-12-->
        </div> 
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    </section>
  <!--footer start-->
    <?php include 'common/footer.php';?> 
  <!--footer end-->