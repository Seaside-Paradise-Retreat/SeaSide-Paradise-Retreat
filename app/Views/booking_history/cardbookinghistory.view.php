<link rel="stylesheet" href="public/css/booking_history.css">
<div class="body--content container">
    <div class="title">     
        <h3 id="title-booking-history-room">BOOKING HISTORY ROOM</h3>
    </div>
</div>
<?php     
    foreach ($booked_rooms_information as $room) :
?>
<div class="card-room-booking-history row container">
    <div class="col-md-2"></div>
    <?php 
        $images = getRoomImages($room['room_id']); 
        echo "<script>console.log(" . json_encode($images) . ");</script>";
        if(!empty($images)):
    ?>
    <div class="card-left col-md-5 justify-content-end">
        <img id="image-room" src="<?php echo $images[0]['image_url'] ?>" alt="image-room">
    </div>
    <?php endif ?>
    <div class="row col-md-5">
        <div class="col-md-10">
            <h5><?php echo $room['room_name'] ?></h5>
            <p><?php echo $room['description'] ?></p>
            <p></p>
        </div>
        <div class="col-md-1" id="ratingContainer"><i class="fa-solid fa-star" style="color: #3A8CED;">5</i></div>
        <div class="d-flex mb-3">
            <small class="border-end me-3 pe-3"><i class="fa fa-bed text-secondary me-2">
                </i>Bed</small> 
            <small class="border-end me-3 pe-3"><i class="fa fa-bath text-secondary me-2">
                </i>Bath</small>
            <small><i class="fa fa-wifi text-secondary me-2">
                </i>Wifi</small>
        </div>
        <div class="row">
            <h4 class="col-md-6" style="color: #3568A4;">Total: <?php echo $room['total_price'] ?></h4>
            <input type="submit" class="btn_card_cancel btn-primary" data-bs-toggle="modal" data-bs-target="#cancelmodal" name="cancel" value="Cancel">
            <?php echo "<script>console.log (" . $room['id'] . ")</script>"?>
            <a href="/cancel?id=<?php echo $room['id'] ?>"><input type="submit" onclick="cancel()" class="btn_card_cancel btn-primary"  value="Cancel"></a>
        </div>
        <p id="booking_date">Book date: <?php echo $room['date']  ?></p>
    </div> 
</div>
<?php endforeach ?>