
<?php
require(__DIR__ . '/../../../Models/admin.model.php');
$id = $_GET['id'] ?? null;

if (isset($id)) {
    $result = deleteUser($id);

    if ($result) {
        echo '<script>alert("User record deleted successfully!");
            window.location.href = "/admin";
        </script>';
        exit();
    } else {
        echo "Error";
    }
}
