<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="../../../../public/css/Adminpage.css">
</head>

<body>
    <?php
    include(__DIR__ . "../../../layouts/admin.navbar.php");
    require(__DIR__ . '/../../../Databases/database.php');
    require(__DIR__ . '/../../../Models/admin.model.php');
    require(__DIR__ . "/../../../Models/feedback/feedback.model.php");
    $rooms = selectRoom();
    $id = $_GET["id"] ?? null;
    if (isset($id)) :
        $statement = $connection->prepare('SELECT * FROM rooms WHERE id = :id');
        $statement->execute([':id' => $id]);
        $room = $statement->fetch();

    ?>
        <div class="container">
            <div class="main_menu_left">
                <div class="item">
                    <button onclick="OpenType('userTab')" class="tablinks" data-tab="userTab">
                        <i class="fas fa-user" style="padding-right:30px"></i>
                        <h5 class="titles">User</h5>
                    </button>
                </div>
                <div class="item">
                    <button onclick="OpenType('roomTab')" class="tablinks" data-tab="roomTab">
                        <i class="fas fa-list-ul" style="padding-right:30px"></i>
                        <h5 class="titles">Room</h5>
                    </button>
                </div>
                <div class="item">
                    <button onclick="OpenType('bookingTab')" class="tablinks active" data-tab="bookingTab">
                        <i class="fas fa-list-ul" style="padding-right:30px"></i>
                        <h5 class="titles">Booking</h5>
                    </button>
                </div>
                <div class="item">
                    <button onclick="OpenType('billTab')" class="tablinks" data-tab="billTab">
                        <i class="fas fa-list-ul" style="padding-right:30px"></i>
                        <h5 class="titles">Bill</h5>
                    </button>
                </div>
            </div>
            
            <div class="main_menu">
                <div class="feedback">
                    <h1 class="animate-charcter">SEASIDE PARADISE RETREAT</h1>
                    <?php
                    $ratings = selectAVGRatingForRoom($id);
                    $feedbacks = getFeedback($id);

                    if ($ratings) {
                        foreach ($ratings as $rating) {
                            if (isset($rating['average_rating']) && isset($rating['name'])) {
                                $averageRating = round($rating['average_rating'], 1);
                                echo '<div class="detail_feedback">';
                                echo '    <h3 style="font-size:25px">Room name: ' . $rating['name'] . '</h3>';
                                echo '    <div class="rating">';
                                echo '        <h4 style="font-size:25px">' . $averageRating . '</h4><i class="fas fa-star"></i>';
                                echo '    </div>';
                                echo '</div>';
                            } else {
                                echo 'Invalid data structure in the result set: ' . print_r($rating, true);
                            }
                        }
                    } else {
                        echo 'No rating information available for room id ' . $roomId;
                    }
                    ?>
                    <h2>Reviews</h2>

                    <?php
                    if (!empty($feedbacks)) {
                        foreach ($feedbacks as $feedback) {
                            if (
                                isset($feedback['feedback_rating']) &&
                                isset($feedback['user_avatar']) &&
                                isset($feedback['user_name']) &&
                                isset($feedback['feedback_content'])
                            ) {
                    ?>             
                                <div class="review">   
                                    <div class="User_infor">
                                        <img id="avata1" class="avata__review" src="<?php echo $feedback['user_avatar'] ?>" alt="user_avatar">
                                        <h5 style="font-size:25px"><?php echo ucwords($feedback['user_name']) ?></h5>
                                    </div>
                                    <div class="rating">
                                        <h4 style="font-size:25px; margin-left:20px"><?php echo $feedback['feedback_rating'] ?></h4><i class="fas fa-star"></i>
                                    </div>
                                    <div class="content">
                                        <h4 style="font-size:20px;"><?php echo $feedback['feedback_content'] ?></h4>
                                    </div>
                                </div>
                                
                    <?php
                            }
                        }
                    } ?>
                    <div class="back-button">
                        <a href="/admin"><button class="Back">Back</button></a>
                    </div>
                    
                   
                </div>
            </div>
</body>
<?php endif; ?>
</html>