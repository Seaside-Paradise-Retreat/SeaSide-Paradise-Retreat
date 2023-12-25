<link rel="stylesheet" href="../../../public/css/detail_room.css">
<?php 
    require_once ("../../Databases/database.php");
    require_once ("../../Models/home/card.model.php");
    require_once ("../../Models/home/detailroom.model.php");

// Kiểm tra xem có tham số "id_room" được truyền trong URL không
if (isset($_GET['id_room'])) {
    $roomId = $_GET['id_room'];
    // var_dump($roomId);


    // Lấy danh sách hình ảnh phòng từ hàm getRoomImages($roomId)

    //var_dump($room); // trả về hết các thông tin cua các phòng theo mảng
    $images = getRoomImages($roomId);
    // var_dump($images); //trả về hết url của id theo phòng
 // Lấy chi tiết phòng từ hàm getRoomDetails($roomId)
}
?>
<!-- Hiển thị hình ảnh tương ứng với id phòng -->
<div class="row details_room">
    <?php if ($images) { 
         var_dump($images);?>
        
        <div class="row details_room">
            <?php foreach ($images as $image) { ?>
                <img class="img1 detail_img" id="img" src="<?php echo $images['image_url']; ?>">
            <?php } ?>
        </div>
    <?php } ?>
</div>


<div class="row content">
<?php
$rooms = getRooms(); // Lấy thông tin của tất cả các phòng
$room_index = 0; // Chọn phòng đầu tiên

if (isset($rooms[$room_index])) {
    $room = $rooms[$room_index]; // Lấy thông tin của phòng đã chọn
?>
<!-- Hiển thị thông tin của phòng -->
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
                <div class="col-lg-2 col-6 ">
                    <h4>Reviews</h4>
                    <p>Convenient</p>
                    <p>Clean</p>
                    <p>Staff</p>
                    <p>Quality room</p>
                </div>
                <div class="col-lg-1 col-6 text-end">
                    <div class="d-flex justify-content-end">
                        <i class="fa-solid fa-star  pe-2 " style="color: #3A8CED"></i>
                        <h4>5.0</h4>  
                    </div>
                    <p id="convenient">5.0</p>
                    <p id="clean">5.0</p>
                    <p id="staff">5.0</p>
                    <p id="quality">5.0</p>
                </div>    
            </div>
            <!-- Chi tiết đánh giá -->
            <div class="row content_comment-detail">
                <div class="col-lg-5 comment-cus">
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
</div>