<?php
if (isset($_GET['id_room'])) {
    $roomId = $_GET['id_room']; // Lấy ID phòng từ tham số trong URL
    $roomfeedback = getFeedback($roomId);
}
?>
<link rel="stylesheet" href="public/css/detail_room.css">
<!-- Hiển thị hình ảnh tương ứng với id phòng -->
<div class="row details_room">
    <div class="picture">
        <?php if (!empty($images)) {
            $index = 0;
            foreach ($images as $image) { ?>
                <div class="picture">
                    <?php if (!empty($images)) {
                        $index = 0;
                        foreach ($images as $image) { ?>
                            <?php if ($index === 0) { ?>
                                <img class="img detail_img images-<?php echo $index; ?>" id="img0" src="<?php echo $image['image_url']; ?>">
                            <?php } elseif ($index === 1 || $index === 2) { ?>
                                <?php if ($index === 1) { ?>
                                    <img class="img detail_img image-1" id="img1" src="<?php echo $image['image_url']; ?>">
                                <?php } elseif ($index === 2) { ?>
                                    <img class="img detail_img image-2" id="img2" src="<?php echo $image['image_url']; ?>">
                                <?php } ?>
                            <?php } elseif ($index === 3 || $index === 4) { ?>
                                <?php if ($index === 3) { ?>
                                    <img class="img detail_img image-3" id="img3" src="<?php echo $image['image_url']; ?>">
                                <?php } elseif ($index === 4) { ?>
                                    <img class="img detail_img image-4" id="img4" src="<?php echo $image['image_url']; ?>">
                                <?php } ?>
                            <?php } ?>
                            <?php $index++; ?>
                    <?php }
                    } ?>
                </div>
    </div>
    <div class=" content m-3 ">
        <?php if (!empty($rooms)) { ?>
            <div class="">
                <div class="row content-text">
                    <div class=" col-6 content__text">
                        <p id="name_room_detail"><?php echo $rooms['name']; ?></p>
                        <p id="price_room_detail"><?php echo $rooms['price']; ?></p>
                    </div>
                    <div class=" col-5 context__icon">
                        <a href="/favorite?id_room=<?php echo $rooms['id']; ?>"><i id="icon_heart_detail" class="fa-regular fa-heart"></i></a>
                        <i id="icon_share_detail" class="fa-solid fa-share"></i>
                    </div>
                    <div class=" col-1" id="booking-btn">
                        <!-- <a href="#" id="book1"><button id="booking_now" class="button_booking">BOOKING NOW</button></a> -->
                        <?php if (!empty($_SESSION['email']) || !empty($_SESSION['password'])) : ?>
                            <a href="/booking_room?id_room=<?php echo $rooms['id']; ?>"><input id="booking_now" type="button" class="button_booking" name="booking" value="Booking now"></a>
                        <?php else : ?>
                            <a href=""><input type="button" class="btn_card_booking" name="booking" value="Booking now"></a>
                        <?php endif ?>
                    </div>
                </div>
                <!-- Tiện nghi -->
                <h2 class="m-4 font-weight-bold">Convenients</h2>
                <p id="type1" class="m-4" style="color: blue;"> <?php echo $rooms['convenient']; ?></p>
                <!-- <div class="row content-description">
                <div class="col-lg-9">
                    <h2 class="m-4">Room Description</h2>
                    <p class="m-4"><?php echo $rooms['description']; ?></p>
                </div>
            </div> -->
                <h2 class="m-4 font-weight-bold">Convenients</h2>
                <p id="type1" class="m-4" style="color: blue;"> <?php echo $rooms['convenient']; ?></p>
                <!-- <div class="row content-description">
                <div class="col-lg-9">
                    <h2 class="m-4">Room Description</h2>
                    <p class="m-4"><?php echo $rooms['description']; ?></p>
                </div>
            </div> -->
                <div class="row content-icon">
                    <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                        <i class="fa-solid fa-bed"></i>
                        <p id="type1">Bedroom</p>
                    </div>
                    <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                        <i class="fa fa-bath" aria-hidden="true"></i>
                        <p id="type2">Bathroom</p>
                    </div>
                    <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                        <img src="public/images/icon_lvroom.png" alt="" style="width: 34px;height: 25px;">
                        <p id="type3">Livingroom</p>
                    </div>
                </div>
                <div class="row content-description">
                    <div class="col-lg-9">
                        <h4>Room Description</h4>
                        <p><?php echo $rooms['description']; ?></p>
                    </div>
                </div>
                <!-- Làm feedback  -->
                <h4>Feedback room</h4>
                <form action="" method="post" class="m-3">
                    <div class="container">
                        <input type="hidden" name="id_room" value="<?php echo $rooms['id']; ?>">
                        <label id="star-rating">Choose the number of rating stars:</label>
                        <select id="star-rating" name="star_rating" class="custom-select" style="color: gold;">
                            <option value="1" style="color: gold;">&#9733;</option>
                            <option value="2" style="color: gold;">&#9733;&#9733;</option>
                            <option value="3" style="color: gold;">&#9733;&#9733;&#9733;</option>
                            <option value="4" style="color: gold;">&#9733;&#9733;&#9733;&#9733;</option>
                            <option value="5" style="color: gold;">&#9733;&#9733;&#9733;&#9733;&#9733;</option>
                        </select>
                        <textarea id="review" name="feedback" placeholder="Reviews of hotel rooms"></textarea>
                        <button type="submit" class="btn_feedback" style="border-radius: 10px;">Feedback</button>
                        <?php if (!empty($_SESSION['isLogin']) && $_SESSION['isLogin']) :

                            if (isBooking($rooms['id'], $_SESSION['id'])) : ?>
                                <a style="text-decoration: none;" href="/detail_room?id_room=<?php echo $rooms['id']; ?>"></a>
                            <?php else :
                                echo "<script>alert('You need booking room before feeback')</script>";
                            ?>
                            <?php endif ?>
                        <?php else : ?>
                        <?php endif ?>
                    </div>
                </form>
                <div class="review">
                    <h4 style="margin-right: 10%; ">Reviews</h4>
                    <div>
                        <h4> <i class="fa-solid fa-star" style="color:yellow; font-size:22px"></i><?php echo round($rating = selectAVGRatingRoom($roomId), 1); ?></h4>
                    </div>
                </div>
                <?php
                    if (!empty($roomfeedback)) {
                        foreach ($roomfeedback as $feedback) {
                            if (
                                isset($feedback['feedback_rating']) &&
                                isset($feedback['user_avatar']) &&
                                isset($feedback['user_name']) &&
                                isset($feedback['feedback_content'])
                            ) {
                ?>
                            <!-- Đánh giá trung bình -->
                            <div class="content-review">
                                <!-- Chi tiết đánh giá -->
                                <div class="row content_comment-detail">
                                    <div class="col-md-6 comment-cus">
                                        <div class="row">
                                            <div class="col-lg-2 col-2">
                                                <img id="avata1" class="avata__review" src="<?php echo $feedback['user_avatar'] ?>" alt="">
                                            </div>
                                            <div class="col-lg-4 col-9">
                                                <h5><?php echo $feedback['user_name'] ?></h5>
                                            </div>
                                            <div class="col-lg-4 col-1">
                                                <h5 style="color: gold"><?php echo $feedback['feedback_rating'] . " &#9733;"; ?></h5>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <p><?php echo $feedback['feedback_content']; ?></p>
                                        </div>
                                        <p><?php echo $currentDateTime = date('Y-m-d H:i:s'); ?></p>
                                    </div>
                                </div>
                    <?php
                            }
                        }
                    } ?>
        <?php }
            }
        } ?>
                            </div>