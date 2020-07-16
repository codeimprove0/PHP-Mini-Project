
<?php include 'common/header.php';
if(!isset($_SESSION['USER_ID'])){
  header('Location: login.php');
}
include './template/index_template.php';
?> 

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
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-10"> 
                <?php  if($_SESSION['USER_TYPE']=='ADMIN'){ ?>
                <table class="table" id="myTable">
                    <thead>
                     <th>Name</th>
                     <th>Email ID</th>
                     <th>Phone NO</th>
                     <th>Admission No</th>
                     <th>Date</th>
                    </thead>
                    <tbody>
                        <?php foreach($record as $val){ ?>
                        <tr>
                            <td><?php echo $val['name'];?></td>
                            <td><?php echo $val['email_id'];?></td>
                            <td><?php echo $val['phone_no'];?></td>
                            <td><?php echo $val['admission_no'];?></td>
                            <td><?php echo date('d/m/Y',strtotime($val['created_at']));?></td>
                        </tr> 
                        <?php } ?>
                    </tbody>
                </table>
                <?php }else{ ?>
                         
                    <table class="table">
                        <tr>
                            <th width="20%">Name<th><td><?php echo $record['name'];?></td>
                        </tr>
                        <tr>
                            <th>Email ID<th><td><?php echo $record['email_id'];?></td>
                        </tr>
                        <tr>
                            <th>Phone NO<th><td><?php echo $record['phone_no'];?></td>
                        </tr>
                        <tr>
                            <th>Admission No<th><td><?php echo $record['admission_no'];?></td>
                        </tr>   
                         <tr>
                            <th>Admission Date<th><td><?php echo date('d/m/Y',strtotime($val['created_at']));?></td>
                        </tr> 
                    <table>
                <?php }?>   
            </div> 
        </div> 
      </section>
      <!-- /wrapper -->
    </section>
    <!--main content end-->
    </section>
  <!--footer start-->
    <?php include 'common/footer.php';?> 
  <!--footer end-->
 