<?php 
    session_start();
?>
<?php 
    if (!empty($_SESSION['email']) && !empty($_SESSION['password'])) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /");
exit();
    }
    
?>