 <?php  

if(isset($_POST['submit'])){  
    $status = 'active';
    $data = $con->prepare('SELECT  * FROM  user_login  where email_id =:email_id AND 
    password=:password AND status=:status ');
    $data->bindParam('email_id',$_POST['emailId']); 
    $data->bindParam('password',md5($_POST['password']));
    $data->bindParam('status',  $status);
    $data->execute();  

    $record = $data->fetch(PDO::FETCH_ASSOC);
     if(count($record)>0){
         $_SESSION['USER_TYPE'] =  $record['user_type'];
         $_SESSION['USER_ID'] =  $record['user_id']; 
         header('Location: index.php');
     }

}