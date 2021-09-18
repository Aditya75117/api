<?php

    //include "partials/_dbconnet.php";
    //"start": "ng serve",

    //extract($_POST);

    if($_POST['name']){
            $return_arr = "this is php api";
            echo json_encode($return_arr);
       
    }
   

?>
