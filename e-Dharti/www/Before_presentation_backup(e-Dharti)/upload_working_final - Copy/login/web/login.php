<?php

session_start(); //inicia a sessao

$host = "localhost";
$user= "postgres";
$pass = "postgres";
$db = "first";
if(isset($_POST["submit"]))
	{

$user = $_POST['email'];
$password = $_POST['password'];

if((!$user) || (!$password)){
    
    echo "incorrect <br /><br />";
    include "index.html";
    
}else{
    $password = md5($password);
    
    $sql = pg_query(
        "SELECT * FROM login WHERE email = '{$user}' AND password = '{$password}' ";);
    
    $login_check = pg_num_rows($sql);
    
    if($login_check > 0){
        
        while($row = pg_fetch_array($sql)){
            foreach ($row as $key => $val){
                $$key = stripslashes( $val );
            }
            
           
            $_SESSION['email'] = $email;
            
           header("location: home.php");
                
        }
    }else{
        echo "Você não pode logar-se! Este usuário e/ou senha não são válidos!<br />
             Por favor tente novamente!<br />";
        
        include "index.html";
    }
    
}

}
?>