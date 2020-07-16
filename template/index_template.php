
<?php include 'common/header.php';
 
 if($_SESSION['USER_TYPE']=='ADMIN'){ 
  $data = $con->prepare('SELECT  * FROM  user_info'); 
  //$data->bindParam('status',  $status);
  $data->execute();  
  $record = $data->fetchAll(PDO::FETCH_ASSOC);
 }else{
  $data = $con->prepare('SELECT  * FROM  user_info  where id =:id ');
  $data->bindParam('id',$_SESSION['USER_ID']);  
  $data->execute();  
  $record = $data->fetch(PDO::FETCH_ASSOC); 
 }