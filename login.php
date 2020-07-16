 <?php include 'common/header.php'; 
  
  include './template/login_template.php';

 
 ?>
 
  <div id="login-page">
    <div class="container">
     
      <form class="form-login" action="" name="loginForm" id="loginForm" method="post">
        <?php if(isset($_SESSION['message'])){?>
        <div class="alert alert-success">
         <?php echo $_SESSION['message'];?>
       </div>
        <?php } ?>
        <h2 class="form-login-heading">LOGIN</h2>
        <div class="login-wrap">
          <input type="email" class="form-control" placeholder="Email ID" name="emailId">
          <br>
          <input type="password" class="form-control" placeholder="Password" name="password"> 
          <label class="checkbox">
             
            <span class="pull-right">
            <a data-toggle="modal" href="login.html#myModal"> Forgot Password?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> SIGN IN</button>
          <hr>
          
          <div class="registration">
            Don't have an account yet?<br/>
            <a class="" href="registration.php">
              Create an account
              </a>
          </div>
        </div>
        <!-- Modal -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot Password ?</h4>
              </div>
              <div class="modal-body">
                <p>Enter your e-mail address below to reset your password.</p>
                <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">
              </div>
              <div class="modal-footer">
                <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                <button class="btn btn-theme" type="button">Submit</button>
              </div>
            </div>
          </div>
        </div>
        <!-- modal -->
      </form>
    </div>
  </div>
   <!--footer start-->
   <?php 
   
   unset($_SESSION['message']);
   include 'common/footer.php';?> 
  <!--footer end-->