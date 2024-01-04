<?php 
    session_start();
?>
<?php 
    // echo "<script>console.log(" .$_SESSION['email'].  ")</script>";
    // echo "<script>console.log(" .$_SESSION['password']. ")</script>";
    if (true) {
        // Xoá các biến session
        session_unset();    
        session_destroy();
        header("Location: /");
        
        // echo "<script>window.location.replace(window.location.hostname)</script>";
        // echo "<script>window.location.reload()</script>";
    exit();
    }

    
?>