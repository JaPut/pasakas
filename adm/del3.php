<?php 

    require_once('../config/database.php');
    $db = new operations();
    
    if(isset($_GET['D_ID3']))
    {
        global $db;
        $ID = $_GET['D_ID3'];

        if($db->Delete_Record3($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewzina.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }


?>