<?php 
    session_start();
?>
<?php 
    if (isset($_SESSION['isLogin']) && $_SESSION['isLogin']) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /");
        exit();
    }
    // header("Location: /");
?>
