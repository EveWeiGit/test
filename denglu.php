<?php  
require_once './config.inc.php';  
$m = new Model();  
$user = $_GET['user'];  
$password = $_GET['password'];  
$count = $m->total('users', "user='". $user ."' and password='". sha1($password) ."'");  
if ($count) {  
    setcookie('user', $user);  
    echo "var login=true";  
} else {  
    echo "var login=false";  
}  
?>  