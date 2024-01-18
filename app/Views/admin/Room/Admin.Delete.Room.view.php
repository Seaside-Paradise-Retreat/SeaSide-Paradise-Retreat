<?php
require(__DIR__ . '/../../../Models/admin.model.php');
$id = $_GET['id'] ? $_GET['id'] : null;
if (isset($id))
{   
    $result = deleteRoom($id);
    if ($result){ 
        echo '<script>alert("deleted successfully!");
        window.location.href = "/admin/Room/view";
            </script>';
    }
    else {
        echo"Error";
    }
}