
<?php 

if(isset($_POST['submit'])){ 
    $data = $con->prepare('INSERT INTO user_info SET name=:name, email_id =:email_id,
          admission_no=:admission_no,phone_no=:phone_no ');
    $data->bindParam('name',$_POST['name']);
    $data->bindParam('email_id',$_POST['emailId']);
    $data->bindParam('admission_no',$_POST['admission_no']);
    $data->bindParam('phone_no',$_POST['phone_no']);
    $data->execute();
    $lastId = $con->lastInsertId();  

    $newData = $con->prepare('INSERT INTO user_login SET email_id =:email_id,
          password=:password,user_id=:user_id '); 
    $newData->bindParam('email_id',$_POST['emailId']); 
    $newData->bindParam('password',md5($_POST['user_password']));
    $newData->bindParam('user_id',$lastId);
    $newData->execute();
     
    if($con->lastInsertId()){
      $_SESSION['message'] = 'Registration successfully';
      header('Location: login.php');
    }else{
      $_SESSION['message'] = 'Something Went Wrong';
    }
}