<?php 

    require_once('../config/database.php');
    $db = new operations();
    
    if(isset($_GET['D_ID2']))
    {
        global $db;
        $ID = $_GET['D_ID2'];

        if($db->Delete_Record2($ID))
        {
            $db->set_messsage('<div class="alert alert-danger">  Your Record Has Been Deleted </div>');
            header("location:viewcom.php");
        }
        else
        {
            $db->set_messsage('<div class="alert alert-danger">  Something Wrong to Delete the Record </div>'); 
        }
    }

?>