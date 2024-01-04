<?php 
    session_start();
?>
<?php 
    if ($_SESSION['isLogin']) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /");
        
        // echo "<script>window.location.replace(window.location.hostname)</script>";
        // echo "<script>window.location.reload()</script>";
    exit();
    }

    
?>