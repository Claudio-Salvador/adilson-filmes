<?php

if(isset($_GET['pagina'])){
    $pagina=$_GET['pagina'];

    switch($pagina){
        case "inicial":
            include_once"Pages/home.php";
            
            break;
            case "sobre":
                
                include_once"Pages/sobre.php";
             break;
            case "contacto":
                include_once"Pages/contacto.php";
             break;
            case "entrar":
                include_once"Pages/login.php";
             break;

        default:
            include_once"Pages/home.php";
        break;

    }

}else{
    include_once"Pages/home.php";

}

?>