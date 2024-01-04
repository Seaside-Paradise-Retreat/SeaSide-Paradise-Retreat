<?php 
    session_start();
?>
<?php 
    if ($_SESSION['isLogin']) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /");
exit();
    }
    
?>