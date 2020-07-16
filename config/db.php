 
 <?php  
$host = HOST;    
$user = USERNAME;
$password = PASSWORD;

try{
    $con = new PDO('mysql:host=localhost;dbname='.DATABASE,$user,$password);
    $con->setAttribute(PDO::ATTR_AUTOCOMMIT,PDO::ERRMODE_EXCEPTION); 
    
}catch(PDOException $msj){
    echo $msj->getMessage();
}

