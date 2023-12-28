<link rel="stylesheet" href="../../../public/css/detail_room.css">
<?php 
    require_once ("../../Databases/database.php");
    require_once ("../../Models/home/card.model.php");
    require_once ("../../Models/home/detailroom.model.php");

// Kiểm tra xem có tham số "id_room" được truyền trong URL không
    if (isset($_GET['id_room'])) {
        $roomId = $_GET['id_room'];
        $images = getRoomImages($roomId);
        $rooms = getRooms();
        $room = $rooms[$roomId];
    }
?>

<!-- Hiển thị hình ảnh tương ứng với id phòng -->
<div class="row details_room">
<div class="picture"> 
    <?php if (!empty($images)) {    
        $index = 0; 
        foreach ($images as $image) {?>
                <?php if ($index === 0) { ?>
                    <!-- <div class="border picture1"> -->
                        <img class="img detail_img images-<?php echo $index; ?>" id="img0" src="../../../<?php echo $image['image_url']; ?>">
                    <!-- </div> -->
                <?php }
                elseif ($index === 1 || $index === 2) { ?>
                    <!-- <div class="row1"> -->
                        <?php if ($index === 1) { ?>
                            <img class="img detail_img image-1" id="img1" src="../../../<?php echo $image['image_url']; ?>">
                        <?php } elseif ($index === 2) { ?>
                            <img class="img detail_img image-2" id="img2" src="../../../<?php echo $image['image_url']; ?>">
                        <?php } ?>
                    <!-- </div> -->
                <?php }
                elseif ($index === 3 || $index === 4) { ?>
                    <!-- <div class="border row2"> -->
                        <?php if ($index === 3) { ?>
                            <img class="img detail_img image-3" id="img3" src="../../../<?php echo $image['image_url']; ?>">
                        <?php } elseif ($index === 4) { ?>
                            <img class="img detail_img image-4" id="img4" src="../../../<?php echo $image['image_url']; ?>">
                        <?php } ?>
                    <!-- </div> -->
                <?php } ?>
                <?php $index++; ?>
        <?php }
    } ?>
    </div>
</div>


<div class="row content ">
    <?php if ($room) { ?>
        <div class="col-lg-9 col-12">
            <div class="row content-text">
                <div class="col-lg-4 col-6 content__text">
                    <p id="name_room_detail"><?php echo $room['name']; ?></p>
                    <p id="price_room_detail"><?php echo $room['price']; ?></p>
                </div>
                <div class="col-lg-4 col-6 context__icon">
                    <i id="icon_heart_detail" class="fa-regular fa-heart"></i>
                    <i id="icon_share_detail" class="fa-solid fa-share"></i>
                    <div id="addbag"></div>
                </div>
            </div>
            <!-- Tiện nghi -->
            <div class="row content-icon">
                <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                    <i class="fa-solid fa-bed"></i>
                    <p id="type1">1 Bedroom</p>
                </div>
                <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                    <i class="fa fa-bath" aria-hidden="true"></i>
                    <p id="type2">1 Bathroom</p>
                </div>
                <div class="col-lg-3 my-2 mx-2 pt-2 icon__room">
                    <img src="../../../public/images/icon_lvroom.png" alt="" style="width: 34px;height: 25px;">
                    <p id="type3">1 Livingroom</p>
                </div>
            </div>
            <div class="row content-description">
                <div class="col-lg-9">
                    <h4>Room Description</h4>
                    <p><?php echo $room['description']; ?></p>
                </div>
            </div>
            <!-- Đánh giá trung bình -->
            <div class="row content-review">
                <div class="col-lg-2 col-6">
                    <h4>Reviews</h4>
                    <p>Convenient</p>
                    <p>Clean</p>
                    <p>Staff</p>
                    <p>Quality room</p>
                </div>
                <div class="col-lg-1 col-6 text-end">
                    <div class="d-flex justify-content-end">
                        <i class="fa-solid fa-star pe-2" style="color: #3A8CED"></i>
                        <h4><?php echo $room['rating']?></h4>
                    </div>
                    <p id="convenient"><?php echo $room['rating']?></p>
                    <p id="clean"><?php echo $room['rating']?></p>
                    <p id="staff"><?php echo $room['rating']?></p>
                    <p id="quality"><?php echo $room['rating']?></p>
                </div>
            </div>
            <!-- Chi tiết đánh giá -->
            <div class="row content_comment-detail">
                <div class="col-lg-5 comment-cus m-4">
                    <div class="row">
                        <div class="col-lg-2 col-3">
                            <img id="avata1" class="avata__review" src="../../../public/images/person01.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-6">
                            <h5>jondoberman</h5>
                            <p>Mar 12 2022</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><?php echo $room['description']; ?></p>
                    </div>
                </div>
                <div class="col-lg-5 comment-cus m-4">
                    <div class="row">
                        <div class="col-lg-2 col-3">
                            <img id="avata1" class="avata__review" src="../../../public/images/person01.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-6">
                            <h5>jondoberman</h5>
                            <p>Mar 12 2022</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><?php echo $room['description']; ?></p>
                    </div>
                </div>
                <div class="col-lg-5 comment-cus m-4">
                    <div class="row">
                        <div class="col-lg-2 col-3">
                            <img id="avata1" class="avata__review" src="../../../public/images/person01.jpg" alt="">
                        </div>
                        <div class="col-lg-4 col-6">
                            <h5>jondoberman</h5>
                            <p>Mar 12 2022</p>
                        </div>
                    </div>
                    <div class="row">
                        <p><?php echo $room['description']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    <div class="col-lg-3 col-12" id="booking-btn">
            <a href="#" id="book1"><button id="booking_now" class="button_booking">BOOKING NOW</button></a>
    </div>
</div>