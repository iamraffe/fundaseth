<?php
    require_once("../../includes/connection.php");
    require_once("../../includes/functions.php");

    $search_parameter = $_GET["searchData"];

    if($search_parameter == 'resetTable'){
       $all_registered = get_all_registered();
       echo show_registered($all_registered);  
    }
    else{
        $fetch_results = fetch_registered($search_parameter);
        if(mysqli_num_rows($fetch_results) == 0){
            echo 'empty';
        }
        else{
            echo show_registered($fetch_results);
        }
    }


?>