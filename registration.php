
<?php include 'common/header.php'; 

include './template/registration_template.php';

?> 

  <section id="container">
   
 
  
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper"> 
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-10">
            <div class="form-panel">
              <h4 class="mb"><b> User Registration</b></h4>
              <form class="form-horizontal style-form" method="post" action="" id="registrationForm">
                <div class="form-group">
                  <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Name</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="name">
                  </div>
                </div> 
                <div class="form-group">
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Email ID</label>
                  <div class="col-sm-4">
                    <input type="email" class="form-control" name="emailId">
                  </div>
                </div> 
                <div class="form-group">
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Admission No</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="admission_no">
                  </div>
                </div> 
                <div class="form-group">
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Phone No</label>
                  <div class="col-sm-4">
                    <input type="text" class="form-control" name="phone_no">
                  </div>
                </div> 

                <div class="form-group"> 
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Password</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder="" name="user_password" id="user_password">
                  </div>
                </div> 
                <div class="form-group"> 
                 <div class="col-sm-2"></div>
                  <label class="col-sm-2 col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-4">
                    <input type="password" class="form-control" placeholder=""  name="confirm_password" id="confirm_password" >
                  </div>
                </div> 
                <div class="form-group">
                  <div class="col-lg-offset-2 col-lg-10">
                    <button class="btn btn-theme" type="submit" name="submit">Submit</button>
                    <button class="btn btn-danger" id="backLogin" > Back </button>
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
  