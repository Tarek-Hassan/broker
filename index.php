<?php 
// session_start();

// if(!$_SESSION["lang"]){
//     $_SESSION["lang"]='ar';
// }

if(!$_COOKIE['lang']){
    setcookie("lang","ar",time()+(60*60*24));
}

include_once("home.php");

?>