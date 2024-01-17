
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && $_SESSION['id']) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        if (isset($_FILES['fileToUpload']) && !empty($_FILES['fileToUpload']['name']) && $_FILES['fileToUpload']['size'] > 0) {
            $file_name = $_FILES['fileToUpload']['name'];
            $file_info = pathinfo($file_name);
            $file_ext = strtolower($file_info['extension']);
            $file_size = $_FILES['fileToUpload']['size'];
            $file_tmp = $_FILES['fileToUpload']['tmp_name'];
            $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
            if (in_array($file_ext, $allowed_ext) === false) {
                echo 'Extension not allowed';
            } elseif ($file_size > 2097152) {
                echo 'File size must be under 2mb';
            } elseif (move_uploaded_file($file_tmp, 'public/images/' . $file_name)) {
                echo 'File uploaded';
                $statement = $connection->prepare("UPDATE users SET name = :name, email = :email, phone = :phone, avatar = :avatar WHERE id = :id");
                $statement->execute([
                    ':name' => $_POST['name'],
                    ':email' => $_POST['email'],
                    ':phone' => $_POST['phone'],
                    ':avatar' =>$file_name,
                    ':id' => $_POST['id'],
                ]);
                $_SESSION['name'] = $_POST['name'];
                $_SESSION['email'] = $_POST['email'];
                $_SESSION['phone'] = $_POST['phone'];
                $_SESSION['avatar'] =  $_FILES['fileToUpload']['name'];
                var_dump($name, $email, $phone,$_SESSION['avatar']  );
                header('Location: /profile');
                exit;
            } else {
                echo 'File upload failed. Error: ' . $_FILES['fileToUpload']['error'];
            }
        } else {
            echo 'Please choose a file to upload.';
        }
    } else {
        echo 'Form submission error.';
    }
}
?>
<link rel="stylesheet" href="../../../public/css/edit.profile.css">
<div><a href="/profile"><img src="/public/images/back.png" style="width:40px; margin-left: 550px;margin-top: 100px"></a></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6" >
            <div class="card " style="height: 600px">
                <div class="card-body">
                    <h1 class="card-title m-4">Change information</h1>
                    <form id="profile-form" action="" method="post" enctype="multipart/form-data">
                        <input type="hidden" value="<?= $id ?>" name="id">
                        <div class="mb-3 mb-4">
                            <label for="name" class="form-label mb-4">Name: </label>
                            <input type="text" style="border: 1px solid #4cc9f3" class="form-control mb-4" id="name" name="name" value="<?php echo $name; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="fileToUpload">Avatar:</label>
                            <input type="file" style="border: 1px solid #4cc9f3" class="form-control mb-4" name="fileToUpload" id="fileToUpload">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label mb-4">Email:</label>
                            <input type="email" style="border: 1px solid #4cc9f3" class="form-control mb-4" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label mb-4">Phone number:</label>
                            <input type="tel"style="border: 1px solid #4cc9f3" class="form-control mb-4" id="phone" name="phone" value="<?php echo $phone; ?>" >
                        </div>
                        <button type="submit" class="btn btn-primary" name="save">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
